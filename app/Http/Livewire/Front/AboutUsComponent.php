<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class AboutUsComponent extends Component
{
    public function render()
    {
        $title = __('A propos de nous');
        return view('livewire.front.about-us-component')->extends('layouts.master', compact('title'))->section('content');
    }
}
