<?php

namespace App\Http\Livewire\Company;

use App\Models\Candidat;
use App\Models\User;
use Livewire\Component;

class CandidateDetailsComponent extends Component
{
    public $user, $activeTab = 'Personal', $candidate, $proof;
    public function mount($id)
    {
        $this->candidate = Candidat::with('user','skills')->where('id', $id)->first();
        $this->user = $this->candidate->user;
    }

    public function switchTab($tab)
    {   
        $this->activeTab = $tab;
    }

    public function showProof($url)
    {
        $this->dispatchBrowserEvent('hide-proof');
        $this->proof = $url;
        if ($this->proof) {
            $this->dispatchBrowserEvent('show-proof');        
        }
        else {
            
            $this->dispatchBrowserEvent('success-message', ['message' => 'Le candidat n\'a pas ajoute de document']);
        }
    }

    public function render()
    {
        $title = $this->user->name.' Profile';
        
        return view('livewire.company.candidate-details-component')->extends('layouts.admin-master', compact('title') )->section('content');
    }
}
