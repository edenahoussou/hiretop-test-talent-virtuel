<?php

namespace App\Http\Livewire\Candidate;

use App\Models\Candidat;
use App\Models\Graduation;
use App\Models\Skill;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Resume extends Component
{
    public $userSkills = [], $selectedEducation, $address, $user, $name, $email, $phone, $about, $experiences, $graduations ,$jobTitle, $photo, $newEducation = [], $newExperience = [];

    protected $listeners = ['refreshCv' => '$refresh'];
    
    use WithFileUploads;

    public function mount()
    {
        $this->user = User::with('candidat', 'profile', 'candidat.experiences')
        ->where('id', auth()->user()->id)->first();
        $this->userSkills = $this->user->candidat->skills->pluck('id')->toArray() ?? [];
        $this->name = $this->user->name ?? '';
        $this->email = $this->user->email ?? '';
        $this->phone = $this->user->phone ?? '';
        $this->about = $this->user->candidat->about ?? '';
        $this->experiences = $this->user->candidat->experiences ?? [];
        $this->jobTitle = $this->user->candidat->job_title ?? '';
        $this->photo = $this->user->candidat->profile->photo ?? '';
        $this->address = $this->user->candidat->location ?? '';
    }

    public function addExperience()
    {
        
    }

    public function saveCandidate()
    {

        $this->validate([
            'name' => 'required',
            'address' => 'required',
            'about' => 'required|max: 255',
            'jobTitle' => 'required',
            'photo' => 'nullable|image|max:20048',
            'userSkills.*' => 'required|exists:App\Models\Skill,id',
        ]);
        //dd($this->name, $this->email, $this->about, $this->jobTitle, $this->address, $this->photo, $this->userSkills);

        try {
            Candidat::UpdateOrCreate(['user_id' => $this->user->id], 
            [
                'about' => $this->about,
                'job_title' => $this->jobTitle,
                'location' => $this->address,
            ]);
    
            if ($this->photo) {
                $this->user->update([
                    'photo' => $this->photo->store('users', 'public'),
                ]);
            }
    
            $this->user->candidat->skills()->sync($this->userSkills);

            $this->dispatchBrowserEvent('success-message', ['message' => 'Informations sauvegardées avec succès']);
            $this->emit('refreshCv');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('error-message', ['message' => 'Une erreur est survenue '.$th->getMessage()]);
        }
    }

    public function addEducation()
    {
        $this->validate([
            'newEducation.grade_id' => 'required|exists:App\Models\Graduation,id',
            'newEducation.title' => 'required',
            'newEducation.description' => 'nullable',
            'newEducation.from' => 'required|date',
            'newEducation.to' => 'required|date|after:from',
            'newEducation.proof' => 'required|file|mimes:pdf,jpg,png|max:20048',
            'newEducation.school' => 'required',
        ]);
        
        try {
            Candidat::UpdateOrCreate(['user_id' => $this->user->id], 
            [
                'about' => $this->about,
                'job_title' => $this->jobTitle,
                'location' => $this->address,
            ]);
        
            $this->user->candidat->graduations()->attach([
                $this->newEducation['grade_id'] => [
                    'degree' => $this->newEducation['title'], 
                    'description' => $this->newEducation['description'], 
                    'start_date'=> $this->newEducation['from'],
                    'end_date' => $this->newEducation['to'],
                    'degree_proof' => $this->newEducation['proof']->store('candiates/certificates', 'public'),
                    'university' => $this->newEducation['school'],
                    'status' => 'complete'
                ]
            ]);
            $this->emit('refreshCv');
            $this->dispatchBrowserEvent('success-message', ['message' => 'Formation ajoutée avec succès']);
            $this->newEducation = [];
            $this->dispatchBrowserEvent('close-education-modal');

        } catch (\Throwable $th) {
            // dd($th->getMessage());
            $this->dispatchBrowserEvent('error-message', ['message' => 'Une erreur est survenue '.$th->getMessage()]);
        }
    }

    public function deleteEducation()
    {
        $this->user->candidat->graduations()->detach($this->selectedEducation);
        $this->emit('refreshCv');
        $this->dispatchBrowserEvent('success-message', ['message' => 'Formation supprimée avec succès']);
        $this->dispatchBrowserEvent('close-education-modal');
    }
    public function render()
    {
        $title = __('Mon Curriculum Vitae');
        $educations = $this->user->candidat->graduations ?? [];

        $skills = Skill::all();
       
        $grades = Graduation::all();

        return view('livewire.candidate.resume', compact('skills', 'grades', 'educations'))->extends('layouts.admin-master', compact('title'))->section('content');
    }
}
