<?php

use App\Http\Livewire\Candidate\AppliedJobs;
use App\Http\Livewire\Candidate\Resume;
use App\Http\Livewire\Message;
use App\Http\Livewire\OwnerProfil;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Candidate Routes
|--------------------------------------------------------------------------
|
| Here is where you can register candidate routes for your application. These
|
*/

Route::group(['middleware' => 'auth'], function () {

    Route::prefix('candidate')->name('candidate.')->group(function () {

        Route::get('messages',  Message::class)->name('messages');

        Route::get('resumes', Resume::class)->name('resumes');

        Route::get('profile', OwnerProfil::class)->name('profile');
        
        Route::get('applied-jobs', AppliedJobs::class)->name('applied-jobs');
    });
});