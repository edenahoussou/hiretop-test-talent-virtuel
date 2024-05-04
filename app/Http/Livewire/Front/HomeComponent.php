<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $title = __('Accueil');

        return view('livewire.front.home-component')->extends('layouts.master', compact('title'))->section('content');
    }
}
