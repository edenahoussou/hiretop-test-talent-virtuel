<?php

namespace App\Http\Livewire\Company;

use Livewire\Component;

class Applicants extends Component
{
    public function render()
    {
        $title = __('Candidats');
        
        return view('livewire.company.applicants')->extends('layouts.admin-master', compact('title') )->section('content');
    }
}
