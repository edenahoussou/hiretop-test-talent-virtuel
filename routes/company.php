<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Company\Post\JobPostsList;
use App\Http\Livewire\Company\Profile\Presentation;

/*
|--------------------------------------------------------------------------
| Candidate Routes
|--------------------------------------------------------------------------
|
| Here is where you can register company routes for your application.
|
*/

Route::group(['middleware' => 'auth'], function () {

    Route::prefix('company')->name('company.')->group(function () {
        
        Route::get('/post-job', JobPostsList::class)->name('manage-post-job');

        Route::get('profile',Presentation::class)->name('profile');
        
    });

});