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
            <div class="overlay"></div>
            <picture class="wow fadeIn">
                <source srcset="{{url('public/img')}}/aknloagment.jpg" media="(min-width: 992px)"/><img class="jarallax-img img-bg" src="{{url('public/img')}}/aknloagment.jpg" alt="img"/>
            </picture>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="align-container">
                            <div class="align-item"><span>@lang('pages/acknowlegement.hero_headline')</span>
                                <h1 class="title wow fadeInUp">@lang('pages/acknowlegement.hero_title')</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- promo primary end-->
        <!-- pricing start-->
        <section class="section pricing no-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading primary-heading Acknowledge @lang('pages/acknowlegement.page_title_class')">
                            <h3 class="title">ـــــــــ</h3>
                            <h5 class="subtitle"><span>@lang('pages/acknowlegement.hero_title')</span></h5>
                            <p>@lang('pages/acknowlegement.pricing_description')</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- pricing table inner start-->
            <div class="pricing-table--inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-6 col-12">
                            <!-- pricing item start-->
                            <div class="pricing-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <h4 class="title">@lang('pages/acknowlegement.huwair_title')</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="item-list">
                                            <li>@lang('pages/acknowlegement.huwair_zuhair')</li>
                                            <li>@lang('pages/acknowlegement.huwair_gawad')</li>
                                            <li>@lang('pages/acknowlegement.huwair_hassan')</li>
                                            <li>@lang('pages/acknowlegement.huwair_adil')</li>
                                            <li>@lang('pages/acknowlegement.huwair_naser')</li>
                                            <li>@lang('pages/acknowlegement.huwair_hafedh')</li>
                                            <li>@lang('pages/acknowlegement.huwair_yusuf')</li>
                                            <li>@lang('pages/acknowlegement.huwair_duway')</li>
                                            <li>@lang('pages/acknowlegement.huwair_munshid')</li>
                                            <li>@lang('pages/acknowlegement.huwair_kin')</li>

                                        </ul>
                                    </div>


                                </div>
                            </div>
                            <!-- pricing item end-->
                        </div>
                        <div class="col-lg-12 col-sm-6 col-12">
                            <!-- pricing item start-->
                            <div class="pricing-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <h4 class="title">@lang('pages/acknowlegement.babylon_title')</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="item-list">
                                            <li>@lang('pages/acknowlegement.babylon_khudair')</li>
                                            <li>@lang('pages/acknowlegement.babylon_ali') </li>
                                            <li>@lang('pages/acknowlegement.babylon_rabah')</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- pricing item end-->
                        </div>
                        <div class="col-lg-12 col-sm-6 col-12">
                            <!-- pricing item start-->
                            <div class="pricing-item">

                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <h4 class="title">@lang('pages/acknowlegement.basra_title')</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="item-list">
                                            <li>@lang('pages/acknowlegement.basra_abu_dhafer')</li>
                                            <li>@lang('pages/acknowlegement.basra_assad')</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- pricing item end-->
                        </div>
                        <div class="col-lg-12 col-sm-6 col-12">
                            <!-- pricing item start-->
                            <div class="pricing-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <h4 class="title">@lang('pages/acknowlegement.hit_title')</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="item-list">
                                            <li>@lang('pages/acknowlegement.hit_haji')</li>
                                            <li>@lang('pages/acknowlegement.hit_kain')</li>
                                            <li>@lang('pages/acknowlegement.hit_sirwan')</li>
                                            <li>@lang('pages/acknowlegement.hit_saleh')</li>
                                            <li>@lang('pages/acknowlegement.hit_raafat')</li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- pricing item end-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- pricing table inner start -->

        </section>
        <!-- pricing end-->

        <!-- testimonials-primary start-->
        <section class="section testimonials testimonials--primary">
            <div class="col-xl-12 col-md-12 text-justify">
                <div class="container">
                    <div class="row">
                        <!-- tabs content start-->
                        <div class="tabs-content">
                            <!-- tabs content item start-->
                            <div class="tabs-content__item">
                                <p>
                                    @lang('pages/acknowlegement.appreciation_letter_one')
                                </p>
                                <p>
                                    @lang('pages/acknowlegement.appreciation_letter_two')
                                </p>
                            </div>
                            <!-- tabs content item end-->
                        </div>
                    </div>
                </div>
                <!-- details tabs end  -->
            </div>
        </section>
        <!-- testimonials-primary end-->
        <!-- brands start-->
        <section class="section brands no-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- logos-grayscaled start-->
                        <div class="logos logos--primary">
                            <div class="container">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4">
                                        <!-- item start-->
                                        <div class="logo-item logo-item--grayscaled"><img src="{{url('public/img')}}/brand-1.png" alt="logo"/></div>
                                        <!-- item end-->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4">
                                        <!-- item start-->
                                        <div class="logo-item logo-item--grayscaled"><img src="{{url('public/img')}}/brand-2.png" alt="logo"/></div>
                                        <!-- item end-->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4">
                                        <!-- item start-->
                                        <div class="logo-item logo-item--grayscaled"><img src="{{url('public/img')}}/brand-3.png" alt="logo"/></div>
                                        <!-- item end-->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- logos-grayscaled end-->
                    </div>
                </div>
            </div>
        </section>
        <!-- brands end-->
    </main>
    @include('layout.footer')
</div>
@include('layout.scripts')
</body>
</html>
