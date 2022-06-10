<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="@lang('settings.direction')">
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
                <source srcset="{{url('public/img')}}/contact.jpg" media="(min-width: 992px)"/><img class="jarallax-img img-bg" src="{{url('public/img')}}/contact.jpg" alt="img"/>
            </picture>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="align-container">
                            <div class="align-item"><span>@lang('pages/contact.hero_headline')</span>
                                <h1 class="title wow fadeInUp">@lang('pages/contact.hero_title')</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- promo primary end-->
        <!-- get in touch start-->
        <section class="section get-in-touch">
            <div class="container-fluid">
                @if(session()->has('success'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success">{{session('success')}}</div>
                        </div>
                    </div>
                @endif
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-danger">{{$error}}</div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="row">
                    <!-- contacts-banner start-->
                    <div class="col-lg-6">
                        <div class="contacts-banner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="title-block">
                                            <h2 class="title">@lang('pages/contact.contact_title')</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="address-block inner-block">
                                            <p class="address">@lang('pages/contact.contact_address_1')</p>
                                        </div>
                                        <div class="address-block inner-block main-contact-network">
                                            <p class="address">@lang('pages/contact.contact_address_2')</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="phones-block inner-block main-contact-phone">
                                            <p><a dir="ltr" href="tel:+9647716748880">+964 7716 748 880</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- contacts-banner end-->

                    <div class="col-md-6 col-xs-12">
                        <div class="form-wrapper">
                            <!-- contact form start-->
                            <form action="{{route('contact.post')}}" method="post" class="form contact--form contacts-page-form" id="get-in-touch" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="title-block">
                                            <h3 class="title @lang('settings.text_align')">@lang('pages/contact.form_title')</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="input-label">
                                            <input class="form-field input input-name" id="input-name" type="text" name="name" required="required"/><span>@lang('pages/contact.form_name')</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="input-label">
                                            <input class="form-field input input-text" id="input-text" type="text" name="subject" required="required"/><span>@lang('pages/contact.form_subject')</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="input-label">
                                            <input class="form-field input input-tel" id="input-tel" type="tel" name="phone" required="required"/><span>@lang('pages/contact.form_phone')</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="input-label">
                                            <input class="form-field input input-mail" id="input-mail" type="email" name="email" required="required"/><span>@lang('pages/contact.form_email')</span>
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <label class="textarea-label">
                                            <textarea class="form-field textarea" id="textarea" name="message"></textarea><span>@lang('pages/contact.form_comment')</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="button-holder @lang('settings.text_align')">
                                            <button class="button button--transparent" type="submit" data-hover="@lang('pages/contact.form_send')"><span>@lang('pages/contact.form_send')</span></button>
                                            <div class="form__note"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- contact form end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- get in touch end-->
        <div class="section products--style-3">
            <div class="container">
                <div class="row align-items-center margin-bottom">
                    <div class="col-xl-6 col-lg-7">
                        <div class="heading primary-heading heading-with-button">
                            <div class="text-block">
                                <h3 class="title">@lang('pages/contact.location_title')</h3>
                                <h5 class="subtitle">@lang('pages/contact.location_subtitle')</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="button-block">
                            <div class="products-slider-dots"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row offset-margin">
                    @forelse(getClubs() as $key => $Club)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- team-item--grayscaled start-->
                            <div class="team-item team-item--grayscaled">
                                <div class="img-holder"><img class="img-bg" src="{{$Club->ImageSrc}}" alt="{{$Club->LocalTitle}}"/></div>
                                <div class="description"><span class="name">{{$Club->LocalTitle}}</span>
                                    <span class="position">{{$Club->LocalCordName}}</span>
                                    <span class="position"><a href="tel:+9647716748880">{{$Club->cord_phone}}</a></span>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="button-holder"><a class="button button--primary button--dark" href="{{route('club.single' , [$Club->slug, $Club->id])}}" data-hover="Visit Club Page"><span>@lang('pages/contact.location_cta')</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- team-item--grayscaled end-->
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </main>
    @include('layout.footer')
</div>
@include('layout.scripts')
</body>
</html>
