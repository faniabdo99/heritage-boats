<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="@lang('settings.direction')">
@include('layout.header' , [
    'PageTitle' => __('pages/calendar.title'),
    'PageDescription' => __('pages/calendar.subtitle')
])
<body>
@include('layout.loader')
<div class="page-wrapper">
    @include('layout.navbar')
    <!-- header end-->
    <main class="main">
        <!--calendar start-->
        <section class="promo-primary">
            <div class="overlay"></div>
            <picture class="wow fadeIn">
                <source srcset="{{getCounterValues()->CalendarPath}}" media="(min-width: 992px)" /><img class="img-bg wow fadeIn" src="{{getCounterValues()->CalendarPath}}" alt="img" />
            </picture>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="align-container">
                            <div class="align-item"><span>@lang('pages/acknowlegement.hero_headline')</span>
                                <h1 class="title wow fadeInUp">@lang('pages/calendar.title')</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section services">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading primary-heading calendar-heading">
                        <h3 class="title">@lang('pages/calendar.title')</h3>
                            <h5 class="subtitle"><span>@lang('pages/calendar.subtitle')</span></h5>
                            <p>@lang('pages/calendar.tagline')</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row offset-margin">
                    <div class="col-md-12 col-12 text-center">
                        <!-- icon item start-->
                        <iframe src="https://calendar.google.com/calendar/embed?src=iraqiheritageboatclubs%40gmail.com&ctz=Asia%2FBaghdad" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                        <!-- icon item end-->
                    </div>
                </div>
            </div>
        </section>
        <!--calendar end-->
        <!-- platform end-->
    </main>
    @include('layout.footer')
</div>
@include('layout.scripts')
</body>
</html>
