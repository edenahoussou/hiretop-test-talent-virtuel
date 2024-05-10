<?php

namespace App\Http\Livewire\Company\Post;

use App\Models\JobType;
use Livewire\Component;
use App\Models\Graduation;
use App\Models\CompanyLocation;
use App\Models\ExperienceLevel;
use App\Models\JobPost;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;

class AddNewJobPost extends Component
{
    public $jobTitle, $jobDescription, $jobType, $graduation, $location_id, $salary, $jobExperience, $status, $closingDate;

    protected $messages = [
        'required' => 'Ce champ est requis',
        'max' => 'Le champ ne peut pas contenir plus de :max caractères',
        'numeric' => 'Le champ doit contenir uniquement des chiffres',
        'date' => 'Le champ doit contenir une date',
        'after' => 'La date doit être supérieure ou égale au jour d\'aujourd\'hui',
        'gt' => 'Le champ doit contenir un montant supérieur à :gt',
        'in' => 'Le champ doit contenir une valeur valide',
        'after_or_equal' => 'La date doit être supérieure ou égale au jour d\'aujourd\'hui',
        'exists' => 'Le champ doit contenir une valeur valide',
    ];  

    public function save()
    {
        $this->validate([
            'jobTitle' => 'required|max:255',
            'jobDescription' => 'required',
            'jobType' => 'required|exists:App\Models\JobType,id',
            'graduation' => 'required|exists:App\Models\Graduation,id',
            'location_id' => 'required|exists:App\Models\CompanyLocation,id',
            'salary' => 'required|numeric|gt:0',
            'jobExperience' => 'required|exists:App\Models\ExperienceLevel,id',
            'closingDate' => 'required|date|after:tomorrow',
            'status' => 'required',
        ]);

        try {
            JobPost::create([
                'title' => $this->jobTitle,
                'description' => $this->jobDescription,
                'job_type_id' => $this->jobType,
                'graduation_level_id' => $this->graduation,
                'location_id' => $this->location_id,
                'salary' => $this->salary,
                'experience_level_id' => $this->jobExperience,
                'closing_date' => Carbon::parse($this->closingDate),
                'status' => $this->status,
                'posted_by_id' => auth()->user()->id,
                'company_id' => auth()->user()->company->id,
                'job_stage' => 'new',
            ]);
    
           $this->dispatchBrowserEvent('success-message', [
               'message' => __('Offre d\'emploi creée avec succes'),
           ]);

           $this->reset();

           $this->dispatchBrowserEvent('close-modal');

        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('error-message', [
                'message' => 'Une erreur est survenue lors de la creation de l\'offre d\'emploi '.$th->getMessage(),
            ]);
        }

   
    }


    public function render()
    {
        $title = __('Ajouter une nouvelle offre d\'emploi');

        $jobTypes = JobType::where('is_active', true)->get();
        $locations = CompanyLocation::all();
        $experiences = ExperienceLevel::all();
        $graduations = Graduation::all();

        return view('livewire.company.post.add-new-job-post', compact('title', 'jobTypes', 'locations', 'experiences', 'graduations') );
    }
}
