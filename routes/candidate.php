<?php
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
        
        
        
    });

});