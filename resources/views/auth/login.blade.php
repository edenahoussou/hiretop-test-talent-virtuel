@extends('layouts.master', ['title' => 'Login'])
@section('content')
<main class="main">
    <section class="pt-100 login-register">
        <div class="container">
            <div class="row login-register-cover">
                <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                    <div class="text-center">
                        <p class="font-sm text-brand-2">{{__('Bienvenue !') }}</p>
                        <h2 class="mt-10 mb-5 text-brand-1">{{__('Se connecter')}}</h2>
                        <p class="font-sm text-muted mb-30">{{__('Connectez-vous pour continuer') }}</p>
                        <button class="btn social-login hover-up mb-20" onclick="window.location.href='{{route('google.login')}}'"><img
                                src="{{ asset('assets/imgs/template/icons/icon-google.svg') }}" alt="{{config('app.name')}}"><strong>{{__('Continuer avec Google')}}</strong></button>
                        <div class="divider-text-center"><span>{{__('ou') }}</span></div>
                    </div>
                    <form class="login-register text-start mt-20" method="POST" action="{{ route('login') }}">@csrf
                        <div class="form-group">
                            <label class="form-label" for="input-1">{{__('Adresse e-mail') }} *</label>
                            <input class="form-control" name="email" id="input-1" type="text" required=""
                                placeholder="edenahoussou@mail.com" autofocus>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="input-4">{{__('Mot de passe') }} *</label>
                            <input class="form-control" id="input-4" type="password" name="password" required="" name="password"
                                placeholder="************" autocomplete="current-password">
                        </div>
                        <div class="login_footer form-group d-flex justify-content-between">
                            <label class="cb-container">
                                <input type="checkbox" name="remember""><span class="text-small">{{__('Se souvenir de moi') }}</span><span
                                    class="checkmark"></span>
                            </label><a class="text-muted" href="{{ route('password.request')}}">{{'Mot de passe oublie'}}</a>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">{{__('Se connecter')}}</button>
                        </div>
                        <div class="text-muted text-center">{{__('Vous n\'avez pas de compte ?')}} <a href="{{ route('register')}}">{{'Creer un compte' }}</a></div>
                    </form>
                </div>
                <div class="img-1 d-none d-lg-block"><img class="shape-1"
                        src="assets/imgs/page/login-register/img-4.svg" alt="{{config('app.name')}}"></div>
                <div class="img-2"><img src="{{ asset('assets/imgs/page/login-register/img-3.svg') }}" alt="{{config('app.name')}}"></div>
            </div>
        </div>
    </section>
</main>
@endSection