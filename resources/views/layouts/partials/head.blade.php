<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest.json" crossorigin>
    <meta name="msapplication-config" content="browserconfig.xml">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title" content="{{ config('app.name', 'HireTop') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->full() }}">
    <meta name="author" content="Eden AHOUSSOU">
    <meta name="robots" content="index, follow">
    <meta itemprop="telephone" content="+229 66877345">
    <meta itemprop="email" content="aedenrosario@gmail.com">
    <meta name="description" content="Trouvez votre prochain emploi sur notre plateforme de job board. Découvrez des milliers d'offres d'emploi dans différents secteurs et postulez en quelques clics. Que vous soyez à la recherche d'un poste en CDI, CDD, stage ou freelance, notre plateforme vous permet de trouver des opportunités correspondant à votre profil. Simplifiez votre recherche d'emploi et boostez votre carrière avec notre service de recrutement en ligne.">
    <meta name="keywords" content="job board, employment, recruitment, job offer, job, work, career, application, resume, company, vacancy, job search, internship">
    <meta name="keywords" content="emploi, recrutement, offre d'emploi, job, travail, carrière, candidature, CV, entreprise, poste vacant, recherche d'emploi, stage">
    <!-- Page Title  -->
    <title>{{ $title ?? '' }} | {{ __("Hiretop Job Portal-Trouvez votre prochain emploi") }}</title>
    <!-- Fav Icon  -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    <!-- StyleSheets  -->
    <link href="{{ asset('assets/css/style.css') }}?version=4.1" rel="stylesheet">
    @stack('css')
    @livewireStyles
</head>