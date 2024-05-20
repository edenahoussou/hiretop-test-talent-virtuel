<?php

namespace App\Http\Livewire\Company\Post;

use App\Models\JobPost;
use Livewire\Component;
use MercurySeries\Flashy\Flashy;

class JobPostsList extends Component
{
    public $perPage = 50, $search = '';

    protected $deadlineStatusClass = [
        'new' => 'bg-success',
        'expired' => 'bg-danger',
        'active' => 'bg-warning',
    ];

    protected $listeners = ['refreshJobsPostsList' => '$refresh']; 

    public function badgeStatus($days)
    {
        if($days <= 0) {
            return $this->deadlineStatusClass['expired'];
        }
        else if($days <= 30) {
            return $this->deadlineStatusClass['active'];
        }
        else {
            return $this->deadlineStatusClass['new'];
        }
    }

    public function percentOfPertinentApplications($job)
    {
        
    }
    public function render()
    {
        $title = __('Vos offres d\'emploi');

        if(auth()->user()->company == null) {

            $this->dispatchBrowserEvent('success-message', [
                'message' => __('Vous devez d\'abord ajouter votre entreprise ! pour ajouter une offre d\'emploi'),
            ]);            
            $jobs = [];
        }
        else {
            
            $jobs = JobPost::with('company', 'graduation','graduation')
                            ->where('company_id', auth()->user()->company->id)
                            ->paginate($this->perPage);
        }

        return view('livewire.company.post.job-posts', compact('jobs') )->extends('layouts.admin-master', compact('title') )->section('content');
    }
}
