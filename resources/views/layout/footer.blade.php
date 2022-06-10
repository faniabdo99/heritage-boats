<!-- footer start-->
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- logo start-->
                    <div class="footer-logo"><a class="logo" href="{{route('home')}}"><span>@lang('layout.site_title')</span></a></div>
                    <!-- logo end-->
                    <!-- footer contacts start-->
                    <div class="footer-contacts">
                        <p class="address text-justify">@lang('layout.footer_description')</p>
                    </div>
                    <!-- footer contacts end-->
                </div>
                <div class="col-lg-4 offset-lg-0 col-md-7 offset-md-1">
                    <h4 class="title">@lang('layout.links')</h4>
                    <!-- footer nav start-->
                    <nav class="footer-nav">
                        <ul class="footer-menu">
                            <li><a href="{{route('home')}}">@lang('layout.home')</a></li>
                            <li><a href="{{route('about')}}">@lang('layout.about_us')</a></li>
                            <li><a href="{{route('contact.get')}}">@lang('layout.contact_us')</a></li>
                            <li><a href="{{route('calendar')}}">@lang('layout.calendar')</a></li>
                            <li><a href="{{route('acknowledgments')}}">@lang('layout.acknowledgements')</a></li>
                        </ul>
                    </nav>
                    <!-- footer nav end-->
                </div>
                <div class="col-md-4 d-lg-none">
                    <!-- socials start-->
                    <nav class="socials-holder socials-tablet">
                        <ul class="socials-primary">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </nav>
                    <!-- socials end -->
                </div>
                <div class="col-lg-4 offset-lg-0 col-md-7 offset-md-1">
                    <h4 class="title">@lang('layout.clubs')</h4>
                    <!-- footer nav start-->
                    <nav class="footer-nav">
                        <ul class="footer-menu">
                            @forelse(getClubs() as $Club)
                                <li><a href="{{route('club.single' , [$Club->slug, $Club->id])}}">{{$Club->LocalTitle}}</a></li>
                            @empty
                            @endforelse
                        </ul>
                    </nav>
                    <!-- footer nav end-->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-lower">
                    <div class="row align-items-baseline">
                        <div class="col-lg-4 col-md-6">
                            <p class="copyright">{!!  __('layout.copy_writes') !!}</p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- privacy start-->
                            <div class="privacy-block"><a href="{{url('public/privacy-notice.pdf')}}">@lang('layout.privacy_policy')</div>
                            <!-- privacy end-->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- socials start-->
                            <nav class="socials-holder socials-desktop">
                                <ul class="socials-primary">
                                    <li><a href="https://www.facebook.com/arkforiraq" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://twitter.com/arkforiraq" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCMhuAo22CQbJ-k9k17z92dg" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.instagram.com/arkforiraq/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </nav>
                            <!-- socials end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end-->
