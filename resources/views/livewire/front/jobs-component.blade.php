<div>
    <main class="main">
        <section class="section-box-2">
          <div class="container">
            <div class="banner-hero banner-single banner-single-bg">
              <div class="block-banner text-center">
                <h3 class="wow animate__animated animate__fadeInUp"><span class="color-brand-2">{{$jobs->total()}} {{__('offres touvée(s)')}}</span> {{__('Disponible maintenant')}}</h3>
                <div class="font-sm color-text-paragraph-2 mt-10 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, <br class="d-none d-xl-block">atque delectus molestias quis?</div>
                <div class="form-find text-start mt-40 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                  <form>
                    <div class="box-industry">
                      <select id="industry" class="form-input mr-10 select-active input-industry">
                        <option value="">{{__('Industrie')}}</option>
                        @foreach($industries as $key => $industry)
                        <option @if($industry->id == $selectedIndustry) selected @endif value="{{ $industry->id }}">{{ $industry->name }}</option>
                        @endforeach
                      </select>
                    </div>
                
                    <select id="location" class="form-input mr-10 select-active">
                            <option value="">{{__('Localisation')}}</option>
                            @foreach($locations as $location)
                            <option @if($location->id == $selectedLocation) selected @endif value="{{ $location->id }}">{{ $location->address }}</option>
                            @endforeach
                    </select>
                    
                    <input wire:model.defer='search_terms' class="form-input input-keysearch mr-10" type="text" placeholder="Rechercher... ">
                    <button class="btn btn-default btn-find font-sm">{{__('Recherhcer')}}</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-box mt-30">
          <div class="container">
            <div class="row flex-row-reverse">
              <div class="col-lg-9 col-md-12 col-sm-12 col-12 float-right">
                <div class="content-page">
                  <div class="box-filters-job">
                    <div class="row">
                      <div class="col-xl-6 col-lg-5"><span class="text-small text-showing">{{__('Affichage')}} <strong>{{ $jobs->firstItem() }}-{{ $jobs->lastItem() }} </strong>{{__('sur')}} <strong>{{ $jobs->total() }} </strong>{{__('offre(s)')}}</span></div>
                      <div class="col-xl-6 col-lg-7 text-lg-end mt-sm-15">
                        <div class="display-flex2">
                          <div class="box-border mr-10"><span class="text-sortby">Show:</span>
                            <div class="dropdown dropdown-sort" wire:ignore.self>
                              <button class="btn dropdown-toggle" id="dropdownSort" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>{{$perPage}}</span><i class="fi-rr-angle-small-down"></i></button>
                              <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort"wire:ignore.self>
                                <li><a $set('perPage', 10) class="dropdown-item active" href="#">10</a></li>
                                <li><a $set('perPage', 18) class="dropdown-item" href="#">12</a></li>
                                <li><a $set('perPage', 20) class="dropdown-item" href="#">20</a></li>
                              </ul>
                            </div>
                          </div>
                          {{-- <div class="box-border"><span class="text-sortby">Sort by:</span>
                            <div class="dropdown dropdown-sort">
                              <button class="btn dropdown-toggle" id="dropdownSort2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>Newest Post</span><i class="fi-rr-angle-small-down"></i></button>
                              <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                                <li><a class="dropdown-item active" href="#">Newest Post</a></li>
                                <li><a class="dropdown-item" href="#">Oldest Post</a></li>
                                <li><a class="dropdown-item" href="#">Rating Post</a></li>
                              </ul>
                            </div>
                          </div> --}}
                          {{-- <div class="box-view-type"><a class="view-type" href="jobs-list.html"><img src="assets/imgs/template/icons/icon-list.svg" alt="jobBox"></a><a class="view-type" href="jobs-grid.html"><img src="assets/imgs/template/icons/icon-grid-hover.svg" alt="jobBox"></a></div> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    @foreach($jobs as $key => $job)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 hover-up">
                        <div class="card-grid-2-image-left"><span class="flash"></span>
                          <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="{{$job->company->name}}"></div>
                          <div class="right-info"><a class="name-job" href="#">{{$job->company->name}}</a><span class="location-small">{{$job->location->address}}</span></div>
                        </div>
                        <div class="card-block-info">
                          <h6><a href="{{route('job.details',['slug'=>$job->slug])}}">{{$job->title}}</a></h6>
                          <div class="mt-5"><span class="card-briefcase">{{$job->job_type->name}}</span><span class="card-time">{{$job->created_at->diffForHumans()}}<span></span></span></div>
                          <p class="font-sm color-text-paragraph mt-15">{{Str::limit(strip_tags($job->description), 30)}}</p>
                          <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                          </div>
                          <div class="card-2-bottom mt-30">
                            <div class="row">
                              <div class="col-lg-7 col-7"><span class="card-text-price"> {{$job->salary}}</span><span class="text-muted"></span>{{config('app.currency')}}</div>
                              <div class="col-lg-5 col-5 text-end">
                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">{{__('Postuler')}}</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
                <div class="paginations">
                  {{$jobs->links()}}
                  {{-- <ul class="pager">
                    <li><a class="pager-prev" href="#"></a></li>
                    <li><a class="pager-number" href="#">1</a></li>
                    <li><a class="pager-number" href="#">2</a></li>
                    <li><a class="pager-number" href="#">3</a></li>
                    <li><a class="pager-number" href="#">4</a></li>
                    <li><a class="pager-number" href="#">5</a></li>
                    <li><a class="pager-number active" href="#">6</a></li>
                    <li><a class="pager-number" href="#">7</a></li>
                    <li><a class="pager-next" href="#"></a></li>
                  </ul> --}}
                </div>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="sidebar-shadow none-shadow mb-30">
                  <div class="sidebar-filters">
                    <div class="filter-block head-border mb-30">
                      <h5>{{__('Filtre avancé')}}<a class="link-reset" href="#">{{__('Réinitialiser')}}</a></h5>
                    </div>
                    {{-- <div class="filter-block mb-30">
                      <div class="form-group select-style select-style-icon">
                        <select class="form-control form-icons select-active">
                          <option>New York, US</option>
                          <option>London</option>
                          <option>Paris</option>
                          <option>Berlin</option>
                        </select><i class="fi-rr-marker"></i>
                      </div> --}}
                    </div>
                    <div class="filter-block mb-20">
                      <h5 class="medium-heading mb-15">{{__('Industries')}}</h5>
                      <div class="form-group">
                        <ul class="list-checkbox">
                          <li>
                            <label class="cb-container">
                              <input type="checkbox" checked="checked"><span class="text-small">{{__('Toutes')}}</span><span class="checkmark"></span>
                            </label><span class="number-item">{{$jobs->count()}}</span>
                          </li>
                          @foreach($industries as $key => $industry)
                          <li>
                            <label class="cb-container">
                              <input type="checkbox"><span class="text-small">{{$industry->name}}</span><span class="checkmark"></span>
                            </label><span class="number-item">{{ $this->countJobPostPublishedByIndustry($industry->id) }}</span>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                    {{-- <div class="filter-block mb-20" wire:ignore>
                      <h5 class="medium-heading mb-25">Salary Range</h5>
                      <div class="list-checkbox pb-20">
                        <div class="row position-relative mt-10 mb-20">
                          <div class="col-sm-12 box-slider-range">
                            <div id="slider-range"></div>
                          </div>
                          <div class="box-input-money">
                            <input class="input-disabled form-control min-value-money" type="text" name="min-value-money" disabled="disabled" value="">
                            <input class="form-control min-value" type="hidden" name="min-value" value="">
                          </div>
                        </div>
                        <div class="box-number-money">
                          <div class="row mt-30">
                            <div class="col-sm-6 col-6"><span class="font-sm color-brand-1">$0</span></div>
                            <div class="col-sm-6 col-6 text-end"><span class="font-sm color-brand-1">$500</span></div>
                          </div>
                        </div>
                      </div>
                      
                    </div> --}}
                    {{-- <div class="filter-block mb-30">
                      <h5 class="medium-heading mb-10">Popular Keyword</h5>
                      <div class="form-group">
                        <ul class="list-checkbox">
                          <li>
                            <label class="cb-container">
                              <input type="checkbox" checked="checked"><span class="text-small">Software</span><span class="checkmark"></span>
                            </label><span class="number-item">24</span>
                          </li>
                          <li>
                            <label class="cb-container">
                              <input type="checkbox"><span class="text-small">Developer</span><span class="checkmark"></span>
                            </label><span class="number-item">45</span>
                          </li>
                          <li>
                            <label class="cb-container">
                              <input type="checkbox"><span class="text-small">Web</span><span class="checkmark"></span>
                            </label><span class="number-item">57</span>
                          </li>
                        </ul>
                      </div>
                    </div> --}}
                    
                    <div class="filter-block mb-30">
                      <h5 class="medium-heading mb-10">{{__('Experience')}}</h5>
                      <div class="form-group">
                        <ul class="list-checkbox">
                          @foreach($experiences as $key => $experience)
                            <li>
                              <label class="cb-container">
                                <input wire:model='selectedExperience' name="experience_level" type="checkbox"><span class="text-small">{{$experience->title}}</span><span class="checkmark"></span>
                              </label><span class="number-item">{{$experience->jobs->count()}}</span>
                            </li>
                          @endforeach
                          
                        </ul>
                      </div>
                    </div>
                    
                    <div class="filter-block mb-20">
                      <h5 class="medium-heading mb-15">{{__('Type')}}</h5>
                      <div class="form-group">
                        <ul class="list-checkbox">
                          @foreach($types as $key => $type)
                          <li>
                            <label class="cb-container">
                              <input wire:model='selectedType' type="checkbox"><span class="text-small">{{$type->name}}</span><span class="checkmark"></span>
                            </label><span class="number-item">{{$type->jobs->count()}}</span>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        {{-- <section class="section-box mt-50 mb-50">
          <div class="container">
            <div class="text-start">
              <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">News and Blog</h2>
              <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest news, updates and tips</p>
            </div>
          </div>
          <div class="container">
            <div class="mt-50">
              <div class="box-swiper style-nav-top">
                <div class="swiper-container swiper-group-3 swiper">
                  <div class="swiper-wrapper pb-70 pt-5">
                    <div class="swiper-slide">
                      <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                        <div class="text-center card-grid-3-image"><a href="#">
                            <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news1.png"></figure></a></div>
                        <div class="card-block-info">
                          <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">News</a></div>
                          <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                          <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-6 col-6">
                                <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user1.png" alt="jobBox">
                                  <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Sarah Harding</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                                </div>
                              </div>
                              <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                        <div class="text-center card-grid-3-image"><a href="#">
                            <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news2.png"></figure></a></div>
                        <div class="card-block-info">
                          <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">Events</a></div>
                          <h5><a href="blog-details.html">39 Strengths and Weaknesses To Discuss in a Job Interview</a></h5>
                          <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-6 col-6">
                                <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user2.png" alt="jobBox">
                                  <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Steven Jobs</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                                </div>
                              </div>
                              <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">6 mins to read</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                        <div class="text-center card-grid-3-image"><a href="#">
                            <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news3.png"></figure></a></div>
                        <div class="card-block-info">
                          <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">News</a></div>
                          <h5><a href="blog-details.html">Interview Question: Why Dont You Have a Degree?</a></h5>
                          <p class="mt-10 color-text-paragraph font-sm">Learn how to respond if an interviewer asks you why you dont have a degree, and read example answers that can help you craft</p>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-6 col-6">
                                <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user3.png" alt="jobBox">
                                  <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Wiliam Kend</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                                </div>
                              </div>
                              <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">9 mins to read</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="blog-grid.html">Load More Posts</a></div>
            </div>
          </div>
        </section>
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
        </section> --}}
      </main>
</div>
@push('js')
<script src="{{ asset('assets/js/noUISlider.js')}}"></script>
<script src="{{ asset('assets/js/slider.js') }}"></script>
<script>
  $('#dropdownSort').on.change(function() {
    @this.set('perPage', this.value)
  });
</script>
@endpush
