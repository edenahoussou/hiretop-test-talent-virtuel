<div>
    <div class="modal fade" role="dialog" id="profile-edit" wire:ignore.self>
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">{{__('Mise à jour du profile')}}</h5>

                    <div class="tab-content mt-4">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">{{__('Nom complet')}}</label>
                                        <input type="text" wire:model.defer='name'
                                            class="form-control @error('name') is-invalid @enderror" id="full-name"
                                            wire:model.defer='name' placeholder="Enter Full name">
                                    </div>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">{{__('Upload Photo')}}</label>
                                        <input type="file" accept="image/*" wire:model.defer='photo'
                                            class="form-control @error('photo') is-invalid @enderror" id="photo">
                                    </div>
                                    @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="personal-email">{{_('Email')}}</label>
                                        <input type="email" disabled
                                            class="form-control @error('email') is-invalid @enderror"
                                            id="personal-email" wire:model.defer='email'>
                                    </div>
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">{{__('Téléphone')}}</label>
                                        <input type="text" wire:model.defer='phone'
                                            class="form-control @error('phone') is-invalid @enderror" id="phone-no"
                                            value="+880" placeholder="Phone Number">
                                    </div>
                                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">{{__('Date de naissance')}}</label>
                                        <input type="date" wire:model.defer='dob'
                                            class="form-control @error('dob') is-invalid @enderror" id="birth-day"
                                            placeholder="02/24/2021">
                                    </div>
                                    @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Address Line 1</label>
                                        <input type="text" wire:model.defer='address'
                                            class="form-control @error('address') is-invalid @enderror" id="address-l1"
                                            value="2337 Kildeer Drive">
                                    </div>
                                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>


                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a wire:click='updateProfile' href="#" 'data-bs-dismiss="modal" class="btn btn-primary">Update Profile</a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <div class="modal fade" role="dialog" id="udpadate-password" wire:ignore.self>
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">{{__('Modifier le mot passe')}}</h5>

                    <div class="tab-content mt-4">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="otp">{{__('Code OTP')}}</label>
                                        <input type="text" wire:model.defer='otp'
                                            class="form-control @error('otp') is-invalid @enderror" id="otp"
                                            wire:model.defer='otp' placeholder="Saisissez  le code qui vous à été envoyé dans votre addresse email">
                                    </div>
                                    @error('otp') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="password">{{__('Nouveau mot de passe ')}}</label>
                                        <input type="password" wire:model.defer='password'
                                            class="form-control @error('password') is-invalid @enderror" id="password"
                                             placeholder="Entrez votre nouveau mot de passe">
                                    </div>
                                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="password_confirmation">{{__('Confirmer mot de passe')}}</label>
                                        <input type="password" wire:model.defer='password_confirmation'
                                            class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation"
                                             placeholder="Entrez votre nouveau mot de passe">
                                    </div>
                                    @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a wire:target='updatePassword'  wire:click='updatePassword' href="javascript:void(0);"class="btn btn-primary">{{__('Modifier le mot de passe')}}</a>
                                        </li>
                                        <li>
                                            <a href="#" wire:click='cancelUpdatePasword' data-bs-dismiss="modal" class="link link-light">{{__('Annuler')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="card">
                        <div class="card-aside-wrap">
                        @if ( $tab == 'info')
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-between d-flex justify-content-between">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">{{(' Informations Personnelles')}}</h4>
                                                <div class="nk-block-des">
                                                    <p>{{('Informations basique telles que Nom, Prénom, etc.')}}</p>
                                                    </p>
                                                </div>
                                        </div>
                                        <div class="d-flex align-center">
                                            <div class="nk-tab-actions me-n1">
                                                <a wire:click=' edit' class="btn btn-icon btn-trigger"><em
                                                        class="icon ni ni-edit"></em></a>
                                            </div>
                                            <div class="nk-block-head-content align-self-start d-lg-none">
                                                <a href="#" class="toggle btn btn-icon btn-trigger" data-target="userAside"><em
                                                        class="icon ni ni-menu-alt-r"></em></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="nk-data data-list">
                                        <div class="data-head">
                                            <h6 class="overline-title">{{('Basique')}}</h6>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">{{__('Nom & Prénom')}}</span>
                                                <span class="data-value">{{auth()->user()->name}}</span>
                                            </div>
                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Email</span>
                                                <span class="data-value">{{auth()->user()->email}}</span>
                                            </div>
                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">{{__('Téléphone')}}</span>
                                                <span class="data-value text-soft">{{auth()->user()->phone ?? 'Non
                                                    renseigné'}}</span>
                                            </div>
                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">{{__('Date de naissance')}}</span>
                                                <span class="data-value">{{auth()->user()->dob ?? 'Non renseigné'}}</span>
                                            </div>
                                        </div><!-- data-item -->

                                        <div class="data-item" data-tab-target="#address">
                                            <div class="data-col">
                                                <span class="data-label">{{__('Addresse')}}</span>
                                                <span class="data-value">{{auth()->user()->address ?? 'Non renseigné'}}</span>
                                            </div>
                                        </div><!-- data-item -->
                                    </div><!-- data-list -->
                                    {{-- <div class="nk-data data-list">
                                        <div class="data-head">
                                            <h6 class="overline-title">Preferences</h6>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Language</span>
                                                <span class="data-value">English (United State)</span>
                                            </div>
                                            <div class="data-col data-col-end"><a data-bs-toggle="modal" href="#modalLanguage"
                                                    class="link link-primary">Change Language</a>
                                            </div>
                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Date Format</span>
                                                <span class="data-value">M, D, YYYY</span>
                                            </div>
                                            <div class="data-col data-col-end"><a data-bs-toggle="modal" href="#modalDate"
                                                    class="link link-primary">Change</a></div>
                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Timezone</span>
                                                <span class="data-value">Bangladesh (GMT +6:00)</span>
                                            </div>
                                            <div class="data-col data-col-end"><a data-bs-toggle="modal" href="#modalTimezone"
                                                    class="link link-primary">Change</a></div>
                                        </div><!-- data-item -->
                                    </div><!-- data-list --> --}}
                                </div><!-- .nk-block -->
                            </div>
                        @endif
                        @if($tab == 'security')
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">{{__('Parametre de sécurité')}}</h4>
                                        <div class="nk-block-des">
                                            <p>{{__('Ces paramètres vous aide à proteger votre compte')}}</p>
                                        </div>
                                    </div>
                                    <div class="nk-block-head-content align-self-start d-lg-none">
                                        <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card border border-light">
                                    <div class="card-inner-group">
                                        <div class="card-inner">
                                            <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                <div class="nk-block-text">
                                                    <h6>{{__('Sauvegarder mes journaux d\'activité')}}</h6>
                                                    <p>{{__('Vous pouvez enregistrer tous les journaux d\'activité, y compris les activités inhabituelles détectées.')}}</p>
                                                </div>
                                                <div class="nk-block-actions">
                                                    <ul class="align-center gx-3">
                                                        <li class="order-md-last">
                                                            <div class="custom-control custom-switch me-n2">
                                                                <input wire:change='toogleActivityLogs' type="checkbox" class="custom-control-input" @checked({{$user->activity_log == 'enabled'}}) id="activity-log">
                                                                <label class="custom-control-label" for="activity-log"></label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                        <div class="card-inner">
                                            <div class="between-center flex-wrap g-3">
                                                <div class="nk-block-text">
                                                    <h6>{{__('Changer mon mot de passe')}}</h6>
                                                    <p>{{__('Nous vous conseillons de définir un mot de passse fort unique')}}</p>
                                                </div>
                                                <div class="nk-block-actions flex-shrink-sm-0">
                                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                        <li class="order-md-last">
                                                            <a href="javascript:void(0);" wire:click='changePassword' class="btn btn-primary">{{__('Changer le mot de passe')}}</a>
                                                        </li>
                                                        {{-- <li>
                                                            <em class="text-soft text-date fs-12px">Last changed: <span>Oct 2, 2019</span></em>
                                                        </li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                        <div class="card-inner">
                                            <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                <div class="nk-block-text">
                                                    <h6>{{__('Authentification double facteur')}} &nbsp; <span class="badge @if($enable2fa =='disabled') bg-danger @else bg-success @endif  ms-0">
                                                        @if($enable2fa =='disabled') {{__('Desactiver')}} @else {{__('Activer')}} @endif</span>
                                                    </h6>
                                                    <p>{{__('Activez l\'authentification double facteur par email.')}}</p>
                                                </div>
                                                <div class="nk-block-actions">
                                                    <a wire:click='toogle2fa' href="javascript:void(0);" class="btn btn-primary">@if($enable2fa =='disabled') {{__('Activer')}} @else {{__('Desactiver')}} @endif</a>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .card-inner-group -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                        </div><!-- .card-inner --> 
                        @endif
                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg"
                                data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                <div class="card-inner-group" data-simplebar>
                                    <div class="card-inner">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">{{auth()->user()->name}}</span>
                                                <span class="sub-text">{{auth()->user()->email}}</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-trigger me-n2" data-bs-toggle="dropdown"
                                                        href="#"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#" wire:click='edit'><em
                                                                        class="icon ni ni-edit-fill"></em><span>{{__('Modifier
                                                                        les informations')}}</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .user-card -->
                                    </div><!-- .card-inner -->

                                    <div class="card-inner p-0">
                                        <ul class="link-list-menu">
                                            <li><a wire:click='switchTo("info")' @if( $tab == 'info') class="active" @endif href="javascript:void(0)"><em
                                                        class="icon ni ni-user-fill-c"></em><span>{{__('Informations
                                                        Personnelles')}}</span></a></li>
                                            {{-- <li><a href="html/lms/admin-profile-notification.html"><em
                                                        class="icon ni ni-bell-fill"></em><span>Notifications</span></a>
                                            </li>
                                            <li><a href="html/lms/admin-profile-activity.html"><em
                                                        class="icon ni ni-activity-round-fill"></em><span>Account
                                                        Activity</span></a>
                                            </li> --}}
                                            <li><a wire:click='switchTo("security")' href="javascript:void(0);" @if( $tab == 'security') class="active" @endif><em
                                                        class="icon ni ni-lock-alt-fill"></em><span>{{__('Parametre de
                                                        sécurité')}}</span></a></li>
                                        </ul>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="user-account-info py-0">
                                            <h6 class="overline-title-alt">{{__('Terminal')}}</h6>
                                            <p>{{auth()->user()->browser ?? 'Inconnu'}}</p>
                                            <h6 class="overline-title-alt">Login IP</h6>
                                            <p>{{auth()->user()->ip ?? 'Inconnu'}}</p>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .card-inner-group -->
                            </div><!-- card-aside -->
                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@push('js')
    <script>
        window.addEventListener('open-modal', event => {
        $('#profile-edit').modal('show');
    });
    window.addEventListener('close-modal', event => {
        $('#profile-edit').modal('hide');
    })

    window.addEventListener('open-password-modal', event => {
        $('#udpadate-password').modal('show');
        @this.generateRandomOtp()
    });
    window.addEventListener('close-password-modal', event => {
        $('#udpadate-password').modal('hide');
    });

    </script>
@endpush