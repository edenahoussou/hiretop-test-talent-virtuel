<?php

namespace App\Http\Livewire\Front\Home;

use Livewire\Component;
use App\Models\JobCategory;

class JobPerCategoryComponent extends Component
{
    public $selectedCategory;

    public function mount()
    {
        $this->selectedCategory = JobCategory::where('name','Education')->first()->id;
    }

    public function setActiveCategory($category)
    {
        $this->selectedCategory = $category;
    }

    public function render()
    {
        $jobCategories = JobCategory::has('jobs')->with('jobs')->get();

        return view('livewire.front.home.job-per-category-component',compact('jobCategories'));
    }
}
