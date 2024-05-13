<div>
    <main class="main">
        <div class="bg-homepage4"></div>
        <section class="section-box">
            <div class="banner-hero hero-1 banner-homepage4">
                <div class="banner-inner">
                    <div class="row">
                        <div class="col-xl-7 col-lg-12">
                            <div class="block-banner">
                                <h1 class="heading-banner wow animate__animated animate__fadeInUp">Obtenez Le <span
                                        class="color-brand-2">le travail</span><br class="d-none d-lg-block">de vos reves
                                </h1>
                                <div class="banner-description mt-20 wow animate__animated animate__fadeInUp"
                                    data-wow-delay=".1s">Chaque mois, plus de 3 millions de chercheurs d'emploi se tournent vers le site web dans leur recherche du travail,<br class="d-none d-lg-block">ce qui représente plus de 140 000 candidatures par jour</div>
                                <div class="form-find mt-40 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                    <form>
                                        <div class="box-industry" wire:ignore>
                                            <select id="industry" class="form-input mr-10 select-active @error('industry') is-invalid @enderror input-industry">
                                                @foreach($industries as $key => $industry)
                                                <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div wire:ignore>
                                            <select id="location" class="form-input @error('location') is-invalid @enderror mr-10 select-active">
                                                <option value="">Location</option>
                                                @foreach($locations as $location)
                                                <option value="{{ $location->id }}">{{ $location->address }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <input wire:model.defer='keywords' required class="form-input input-keysearch @error('keywords') is-invalid @enderror mr-10" type="text"
                                            placeholder="Rechercher... ">
                                        <button wire:click='search' type="button" class="btn btn-default btn-find font-sm">{{__('Rechercher')}}</button>
                                    </form>
                                </div>
                                <div class="list-tags-banner mt-60 wow animate__animated animate__fadeInUp"
                                    data-wow-delay=".3s">
                                    <strong>{{__('Compétences les plus recherchéés')}}:</strong>
                                    @foreach($skills as $key => $skill)
                                    <a href="#">{{ $skill->title }}</a>,
                                    @endforeach
                                    {{-- <a href="#">Designer</a>, <a
                                        href="#">Web</a>, <a href="#">IOS</a>, <a href="#">Developer</a>, <a
                                        href="#">PHP</a>, <a href="#">Senior</a>, <a href="#">Engineer</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-12 d-none d-xl-block col-md-6">
                            <div class="banner-imgs">
                                <div class="block-1 shape-1"><img class="img-responsive" alt="jobBox"
                                        src="assets/imgs/page/homepage4/banner.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="section-box mt-80">
            <div class="section-box wow animate__animated animate__fadeIn">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Browse by category</h2>
                        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Find the job
                            that&rsquo;s perfect for you. about 800+ new jobs everyday</p>
                    </div>
                    <div class="box-swiper mt-50">
                        <div class="swiper-container swiper-group-5 swiper">
                            <div class="swiper-wrapper pb-70 pt-5">
                                <div class="swiper-slide hover-up"><a href="jobs-list.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox"
                                                    src="assets/imgs/page/homepage1/marketing.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Marketing &amp; Sale</h4>
                                                <p class="font-xs">1526<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a><a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox"
                                                    src="assets/imgs/page/homepage1/customer.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Customer Help</h4>
                                                <p class="font-xs">185<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide hover-up"><a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox"
                                                    src="assets/imgs/page/homepage1/finance.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Finance</h4>
                                                <p class="font-xs">168<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a><a href="jobs-list.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox"
                                                    src="assets/imgs/page/homepage1/lightning.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Software</h4>
                                                <p class="font-xs">1856<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide hover-up"><a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox"
                                                    src="assets/imgs/page/homepage1/human.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Human Resource</h4>
                                                <p class="font-xs">165<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a><a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox"
                                                    src="assets/imgs/page/homepage1/management.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Management</h4>
                                                <p class="font-xs">965<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide hover-up"><a href="jobs-list.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox"
                                                    src="assets/imgs/page/homepage1/retail.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Retail &amp; Products</h4>
                                                <p class="font-xs">563<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a><a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox"
                                                    src="assets/imgs/page/homepage1/security.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Security Analyst</h4>
                                                <p class="font-xs">254<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide hover-up"><a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox"
                                                    src="assets/imgs/page/homepage1/content.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Content Writer</h4>
                                                <p class="font-xs">142<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a><a href="jobs-list.html">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="jobBox"
                                                    src="assets/imgs/page/homepage1/research.svg"></div>
                                            <div class="text-info-right">
                                                <h4>Market Research</h4>
                                                <p class="font-xs">532<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="section-box mt-50 mb-30 bg-border-3 pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6"><img class="bdrd-10" src="{{ asset('assets/imgs/page/homepage5/img-profile.png') }}"
                            alt="{{ config('app.name') }}"></div>
                    <div class="col-lg-6">
                        <div class="pl-30">
                            <h5 class="color-brand-2 mb-15 mt-15">Créer un profil</h5>
                            <h2 class="color-brand-1 mt-0 mb-15">Créer votre profil personnel</h2>
                            <p class="font-lg color-text-paragraph-2">{{__('Avec un profil complet vous augmentez votre visibilité, et vos chance d\'obtenir le travail ou la misssion que vous désirez tant')}}</p>
                            <div class="mt-20"><a href="{{ route('register') }}" class="btn btn-default">{{__('Commencer maintenant')}}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @livewire('front.home.job-per-category-component')

        <section class="section-box bg-15 pt-50 pb-50 mt-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center mb-30"><img
                            class="img-job-search mt-20" src="assets/imgs/page/homepage3/img-job-search.png"
                            alt="jobBox"></div>
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                        <h2 class="mb-40">{{__('Les entreprises n\'attendent que vous')}}</h2>
                        <div class="box-checkbox mb-30">
                            <h6>Créer un compte</h6>
                            <p class="font-md color-text-paragraph-2">{{__('C\'est simple rapide et gratuit')}}</p>
                        
                        </div>
                        <div class="box-checkbox mb-30">
                            <h6>Rechercher des emplois</h6>
                            <p class="font-md color-text-paragraph-2">{{__('Avec un catalogue de 100 nouvelle offres par mois, vous trouverez forcement pour votre compte')}}</p>
                        </div>
                        <div class="box-checkbox mb-30">
                            <h6>{{__('Enrégistrer et Postuler')}}</h6>
                            <p class="font-md color-text-paragraph-2">{{__('Ajouter en favoris pour postuler plus tard ou, postuler en meme temps')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="mt-100"></div>
        <section class="section-box mt-0" wire:ignore>
            <div class="section-box wow animate__animated animate__fadeIn">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">See Some Words</h2>
                        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Thousands of
                            employee get their ideal jobs<br class="d-none d-lg-block">and feed back to us!</p>
                    </div>
                    <div class="box-swiper mt-50">
                        <div class="swiper-container swiper-group-4-border swiper">
                            <div class="swiper-wrapper pb-70 pt-5">
                                <div class="swiper-slide hover-up">
                                    <div class="card-review-1">
                                        <div class="image-review"> <img src="assets/imgs/page/homepage4/user.png"
                                                alt="jobBox"></div>
                                        <div class="review-info">
                                            <div class="review-name">
                                                <h5>Ellis Kim</h5><span class="font-xs">Digital Artist</span>
                                            </div>
                                            <div class="review-rating"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"></div>
                                            <div class="review-comment">Sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incidid unt. Labore et dolore nostrud temp exercitation.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide hover-up">
                                    <div class="card-review-1">
                                        <div class="image-review"> <img src="assets/imgs/page/homepage4/user2.png"
                                                alt="jobBox"></div>
                                        <div class="review-info">
                                            <div class="review-name">
                                                <h5>John Smith</h5><span class="font-xs">Product designer</span>
                                            </div>
                                            <div class="review-rating"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"></div>
                                            <div class="review-comment">Sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incidid unt. Labore et dolore nostrud temp exercitation.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide hover-up">
                                    <div class="card-review-1">
                                        <div class="image-review"> <img src="assets/imgs/page/homepage4/user3.png"
                                                alt="jobBox"></div>
                                        <div class="review-info">
                                            <div class="review-name">
                                                <h5>Sayen Ahmod</h5><span class="font-xs">Developer</span>
                                            </div>
                                            <div class="review-rating"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"></div>
                                            <div class="review-comment">Sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incidid unt. Labore et dolore nostrud temp exercitation.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide hover-up">
                                    <div class="card-review-1">
                                        <div class="image-review"> <img src="assets/imgs/page/homepage4/user4.png"
                                                alt="jobBox"></div>
                                        <div class="review-info">
                                            <div class="review-name">
                                                <h5>Tayla Swef</h5><span class="font-xs">Graphic designer</span>
                                            </div>
                                            <div class="review-rating"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"></div>
                                            <div class="review-comment">Sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incidid unt. Labore et dolore nostrud temp exercitation.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide hover-up">
                                    <div class="card-review-1">
                                        <div class="image-review"> <img src="assets/imgs/page/homepage4/user.png"
                                                alt="jobBox"></div>
                                        <div class="review-info">
                                            <div class="review-name">
                                                <h5>Ellis Kim</h5><span class="font-xs">Digital Artist</span>
                                            </div>
                                            <div class="review-rating"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"> <img src="assets/imgs/template/icons/star.svg"
                                                    alt="jobBox"></div>
                                            <div class="review-comment">Sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incidid unt. Labore et dolore nostrud temp exercitation.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-style-border"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-70 mb-40">
            <div class="container">
                <div class="text-start">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Comment cela fonctionne</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">En suivant quelques étapes simples, vous trouverez les candidats idéaux que vous cherchez !</p>
                </div>
                <div class="mt-70">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="box-step step-1">
                                <h1 class="number-element">1</h1>
                                <h4 class="mb-20">Inscrivez-vous<br class="d-none d-lg-block">un compte pour commencer</h4>
                                <p class="font-lg color-text-paragraph-2">Créer un compte et comletez votre profil entreprise</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box-step step-2">
                                <h1 class="number-element">2</h1>
                                <h4 class="mb-20">Explorez sur des<br class="d-none d-lg-block">des centaines de profils talentieux </h4>
                                <p class="font-lg color-text-paragraph-2">Explorez parmis plus d'une centaines de talents disponible aux profiles dvierses et variées </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box-step">
                                <h1 class="number-element">3</h1>
                                <h4 class="mb-20">Trouvez le talent<br class="d-none d-lg-block">idéale</h4>
                                <p class="font-lg color-text-paragraph-2">{{__('HireTop aident les entrentreprises à trouver le bon en candidat grace a sa focntionnalité de tri des meilleurs candidatures')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-50 text-center"><a href="{{route('register')}}" class="btn btn-default">{{__('commencer')}}</a></div>
            </div>
        </section>
        <section class="section-box mt-50 mb-50">
            <div class="container">
                <div class="text-start">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">{{__('Nos articles')}}</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">{{__('Retrouvez nos derniers articles et astuces, pour amelioere votre experiences sur HireTo')}}</p>
                </div>
            </div>
            <div class="container" wire:ignore>
                <div class="mt-50">
                    <div class="box-swiper style-nav-top">
                        <div class="swiper-container swiper-group-3 swiper">
                            <div class="swiper-wrapper pb-70 pt-5">
                                <div class="swiper-slide">
                                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                        <div class="text-center card-grid-3-image"><a href="#">
                                                <figure><img alt="jobBox"
                                                        src="assets/imgs/page/homepage1/img-news1.png"></figure>
                                            </a></div>
                                        <div class="card-block-info">
                                            <div class="tags mb-15"><a class="btn btn-tag"
                                                    href="blog-grid.html">News</a></div>
                                            <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great
                                                    Impression</a></h5>
                                            <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the
                                                world&amp;rsquo;s most sustainable healthcare company by creating
                                                high-quality healthcare products in iconic, sustainable packaging.</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-6">
                                                        <div class="d-flex"><img class="img-rounded"
                                                                src="assets/imgs/page/homepage1/user1.png" alt="jobBox">
                                                            <div class="info-right-img"><span
                                                                    class="font-sm font-bold color-brand-1 op-70">Sarah
                                                                    Harding</span><br><span
                                                                    class="font-xs color-text-paragraph-2">06
                                                                    September</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-end col-6 pt-15"><span
                                                            class="color-text-paragraph-2 font-xs">8 mins to read</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                        <div class="text-center card-grid-3-image"><a href="#">
                                                <figure><img alt="jobBox"
                                                        src="assets/imgs/page/homepage1/img-news2.png"></figure>
                                            </a></div>
                                        <div class="card-block-info">
                                            <div class="tags mb-15"><a class="btn btn-tag"
                                                    href="blog-grid.html">Events</a></div>
                                            <h5><a href="blog-details.html">39 Strengths and Weaknesses To Discuss in a
                                                    Job Interview</a></h5>
                                            <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the
                                                world&amp;rsquo;s most sustainable healthcare company by creating
                                                high-quality healthcare products in iconic, sustainable packaging.</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-6">
                                                        <div class="d-flex"><img class="img-rounded"
                                                                src="assets/imgs/page/homepage1/user2.png" alt="jobBox">
                                                            <div class="info-right-img"><span
                                                                    class="font-sm font-bold color-brand-1 op-70">Steven
                                                                    Jobs</span><br><span
                                                                    class="font-xs color-text-paragraph-2">06
                                                                    September</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-end col-6 pt-15"><span
                                                            class="color-text-paragraph-2 font-xs">6 mins to read</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                        <div class="text-center card-grid-3-image"><a href="#">
                                                <figure><img alt="jobBox"
                                                        src="assets/imgs/page/homepage1/img-news3.png"></figure>
                                            </a></div>
                                        <div class="card-block-info">
                                            <div class="tags mb-15"><a class="btn btn-tag"
                                                    href="blog-grid.html">News</a></div>
                                            <h5><a href="blog-details.html">Interview Question: Why Dont You Have a
                                                    Degree?</a></h5>
                                            <p class="mt-10 color-text-paragraph font-sm">Learn how to respond if an
                                                interviewer asks you why you dont have a degree, and read example
                                                answers that can help you craft</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-6">
                                                        <div class="d-flex"><img class="img-rounded"
                                                                src="assets/imgs/page/homepage1/user3.png" alt="jobBox">
                                                            <div class="info-right-img"><span
                                                                    class="font-sm font-bold color-brand-1 op-70">Wiliam
                                                                    Kend</span><br><span
                                                                    class="font-xs color-text-paragraph-2">06
                                                                    September</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-end col-6 pt-15"><span
                                                            class="color-text-paragraph-2 font-xs">9 mins to read</span>
                                                    </div>
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
                    {{-- <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up"
                            href="blog-grid.html">Load More Posts</a></div> --}}
                </div>
            </div>
        </section>
        <section class="section-box mt-50 mb-20">
            <div class="container">
                <div class="box-newsletter box-newsletter-3">
                    <div class="row">
                        <div class="col-xl-12 text-center">
                            <div class="d-inline-block">
                                <h2 class="color-white mt-30">{{('Abonnez vous à la newsletter')}}</h2>
                                <p class="mt-10 font-lg color-white"></p>
                                <div class="box-form-newsletter mt-30">
                                    <form class="form-newsletter">
                                        <input wire:model='email' class="input-newsletter @error('email') is-invalid @enderror" type="text" value=""
                                            placeholder="{{__('Saissisez votre adresse email')}}">
                                            @error('email') <span class="text-danger">{{$message}}</span> @enderror
                                        <button onclick="event.preventDefault();" type="button" wire:click='subscribe' class="btn btn-default font-heading icon-send-letter">{{__('Enregistrer')}}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
@push('js')
    <script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
    <script>
        $('#industry').on('change', function() {
    
        @this.set('industry', this.value);
    });
    $('#location').on('change', function() {
            @this.set('location', this.value);
        });
    </script>
@endpush