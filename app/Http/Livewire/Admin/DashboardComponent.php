<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class DashboardComponent extends Component
{

    private function renderView()
    {
        $title = __('Tableau de bord');
        if (auth()->user()->hasRole('Entreprise')) {
            return view('livewire.company.dashboard-component')->extends('layouts.admin-master', compact('title') )->section('content');        
        }elseif (auth()->user()->hasRole('Admin')) {
            return view('livewire.admin.dashboard-component')->extends('layouts.admin-master', compact('title') )->section('content');        
        }
        else {
            return view('livewire.candidate.dashboard-component')->extends('layouts.admin-master', compact('title') )->section('content');        
        }
    }
    public function render()
    {
        
        return $this->renderView();
    }
}
