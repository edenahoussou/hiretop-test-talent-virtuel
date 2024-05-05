<?php

use App\Http\Livewire\Front\AboutUsComponent;
use App\Http\Livewire\Front\BlogsComponent;
use App\Http\Livewire\Front\CandidatesComponent;
use App\Http\Livewire\Front\CompaniesComponent;
use App\Http\Livewire\Front\ContactComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Front\HomeComponent;
use App\Http\Livewire\Front\JobsComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeComponent::class)->name('home');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/jobs', JobsComponent::class)->name('jobs');
Route::get('/candidates', CandidatesComponent::class)->name('candidates');
Route::get('companies', CompaniesComponent::class)->name('companies');
Route::get('about-us', AboutUsComponent::class)->name('about-us');
Route::get('/blogs', BlogsComponent::class)->name('blogs');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
