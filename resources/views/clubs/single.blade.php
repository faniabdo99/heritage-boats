<!DOCTYPE html>
<html lang="en" dir="@lang('settings.direction')">
@include('layout.header')
<body>
@include('layout.loader')
<div class="page-wrapper">
    @include('layout.navbar')
    <main class="main">
        <!-- promo primary start-->
        <section class="promo-primary">
            <div class="overlay wow fadeIn"></div>
            <picture>
                <source srcset="{{$TheClub->BackgroundImageSrc}}" media="(min-width: 992px)" />
                <img class="img-bg wow fadeIn" src="{{$TheClub->BackgroundImageSrc}}" alt="img" />
            </picture>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="align-container">
                            <div class="align-item"> <span>@lang('pages/club.page_subtitle')</span>
                                <h1 class="title wow fadeInUp">{{$TheClub->LocalTitle}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- promo primary end-->
        <!-- promo primary end-->
        <section class="section inner-heading--with-bg ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="heading primary-heading inner-heading">
                            <div class="title-holder">
                                <div class="title-block">
                                    <h3 class="title @lang('settings.text_align')">@lang('pages/club.clubs')</h3>
                                    <p class="subtitle">{{$TheClub->LocalShortTitle}}</p>
                                </div>
                                <div class="img-block">
                                    <svg class="icon">
                                        <use xlink:href="#logo"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6">
                        <div class="heading-description">
                            <p>{{$TheClub->LocalDescription}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- products start-->
        <!-- testimonials img left start-->
        <section class="section testimonials testimonials--img-left elements">
            <div class="container element-holder members">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper">
                            <!-- img block start-->
                            <div class="img-holder col-md-6 col-sm-12 text-center">
                                <lord-icon
                                    src="https://cdn.lordicon.com/becxqsdr.json"
                                    trigger="loop"
                                    style="width:250px;height:250px">
                                </lord-icon>
                            </div>
                            <!-- img block end-->
                            <!-- text block start-->
                            <div class="text-block">
                                <div class="row align-items-end">
                                    <div class="col-md-6 col-sm-12 text-center">
                                        <div class="heading primary-heading">
                                            <h3 class="title @lang('settings.text_align')">@lang('pages/club.members')</h3>
                                            <h5 class="subtitle"><span>{{$TheClub->LocalShortTitle}} @lang('pages/club.members_desc')</span></h5>
                                            <div class="statistics-item"><div class="col-sm-4">
                                                    <!-- statistics item start-->
                                                    <div class="statistics-item"><span class="counter">{{$TheClub->members}}</span></div>
                                                    <!-- statistics item end-->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- content start-->
                                    <div class="content">
                                        <!-- testimonials slider start-->
                                        <div class="testimonials-slider testimonials-img-left-slider">
                                            <!-- item start-->
                                            <div class="slider-item @lang('settings.text_align')">
                                                <p>@lang('pages/club.members_registered')</p>
                                            </div>
                                            <!-- item end-->
                                        </div>
                                    </div>
                                    <!-- content end-->
                                </div>
                                <!-- text block end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonials img left end-->
        <!-- project gallery start-->
        <section class="section project-gallery-section no-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading primary-heading">
                            <h5 class="subtitle"><span>@lang('pages/club.club_gallery')</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="project-gallery-holder">
                        <div class="project-gallery">
                            @forelse($TheClub->Gallery as $Image)
                                <a class="gallery-item" href="{{$Image->ImageSrc}}" data-fancybox="project-gallery"><div class="overlay"></div><img class="img-bg" src="{{$Image->ImageSrc}}" alt="img"/></a>
                            @empty
                            @endforelse
                        </div>
                        <div class="project-gallery-dots"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project gallery end-->
        <section class="section testimonials testimonials--img-right elements">
            <div class="container element-holder">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper">
                            <!-- text-block start-->
                            <div class="text-block">
                                <!-- heading start-->
                                <div class="heading primary-heading">
                                    <div class="row align-items-end">
                                        <div class="col-md-8">
                                            <h3 class="title @lang('settings.text_align')">@lang('pages/club.boats')</h3>
                                            <h5 class="subtitle"><span>{{$TheClub->LocalShortTitle}} @lang('pages/club.boats_desc')</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- heading end-->
                                <!-- content start-->
                                <div class="content">
                                    <!-- testimonials slider start-->
                                    <div class="testimonials-slider testimonials-img-right-slider">
                                        <!-- item start-->
                                        <div class="slider-item">
                                            <!-- statistics item start-->
                                            <div class="statistics-item"><span class="counter">{{$TheClub->palms}}</span></div>
                                            <!-- statistics item end--><span class="user"><span class="name text-left">@lang('pages/club.palms')</span></span>
                                        </div>
                                        <!-- item end-->
                                    </div>
                                    <!-- testimonials slider end-->
                                </div>
                                <!-- content end-->
                            </div>
                            <!-- text-block end-->
                            <!-- img block start-->
                            <div class="img-holder">
                                <lord-icon
                                    src="https://cdn.lordicon.com/adwosptt.json"
                                    trigger="loop"
                                    style="width:250px;height:250px">
                                </lord-icon>

                            </div>
                            <!-- img block end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonials-img-right end-->
        <!--calendar start-->
        <section class="section services">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading primary-heading mx-auto">
                            <h3 class="title">@lang('pages/club.events')</h3>
                            <h5 class="subtitle text-center"><span>@lang('pages/club.calendar')</span></h5>
                            <p>@lang('pages/club.calendar_desc')</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row offset-margin">
                    <div class="col-md-12 col-12 text-center">
                        <!-- icon item start-->
                        <iframe src="https://calendar.google.com/calendar/embed?src=tayseerip%40gmail.com&ctz=Asia%2FBaghdad" style="border: 0" width="90%" height="600" frameborder="0" scrolling="no"></iframe>
                        <!-- icon item end-->
                    </div>
                </div>
            </div>
        </section>
        <!--calendar end-->
        <!-- platform start-->
        <section class="section platform">
            <lord-icon
                src="https://cdn.lordicon.com/cnyeuzxc.json"
                trigger="loop"
                style="width:250px;height:250px"
                class="img-background offset-xl-1">
            </lord-icon>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-5">
                        <div class="heading primary-heading">
                            <h3 class="title">@lang('pages/club.main_cta')</h3>
                            <h5 class="subtitle"><span>@lang('pages/club.contact_cord')</span></h5>
                        </div>
                        <div class="contacts-banner contact-each-club">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="address-block inner-block main-contact-network">
                                            <p class="address">{{$TheClub->LocalCordName}}</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="phones-block inner-block main-contact-phone">
                                            <p><a href="tel:{{$TheClub->cord_phone}}">{{$TheClub->cord_phone}}</a></p>
                                        </div>
                                    </div>
                                    @if($TheClub->cord_email)
                                        <div class="col-12">
                                            <div class="phones-block inner-block main-contact-phone">
                                                <p><a href="mailto:{{$TheClub->cord_email}}">{{$TheClub->cord_email}}</a></p>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div><a class="button button--transparent" href="tel:{{$TheClub->cord_phone}}" data-hover="Discover"><span>@lang('pages/club.call_now')</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- platform end-->
    </main>
    @include('layout.footer')
</div>
@include('layout.scripts')
</body>
</html>
