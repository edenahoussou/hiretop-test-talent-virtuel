<?php

namespace App\Http\Livewire\Front;

use App\Models\Skill;
use App\Models\JobPost;
use Livewire\Component;
use App\Models\Industry;
use Livewire\WithPagination;
use App\Models\CompanyLocation;
use App\Models\ExperienceLevel;
use App\Models\JobType;

class JobsComponent extends Component
{
    use WithPagination ;

    public $search_terms, $perPage = 18, $title, $selectedIndustry, $selectedLocation, $selectedExperience, $selectedType;

    protected $paginationTheme = 'bootstrap', $foundJobs;

    public function mount($search_terms = null, $selectedIndustry = null, $selectedLocation = null)
    {
        $this->title = $search_terms === null ? __('Toutes les offres') : $search_terms;
        $this->selectedIndustry = $selectedIndustry;
        $this->selectedLocation = $selectedLocation;
        $this->search_terms = $search_terms;
    }

    public function countJobPostPublishedByIndustry($industryId)
    {
        $filteredJobs = $this->foundJobs->filter(function ($job) use ($industryId) {
            return $job->company->industry_id === $industryId;
        });

        return $filteredJobs->count();
    }

    public function apply($jobSlug)
    {
        //dd($jobSlug);
        $this->redirect(route('job.details',['slug' => $jobSlug]));
    }

    public function countJobPostGroupByExperienceLevel($experienceId)
    {
        $filteredJobs = $this->foundJobs->filter(function($job) use ($experienceId){

            return $job->experience_level_id === $experienceId;
        });

        return $filteredJobs->count();
    }
    public function render()
    {
        $jobs = JobPost::with('company', 'job_type', 'experience', 'location')
            ->where('title', 'like', '%'.$this->search_terms.'%')
            ->orWhere('company_id',$this->selectedIndustry)
            ->orWhere('location_id',$this->selectedLocation)
            ->latest()
            ->paginate($this->perPage);

        $this->foundJobs = $jobs;
        
        $industries = Industry::all();
        $locations = CompanyLocation::all();
        $skills = Skill::all();
        $experiences = ExperienceLevel::with('jobs')->get();
        $types = JobType::with('jobs')->get();

        $title = $this->title;
        
        return view('livewire.front.jobs-component',compact('jobs','industries', 'locations', 'skills','experiences', 'types'))
        ->extends('layouts.master', compact('title'))->section('content');
    }
}
