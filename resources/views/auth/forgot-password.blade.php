@extends('layouts.master', ['title' => 'Mot de passe oublié'])
@section('content')
<main class="main">
    <section class="pt-100 login-register">
      <div class="container"> 
        <div class="row login-register-cover">
          <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
            <div class="text-center">                       
              <p class="font-sm text-brand-2">{{__('Mot de passe oublié') }}</p>
              <h2 class="mt-10 mb-5 text-brand-1">{{__('Reinitialisez votre mot de passe')}}</h2>
              <p class="font-sm text-muted mb-30">
                 {{__('Entrez votre adresse e-mail et nous vous enverrons un lien de reinitialisation de mot de passe.')}}
              </p>
            </div>
            <form class="login-register text-start mt-20" action="{{ route('password.email') }}" method="POST">@csrf
              <div class="form-group">
                <label class="form-label" for="input-1">{{__('Email')}} *</label>
                <input class="form-control @error('email') is-invalid @enderror" id="input-1" type="text" required="" name="email" placeholder="Ex:johndoe@mail.com" value="{{old('email')}}">
              </div>
              @error('email') <span class="text-danger">{{ $message }}</span> @enderror
              <div class="form-group">
                <button class="btn btn-brand-1 hover-up w-100" type="submit" name="continue">{{__('Continuer')}}</button>
              </div>
              <div class="text-muted text-center">{{__('Vous n\'avez pas de compte ?')}} <a href="{{ route('register')}}">{{'Créer un compte' }}</a></div>
            </form>
          </div>
          <div class="img-1 d-none d-lg-block"><img class="shape-1" src="{{asset('assets/imgs/page/login-register/img-5.svg')}}" alt="{{config('app.name')}}"></div>
          <div class="img-2"><img src="{{asset('assets/imgs/page/login-register/img-3.svg')}}" alt="{{config('app.name')}}"></div>
        </div>
      </div>
    </section>
  </main>
@endsection
