<?php

namespace App\Http\Livewire\Front;

use App\Models\Skill;
use Livewire\Component;
use App\Models\Industry;
use App\Models\CompanyLocation;
use App\Models\JobCategory;
use MercurySeries\Flashy\Flashy;

class HomeComponent extends Component
{
    public $email, $industry, $location, $keywords;

    public function subscribe()
    {
        $this->validate([
            'email'=> 'required|email'
        ]);

        $this->dispatchBrowserEvent('success-message', ['message' => 'Formation supprimée avec succès']);

        Flashy::message('Enrégistrer avec succes');

        $this->redirect(route('home'));
    }

    public function search()
    {
        $this->validate([
            'industry' => 'nullable|exists:industries,id',
            'location' => 'nullable|exists:company_locations,id',
            'keywords' => 'required',
        ]);

        if($this->industry || $this->location || $this->keywords){

            $this->redirect(route('jobs', ['selectedIndustry' => $this->industry, 'selectedLocation' => $this->location, 'search_terms' => $this->keywords]));
        }
    }

    public function render()
    {
        $title = __('Accueil');

        $industries = Industry::all();

        $locations = CompanyLocation::all();

        $skills = Skill::take(5)->get();

        return view('livewire.front.home-component',compact('industries', 'locations', 'skills'))
                ->extends('layouts.master', compact('title'))->section('content');
    }
}
