<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class JobsComponent extends Component
{
    public function render()
    {
        $title = __('Candidats');

        return view('livewire.front.jobs-component');
    }
}
