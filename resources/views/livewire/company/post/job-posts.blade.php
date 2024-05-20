<div>
    {{-- resources/views/livewire/company/post/add-new-job-post.blade.php --}}
        @livewire('company.post.job-post-component')
    {{-- resources/views/livewire/company/post/add-new-job-post.blade.php --}}
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">{{('Liste des offres d\'emploi')}}</h3>
                            <div class="nk-block-des text-soft">
                                <p>{{ __('Vous avez au total') . ' ' . $jobs->total() . ' ' . __('offres d\'emplois') }}</p>                            
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Open</span></a></li>
                                                        <li><a href="#"><span>Closed</span></a></li>
                                                        <li><a href="#"><span>Onhold</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        @if(auth()->user()->company != null)
                                        <li class="nk-block-tools-opt d-none d-sm-block" data-bs-toggle="modal" data-bs-target="#modalCreate">
                                            <a href="#" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>{{__('Créer une nouvelle offre') }}</span></a>
                                        </li>
                                        <li class="nk-block-tools-opt d-block d-sm-none" data-bs-toggle="modal" data-bs-target="#modalCreate">
                                            <a href="#" class="btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <table class="nk-tb-list is-separate nk-tb-ulist">
                        <thead>
                            <tr class="nk-tb-item nk-tb-head">
                                <th class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="pid-all">
                                        <label class="custom-control-label" for="pid-all"></label>
                                    </div>
                                </th>
                                <th class="nk-tb-col"><span class="sub-text">{{__('Titre') }}</span></th>
                                <th class="nk-tb-col tb-col-xxl"><span class="sub-text">{{__('Niveau')}}</span></th>
                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">{{__('Etape du processus')}}</span></th>
                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">{{__('Candidatures')}}</span></th>
                                <th class="nk-tb-col tb-col-xxl"><span class="sub-text">{{__('Status')}}</span></th>
                                <th class="nk-tb-col tb-col-md"><span class="sub-text">{{('Candidature pertinente')}}</span></th>
                                <th class="nk-tb-col tb-col-sm"><span class="sub-text">{{__('Deadline')}}</span></th>
                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-xs btn-trigger btn-icon dropdown-toggle me-n1" data-offset="0,5"><em class="icon ni ni-more-h"></em></a>
                                        
                                    </div>
                                </th>
                            </tr><!-- .nk-tb-item -->
                        </thead>
                        <tbody>
                            @foreach ($jobs as $job)
                            <tr class="nk-tb-item">
                                <td class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="pid-01">
                                        <label class="custom-control-label" for="pid-01"></label>
                                    </div>
                                </td>
                                <td class="nk-tb-col">
                                    <a href="javascript::void(0);" class="project-title">
                                        <div class="user-avatar sq bg-purple"><span>DD</span></div>
                                        <div class="project-info">
                                            <h6 class="title">{{ $job->title }}</h6>
                                        </div>
                                    </a>
                                </td>
                                <td class="nk-tb-col tb-col-xxl">
                                    <span>{{ $job->graduation->name }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                    <span>{{ $job->job_stage }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                    <ul class="project-users g-1">
                                        @foreach($job->candidates->take(3) as $key => $candidate)
                                        <li>
                                            <div class="user-avatar sm bg-blue"><img src="{{Storage::url($candidate->user->photo)}}" alt=""></div>
                                        </li>
                                        @endforeach
                                        @if($job->candidates->count() > 3)
                                        <li>
                                            <div class="user-avatar bg-light sm"><span>+{{ $job->candidates->count() - 3 }}</span></div>
                                        </li>
                                        @endif
                                    </ul>
                                </td>
                                <td class="nk-tb-col tb-col-xxl">

                                    <span class="badge badge-dim {{ $job->status == 'publish' ? 'bg-success' : 'bg-warning' }}">{{$job->status}}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <div class="project-list-progress" wire:ignore>
                                        <div class="progress progress-pill progress-md bg-light">
                                            <div class="progress-bar" data-progress="93.5"></div>
                                        </div>
                                        <div class="project-progress-percent">93.5%</div>
                                    </div>
                                </td>
                                <td class="nk-tb-col tb-col-sm">
                                    <span class="badge badge-dim {{$this->badgeStatus($job->days_remaining)}}"><em class="icon ni ni-clock"></em><span>{{ $job->days_remaining.' '.__('jours') }}</span></span>
                                </td>
                                <td class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="{{ route('candidates', ['slug' =>$job->slug])}}"><em class="icon ni ni-eye"></em><span>{{__('Voir les candidatures')}}</span></a></li>
                                                        <li><a wire:click="$emit('editJob', {{ $job->id }})" href="#"><em class="icon ni ni-edit"></em><span>{{__('Modifier') }}</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-close"></em><span>{{__('Annuler') }}</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr><!-- .nk-tb-item -->
                            
                            @endforeach
                        </tbody>
                    </table><!-- .nk-tb-list -->
                    <div class="card">
                        <div class="card-inner">
                            <div class="nk-block-between-md g-3">
                                {{ $jobs->links() }}
                                @if ($jobs->total() / $jobs->perPage() > 1)
                                    <div class="g" wire:ignore>
                                        <div
                                            class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                            <div>Page</div>
                                            <div>
                                                <select id="pagination-goto"
                                                    class="form-select form-select-sm js-select2"
                                                    data-search="on" data-dropdown="xs center">
                                                    @for ($i = 1; $i <= ceil($jobs->total() / $users->perPage()); $i++)
                                                        <option value="{{ $i }}">
                                                            {{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div>OF {{ ceil($jobs->total() / $users->perPage()) }}</div>
                                        </div>
                                    </div><!-- .pagination-goto -->
                                @endif
                            </div><!-- .nk-block-between -->
                        </div><!-- .card-inner -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
