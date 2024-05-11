<div>
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">{{('Mon profil')}}</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block nk-block-lg">
                    <div class="card">
                        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#tabItem5"><em
                                        class="icon ni ni-laptop"></em><span>{{('Mon entreprise')}}</span></a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabItem8"><em
                                        class="icon ni ni-user"></em><span>{{('Mon profil')}} </span>
                                </a>
                            </li> --}}
                            
                        </ul>
                        <div class="card-inner">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabItem5">
                                    <h4 class="title nk-block-title">{{('Présentation de votre entreprise')}}</h4>
                                    <p>{{('Veuillez renseigner les informations, ses informations seront affichés sur votre profil au candidats')}}</p>
                                    <form class="gy-3 form-settings">
                                        @csrf
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="site-name">{{('Nom de votre entreprise')}}</label>
                                                    <span class="form-note">{{__('Saisissez le nom de votre entreprise.')}}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="text" placeholder="{{__('Mon entreprise')}}" wire:model.defer="companyName" class="form-control @error('companyName') is-invalid @enderror" id="site-name"
                                                        >
                                                        @error('companyName') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="site-name">{{('Logo')}}</label>
                                                    <span class="form-note">{{__('Uploader votre logo')}}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <div class="form-file" wire:ignore>
                                                            <input wire:model.defer="logo" type="file" accept="image/*" class="form-file-input" id="customFile">
                                                            <label class="form-file-label" for="customFile">{{__('Choisissez votre logo...')}}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="site-email">{{('Email')}}</label>
                                                    <span class="form-note">{{__('Saisissez votre email , elle sera utilisée pour receptionner les demandes et autres notifs')}}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input inputmode="url" type="text" wire:model.defer="email" class="form-control @error('email') is-invalid @enderror" id="site-email"
                                                            placeholder="eden@ahoussou@mail.com">
                                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="company-site">
                                                        {{('Site web')}}</label>
                                                    <span class="form-note">{{('Saisissez le lien votre site web')}}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control @error('website') is-invalid @enderror" wire:model.defer="website" id="company-site">
                                                        @error('website') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="about-company"> {{__('A propos')}}</label>
                                                    <span class="form-note">{{__('Veuillez renseigner un brief sur votre entreprise')}}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <div class="form-control-wrap">
                                                            <textarea wire:model.defer="about" class="form-control form-control @error('about') is-invalid @enderror" id="about"
                                                            >
                                                            </textarea>
                                                            @error('about') <span class="text-danger">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="vision-company"> {{__('Vision')}}</label>
                                                    <span class="form-note">{{__('Votre vision')}}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <div class="form-control-wrap">
                                                            <textarea wire:model.defer="vision" class="form-control form-control @error('vision') is-invalid @enderror" id="vision"
                                                                >
                                                            </textarea>
                                                            @error('vision') <span class="text-danger">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="mission-company"> {{__('Mission')}}</label>
                                                    <span class="form-note">{{__('Votre mission')}}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <div class="form-control-wrap">
                                                            <textarea wire:model.defer="mission" class="form-control form-control @error('mission') is-invalid @enderror" id="mission"
                                                                >
                                                            </textarea>
                                                            @error('mission') <span class="text-danger">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="mission-company"> {{__('Domaines d\'activite')}}</label>
                                                    <span class="form-note">{{__('Sélectionner votre secteur d\'activité')}}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <select class="form-select js-select2 @error('industry') is-invalid @enderror" data-search="on" wire:model.defer="industry">
                                                            <option value="default_option">{{__('Choissisez une option')}}</option>
                                                            @foreach ($industries as $industry)
                                                                <option value="{{ $industry->id }}">{{$industry->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('industry') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="button" class="btn btn-primary" wire:click="addIndustry">{{__('Ajouter')}}</button>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="mission-company"> {{__('Localisation') }}</label>
                                                    <span class="form-note">{{__('Ou se trouve votre entreprise')}}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <select class="form-select js-select2 @error('location') is-invalid @enderror" data-search="on" wire:model.defer="location">
                                                            <option value="default_option">{{__('Choissisez une option')}}</option>
                                                            @foreach ($locations as $location)
                                                                <option value="{{ $location->id }}">{{$location->address}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('location') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-2">
                                                <button type="button" class="btn btn-primary" wire:click="addLocation">{{__('Ajouter')}}</button>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-lg-7">
                                                <div class="form-group mt-2">
                                                    <button type="button" wire:click='updateCompanyProfile' class="btn btn-lg btn-primary">{{__('Mettre à jour')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--tab pan -->
                                {{-- <div class="tab-pane" id="tabItem8">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="title nk-block-title">Theme Installed</h4>
                                            <p>Here are last week's update!</p>
                                        </div>
                                    </div>
                                    <div class="row g-gs">
                                        <div class="col-lg-4 col-xxl-3 col-sm-6">
                                            <div class="card shadow-none">
                                                <img src="./images/lms/theme/a.jpg" class="border border-light rounded"
                                                    alt="">
                                                <div class="card-inner pt-3 p-0">
                                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur,
                                                        adipisicing elit. Expedita, sapiente!</p>
                                                    <a href="#" class="btn btn-primary" data-bs-target="#modalAlert"
                                                        data-bs-toggle="modal"> Active Theme</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xxl-3 col-sm-6">
                                            <div class="card shadow-none">
                                                <img src="./images/lms/theme/b.jpg" class="border border-light rounded"
                                                    alt="">
                                                <div class="card-inner pt-3 p-0">
                                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur,
                                                        adipisicing elit. Expedita, sapiente!</p>
                                                    <a href="#" class="btn btn-primary disabled"> Current theme</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xxl-3 col-sm-6">
                                            <div class="card shadow-none">
                                                <img src="./images/lms/theme/c.jpg" class="border border-light rounded"
                                                    alt="">
                                                <div class="card-inner pt-3 p-0">
                                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur,
                                                        adipisicing elit. Expedita, sapiente!</p>
                                                    <a href="#" class="btn btn-primary" data-bs-target="#modalAlert"
                                                        data-bs-toggle="modal"> Active theme</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                
                            </div>
                        </div>
                        <!--card inner-->
                    </div>
                    <!--card-->
                </div>
                <!--nk-block-->
            </div>
        </div>
    </div>
</div>