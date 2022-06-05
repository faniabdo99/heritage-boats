<!-- mobile-menu start-->
<div class="mobile-nav">
    <div class="nav-inner">
        <div class="nav-item">
            <!-- main menu start-->
            <nav class="menu-holder">
                <ul class="mobile-menu">
                    <li class="menu-item"><a class="logo-font"><img class="logo" src="{{url('public/img')}}/HeritageLogo.svg"><span>@lang('layout.home')</span></a></li>

                    <li class="menu-item"><a href="{{route('about')}}"><span>@lang('layout.about_us')</span></a></li>
                    <li class="menu-item menu-item--has-child"><a href="javascript:void(0);"><span>@lang('layout.clubs')</span> </a>
                        <!-- sub-menu start-->
                        <ul class="sub-menu">
                            @forelse(getClubs() as $Club)
                                <li><a href="{{route('club.single' , [$Club->slug, $Club->id])}}">{{$Club->LocalTitle}}</a></li>
                            @empty
                            @endforelse
                        </ul>
                        <!-- sub-menu end-->
                    </li>
                    <li class="menu-item"><a href="{{route('contact.get')}}"><span>@lang('layout.contact_us')</span></a></li>

                    <li class="menu-item"><a href="{{route('calendar')}}"><span>@lang('layout.calendar')</span></a></li>

                    <li class="menu-item"><a href="{{route('acknowledgments')}}"><span>@lang('layout.acknowledgements')</span></a>
                        <!-- main menu end-->
                        <div class="button-holder"><a class="button button--filled" href="{{route('contact.get')}}" data-hover="@lang('layout.get_in_touch')"><span>@lang('layout.get_in_touch')</span></a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- mobile-menu end-->
<!-- header start-->
<header class="header header--style-1" id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 column">
                <!-- logo block start-->
                <div class="logo-block"><a class="logo-font"><img class="logo" src="{{url('public/img')}}/HeritageLogo.svg"><span>@lang('layout.site_title')</span></a></div>
                <!-- logo block end-->
                <!-- menu block start-->
                <div class="menu-block">
                    <!-- main menu start-->
                    <nav class="menu-holder">
                        <ul class="main-menu">
                            <li class="menu-item "><a href="{{route('home')}}"><span>@lang('layout.home')</span></a></li>
                            <li class="menu-item"><a href="{{route('about')}}"><span>@lang('layout.about_us')</span></a></li>

                            <li class="menu-item menu-item--has-child"><a href="javascript:void(0);"><span>@lang('layout.clubs')</span> </a>
                                <!-- sub-menu start-->
                                <ul class="sub-menu">
                                    @forelse(getClubs() as $Club)
                                        <li><a href="{{route('club.single' , [$Club->slug, $Club->id])}}">{{$Club->LocalTitle}}</a></li>
                                    @empty
                                    @endforelse
                                </ul>
                                <!-- sub-menu end-->
                            </li>
                            <li class="menu-item"><a href="{{route('contact.get')}}"><span>@lang('layout.contact_us')</span></a></li>
                            <li class="menu-item"><a href="{{route('calendar')}}"><span>@lang('layout.calendar')</span></a></li>
                            <li class="menu-item"><a href="{{route('acknowledgments')}}"><span>@lang('layout.acknowledgements')</span></a>
                        </ul>
                    </nav>
                    <!-- main menu end-->
                </div>
                <!-- menu block end-->
                <!-- lang block start-->
                <div class="lang-block">
                    <ul class="lang-select">
                        <li class="lang-item active text-uppercase"><span>{{app()->getLocale()}}</span>
                            <ul class="sub-list">
                                @if(app()->getLocale() == 'ar')
                                    <li class="lang-item text-capitalize"><a href="{{route('switchLang' , 'en')}}">English</a></li>
                                @else
                                    <li class="lang-item"><a href="{{route('switchLang' , 'ar')}}">عربي</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                    <!-- menu-trigger start-->
                    <div class="hamburger">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                    <!-- menu-trigger end-->
                </div>
                <!-- lang block end-->
            </div>
        </div>
    </div>
</header>
<!-- header end-->
<!-- notifications -->
@if(session()->has('success'))
    <div class="notification success-notification @lang('settings.text_align')" dir="@lang('settings.direction')">
        <div class="notification-icon">
            <i class="fas fa-check"></i>
        </div>
        <div class="notification-content">
            <b>Success!</b>
            <p class="mb-0">{{session('success')}}</p>
        </div>
    </div>
@endif
@if($errors->any())
    <div class="notification error-notification @lang('settings.text_align')" dir="@lang('settings.direction')">
        <div class="notification-icon">
            <i class="fas fa-times"></i>
        </div>
        <div class="notification-content">
            <b>Error!</b>
            @foreach ($errors->all() as $error)
                <p class="mb-0">{{$error}}</p>
            @endforeach
        </div>
    </div>
@endif
