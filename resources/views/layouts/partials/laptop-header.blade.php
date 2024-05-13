<header class="header sticky-bar">
  <div class="container">
    <div class="main-header">
      <div class="header-left">
        <div class="header-logo"><a class="d-flex" href="{{ route('home') }}"><img alt="{{config('app.name')}}"
              src="{{ asset('assets/imgs/template/jobhub-logo.svg') }}"></a></div>
      </div>
      <div class="header-nav">
        <nav class="nav-main-menu">
          <ul class="main-menu">
            <li><a class="{{ Request::is('/') ? 'active' : ''}}" href="{{route('home')}}">{{__('Home')}}</a></li>
            <li><a class="{{ Request::is('/jobs') ? 'active' : ''}}" href="{{route('jobs')}}">{{__('Trouver un
                travail')}}</a></li>
            <li><a class="{{ Request::is('/companies') ? 'active' : ''}}" href="{{route('companies')}}">{{__('Toutes les
                entreprises')}}</a></li>
            <li><a class="{{ Request::is('/candidates') ? 'active' : ''}}"
                href="{{route('candidates')}}">{{__('Candidats')}}</a></li>
            <li><a class="{{ Request::is('/blogs') ? 'active' : ''}}" href="{{route('blogs')}}">{{__('Blog')}}</a></li>
            <li><a class="{{ Request::is('/about-us') ? 'active' : ''}}" href="{{route('about-us')}}">{{__('A
                propos')}}</a> </li>
            <li><a class="{{ Request::is('/contact') ? 'active' : ''}}"
                href="{{route('contact')}}">{{__('Contact')}}</a></li>
            @auth
            <li class="has-children"><a href="javascript:void(0)">Mon compte</a>
              <ul class="sub-menu">
                <li><a href="{{ route('dashboard') }}">{{__('Tableau de bord')}}</a></li>
                <li><a href="@if(auth()->user()->hasRole('Talent')){{ route('candidate.profile') }}@else{{ route('company.owner.profile') }}@endif">{{__('Mon profil')}}</a></li>
                @if(auth()->user()->hasRole('Talent'))
                <li><a href="{{ route('candidate.applied-jobs') }}">{{__('Mes candidatures')}}</a></li>
                <li><a href="{{ route('candidate.recommendations') }}">{{__('Mes recommandations')}}"></a></li>
                <li><a href="{{ route('candidate.messages') }}">{{__('Messages')}}</a></li>
                @elseif(auth()->user()->hasRole('Entreprise'))
                <li><a href="{{ route('company.applicants') }}">{{__('Candidats')}}</a></li>
                <li><a href="{{ route('company.manage-post-job') }}">{{__('Mes offres d\'emplois')}}</a></li>
                <li><a href="{{ route('company.messages') }}">{{__('Messages')}}</a></li>
                @endif
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <li><a onclick="event.preventDefault();
                    this.closest('form').submit();" href=" {{ route('logout') }}">{{__('Déconnexion')}}</a></li>
                </form>
              </ul>
            </li>
            @endauth
          </ul>
        </nav>
        <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
            class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
      </div>
      @guest
      <div class="header-right">
        <div class="block-signin"><a class="text-link-bd-btom hover-up" href="{{ route('register') }}">{{
            __('Inscription') }}</a><a class="btn btn-default btn-shadow ml-40 hover-up" href="{{ route('login') }}">{{
            __('Login') }}</a></div>
      </div>
      @endguest

    </div>
  </div>
</header>