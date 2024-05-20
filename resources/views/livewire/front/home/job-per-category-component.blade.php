<div>
    <section class="section-box mt-50">
        <div class="section-box wow animate__animated animate__fadeIn">
            <div class="container">
                <div class="text-start">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">{{('Nos dernieres offres d\'emplois')}}</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Explorez les
                        différents types d'emplois disponibles et<br class="d-none d-lg-block">découvrez
                        lequel est fait pour vous.</p>

                    <div class="list-tabs list-tabs-2 mt-30">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach($jobCategories as $key => $category)
                            <li><a @if($selectedCategory == $category->id)class="active" @endif wire:click='setActiveCategory({{ $category->id }})' id="nav-tab-job-{{$category->id}}" href="#tab-job-{{$category->id}}" data-bs-toggle="tab"
                                role="tab" aria-controls="tab-job-1" @if($selectedCategory == $category->id) aria-selected="true" @else aria-selected="false" @endif><img
                                    src="assets/imgs/page/homepage1/management.svg" alt="jobBox"> {{ $category->name }}</a>
                            </li>
                            @endforeach
                            
                            <li><a id="nav-tab-job-8" href="#tab-job-8" data-bs-toggle="tab" role="tab"
                                    aria-controls="tab-job-8" aria-selected="false"><img
                                        src="assets/imgs/page/homepage1/content.svg" alt="jobBox"> {{__('Autres')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-50">
                    

                    <div class="tab-content" id="myTabContent-{{ $category->id }}">
                        @foreach ($jobCategories as $category)
                        <div class="tab-pane fade @if($selectedCategory == $category->id) show active @endif" id="tab-job-{{ $category->id }}" role="tabpanel" aria-labelledby="tab-job-{{$category->id}}">
                            <div class="row">
                              @foreach($category->jobs as $key => $job)
                              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card-grid-2 grid-bd-16 hover-up">
                                  <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>{{$job->job_type->name}}</span></span>
                                    <div class="image-box">
                                      <figure><img src="assets/imgs/page/homepage2/img1.png" alt="jobBox"></figure>
                                    </div>
                                  </div>
                                  <div class="card-block-info">
                                    <h5><a href="{{route('job.details', $job->slug)}}">{{$job->title}}</a></h5>
                                    <div class="mt-5"><span class="card-location mr-15">{{$job->location->address}}</span><span class="card-time">{{ $job->created_at->diffInMinutes(now()) }} minutes</span></div>
                                    <div class="card-2-bottom mt-20">
                                      <div class="row">
                                        {{-- <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">{{ $job->category->name }}</a>
                                        </div> --}}
                                        <div class="col-xl-5 col-md-5 text-lg-end">
                                            <span class="card-text-price">{{ number_format($job->salary, 0, '.') }} {{ config('app.currency') }}</span>
                                        </div>
                                    
                                      </div>
                                    </div>
                                    <p class="font-sm color-text-paragraph mt-20">{{ Str::limit(strip_tags($job->description), 30) }}</p>
                                  </div>
                                </div>
                              </div>
                              @endforeach
                            </div>
                            <div class="text-center mt-10"><a href="{{ route('jobs') }}" class="btn btn-brand-1 btn-icon-more hover-up">{{__('Voir plus')}} </a></div>
                          </div>
                        @endforeach
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
</div>
