<!DOCTYPE html>
<html lang="en" dir="@lang('settings.direction')">
@include('layout.header')
<body>
@include('layout.loader')
<div class="page-wrapper">
    @include('layout.navbar')
    <!-- header end-->
    <main class="main">
        <!-- main promo start-->
        <section class="main-promo">
            <!-- promo-slider start-->
            <div class="promo-slider ">
                <!-- item start-->
                <div class="slider-item item--style-1">
                    <div class="overlay"></div>
                    <div class="bg-holder image-flip wow fadeIn">
                        <picture>
                            <source srcset="{{url('public/img')}}/landingpage.jpg" media="(min-width: 992px)" /><img class="img-bg jarallax-img" src="{{url('public/img')}}/landingpage.jpg" alt="img" />
                        </picture>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-9">
                                <div class="align-container">
                                    <div class="align-item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="title wow fadeInUp" data-wow-duration="5">@lang('pages/home.hero_headline')</h2>
                                        </div>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="subtitle wow fadeInUp">@lang('pages/home.hero_description')</p>
                                        </div>
                                        <div class="promo-slider__wrapper-3"><a class="wow fadeInUp button button--filled" href="{{route('comingSoon')}}" data-hover="Discover"><span>@lang('pages/home.hero_cta')</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item end-->

            </div>
            <!-- promo-slider end-->

            <!-- promo-lower start-->
            <div class="promo-lower">
                <div class="promo-contacts">
                    <p class="address">@lang('pages/home.promo_header')</p>
                    <p class="e-main">@lang('pages/home.promo_coordinator')</p>
                    <p class="phone-number">@lang('pages/home.promo_phone') <a href="tel:+9647716748880">+964 7716 748 880</a></p>

                </div>
                <div class="promo-socials">
                    <!-- socials start-->
                    <nav class="socials-holder">
                        <ul class="socials-primary">
                            <li><a href="https://www.facebook.com/arkforiraq"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/arkforiraq"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCMhuAo22CQbJ-k9k17z92dg"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/arkforiraq/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </nav>
                    <!-- socials end -->
                </div>
                <div class="video-block">
                    <div class="img-holder">
                        <div class="overlay"></div>
                        <a href="https://www.youtube.com/watch?v=KEpqnJxIHW0"><iframe class="fancy-video" width="395" height="150" src="https://www.youtube.com/embed/Dll5xSNzSzU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                    </div>
                </div>
            </div>
            <!-- promo-lower end-->
        </section>
        <!-- about-welcome-style-2 start-->
        <section class="section about-welcome about-welcome--style-2 no-padding-bottom margin-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-5 wow fadeInUp" data-wow-offset="80">
                        <div class="title-block"><span>@lang('pages/home.about_header')</span>
                            <picture>
                                <source srcset="{{url('public/img')}}/aboutholder.jpg" media="(min-width: 992px)" /><img class="img-bg jarallax-img" src="{{url('public/img')}}/aboutholder.jpg" alt="img" />
                            </picture>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 wow fadeInRight" data-wow-offset="80">
                        <div class="description">
                            <h3 class="title">@lang('pages/home.about_project_title')</h3>
                            <p>@lang('pages/home.about_description')</p>
                            <a class="button button--transparent" href="about.html" data-hover="@lang('pages/home.about_cta')"><span>@lang('pages/home.about_cta')</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-welcome-style-2 end-->
        
        <section class="section Clubs services-inner services-inner--style-3 no-padding-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading primary-heading wow fadeInUp @lang('pages/home.clubs_class')">
                            <h3 class="title">@lang('pages/home.clubs_subtitle')</h3>
                            <h5 class="subtitle">@lang('pages/home.clubs_headline')</h5>
                            <p>@lang('pages/home.clubs_description')</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-holder">
                <div class="content">
                    <div class="container">
                        <div class="row offset-margin">
                            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-3 wow fadeInLeft" data-wow-offset="100">
                                <!-- item start-->
                                <div class="info-box">
                                    <div class="info-box__img"><img src="{{url('public/img')}}/citiesphotos/basra.jpg" alt="service" /></div>
                                    <div class="info-box__category">@lang('pages/home.club_card_title') </div>
                                    <div class="info-box__description">
                                        <div class="info-box__number">01</div>
                                        <div class="info-box__inner">
                                            <h4 class="info-box__title"> <a href="{{route('comingSoon')}}">@lang('pages/home.club_basra')</a><i class="fa fa-chevron-right" aria-hidden="true"></i></h4>
                                            <div class="info-box__hidden">
                                                <p>@lang('pages/home.assad_salman')<br>
                                                    <span dir="ltr">+964 773 077 0800</span>
                                                </p><a class="info-box__link with--line" href="{{route('comingSoon')}}">@lang('pages/home.club_explore_more')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- item end-->
                            </div>
                            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-3 wow fadeInLeft" data-wow-offset="100">
                                <!-- item start-->
                                <div class="info-box">
                                    <div class="info-box__img"><img src="{{url('public/img')}}/citiesphotos/chip.jpg" alt="service" /></div>
                                    <div class="info-box__category">@lang('pages/home.club_card_title')</div>
                                    <div class="info-box__description">
                                        <div class="info-box__number">02</div>
                                        <div class="info-box__inner">
                                            <h4 class="info-box__title"> <a href="{{route('comingSoon')}}">@lang('pages/home.club_chibayish')</a><i class="fa fa-chevron-right" aria-hidden="true"></i></h4>
                                            <div class="info-box__hidden">
                                                <p>@lang('pages/home.assad_salman')<br>
                                                <span dir="ltr">+964 773 077 0800</span>
                                                </p><a class="info-box__link with--line" href="{{route('comingSoon')}}">@lang('pages/home.club_explore_more')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- item end-->
                            </div>
                            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-3 wow fadeInRight">
                                <!-- item start-->
                                <div class="info-box">
                                    <div class="info-box__img"><img src="{{url('public/img')}}/citiesphotos/bgd.jpg" alt="service" /></div>
                                    <div class="info-box__category">@lang('pages/home.club_card_title')</div>
                                    <div class="info-box__description">
                                        <div class="info-box__number">03</div>
                                        <div class="info-box__inner">
                                            <h4 class="info-box__title"> <a href="{{route('comingSoon')}}">@lang('pages/home.club_baghdad')</a><i class="fa fa-chevron-right" aria-hidden="true"></i></h4>
                                            <div class="info-box__hidden">
                                                <p>In development
                                                </p><a class="info-box__link with--line" href="{{route('comingSoon')}}">@lang('pages/home.club_explore_more')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- item end-->
                            </div>
                            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-3 wow fadeInRight">
                                <!-- item start-->
                                <div class="info-box">
                                    <div class="info-box__img"><img src="{{url('public/img')}}/citiesphotos/babel.jpg" alt="service" /></div>
                                    <div class="info-box__category">@lang('pages/home.club_card_title')</div>
                                    <div class="info-box__description">
                                        <div class="info-box__number">04</div>
                                        <div class="info-box__inner">
                                            <h4 class="info-box__title"> <a href="{{route('comingSoon')}}">@lang('pages/home.club_babylon')</a><i class="fa fa-chevron-right" aria-hidden="true"></i></h4>
                                            <div class="info-box__hidden">
                                                <p>@lang('pages/home.assad_salman')<br>
                                                <span dir="ltr">+964 773 077 0800</span>
                                                </p><a class="info-box__link with--line" href="{{route('comingSoon')}}">@lang('pages/home.club_explore_more')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- item end-->
                            </div>

                        </div>
                        <a class="button button--transparent" href="{{route('comingSoon')}}" data-hover="@lang('pages/home.calendar_cta')"><span>More Clubs</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- services inner end-->
        
        <!-- banner start-->
        <section class="section banner @lang('pages/home.calendar_class')">
            <picture>
                <source srcset="{{url('public/img')}}/calendar.jpg" media="(min-width: 576px)" /><img class="img-bg" src="{{url('public/img')}}/calendar-mob.jpg" alt="banner" />
            </picture>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8 col-md-9">
                        <h1 class="title">@lang('pages/home.calendar_title')</h1>
                        <p>@lang('pages/home.calendar_description')</p>
                        <a class="button button--transparent" href="{{route('comingSoon')}}" data-hover="@lang('pages/home.calendar_cta')"><span>@lang('pages/home.calendar_cta')</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner end-->
        
    </main>
    @include('layout.footer')
</div>
    @include('layout.scripts')
</body>
</html>
