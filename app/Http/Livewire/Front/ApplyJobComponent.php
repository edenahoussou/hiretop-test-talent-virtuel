<?php

namespace App\Http\Livewire\Front;

use App\Models\Candidat;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class ApplyJobComponent extends Component
{
    use WithFileUploads;

    public $phone, $notes, $resume, $conditions, $job_id;
    protected $messages = [
        'required' => 'Ce champs est requis',
        'max' => 'La taille du fichier est trop grande',
        'mimes' => 'Ce type de fichier n\'est pas permis',
        'file' => 'Ce type de fichier n\'est pas permis',
        'conditions.required' => 'Veuillez accepter les conditions',
        'min' => 'Le numéro de téléphone est trop court',
    ];

    protected $listeners = ['applyJob'];

    public function applyJob($job_id)
    {
        $this->job_id = $job_id;
    }

    public function close()
    {
        $this->reset();
    }

    public function isApplied()
    {
        $candidat = Candidat::where('user_id', auth()->user()->id)->first();
        if ($candidat->jobs()->wherePivot('job_post_id', $this->job_id)->exists()) {
            return true;
        }
    }

    public function submit()
    {
        $this->validate([
            'phone' => 'required|min:10',
            'notes' => 'nullable|max:255',
            'resume' => 'required|file|mimes:pdf,jpg,png,jpeg,docx|max:20048',
            'conditions' => 'required',
        ]);

        $candidat = Candidat::where('user_id', auth()->user()->id)->first();
        // check if user already applied before
        if ($candidat->jobs()->wherePivot('job_post_id', $this->job_id)->exists()) {
            $this->dispatchBrowserEvent('warning-message', [
                'message' => 'Vous avez déjà soumis une candidature pour cette offre d\'emploi',]
            );

            $this->dispatchBrowserEvent('close-modal');

            return;
        }
        try {
            DB::beginTransaction();
            $candidat->jobs()->attach(
                $this->job_id,
                [
                    'slug' => $this->job_id . '-' . auth()->user()->name,
                    'cover_letter' => $this->notes,
                    'resume' => $this->resume->store('candidates/resumes', 'public'),
                    'candidate_status' => 'applied',
                ]
            );
            DB::commit();
            $this->reset();

            dd('Votre candidature a bien été soumise');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.front.apply-job-component');
    }
}
