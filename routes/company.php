<?php

use App\Http\Livewire\OwnerProfil;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Company\Applicants;
use App\Http\Livewire\Company\Post\JobPostsList;
use App\Http\Livewire\Company\Profile\Presentation;
use App\Http\Livewire\Message;

/*
|--------------------------------------------------------------------------
| Candidate Routes
|--------------------------------------------------------------------------
|
| Here is where you can register company routes for your application.
|
*/

Route::group(['middleware' => ['auth','role:Entreprise'] ], function () {

    Route::prefix('company')->name('company.')->group(function () {
        
        Route::get('/post-job', JobPostsList::class)->name('manage-post-job');

        Route::get('profile',Presentation::class)->name('profile');

        Route::get('applicants', Applicants::class)->name('applicants');

        Route::get('owner/profile', OwnerProfil::class)->name('owner.profile');

        Route::get('messages',  Message::class)->name('messages');
        
    });

});