<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        $title = __('Tableau de bord');
        
        return view('livewire.admin.dashboard-component')->extends('layouts.admin-master', compact('title') )->section('content');
    }
}
