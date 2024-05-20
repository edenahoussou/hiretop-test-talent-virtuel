<?php

namespace App\Http\Livewire\Front;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;

class CompanyDetailsComponent extends Component
{
    public $company;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function mount($slug)
    {
        $this->company = Company::where('slug', $slug)->first();
        //dd($this->company);
    }

    public function apply($jobSlug)
    {
        //dd($jobSlug);
        $this->redirect(route('job.details',['slug' => $jobSlug]));
    }

    public function render()
    {
        $title = $this->company->name;
        $lastestCompanyJobs = $this->company->jobs()->where('status', 'publish')->paginate(3);
        return view('livewire.front.company-details-component', compact('lastestCompanyJobs'))
            ->extends('layouts.master', compact('title'))->section('content');

    }
}
