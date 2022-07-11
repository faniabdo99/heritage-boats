<head>
    <meta charset="UTF-8" />
    <meta name="description" content="{{$PageDescription ?? ''}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{url('public/img/favicon.ico')}}" />
    <title>@lang('layout.site_title') - {{$PageTitle ?? ''}}</title>
    <!-- styles-->
    <link rel="stylesheet" href="{{url('public/css/styles.min.css')}}" />
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{url('public/css/styles-ara.css')}}" />
    @endif
    <link rel="stylesheet" href="{{url('public/css/animate.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-65D0ZZZVKN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-65D0ZZZVKN');
    </script>
    <link rel="canonical" href="{{url()->current()}}">
    <!-- Open Graph data -->
    <meta property="og:title" content="{{$Title ?? __('layout.site_title')}}">
    <meta property="og:type" content="{{$ogType ?? 'Website'}}">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="{{url('public/img/blog1.jpg')}}">
    <meta property="og:description" content="{{$PageDescription ?? ''}}">
    <meta property="og:site_name" content="@lang('layout.site_title')">
    <!-- Pointless But Needed Twitter Codes -->
    <meta name="twitter:card" content="{{$PageDescription ?? ''}}">
    <meta name="twitter:site" content="@arkforiraq">
    <meta name="twitter:creator" content="@arkforiraq">
    <meta name="twitter:image" content="{{url('public/img/blog1.jpg')}}">
    <meta name="twitter:title" content="{{$PageTitle ?? __('layout.site_title')}}" />
    <meta name="twitter:description" content="{{$PageDescription ?? 'Standard Desc'}}">
    <meta name="application-name" content="@lang('layout.site_title')">
    <meta name="msapplication-TileImage" content="{{url('public/img/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#cb680f">
</head>
