<!DOCTYPE html>
<html lang="en">
@include('layout.header')
<body>
@include('layout.loader')
<div class="page-wrapper">
@include('layout.navbar')
<!-- header end-->
    <main class="main">
        <!-- promo primary start-->
        <section class="promo-primary">
            <div class="overlay wow fadeIn"></div>
            <picture>
                <source srcset="{{url('public/img')}}/aboutholder2.jpg" media="(min-width: 992px)" /><img class="img-bg wow fadeIn" src="{{url('public/img')}}/aboutholder2.jpg" alt="img" />
            </picture>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="align-container">
                            <div class="align-item"> <span>@lang('pages/about.hero_headline')</span>
                                <h1 class="title wow fadeInUp">@lang('pages/about.hero_title')</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- promo primary end-->
        <!-- about welcome start-->
        <section class="section about-welcome no-padding-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-5">
                        <div class="title-block"><span>@lang('pages/about.about_title')</span>
                            <h2 class="title">@lang('pages/about.about_title')
                            </h2>
                            <div class="icon-holder">
                                <svg class="icon">
                                    <use xlink:href="#logo"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 offset-xl-1 col-lg-6 offset-lg-1">
                        <div class="description">
                            <h3 class="title">@lang('pages/about.about_description_title')</h3>
                            <p>@lang('pages/about.about_description_paragraph_1')</p>
                            <p>@lang('pages/about.about_description_paragraph_2')</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about welcome end-->

        <!-- product description start-->
        <section class="section product-description">
            <!-- item start-->
            <div class="description-item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="description-item__img"><img src="{{url('public/img')}}/about-2.jpg" alt="img" /></div>
                        </div>
                        <div class="col-lg-6 offset-xl-1 col-md-7">
                            <div class="align-container">
                                <div class="align-item">
                                    <div class="heading primary-heading">
                                        <h3 class="title">@lang('pages/about.community_title')</h3>
                                        <h5 class="subtitle"><span>@lang('pages/about.community_subtitle') </span></h5>
                                    </div>
                                    <p class="text">@lang('pages/about.community_description')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item end-->
            <!-- item start-->
            <div class="description-item">
                <div class="container">
                    <div class="row align-items-center flex-column-reverse flex-md-row">
                        <div class="col-lg-6 col-md-7">
                            <div class="align-container">
                                <div class="align-item">
                                    <div class="heading primary-heading">
                                        <h3 class="title">@lang('pages/about.network_title') </h3>
                                        <h5 class="subtitle">@lang('pages/about.network_subtitle')</h5>
                                    </div>
                                    <p class="text">@lang('pages/about.network_description_1')</p>
                                    <p>@lang('pages/about.network_description_2')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-xl-1 col-md-5">
                            <div class="description-item__img"><img src="{{url('public/img')}}/about-3.jpg" alt="img" /></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item end-->
        </section>
        <!-- product description end-->
        <!-- testimonials-primary start-->
        <section class="section testimonials testimonials--primary">
            <div class="slider-holder">
                <div class="wrapper">
                    <div class="container">
                        <div class="row align-items-end">
                            <div class="col-xl-9 col-md-8">
                                <div class="testimonials-top">
                                    <div class="heading primary-heading">
                                        <h3 class="title">@lang('pages/about.more_title')</h3>
                                        <h5 class="subtitle">@lang('pages/about.more_subtitle')</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-4">
                                <div class="testimonials-dots"></div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 offset-xl-1">
                                <!-- testimonials slider start-->
                                <div class="testimonials-slider testimonials-primary-slider">
                                    <!-- item start-->
                                    <div class="slider-item">
                                        <p>@lang('pages/about.slide_guideline')<br>
                                            <b>@lang('pages/about.slide_headline')</b>
                                        </p>
                                        <span class="user">
                                                <span class="position"><a href="arkforiraq.org">arkforiraq.org</a> </span>, <span class="name">@lang('pages/about.slide_overall_guideline')</span></span>
                                        <span class="user">
                                                <span class="position"><a href="safinaprojects.org">safinaprojects.org</a> </span>, <span class="name">@lang('pages/about.slide_project_guideline')</span></span>
                                    </div>
                                    <!-- item end-->
                                </div>
                                <!-- testimonials slider end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonials-primary end-->
        <!-- statistics start-->
        <section class="section statistics">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading primary-heading">
                            <h3 class="title">@lang('pages/about.statistics_title')</h3>
                            <h5 class="subtitle"><span>@lang('pages/about.statistics_subtitle')</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="counter-block counter--text-lower">
                <div class="container">
                    <div class="row no-gutters counter-holder offset-margin">
                        <div class="col-sm-4">
                            <!-- statistics item start-->
                            <div class="statistics-item"><span class="counter">50</span><span class="description">@lang('pages/about.statistics_counter_club')</span></div>
                            <!-- statistics item end-->
                        </div>
                        <div class="col-sm-4">
                            <!-- statistics item start-->
                            <div class="statistics-item"><span class="counter">700</span><span class="description">@lang('pages/about.statistics_counter_events')</span></div>
                            <!-- statistics item end-->
                        </div>
                        <div class="col-sm-4">
                            <!-- statistics item start-->
                            <div class="statistics-item"><span class="counter">200</span><span class="description">@lang('pages/about.statistics_counter_visitors')</span></div>
                            <!-- statistics item end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- statistics end-->
    </main>
    @include('layout.footer')
</div>
@include('layout.scripts')
</body>
</html>
