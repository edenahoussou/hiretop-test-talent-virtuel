<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Livewire\Front\HomeComponent;
use App\Http\Livewire\Front\JobsComponent;
use App\Http\Livewire\Front\BlogsComponent;
use App\Http\Livewire\Front\AboutUsComponent;
use App\Http\Livewire\Front\ContactComponent;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Front\CompaniesComponent;
use App\Http\Livewire\Front\CandidatesComponent;
use App\Http\Livewire\Front\JobDetailsComponent;
use App\Http\Livewire\Front\SetUserRoleComponent;
use App\Http\Livewire\Front\CompanyDetailsComponent;
use App\Http\Livewire\Company\CandidateDetailsComponent;
use App\Http\Livewire\Company\Post\ManagePostJobApplicants;

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

Route::get('/jobs/{search_terms?}/{selectedIndustry?}/{selectedLocation?}', JobsComponent::class)->name('jobs');

Route::get('/job/{slug}/details',JobDetailsComponent::class)->name('job.details');

Route::get('/job/{slug}/candidates/', ManagePostJobApplicants::class)->name('candidates');

Route::get('/candidates/{id}/details', CandidateDetailsComponent::class)->name('candidate.details');

Route::get('companies/{slug}/details', CompanyDetailsComponent::class)->name('company.details');

Route::get('companies/{letter?}', CompaniesComponent::class)->name('companies');


Route::get('about-us', AboutUsComponent::class)->name('about-us');

Route::get('/blogs', BlogsComponent::class)->name('blogs');

Route::get('/set-user-role', SetUserRoleComponent::class)->name('select-role')->middleware(['auth', 'verified']);

Route::get('/dashboard', DashboardComponent::class)->name('dashboard')->middleware(['auth', 'verified','hasRole']);

Route::get('/clean', function () {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('event:clear');
    Artisan::call('optimize');
    // Artisan::call('composer dump-autoload');
    session()->flush();
    

})->name('clean');

// add route to get php info


require __DIR__ . '/auth.php';
