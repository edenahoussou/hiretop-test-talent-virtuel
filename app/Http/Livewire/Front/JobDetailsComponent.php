<?php

namespace App\Http\Livewire\Front;

use App\Models\JobPost;
use Livewire\Component;
use App\Models\Candidat;

class JobDetailsComponent extends Component
{
    public $job;
    public function mount($slug)
    {
        $this->job = JobPost::with('company','job_type','graduation','experience','location')->where('slug',$slug)->first();
    }
    public function getSimilarJobs()
    {
        return JobPost::where('job_category_id',$this->job->job_category_id)->where('id','!=',$this->job->id)->get();
    }

    public function isApplied()
    {
        if(auth()->check())
        {
            $candidat = Candidat::where('user_id', auth()->user()->id)->first();
        if ($candidat->jobs()->wherePivot('job_post_id', $this->job->id)->exists()) {
            return true;
        }
        }
        return false;
    }

    public function apply()
    {
        if(auth()->check())
        {
            $this->emit('applyJob', $this->job->id);

            $this->dispatchBrowserEvent('open-apply-modal');
        }
        else
        {
            return redirect('/login');
        }
    }
    public function render()
    {
        $title = $this->job->title;

        return view('livewire.front.job-details-component')->extends('layouts.master', compact('title'))->section('content');
    }
}
