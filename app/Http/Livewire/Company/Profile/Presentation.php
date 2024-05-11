<?php

namespace App\Http\Livewire\Company\Profile;

use App\Models\Company;
use App\Models\CompanyLocation;
use App\Models\Industry;
use Livewire\Component;
use Livewire\WithFileUploads;

class Presentation extends Component
{
    use WithFileUploads;

    public $companyName, $email, $website, $about, $vision, $mission, $industry, $location, $logo;

    public function mount()
    {
        $company = Company::where('owner_id', auth()->user()->id)->first();
        if($company){
            $this->companyName = $company->name;
            $this->email = $company->email;
            $this->website = $company->website;
            $this->about = $company->about;
            $this->vision = $company->vision;
            $this->mission = $company->mission;
            $this->industry = $company->industry_id;
            $this->location = $company->company_location_id;
        }
    }

    private function storeCompanyLogo()
    {
        $this->validate([
            'logo' => 'nullable|image|max:20048',
        ]);

        if ($this->logo) {
            return $this->logo->storeAs('company-logo', $this->logo->getClientOriginalName(), 'public');

        }
        return;
    }

    public function updateCompanyProfile()
    {
        //dd($this->all());
        $this->validate([
            'companyName' => 'required',
            'email' => 'required|email',
            'website' => 'nullable|url',
            'about' => 'required',
            'vision' => 'required',
            'mission' => 'required',
            'industry' => 'required|exists:industries,id',
            'location' => 'required|exists:company_locations,id',
        ]);

        //dd($this->all());

       try{
        Company::updateOrCreate(
            ['owner_id' => auth()->user()->id],
    
            [
                'name' => $this->companyName,
                'email' => $this->email,
                'website' => $this->website,
                'about' => $this->about,
                'vision' => $this->vision,
                'mission' => $this->mission,
                'industry_id' => $this->industry,
                'company_location_id' => $this->location,
                'logo' => $this->logo->store('company-logo', 'public'),
                'owner_id' => auth()->user()->id,
            ]
            );

            if($this->logo){
                $logo = $this->storeCompanyLogo();
                Company::where('owner_id', auth()->user()->id)->update(['logo' => $logo]);
            }
            
            $this->dispatchBrowserEvent('success-message', [
                'message' => __('Vos informations personnelles ont bien été mises à jour'),
            ]);
       }
       catch(\Exception $e){
        $this->dispatchBrowserEvent('error-message', [
            'message' => __('Une erreur est survenue'),
        ]);
        dd($e->getMessage());

       }

    }
    public function render()
    {
        $title = __('Présentation de l\'entreprise');
        $industries = Industry::all();
        $locations = CompanyLocation::all();
        return view('livewire.company.profile.presentation', compact('industries', 'locations'))->extends('layouts.admin-master', compact('title') )->section('content');
    }
}
