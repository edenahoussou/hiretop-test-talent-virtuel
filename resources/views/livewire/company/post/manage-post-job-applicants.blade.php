<div>
    <div class="modal fade" id="shortlist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Voulez-vous vraiment ajouter le candidat dans la shortlist ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger" wire:click="addToShortList({{ $selectedCandidateId }})">Ajouter</button>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">{{__('Liste des candidats')}}</h3>
                    </div><!-- .nk-block-head-content -->
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                            <div class="toggle-expand-content" data-content="more-options">
                                <ul class="nk-block-tools g-3">
                                    <li>
                                        <div class="form-control-wrap">
                                            <div class="form-icon form-icon-right">
                                                <em class="icon ni ni-search"></em>
                                            </div>
                                            <input wire:model.debounce.300ms="search" type="text" class="form-control" id="default-04" placeholder="{{__('Rechercher...')}}">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white" data-bs-toggle="dropdown">Status</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a wire:click="$set('status', '')" href="#"><span>{{__('All') }}</span></a></li>
                                                    <li><a wire:click="$set('status', 'shortlisted')" href="#"><span>{{__('Shortlist') }}</span></a></li>
                                                    <li><a wire:click="$set('status', 'hired')" href="#"><span>{{__('Disqualifié') }}</span></a></li>
                                                    <li><a wire:click="$set('status', 'rejected')" href="#"><span>{{__('Entretient') }}</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    {{-- <li class="nk-block-tools-opt">
                                        <a class="btn btn-icon btn-primary d-md-none" data-bs-toggle="modal" href="#student-add"><em class="icon ni ni-plus"></em></a>
                                        <a class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal" href="#student-add"><em class="icon ni ni-plus"></em><span>Add</span></a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card">
                    <div class="card-inner-group">
                        <div class="card-inner p-0">
                            <div class="nk-tb-list nk-tb-ulist">
                                <div class="nk-tb-item nk-tb-head">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid">
                                            <label class="custom-control-label" for="uid"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col"><span class="sub-text">{{__('Candidats')}}</span></div>
                                    <div class="nk-tb-col tb-col-mb"><span class="sub-text d-lg-flex d-none">{{__('Diplome')}}</span></div>
                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">{{__('Qualification')}}</span></div>
                                    <div class="nk-tb-col tb-col-lg"><span class="sub-text">{{__('Phone')}}</span></div>
                                    <div class="nk-tb-col tb-col-lg"><span class="sub-text">{{__('Candidature')}}</span></div>
                                    <div class="nk-tb-col tb-col-lg"><span class="sub-text">{{__('HT Score')}}</span></div>
                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">{{__('Status')}}</span></div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    {{-- <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-"></em><span></span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend Selected</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a></li>
                                                        </ul>
                                                    </div> --}}
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-tb-item -->
                                @foreach($candidates as $key => $candidate)
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid1">
                                            <label class="custom-control-label" for="uid{{$candidate->id}}"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col">
                                        <a href="#">
                                            <div class="user-card">
                                                @if ($candidate->user->photo)
                                                    <div class="user-avatar">
                                                        <img src="{{ Storage::url($candidate->user->photo) }}" alt="avatar">
                                                    </div>
                                                @else
                                                    <div class="user-avatar bg-primary">
                                                        <span>{{ strtoupper(substr($candidate->user->name, 0, 2)) }}</span>
                                                    </div>
                                                @endif
                                                <div class="user-info">
                                                    <span class="tb-lead">{{$candidate->user->name}} <span class="dot dot-success d-md-none ms-1"></span></span>
                                                    <span>{{$candidate->user->email}}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="nk-tb-col tb-col-mb">
                                        <span class="tb-lead d-lg-flex d-none">{{$candidate->graduations->last()->name}}</span>
                                        @if($candidate->graduations->count() > 1)
                                        <div class="d-lg-flex d-none">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle pt-1 text-info" data-bs-toggle="dropdown"> <span>{{__('plus') }}</span> </a>
                                                <div class="dropdown-menu dropdown-menu-start">
                                                    <ul class="link-list-opt no-bdr p-3">
                                                        @foreach($candidate->graduations as $key => $graduation)
                                                            @if($loop->last)
                                                                @break
                                                            @endif
                                                            <li class="tb-lead p-1">{{$graduation->name}}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> 
                                        @endif
                                        
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span>{{ $candidate->job_title }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span>{{$candidate->user->phone}}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span class="badge badge-dot badge-dot bg-warning">{{$candidate->pivot->candidate_status}}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        
                                        @php
                                        $score = $this->HireTopScoringCandidate($candidate->id); 
                                        //dd($score);// replace with actual function call
                                    @endphp
                                    
                                    <ul class="rating mt-1">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($score >= $i)
                                                <li><em class="icon ni ni-star-fill"></em></li>
                                            @elseif($score > ($i - 1) && $score < $i) {{-- Handle half star case --}}
                                                <li><em class="icon ni ni-star-half-fill"></em></li>
                                            @else
                                                <li><em class="icon ni ni-star"></em></li>
                                            @endif
                                        @endfor
                                    </ul>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-success">{{$jobPost->status}}</span>
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="{{__('Envoyer un message')}}">
                                                    <em class="icon ni ni-mail-fill"></em>
                                                </a>
                                            </li>
                                            <li class="nk-tb-action-hidden">
                                                <a wire:click='downloadCandidateResume({{$candidate->id}})' href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="{{__('Télecharger le CV')}}">
                                                    <em class="icon ni ni-download"></em>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="{{route('candidate.details', ['id' => $candidate->id ])}}"><em class="icon ni ni-eye"></em><span>{{__('Voir details') }}</span></a></li>
                                                            @if($candidate->pivot->candidate_status !== 'shortlisted')
                                                            <li><a href="#" wire:click='$set("selectedCandidateId", {{$candidate->id}})'><em class="icon ni ni-user-add-fill"></em><span>{{__('Ajouter à la shortlist') }}</span></a></li>
                                                            @endif
                                                            @if($candidate->pivot->candidate_status !== 'rejected')
                                                            <li><a href="#" wire:click='$set("selectedCandidateId", {{$candidate->id}})'><em class="icon ni ni-cross-circle"></em><span>{{__('Disqualifier') }}</span></a></li>
                                                            @endif

                                                            {{-- <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li> --}}
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-tb-item -->
                                @endforeach
                            </div><!-- .nk-tb-list -->
                        </div>
                        <div class="card-inner">
                            <div class="nk-block-between-md g-3">
                                <div class="g">

                                </div>
                                {{-- <div class="g">
                                    <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                        <div>Page</div>
                                        <div>
                                            <select class="form-select js-select2" data-search="on" data-dropdown="xs center">
                                                
                                            </select>
                                        </div>
                                        <div>OF 102</div>
                                    </div>
                                </div><!-- .pagination-goto --> --}}
                            </div><!-- .nk-block-between -->
                        </div>
                    </div>
                </div>
            </div><!-- .nk-block -->
        </div>
    </div>
</div>
@push('js')
    <script>
        window.addEventListener('open-shortlist-modal', event => {
        $('#shortlist').modal('show');
    });
    </script>
@endpush
