<?php
use Illuminate\Support\Facades\Route;



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
        
        
        
    });

});