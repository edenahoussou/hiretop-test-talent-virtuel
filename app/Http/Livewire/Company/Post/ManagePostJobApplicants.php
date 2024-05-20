<?php

namespace App\Http\Livewire\Company\Post;

use App\Models\Candidat;
use App\Models\JobPost;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\JobApllicant;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class ManagePostJobApplicants extends Component
{
    public $jobPostSlug, $jobPost, $selectedCandidateId, $status, $perPage = 10, $search;

    use WithPagination;
    
    public function mount($slug)
    {
        $this->jobPostSlug = $slug;
        $this->jobPost = JobPost::where('slug', $slug)->first();
    }

    public function updatedSelectedCandidateId()
    {

        $this->dispatchBrowserEvent('open-shortlist-modal');
    }

    public function rejectCandidate($candidateId)
    {
        JobApllicant::where('candidate_id', $candidateId)->update(['candidate_status' => 'rejected']);

        $this->dispatchBrowserEvent('success-message', ['message' => 'Candidature rejeté']);
    }

    public function downloadCandidateResume($candidateId)
    {
        $isApplicantContainResume =  JobApllicant::where('candidate_id', $candidateId)
                                                  ->where('job_post_id', $this->jobPost->id)
                                                  ->first()->resume;
        if($isApplicantContainResume)
        {
            return response()->download(public_path('storage/'. $isApplicantContainResume));
        }
        else
        {

            $this->dispatchBrowserEvent('error-message', ['message' => 'Le candidat n\'a pas ajouté de CV à ca candidature']);
        }
    }

    public function HireTopScoringCandidate($candidateId)
    {
        $score = 0 ;

        $candidate = Candidat::where('id', $candidateId)->first();

        // Calculate score based on experience
        $jobExperienceValue = match ($this->jobPost->experience->title) {
            'debutant' => 0,
            '0 à 6 mois' => 6,
            '1 an' => 12,
            '2 ans' => 24,
            '3 ans' => 36,
            '4 ans' => 48,
            '5 ans' => 60,
            '6 ans et plus' => 72,
            default => 0,
        };

        $candidateMonths = $candidate->experiences->sum('months');
        if ($candidateMonths >= $jobExperienceValue) {
            $score++;
        }

        // Calculate score based on education
        if ($candidate->graduations->contains('title', $this->jobPost->graduation->title)) {
            $score++;
        }

        // Calculate score based on skills
        $candidateSkills = $candidate->skills->pluck('id')->toArray();
        $jobSkills = $this->jobPost->skills->pluck('id')->toArray();
        if (count(array_intersect($candidateSkills, $jobSkills)) >= count($jobSkills)/2) {
            $score++;
        }

        // Check candidat is younger than 27 years
        $candidateAge = date('Y') - date('Y', strtotime($candidate->user->dob));
        if ($candidateAge <= 27) {
            $score++;
        }

        return $score;
    }

    public function addToShortList($candidateId)
    {
        JobApllicant::where('candidate_id', $candidateId)->update(['candidate_status' => 'shortlisted']);

        $this->dispatchBrowserEvent('success-message', ['message' => 'Candidat ajouté à la shortlist']);
    }
    public function render()
    {
        $title = __('Candidats');

        $jobPost = JobPost::where('slug', $this->jobPostSlug)
        ->with(['candidates' => function($query) {
            return $query->paginate($this->perPage);
        }])->first();
        
        $candidates = $jobPost ? $jobPost->candidates : null;

        if($this->search && $candidates)
        {
            $candidates = $candidates->filter(function($candidate) {
                return Str::contains($candidate->user->name, $this->search) ||
                    Str::contains($candidate->user->email, $this->search) ||
                    Str::contains($candidate->user->phone, $this->search);
            });
        }

        if($this->status && $candidates)
        {
            $candidates = $candidates->filter(function($candidate) {
                return $candidate->pivot->candidate_status == $this->status;
            });
        }

        return view('livewire.company.post.manage-post-job-applicants', compact('candidates'))
                ->extends('layouts.admin-master', compact('title') )
                ->section('content');
    }
}
