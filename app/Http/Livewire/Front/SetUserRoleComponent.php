<?php

namespace App\Http\Livewire\Front;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SetUserRoleComponent extends Component
{
    public $type ; 

    /**
     * Save the user role based on the selected type.
     *
     * @param void
     * @throws void
     * @return Illuminate\Http\RedirectResponse
     */
    public function setRole()
    {
        $this->validate([
            'type' => 'required|in:company,candidate',
        ]);
        $user = Auth::user();
        
        $user->assignRole($this->type == 'company' ? 'Entreprise' : 'Talent');

        return redirect()->route('dashboard');
    }
    public function render()
    {
        $title = __('Que recherchez vous ?');

        return view('livewire.front.set-user-role-component')->extends('layouts.master', compact('title') )->section('content');
    }
}
