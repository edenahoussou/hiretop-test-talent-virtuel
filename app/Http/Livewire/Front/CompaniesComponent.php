<?php

namespace App\Http\Livewire\Front;

use App\Models\Company;
use Livewire\Component;
use App\Models\Industry;
use Livewire\WithPagination;

class CompaniesComponent extends Component
{
    use WithPagination;
    public $perPage = 18, $activeLetter = null, $sortBy;
    protected $paginationTheme = 'bootstrap';

    public function mount($letter = 'A')
    {
        $this->activeLetter = $letter;
    }
    public function setActiveLetter($letter)
    {
        $this->activeLetter = $letter;

        $this->redirect(route('companies', ['letter' => $this->activeLetter]));
    }

    public function clearFilter()
    {
        $this->activeLetter = null;
    }
    public function render()
    {
        $title = __('Liste des entreprises');

        $companies = Company::with('jobs','location')->where('name', 'like', '%' . $this->activeLetter . '%')->paginate($this->perPage);

        $industries = Industry::with('companies')->get();

        return view('livewire.front.companies-component',compact('companies','industries'))->extends('layouts.master', compact('title'))->section('content');
    }
}
