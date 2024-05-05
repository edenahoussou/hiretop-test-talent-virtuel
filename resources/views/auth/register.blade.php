@extends('layouts.master', ['title' => 'Inscription'])
@section('content')
<main class="main">
    <section class="pt-100 login-register">
        <div class="container">
            <div class="row login-register-cover">
                <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                    <div class="text-center">
                        <p class="font-sm text-brand-2">{{__('S\'inscrire')}}</p>
                        <h2 class="mt-10 mb-5 text-brand-1">{{__('Commencez gratuitement dès aujourd\'hui !')}}</h2>
                        <p class="font-sm text-muted mb-30">{{__('Accès à toutes les fonctionnalités. Aucune carte de crédit n\'est requise.')}}</p>
                        <button class="btn social-login hover-up mb-20"><img
                                src="{{ asset('assets/imgs/template/icons/icon-google.svg') }}" alt="google"><strong>{{__('S\'inscrire avec Google')}}</strong></button>
                        <div class="divider-text-center"><span>{{__('Ou remplissez ce formulaire')}}</span></div>
                    </div>
                    <form class="login-register text-start mt-20" method="POST" action="{{ route('register') }}"> 
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="input-1">{{__('Nom complet')}} *</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="input-1" type="text" required="" name="name"
                                placeholder="Steven Job">
                        </div>
                        @error('name') <span class="text-danger">{{ $message }}></span> @enderror
                        <div class="form-group">
                            <label class="form-label" for="input-2">{{__('Email')}} *</label>
                            <input class="form-control @error('email') is-invalid @enderror" id="input-2" type="email" required="" name="email"
                                placeholder="stevenjob@gmail.com">
                        </div>
                        @error('email') <span class="text-danger">{{ $message }}></span> @enderror

                        <div class="form-group">
                            <label class="form-label" for="input-4">{{__('Mot de passe')}} *</label>
                            <input class="form-control" id="input-4" type="password" required="" name="password" autocomplete="new-password"
                                placeholder="************">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="input-5">{{__('Confirmer le mot de passe')}} *</label>
                            <input class="form-control" id="input-5" type="password" required="" name="password_confirmation"
                                placeholder="************">
                        </div>
                        <div class="login_footer form-group d-flex justify-content-between">
                            <label class="cb-container">
                                <input required name="terms" type="checkbox"><span class="text-small">{{__('Accepter nos conditions d\'utilisation')}}</span><span
                                    class="checkmark"></span>
                            </label><a class="text-muted" href="{{ route('contact') }}">{{__('Besoin d\'aide')}}</a>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-brand-1 hover-up w-100" type="submit">{{__('S\'inscrire')}}</button>
                        </div>
                        <div class="text-muted text-center">{{__('Vous avez deja un compte ?')}} <a href="{{ route('login')}}">{{'Se connecter' }}</a></div>
                    </form>
                </div>
                <div class="img-1 d-none d-lg-block"><img class="shape-1"
                        src="assets/imgs/page/login-register/img-1.svg" alt="JobBox"></div>
                <div class="img-2"><img src="{{ asset('assets/imgs/page/login-register/img-2.svg') }}" alt="{{config('app.name')}}"></div>
            </div>
        </div>
    </section>
</main>
@endsection
@push('js')
    <script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
@endpush