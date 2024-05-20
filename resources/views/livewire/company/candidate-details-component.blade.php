<div>
    <div class="modal fade" id="modalProof" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Attestation / Diplome')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <embed src="{{Storage::url($proof)}}"width="100%" height="600px">
                </div>
            </div>
        </div>
    </div>
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">{{__('Candidat : ')}} / <strong class="text-primary small">{{$user->name}}</strong></h3>
                    </div>
                    <div class="nk-block-head-content">
                        <a href="{{ url()->previous() }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                        <a href="{{url()->previous()}}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card">
                    <div class="card-aside-wrap">
                        <div class="card-inner card-inner-lg">
                            <div class="tab-content">
                                @if($activeTab == 'Overview')
                                <div class="tab-pan " id="personal1">
                                    <div class="nk-block-head">
                                        <div class="nk-block-between d-flex justify-content-between">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">{{__('Profil du Candidat')}}</h4>
                                                <div class="nk-block-des">
                                                    <p>{{__('Overview du candidat')}}</p>
                                                </div>
                                            </div>
                                            {{-- <div class="nk-tab-actions me-n1">
                                                <a class="btn btn-icon btn-trigger" data-bs-toggle="modal" href="#add-couses">
                                                    <em class="icon ni ni-property-add"></em>
                                                </a>
                                            </div> --}}
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <div class="nk-tb-list mb-3">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col">
                                                    <span  class="lead-text">{{ __('Formations') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-list border border-light rounded overflow-hidden ">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col">
                                                    <span class="lead-text">#</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="lead-text">{{__('Formations')}}</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="lead-text">{{__('Ecole')}}</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="lead-text">{{__('Du')}}</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="lead-text">{{__('Au')}}</span>
                                                </div>
                                                
                                                <div class="nk-tb-col">
                                                    <span class="lead-text d-none d-sm-inline">{{__('Status')}}</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <span class="lead-text">&nbsp;</span>
                                                </div>
                                            </div>
                                            @foreach($candidate->graduations as $key => $graduation)
                                            
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col"> {{$loop->iteration}} </div>
                                                <div class="nk-tb-col"> {{$graduation->name}} </div>
                                                <div class="nk-tb-col"> {{$graduation->pivot->university}} </div>
                                                <div class="nk-tb-col"> {{$graduation->pivot->start_date}} </div>
                                                <div class="nk-tb-col"> {{$graduation->pivot->end_date}} </div>

                                                <div class="nk-tb-col">
                                                    <span class="badge badge-dot badge-dot-xs bg-success">{{$graduation->pivot->status}}</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <a title="{{__('Voir') }}" href="javascript:void(0)" wire:click='showProof("{{$graduation->pivot->degree_proof}}")' class="btn btn-sm btn-icon btn-trigger me-n1"><em class="icon ni ni-eye text-primary"></em></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="nk-tb-list mt-4 mb-3">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col">
                                                    <span  class="lead-text">{{ __('Expériences professionnelles') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-list border border-light rounded overflow-hidden ">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col">
                                                    <span class="lead-text">#</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="lead-text">{{__('Position')}}</span>
                                                </div>

                                                <div class="nk-tb-col">
                                                    <span class="lead-text">{{__('Entreprise')}}</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="lead-text">{{__('Du')}}</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="lead-text">{{__('Au')}}</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="lead-text d-none d-sm-inline">{{__('Status')}}</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <span class="lead-text">&nbsp;</span>
                                                </div>
                                            </div>
                                            @foreach($candidate->experiences as $key => $experience)
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col"> {{$loop->iteration}} </div>
                                                <div class="nk-tb-col"> {{$experience->position}}  </div>
                                                <div class="nk-tb-col"> {{$experience->company}}  </div>
                                                <div class="nk-tb-col"> {{$experience->start_date}}  </div>
                                                <div class="nk-tb-col"> {{$experience->end_date}} </div>

                                                <div class="nk-tb-col">
                                                    <span class="badge badge-dot badge-dot-xs bg-{{$experience->proof ? 'success' : 'warning' }}">{{$experience->proof ? 'Completed' : 'Pending'}}</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <a title="{{__('Voir') }}" href="javascript:void(0)" wire:click='showProof("{{$experience->proof }}")' href="#" class="btn btn-sm btn-icon btn-trigger me-n1"><em class="icon ni ni-eye text-primary"></em></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div><!-- .nk-block -->
                                </div><!-- .tab-pan -->
                                @endif
                                @if($activeTab == 'Personal')
                                <div class="tab-pan " id="personal">
                                    <div class="nk-block-head">
                                        <div class="nk-block-between d-flex justify-content-between">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">{{__('Informations Personnelles')}}</h4>
                                                <div class="nk-block-des">
                                                    <p>Informations de base, comme le nom et l'adresse de l' tudiant, que vous utilisez sur la plateforme.</p>
                                                </div>
                                            </div>
                                            <div class="nk-tab-actions me-n1">
                                                <a class="btn btn-icon btn-trigger" data-bs-toggle="modal" href="#profile-edit">
                                                    <em class="icon ni ni-edit"></em>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <div class="nk-data data-list">
                                            <div class="data-head">
                                                <h6 class="overline-title">Basics</h6>
                                            </div>
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <span class="data-label">{{__('Nom Complet')}}</span>
                                                    <span class="data-value">{{$user->name}}</span>
                                                </div>
                                            </div><!-- data-item -->
                                            
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <span class="data-label">Email</span>
                                                    <span class="data-value">{{$user->email}}</span>
                                                </div>
                                            </div><!-- data-item -->
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <span class="data-label">{{__('Telephone')}}</span>
                                                    <span class="data-value text-soft">{{$user->phone}}</span>
                                                </div>
                                            </div><!-- data-item -->
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <span class="data-label">{{__('Date de naissance')}}</span>
                                                    <span class="data-value">{{ \Carbon\Carbon::parse($user->dob)->format('d/m/Y') }}</span>
                                                </div>
                                            </div><!-- data-item -->
                                            
                                            <div class="data-item" data-tab-target="#address">
                                                <div class="data-col">
                                                    <span class="data-label">{{__('Adresse')}}</span>
                                                    <span class="data-value">{{$user->address}}</span>
                                                </div>
                                            </div><!-- data-item -->
                                        </div><!-- data-list -->
                                    </div><!-- .nk-block -->
                                </div><!-- .tab-pan -->
                                @endif
                            </div><!-- .tab-content -->
                            
                        </div><!-- .card-inner -->
                        
                        <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="card-inner-group" data-simplebar>
                                <div class="card-inner">
                                    <div class="user-card">
                                        @if ($user->photo)
                                            <div class="user-avatar">
                                                <img src="{{ Storage::url($user->photo) }}" alt="avatar">
                                            </div>
                                        @else
                                            <div class="user-avatar bg-primary">
                                                <span>{{ strtoupper(substr($user->name, 0, 2)) }}</span>
                                            </div>
                                        @endif
                                        <div class="user-info">
                                            <span class="lead-text">{{$user->name}}</span>
                                            <span class="sub-text">{{$user->email}}</span>
                                        </div>
                                        <div class="user-action">
                                            <div class="dropdown">
                                                <a class="btn btn-icon btn-trigger me-n2" data-bs-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                                {{-- <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <a href="#"><em class="icon ni ni-camera-fill"></em>
                                                                <span>Change Photo</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><em class="icon ni ni-edit-fill"></em>
                                                                <span>Update Profile</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div><!-- .user-card -->
                                </div><!-- .card-inner -->
                                <div class="card-inner">
                                    <div class="user-account-info py-0">
                                        <h6 class="overline-title-alt">{{__('Compétences')}}</h6>
                                        <div class="nk-skills">
                                            @foreach($this->candidate->skills as $skill)
                                            <div class="nk-skill">
                                                <span class="badge badge-dim bg-primary">{{$skill->title}}</span>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div><!-- .card-inner -->

                                <div class="card-inner">
                                    <div class="user-account-info py-0">
                                        <h6 class="overline-title-alt">{{__('A propos')}}</h6>
                                        <p>{{$this->candidate->about}}</p>
                                    </div>
                                </div><!-- .card-inner -->
                                <div class="card-inner p-0">
                                    <ul class="link-list-menu">
                                        <li>
                                            <a class="@if($activeTab == 'Personal') active @endif" wire:click='switchTab("Personal")' href="javascript:void(0)"><em class="icon ni ni-user-fill-c"></em><span>{{__('Informations Personnelles') }}</span></a>
                                        </li>
                                        <li>
                                            <a class="@if($activeTab == 'Overview') active @endif" wire:click='switchTab("Overview")' href="javascript:void(0)"><em class="icon ni ni-book-fill"></em><span>{{__('Profile') }}</span></a>
                                        </li>
                                        <li>
                                            <a class="@if($activeTab == 'Applications') active @endif" wire:click='switchTab("Applications")' href="javascript:void(0)"><em class="icon ni ni-activity-round-fill"></em><span>{{__('Dernieres candidatures') }}</span></a>
                                        </li>
                                    </ul>
                                </div><!-- .card-inner -->
                                {{-- <div class="card-inner">
                                    <div class="user-account-info py-0">
                                        <h6 class="overline-title-alt">Last Login</h6>
                                        <p>06-29-2020 02:39pm</p>
                                        <h6 class="overline-title-alt">Login IP</h6>
                                        <p>192.129.243.28</p>
                                    </div>
                                </div><!-- .card-inner --> --}}
                            </div><!-- .card-inner-group -->
                        </div><!-- .card-aside -->
                    </div><!-- .card-aside-wrap -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div>
@push('js')
    <script>
        window.addEventListener('show-proof', event => {
            $('#modalProof').modal('show');
        })
    </script>
@endpush
