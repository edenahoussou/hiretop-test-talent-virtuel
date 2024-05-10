<?php

namespace App\Http\Livewire\Company\Post;

use App\Models\JobPost;
use Livewire\Component;
use MercurySeries\Flashy\Flashy;

class JobPosts extends Component
{
    public $perPage = 50, $search = '';

    protected $deadlineStatusClass = [
        'new' => 'bg-success',
        'expired' => 'bg-danger',
        'active' => 'bg-warning',
    ];

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
    public function render()
    {
        $title = __('Vos offres d\'emploi');

        if(auth()->user()->company == null) {

                Flashy::message('Veuillez completer votre profil entreprise pour gérer vos offres d\'emploi');

                // $this->redirect(route('dashboard'));
            
            $jobs = [];
        }
        else {
            $this->dispatchBrowserEvent('success-message', [
                'message' => __('Vos offres d\'emploi'),
            ]);
            
            $jobs = JobPost::with('company', 'graduation','graduation')
                            ->where('company_id', auth()->user()->company->id)
                            ->paginate($this->perPage);
        }

        return view('livewire.company.post.job-posts', compact('jobs') )->extends('layouts.admin-master', compact('title') )->section('content');
    }
}
