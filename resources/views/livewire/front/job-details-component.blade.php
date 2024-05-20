<div>
  @livewire('front.apply-job-component')
    <main class="main">
        <section class="section-box-2">
          <div class="container">
            <div class="banner-hero banner-image-single"><img src="{{asset('assets/imgs/page/job-single/thumb.png')}}" alt="{{$job->title}}"></div>
            <div class="row mt-10">
              <div class="col-lg-8 col-md-12">
                <h3>{{($job->title)}}</h3>
                <div class="mt-0 mb-15"><span class="card-briefcase">{{($job->job_type->name)}}</span><span class="card-time">{{($job->created_at->diffForHumans())}}</span></div>
              </div>
              @if(!$this->isApplied())
              <div class="col-lg-4 col-md-12 text-lg-end">
                <div wire:click='apply'class="btn btn-apply-icon btn-apply btn-apply-big hover-up">{{('Postuler')}}</div>
              </div>
              @endif
            </div>
            <div class="border-bottom pt-10 pb-10"></div>
          </div>
        </section>
        <section class="section-box mt-50">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="job-overview">
                  <h5 class="border-bottom pb-15 mb-30">{{('Description de la mission')}}</h5>
                  <div class="row">
                    <div class="col-md-6 d-flex">
                      <div class="sidebar-icon-item"><img src="{{asset('assets/imgs/page/job-single/industry.svg')}}" alt="{{$job->title}}"></div>
                      <div class="sidebar-text-info ml-10"><span class="text-description industry-icon mb-10">Industrie</span><strong class="small-heading">{{($job->company->industry->name)}}</strong></div>
                    </div>
                    <div class="col-md-6 d-flex mt-sm-15">
                      <div class="sidebar-icon-item"><img src="{{asset('assets/imgs/page/job-single/job-level.svg')}}" alt="{{$job->title}}"></div>
                      <div class="sidebar-text-info ml-10"><span class="text-description joblevel-icon mb-10">{{__('Experience')}}</span><strong class="small-heading">{{$job->experience->title}}</strong></div>
                    </div>
                  </div>
                  <div class="row mt-25">
                    <div class="col-md-6 d-flex mt-sm-15">
                      <div class="sidebar-icon-item"><img src="{{asset('assets/imgs/page/job-single/salary.svg')}}" alt="{{$job->title}}"></div>
                      <div class="sidebar-text-info ml-10"><span class="text-description salary-icon mb-10">{{__('Salaire')}}</span><strong class="small-heading">{{($job->salary).' '.config('app.currency')}}</strong></div>
                    </div>
                    <div class="col-md-6 d-flex">
                      <div class="sidebar-icon-item"><img src="{{asset('assets/imgs/page/job-single/experience.svg')}}" alt="{{$job->title}}"></div>
                      <div class="sidebar-text-info ml-10"><span class="text-description experience-icon mb-10">{{__('Formation')}}</span><strong class="small-heading">{{$job->graduation->name}}</strong></div>
                    </div>
                  </div>
                  <div class="row mt-25">
                    <div class="col-md-6 d-flex mt-sm-15">
                      <div class="sidebar-icon-item"><img src="{{asset('assets/imgs/page/job-single/job-type.svg')}}" alt="{{$job->title}}"></div>
                      <div class="sidebar-text-info ml-10"><span class="text-description jobtype-icon mb-10">{{__('Type')}}</span><strong class="small-heading">{{$job->job_type->name}}</strong></div>
                    </div>
                    <div class="col-md-6 d-flex mt-sm-15">
                      <div class="sidebar-icon-item"><img src="{{asset('assets/imgs/page/job-single/deadline.svg')}}" alt="{{$job->title}}"></div>
                      <div class="sidebar-text-info ml-10"><span class="text-description mb-10">{{__('Deadline')}}</span><strong class="small-heading">{{$job->closing_date->format('d/m/Y')}}</strong></div>
                    </div>
                  </div>
                  <div class="row mt-25">
                    <div class="col-md-6 d-flex mt-sm-15">
                      <div class="sidebar-icon-item"><img src="{{asset('assets/imgs/page/job-single/updated.svg')}}" alt="{{$job->title}}"></div>
                      <div class="sidebar-text-info ml-10"><span class="text-description jobtype-icon mb-10">{{__('Mise à jour')}}</span><strong class="small-heading">{{$job->updated_at->format('d/m/Y')}}</strong></div>
                    </div>
                    <div class="col-md-6 d-flex mt-sm-15">
                      <div class="sidebar-icon-item"><img src="{{asset('assets/imgs/page/job-single/location.svg')}}" alt="{{$job->title}}"></div>
                      <div class="sidebar-text-info ml-10"><span class="text-description mb-10">{{__('Localisation')}}</span><strong class="small-heading">{{$job->location->address}}</strong></div>
                    </div>
                  </div>
                </div>
                <div class="content-single">
                  {{strip_tags($job->description)}}
                </div>
                <div class="author-single"><span>{{__('Par : ')}} {{$job->post_by->name}} | {{$job->company->name}}</span></div>
                <div class="single-apply-jobs">
                  <div class="row align-items-center">
                    <div class="col-md-5">@if (!$this->isApplied())
                      <a class="btn btn-default mr-15" wire:click='apply' href="javascript:void(0)">{{__('Postuler')}}</a>
                    @endif
                    <a class="btn btn-border" href="#">{{__('Ajouter au favoris')}}</a></div>
                    <div class="col-md-7 text-lg-end social-share">
                      <h6 class="color-text-paragraph-2 d-inline-block d-baseline mr-10">{{__('Partager')}}</h6><a class="mr-5 d-inline-block d-middle" href="#">
                        <img alt="{{$job->title}}" src="{{asset('assets/imgs/template/icons/share-fb.svg')}}"></a><a class="mr-5 d-inline-block d-middle" href="#">
                            <img alt="{{$job->title}}" src="{{asset('assets/imgs/template/icons/share-tw.svg')}}"></a><a class="mr-5 d-inline-block d-middle" href="#">
                            <img alt="{{$job->title}}" src="{{asset('assets/imgs/template/icons/share-red.svg')}}"></a><a class="d-inline-block d-middle" href="#">
                            <img alt="{{$job->title}}" src="{{asset('assets/imgs/template/icons/share-whatsapp.svg')}}"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                {{-- <div class="sidebar-border">
                  <div class="sidebar-heading">
                    <div class="avatar-sidebar">
                      <figure><img alt="jobBox" src="{{asset('assets/imgs/page/job-single/avatar.png')}}"></figure>
                      <div class="sidebar-info"><span class="sidebar-company">{{$job->company->name}}</span><span class="card-location">{{$job->company->location->address}}</span><a class="link-underline mt-15" href="#">{{$job->company->jobs->count()}} {{__('Offres')}}</a></div>
                    </div>
                  </div>
                  <div class="sidebar-list-job">
                    <div class="box-map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.3150609575905!2d-87.6235655!3d41.886080899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2ca8b34afe61%3A0x6caeb5f721ca846!2s205%20N%20Michigan%20Ave%20Suit%20810%2C%20Chicago%2C%20IL%2060601%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1658551322537!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <ul class="ul-disc">
                      <li>205 North Michigan Avenue, Suite 810 Chicago, 60601, USA</li>
                      <li>Phone: (123) 456-7890</li>
                      <li>Email: contact@Evara.com</li>
                    </ul>
                  </div>
                </div> --}}
                <div class="sidebar-border">
                  <h6 class="f-18">{{__('Offres Similaires')}}</h6>
                  <div class="sidebar-list-job">
                    <ul>
                      @foreach($this->getSimilarJobs() as $key => $job)
                      <li>
                        <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                          <div class="image"><a href="{{route('job.details', $job->slug)}}"><img src="{{asset('assets/imgs/brands/brand-1.png')}}" alt="{{$job->title}}"></a></div>
                          <div class="info-text">
                            <h5 class="font-md font-bold color-brand-1"><a href="{{route('job.details', $job->slug)}}">{{$job->title}}</a></h5>
                            <div class="mt-0"><span class="card-briefcase">{{$job->job_type->name}}</span><span class="card-time"><span>{{$job->created_at->diffForHumans()}}</span></span></div>
                            <div class="mt-5">
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="card-price">{{$job->salary}}<span>{{config('app.currency')}}</span></h6>
                                </div>
                                <div class="col-6 text-end"><span class="card-briefcase">{{$job->location->address}}</span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        {{-- <section class="section-box mt-50 mb-50">
          <div class="container">
            <div class="text-left">
              <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Featured Jobs</h2>
              <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest news, updates and tips</p>
            </div>
            <div class="mt-50">
              <div class="box-swiper style-nav-top">
                <div class="swiper-container swiper-group-4 swiper">
                  <div class="swiper-wrapper pb-10 pt-5">
                    <div class="swiper-slide">
                      <div class="card-grid-2 hover-up">
                        <div class="card-grid-2-image-left"><span class="flash"></span>
                          <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                          <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">New York, US</span></div>
                        </div>
                        <div class="card-block-info">
                          <h6><a href="job-details.html">Senior System Engineer</a></h6>
                          <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                          <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                          <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android    </a>
                          </div>
                          <div class="card-2-bottom mt-30">
                            <div class="row">
                              <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                              <div class="col-lg-5 col-5 text-end">
                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card-grid-2 hover-up">
                        <div class="card-grid-2-image-left"><span class="flash"></span>
                          <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                          <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                        </div>
                        <div class="card-block-info">
                          <h6><a href="job-details.html">Frontend Developer</a></h6>
                          <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                          <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                          <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                          </div>
                          <div class="card-2-bottom mt-30">
                            <div class="row">
                              <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                              <div class="col-lg-5 col-5 text-end">
                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card-grid-2 hover-up">
                        <div class="card-grid-2-image-left"><span class="flash"></span>
                          <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                          <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                        </div>
                        <div class="card-block-info">
                          <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                          <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                          <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                          <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                          </div>
                          <div class="card-2-bottom mt-30">
                            <div class="row">
                              <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                              <div class="col-lg-5 col-5 text-end">
                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card-grid-2 hover-up">
                        <div class="card-grid-2-image-left"><span class="flash"></span>
                          <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                          <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                        </div>
                        <div class="card-block-info">
                          <h6><a href="job-details.html">Frontend Developer</a></h6>
                          <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                          <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                          <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                          </div>
                          <div class="card-2-bottom mt-30">
                            <div class="row">
                              <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                              <div class="col-lg-5 col-5 text-end">
                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-next swiper-button-next-4"></div>
                <div class="swiper-button-prev swiper-button-prev-4"></div>
              </div>
              <div class="text-center"><a class="btn btn-grey" href="#">Load more posts</a></div>
            </div>
          </div>
        </section> --}}
        <section class="section-box mt-50 mb-20">
          <div class="container">
            <div class="box-newsletter">
              <div class="row">
                <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="assets/imgs/template/newsletter-left.png" alt="joxBox"></div>
                <div class="col-lg-12 col-xl-6 col-12">
                  <h2 class="text-md-newsletter text-center">New Things Will Always<br> Update Regularly</h2>
                  <div class="box-form-newsletter mt-40">
                    <form class="form-newsletter">
                      <input class="input-newsletter" type="text" value="" placeholder="Enter your email here">
                      <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                    </form>
                  </div>
                </div>
                <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="assets/imgs/template/newsletter-right.png" alt="joxBox"></div>
              </div>
            </div>
          </div>
        </section>
      </main>
</div>
@push('js')
    <script>
       window.addEventListener('open-apply-modal', event => {
       $('#ModalApplyJobForm').modal('show');
    });

    window.addEventListener('close-modal', event => {
       $('#ModalApplyJobForm').modal('hide');
    });
    
    </script>
@endpush
