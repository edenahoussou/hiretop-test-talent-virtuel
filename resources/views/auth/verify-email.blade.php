@extends('layouts.master', ['title' => 'Vérification de l\'adresse email'])
@section('content')
<main class="main">
    <section class="pt-100 login-register">
        <div class="container">
            <div class="row login-register-cover">
                <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                    <div class="text-center">
                        <p class="font-sm text-brand-2">{{__('Compte non Vérifier') }}</p>
                        <h2 class="mt-10 mb-5 text-brand-1">{{__('Vérification de l\'adresse email')}}</h2>
                        <p class="font-sm text-muted mb-30">
                            {{ __('Afin de valider votre compte, veuillez cliquer sur le lien envoyé dans votre email,
                            s\'il vous plait') }}
                        </p>
                    </div>
                    <form class="login-register text-start mt-20" method="POST"
                        action="{{ route('verification.send') }}">
                        @csrf

                        <div class="form-group">
                            <button class="btn btn-brand-1 hover-up w-100" type="submit">{{__('Renvoyer le
                                lien')}}</button>
                        </div>
                        <div class="text-muted text-center"><a href="javascript:void(0)"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{'Déconnexion'
                                }}</a></div>
                    </form>
                    <form id="logout-form" action="{{route('logout')}}" method="POST">@csrf</form>
                </div>
                <div class="img-1 d-none d-lg-block"><img class="shape-1"
                        src="{{asset('assets/imgs/page/login-register/img-5.svg')}}" alt="{{config('app.name')}}"></div>
                <div class="img-2"><img src="{{asset('assets/imgs/page/login-register/img-3.svg')}}"
                        alt="{{config('app.name')}}"></div>
            </div>
        </div>
    </section>
</main>
@endsection