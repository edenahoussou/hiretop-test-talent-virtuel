<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="./images/logo-small.png" srcset="./images/logo-small2x.png 2x" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">{{ __('Menu') }}</h6>
                    </li><!-- .nk-menu-heading -->
                    <li class="nk-menu-item">
                        <a href="{{ route('dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">{{ __('Tableau de bord') }}</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item">
                        <a href="{{ route('company.manage-post-job') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-files-fill"></em></span>
                            <span class="nk-menu-text">{{ __('Offres d\'emplois') }}</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span>
                            <span class="nk-menu-text">{{ __('Messages') }}</span> <span class="nk-menu-badge">2</span> </span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    

                    <li class="nk-menu-item">
                        <a href="{{ route('company.applicants') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">{{ __('Candidats') }}</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">{{__('Gestion de compte')}}</h6>
                    </li><!-- .nk-menu-heading -->
                    <li class="nk-menu-item">
                        <a href="{{ route('company.profile') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                            <span class="nk-menu-text">{{__('Mon Entreprise')}}</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item">
                        <a href="{{ route('company.owner.profile') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span>
                            <span class="nk-menu-text">{{__('Profil utilisateur')}}</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-signout"></em></span>
                            <span class="nk-menu-text">{{__('Déconexion')}}</span>
                        </a>    
                    </li><!-- .nk-menu-item -->
                    
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>