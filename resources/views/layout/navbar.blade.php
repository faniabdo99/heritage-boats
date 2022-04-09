<!-- mobile-menu start-->
<div class="mobile-nav">
    <div class="nav-inner">
        <div class="nav-item">
            <!-- main menu start-->
            <nav class="menu-holder">
                <ul class="mobile-menu">
                    <li class="menu-item"><a href="{{route('home')}}"><span>Home</span></a></li>
                    <li class="menu-item menu-item--has-child"><a href="javascript:void(0);"><span>Clubs</span> </a>
                        <!-- sub-menu start-->
                        <ul class="sub-menu">
                            <li><a href="{{route('comingSoon')}}">Basra Heritage Boat Club</a></li>
                            <li><a href="{{route('comingSoon')}}">Chibayish Heritage Boat Club</a></li>
                            <li><a href="{{route('comingSoon')}}">Baghdad Heritage Boat Club</a></li>
                            <li><a href="{{route('comingSoon')}}">Babylon Heritage Boat Club</a></li>
                        </ul>
                        <!-- sub-menu end-->
                    </li>
                    <li class="menu-item"><a href="{{route('about')}}"><span>About Us</span></a></li>
                    <li class="menu-item"><a href="{{route('comingSoon')}}"><span>Calendar</span></a></li>

                    <li class="menu-item"><a href="{{route('contact.get')}}"><span>Contact Us</span></a></li>
                    <li class="menu-item"><a href="{{route('acknowledgments')}}"><span>Acknowledgements</span></a>
                        <!-- main menu end-->
                        <div class="button-holder"><a class="button button--filled" href="{{route('contact.get')}}" data-hover="Get In Touch"><span>Get In Touch</span></a>
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
                <div class="logo-block"><a class="logo" href="{{route('home')}}"><span>Iraqi Heritage Boat Club</span></a></div>
                <!-- logo block end-->
                <!-- menu block start-->
                <div class="menu-block">
                    <!-- main menu start-->
                    <nav class="menu-holder">
                        <ul class="main-menu">
                            <li class="menu-item "><a href="{{route('home')}}"><span>Home</span></a>
                            <li class="menu-item menu-item--has-child"><a href="javascript:void(0);"><span>Clubs</span> </a>
                                <!-- sub-menu start-->
                                <ul class="sub-menu">
                                    <li><a href="{{route('comingSoon')}}">Basra Heritage Boat Club</a></li>
                                    <li><a href="{{route('comingSoon')}}">Chibayish Heritage Boat Club</a></li>
                                    <li><a href="{{route('comingSoon')}}">Baghdad Heritage Boat Club</a></li>
                                    <li><a href="{{route('comingSoon')}}">Babylon Heritage Boat Club</a></li>
                                </ul>
                                <!-- sub-menu end-->
                            </li>
                            <li class="menu-item"><a href="{{route('about')}}"><span>About Us</span></a></li>
                            <li class="menu-item"><a href="{{route('comingSoon')}}"><span>Calendar</span></a></li>
                            <li class="menu-item"><a href="{{route('contact.get')}}"><span>Contact Us</span></a></li>
                            <li class="menu-item"><a href="{{route('acknowledgments')}}"><span>Acknowledgements</span></a>
                        </ul>
                    </nav>
                    <!-- main menu end-->
                </div>
                <!-- menu block end-->
                <!-- lang block start-->
                <div class="lang-block">
                    <ul class="lang-select">
                        <li class="lang-item active"><span>EN</span>
                            <ul class="sub-list">
                                <li class="lang-item"><a href="index-ara.html">اللغة العربية</a></li>
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
