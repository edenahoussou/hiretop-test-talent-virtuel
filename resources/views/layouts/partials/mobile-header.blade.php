<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
  <div class="mobile-header-wrapper-inner">
    <div class="mobile-header-content-area">
      <div class="perfect-scroll">
        <div class="mobile-search mobile-header-border mb-30">
          <form action="#">
            <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
          </form>
        </div>
        <div class="mobile-menu-wrap mobile-header-border">
          <!-- mobile menu start-->
          <nav>
            <ul class="mobile-menu font-heading">
              <li><a class="{{ Request::is('/') ? 'active' : ''}}" href="{{ route('home') }}">{{__('Accueil')}}</a></li>
              <li><a class="{{ Request::is('/jobs') ? 'active' : ''}}" href="{{route('jobs')}}">{{__('Trouver un
                  travail')}}</a></li>
              <li><a class="{{ Request::is('/companies') ? 'active' : ''}}"
                  href="{{route('companies')}}">{{__('Entreprises')}}</a></li>
              <li><a class="{{ Request::is('/candidates') ? 'active' : ''}}"
                  href="{{route('candidates')}}">{{__('Candidats')}}</a></li>
              <li><a class="{{ Request::is('/blogs') ? 'active' : ''}}" href="{{route('blogs')}}">{{__('Blog')}}</a>
              </li>
              <li><a class="{{ Request::is('/about-us') ? 'active' : ''}}" href="{{route('about-us')}}">{{__('A
                  propos')}}</a> </li>
              <li><a class="{{ Request::is('/contact') ? 'active' : ''}}"
                  href="{{route('contact')}}">{{__('Contact')}}</a></li>
              @guest
              <li><a href="{{ route('register') }}">{{__('Inscription')}}</a></li>
              <li><a href="{{ route('login') }}">{{__('Login')}}</a></li>
              @endguest
            </ul>
          </nav>
        </div>
        @auth
        <div class="mobile-account">
          <h6 class="mb-10">{{__('Mon compte')}}</h6>
          <ul class="mobile-menu font-heading">
            <li><a href="#">{{__('Tableau de bord')}}</a></li>
            <li><a href="#">{{__('Mon profil')}}</a></li>
            <li><a href="#">{{__('Mes candidatures')}}</a></li>
            <li><a href="#">{{__('Parametres')}}</a></li>
            <li><a href="{{ route('logout') }}">{{__('Se deconnecter')}}</a></li>
          </ul>
        </div>
        @endauth
        <div class="site-copyright">Copyright {{ date('Y') }} {{ config('app.name') }}. <br>Made with love by <a
            href="https://edenahoussou.github.io/portfolio/index.html" target="_blank">Eden Ahousssou</a></div>
      </div>
    </div>
  </div>
</div>

<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
  <div class="mobile-header-wrapper-inner">
    <div class="mobile-header-content-area">
      <div class="perfect-scroll">
        <div class="mobile-search mobile-header-border mb-30">
          <form action="#">
            <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
          </form>
        </div>
        <div class="mobile-menu-wrap mobile-header-border">
          <!-- mobile menu start-->
          <nav>
            <ul class="mobile-menu font-heading">
              <li><a class="{{ Request::is('/') ? 'active' : ''}}" href="{{ route('home') }}">{{__('Accueil')}}</a></li>
              <li><a class="{{ Request::is('/jobs') ? 'active' : ''}}" href="{{route('jobs')}}">{{__('Trouver un
                  travail')}}</a></li>
              <li><a class="{{ Request::is('/companies') ? 'active' : ''}}"
                  href="{{route('companies')}}">{{__('Entreprises')}}</a></li>
              <li><a class="{{ Request::is('/candidates') ? 'active' : ''}}"
                  href="{{route('candidates')}}">{{__('Candidats')}}</a></li>
              <li><a class="{{ Request::is('/blogs') ? 'active' : ''}}" href="{{route('blogs')}}">{{__('Blog')}}</a>
              </li>
              <li><a class="{{ Request::is('/about-us') ? 'active' : ''}}" href="{{route('about-us')}}">{{__('A
                  propos')}}</a> </li>
              <li><a class="{{ Request::is('/contact') ? 'active' : ''}}"
                  href="{{route('contact')}}">{{__('Contact')}}</a></li>
              @guest
              <li><a href="{{ route('register') }}">{{__('Inscription')}}</a></li>
              <li><a href="{{ route('login') }}">{{__('Login')}}</a></li>
              @endguest
            </ul>
          </nav>
        </div>
        @auth
        <div class="mobile-account">
          <h6 class="mb-10">{{__('Mon compte')}}</h6>
          <ul class="mobile-menu font-heading">
            <li><a href="#">{{__('Tableau de bord')}}</a></li>
            <li><a href="#">{{__('Mon profil')}}</a></li>
            <li><a href="#">{{__('Mes candidatures')}}</a></li>
            <li><a href="#">{{__('Parametres')}}</a></li>
            <li><a href="{{ route('logout') }}">{{__('Déconnection')}}</a></li>
          </ul>
        </div>
        @endauth
        <div class="site-copyright">Copyright {{ date('Y') }} {{ config('app.name') }}. <br>Made with love by <a
            href="https://edenahoussou.github.io/portfolio/index.html" target="_blank">Eden Ahousssou</a></div>
      </div>
    </div>
  </div>
</div>