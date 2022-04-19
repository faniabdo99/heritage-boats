<!DOCTYPE html>
<html lang="en">
@include('layout.header')
<body>
@include('layout.loader')
<div class="page-wrapper">
@include('layout.navbar')
<!-- header end-->
    <main class="main">
        <!-- HOME -->
        <section id="home">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <div class="home-info">
                            <!-- get in touch start-->
                            <section class="section get-in-touch">
                                <div class="container-fluid">
                                    <div class="row">
                                        <!-- contacts-banner start-->
                                        <div class="col-lg-12">
                                            <div class="contacts-banner banner-commingsoon">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="title-block">
                                                                <h1 class="title">@lang('pages/comming_soon.hero_title')</h1>
                                                                <h2 class="title">@lang('pages/comming_soon.hero_subtitle')</h2>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- contacts-banner end-->

                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-wrapper">
                                                <!-- contact form start-->
                                                <form action="{{route('contact.post')}}" method="post" class="form contact--form contacts-page-form" id="get-in-touch" autocomplete="off">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="title-block">
                                                                <h3 class="title text-left">@lang('pages/contact.form_title')</h3>
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
                                                            <div class="button-holder text-left">
                                                                <button class="button button--transparent" type="submit" data-hover="Send"><span>@lang('pages/contact.form_send')</span></button>
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
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    @include('layout.footer')
</div>
@include('layout.scripts')
</body>
</html>
