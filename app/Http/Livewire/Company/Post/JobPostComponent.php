<?php

namespace App\Http\Livewire\Company\Post;

use Carbon\Carbon;
use App\Models\Skill;
use App\Models\JobPost;
use App\Models\JobType;
use Livewire\Component;
use App\Models\Graduation;
use App\Models\JobCategory;
use App\Models\CompanyLocation;
use App\Models\ExperienceLevel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class JobPostComponent extends Component
{
    public $jobCategory, $jobSkills = [], $createSkills, $date, $title, $jobTitle, $job, $jobDescription, $jobType, $graduation, $location_id, $salary, $jobExperience, $status, $closingDate;

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

    protected $listeners = ['editJob' => 'edit', 'refreshJobsPostsList' => '$refresh'];
    
    /**
     * Closes the current operation by resetting any internal state.
     *
     * @return void
     */
    public function close()
    {
        $this->reset();
        $this->emit('refreshJobsPostsList');

    }

    /**
     * Save a new job post in the database.
     *
     * @return void
     */
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
            'jobCategory'=> 'required|exists:App\Models\JobCategory,id',
            'jobSkills' => 'required',
        ]);

        try {
            DB::beginTransaction();
          $post = JobPost::create([
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
                'job_stage' => 'candidature',
                'job_category_id' => $this->jobCategory,
            ]);

            if(count(array_unique($this->jobSkills)) == 1 && in_array('create', $this->jobSkills)) {
                $skills = explode(',', $this->createSkills);
                $skills = array_map('trim', $skills);
                foreach ($skills as $skill) {
                 $newSkill =  Skill::create([
                            'title' => $skill
                    ]);

                    $post->skills()->attach($newSkill->id);
                }
            }
            else {
                $post->skills()->sync($this->jobSkills);
            }

            DB::commit();
    
           $this->dispatchBrowserEvent('success-message', [
               'message' => __('Offre d\'emploi creée avec succes'),
           ]);

           $this->reset();

           $this->dispatchBrowserEvent('close-modal');

           $this->emit('refreshJobsPostsList');

        } catch (\Throwable $th) {
            DB::rollBack();
            //dd($th,$this->jobSkills);
            $this->dispatchBrowserEvent('error-message', [
                'message' => 'Une erreur est survenue lors de la creation de l\'offre d\'emploi '.$th->getMessage(),
            ]);
        }
    }

    /**
     * Edit a job post.
     *
     * @param int $jobId The ID of the job post to edit.
     * @return void
     */
    public function edit($jobId)
    {
        $this->title = __('Modifier l\'offre d\'emploi');

        $job = JobPost::find($jobId);

        if ($job) {
            $this->jobTitle = $job->title;
            $this->jobDescription = $job->description;
            $this->jobType = $job->job_type_id;
            $this->graduation = $job->graduation_level_id;
            $this->location_id = $job->location_id;
            $this->salary = $job->salary;
            $this->jobExperience = $job->experience_level_id;
            $this->closingDate = $job->closing_date;
            $this->status = $job->status;
            $this->job = $job;
            $this->jobCategory = $job->job_category_id;
            $this->jobSkills = $job->skills->pluck('id')->toArray();
            
            $this->dispatchBrowserEvent('open-modal', ['jobDescription' => $job->description,'jobSkills' => $this->jobSkills]);
        }
        else {
            $this->dispatchBrowserEvent('error-message', [
                'message' => 'Une erreur est survenue, veuillez reessayer',
            ]);
        }
    }

    public function update()
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
            'jobCategory'=> 'required|exists:App\Models\JobCategory,id',
        ]);

        try {
            $this->job->update([
                'title' => $this->jobTitle,
                'description' => $this->jobDescription,
                'job_type_id' => $this->jobType,
                'graduation_level_id' => $this->graduation,
                'location_id' => $this->location_id,
                'salary' => $this->salary,
                'experience_level_id' => $this->jobExperience,
                'closing_date' => Carbon::parse($this->closingDate),
                'status' => $this->status,
                'job_category_id' => $this->jobCategory,
            ]);

           $this->dispatchBrowserEvent('success-message', [
               'message' => __('Offre d\'emploi mise à jour avec succes'),
           ]);
           
           $this->reset();

           $this->dispatchBrowserEvent('close-modal');

           $this->emit('refreshJobsPostsList');

           } catch (\Throwable $th) {

            $this->dispatchBrowserEvent('error-message', [
                'message' => 'Une erreur est survenue lors de la mise à jour de l\'offre d\'emploi '.$th->getMessage(),
            ]);

           }


    }


    public function render()
    {

        $jobTypes = JobType::where('is_active', true)->get();
        $locations = CompanyLocation::all();
        $experiences = ExperienceLevel::all();
        $graduations = Graduation::all();
        $categories = JobCategory::all();
        $skills = Skill::all();

        return view('livewire.company.post.job-post-component', compact('jobTypes', 'locations', 'experiences', 'graduations', 'categories', 'skills') );
    }
}
