<div>
    <main class="main">
        <section class="section-box-2">
          <div class="container">
            <div class="banner-hero banner-image-single"><img src="{{asset('assets/imgs/page/company/img.png')}}" alt="{{$company->name}}"></div>
            <div class="box-company-profile">
              <div class="image-compay"><img src="{{Storage::url($company->logo)}}" alt="{{$company->name}}" style="width: 80px; height: 80px;"></div>
              <div class="row mt-10">
                <div class="col-lg-8 col-md-12">
                  <h5 class="f-18">{{$company->name}} <span class="card-location font-regular ml-20">{{$company->location->address}}</span></h5>
                  <p class="mt-5 font-md color-text-paragraph-2 mb-15">{{$company->mission}}</p>
                </div>
                <div class="col-lg-4 col-md-12 text-lg-end"><a class="btn btn-call-icon btn-apply btn-apply-big" href="{{route('contact')}}">{{__('Contact')}}</a></div>
              </div>
            </div>
            <div class="box-nav-tabs mt-40 mb-5">
              <ul class="nav" role="tablist">
                <li><a class="btn btn-border aboutus-icon mr-15 mb-5 active" href="#tab-about" data-bs-toggle="tab" role="tab" aria-controls="tab-about" aria-selected="true">{{__('A propos')}}</a></li>
                <li><a class="btn btn-border recruitment-icon mr-15 mb-5" href="#tab-recruitments" data-bs-toggle="tab" role="tab" aria-controls="tab-recruitments" aria-selected="false">{{__('Visons')}}</a></li>
                <li><a class="btn btn-border people-icon mb-5" href="#tab-people" data-bs-toggle="tab" role="tab" aria-controls="tab-people" aria-selected="false">{{__('Missions')}}</a></li>
              </ul>
            </div>
            <div class="border-bottom pt-10 pb-10"></div>
          </div>
        </section>
        <section class="section-box mt-50">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="content-single">
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-about" role="tabpanel" aria-labelledby="tab-about">
                      <h4>Bienvenu {{$company->name}}</h4>
                      {{strip_tags($company->about)}}
                      </ul>
                    </div>
                    <div class="tab-pane fade" id="tab-recruitments" role="tabpanel" aria-labelledby="tab-recruitments">
                      <h4>{{__('Visons')}}</h4>
                      <p>{{$company->vision}}</p>
                    </div>
                    <div class="tab-pane fade" id="tab-people" role="tabpanel" aria-labelledby="tab-people">
                      <h4>{{__('Missions')}}</h4>
                      {{strip_tags($company->mission)}}
                    </div>
                  </div>
                </div>
                <div class="box-related-job content-page">
                  <h5 class="mb-30">{{__('Dernieres offres d\'emplois')}}</h5>
                  @if(count($lastestCompanyJobs) > 0)
                  <div class="box-list-jobs display-list">
                    @foreach($lastestCompanyJobs as $job)
                    <div class="col-xl-12 col-12">
                      <div class="card-grid-2 hover-up"><span class="flash"></span>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card-grid-2-image-left">
                              <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-'.$job->id.'.png')}}" alt="{{$company->name}}"></div>
                              <div class="right-info"><a class="name-job" href="#">{{$company->name}}</a><span class="location-small">{{$job->location->address}}</span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                            <div class="pl-15 mb-15 mt-30">
                              {{-- @foreach($job->tags as $tag)
                              <a class="btn btn-grey-small mr-5" href="#">{{$tag->name}}</a>
                              @endforeach --}}
                            </div>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h4><a href="job-details.html">{{$job->title}}</a></h4>
                          <div class="mt-5"><span class="card-briefcase">{{$job->type}}</span><span class="card-time"><span>{{$job->created_at->diffForHumans()}}</span><span></span></span></div>
                          <p class="font-sm color-text-paragraph mt-10">{!! Str::limit(strip_tags($job->description), 150) !!}</p>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-7 col-7"><span class="card-text-price">{{$job->salary}}</span><span class="text-muted">{{config('app.currency')}}</span></div>
                              <div class="col-lg-5 col-5 text-end">
                                <a href="javascript:void(0)" class="btn btn-apply-now" wire:click='apply("{{$job->slug}}")'>{{_('Postuler')}}</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  @else
                  <p class="text-center font-sm color-text-paragraph">{{__('Aucunes offres d\'emplois trouvées...')}}</p>
                  @endif
                  <div class="paginations">
                   {{$lastestCompanyJobs->links()}}
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                <div class="sidebar-border">
                  <div class="sidebar-heading">
                    <div class="avatar-sidebar">
                      <div class="sidebar-info pl-0"><span class="sidebar-company">{{$company->name}}</span><span class="card-location">{{$company->location->address}}</span></div>
                    </div>
                  </div>
                  <div class="sidebar-list-job">
                    {{-- <div class="box-map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.3150609575905!2d-87.6235655!3d41.886080899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2ca8b34afe61%3A0x6caeb5f721ca846!2s205%20N%20Michigan%20Ave%20Suit%20810%2C%20Chicago%2C%20IL%2060601%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1658551322537!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div> --}}
                  <div class="">
                    <ul>
                      <li>
                        <div class="sidebar-icon-item"><i class="fi-rr-briefcase"></i></div>
                        <div class="sidebar-text-info"><span class="text-description">{{__('Industries')}}</span><strong class="small-heading">{{$company->industry->name}}</strong></div>
                      </li>
                      <li>
                        <div class="sidebar-icon-item"><i class="fi-rr-marker"></i></div>
                        <div class="sidebar-text-info"><span class="text-description">{{__('Addresse')}}</span><strong class="small-heading">{{$company->location->address}}</strong></div>
                      </li>
                      {{-- <li>
                        <div class="sidebar-icon-item"><i class="fi-rr-dollar"></i></div>
                        <div class="sidebar-text-info"><span class="text-description">{{__('Salary')}}</span><strong class="small-heading">{{$company->salary}}</strong></div>
                      </li> --}}
                      <li>
                        <div class="sidebar-icon-item"><i class="fi-rr-clock"></i></div>
                        <div class="sidebar-text-info"><span class="text-description">{{__('Inscrit depuis')}}</span><strong class="small-heading">{{ \Carbon\Carbon::parse($company->created_at)->translatedFormat('M Y') }}</strong></div>
                      </li>
                      <li>
                        <div class="sidebar-icon-item"><i class="fi-rr-time-fast"></i></div>
                        <div class="sidebar-text-info"><span class="text-description">{{__('Dernier poste')}}</span><strong class="small-heading">{{\Carbon\Carbon::parse($company->jobs->last()->created_at)->diffForHumans()}}</strong></div>
                      </li>
                    </ul>
                  </div>
                  <div class="sidebar-list-job">
                    <ul class="ul-disc">
                      <li>{{$company->location->address ?? 'N/A'}}}</li>
                      <li>Phone: {{$company->phone ?? 'N/A'}}</li>
                      <li>Email: {{$company->email ?? 'N/A'}}</li>
                    </ul>
                    {{-- <div class="mt-30"><a class="btn btn-send-message" href="{{ route('contact') }}">{{__('')}}</a></div> --}}
                  </div>
                </div>
                {{-- <div class="sidebar-border-bg bg-right"><span class="text-grey">WE ARE</span><span class="text-hiring">HIRING</span>
                  <p class="font-xxs color-text-paragraph mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto</p>
                  <div class="mt-15"><a class="btn btn-paragraph-2" href="page-contact.html">Know More</a></div>
                </div> --}}
              </div>
            </div>
          </div>
        </section>
        {{-- <section class="section-box mt-50 mb-20">
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
        </section> --}}
      </main>
</div>
