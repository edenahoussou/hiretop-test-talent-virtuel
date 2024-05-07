<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use Laravel\Socialite\Facades\Socialite;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Flashy::message('Vous avez ete deconnecte');

        return redirect('/');
    }

     /**
     * Redirects the user to the Google authentication page.
     *
     * @return \Illuminate\Http\RedirectResponse The redirect response to the Google authentication page.
     */
    public function authGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    
    /**
     * Handles the callback from Google authentication.
     *
     * @throws Some_Exception_Class description of exception
     * @return Some_Return_Value
     */
    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        $existingUser = User::where('google_id', $googleUser->email)->first();

        try {
            //code...
            if ($existingUser) {

                Auth::login($existingUser, true);
    
            } else {
                
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'email_verified_at' => now()
                ]);
    
                Auth::login($user, true);
    
            }
    
            Flashy::message('Bienvenue, ' . Auth::user()->name . '!');
    
            return redirect(RouteServiceProvider::HOME);

        } catch (\Throwable $th) {

            Flashy::error('Une erreur est survenue, veuillez reessayer : ' . $th->getMessage());

            return redirect('/login');
        }
    }
}
