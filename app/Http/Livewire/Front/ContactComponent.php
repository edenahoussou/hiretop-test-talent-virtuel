<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        $title = 'Contact';
        return view('livewire.front.contact-component')->extends('layouts.master', compact('title'))->section('content');;
    }
}
