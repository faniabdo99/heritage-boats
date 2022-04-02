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
                            <div class="align-item"> <span>Iraqi Heritage Boat Clubs Network </span>
                                <h1 class="title wow fadeInUp">About US</h1>
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
                        <div class="title-block"><span>About</span>
                            <h2 class="title">Iraqi Heritage Boat Clubs Network
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
                            <h3 class="title">Launched in 2021 </h3>
                            <p>The Iraqi Heritage Boat Clubs Network is an initiative launched in 2021 that is revitalising the use of traditional boats as a sport and leisure activity organised by local boat clubs across Iraq.</p>
                            <p>The clubs are also focal points for experiential research into the heritage and ecology of their local areas.</p>
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
                                        <h3 class="title">COMMUNITY</h3>
                                        <h5 class="subtitle"><span>Bring people together </span></h5>
                                    </div>
                                    <p class="text">Heritage Boat Clubs bring people together to enjoy the beauty of boats and Iraq’s river and wetland environment, to learn about Iraq’s heritage, and to address relevant issues such as pollution and public access to waterways. The Network connects communities from different parts of the country, and develops relationships with likeminded communities regionally and globally. Through using traditional boats in innovative ways, we also develop job opportunities, build skills, and help to ensure that endangered boatbuilding techniques are passed on to the next generation.</p>
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
                                        <h3 class="title">Network </h3>
                                        <h5 class="subtitle"><span>The first Stage</span> <span>includes four Heritage Boat Clubs</span></h5>
                                    </div>
                                    <p class="text">The first stage of the Network includes four Heritage Boat Clubs: Babylon, Baghdad, Basra and Chibayish. During the start-up stage the clubs receive boats, equipment, training and support from the Ark for Iraq programme organised by Safina Projects. Each club is locally managed and organises its own programme of regular training sessions for young people, often in partnership with local colleges and NGOs. Some clubs also have the capacity to host visitors and organise boat trips in their local area.</p>
                                    <p>Each club’s fleet of boats includes several sporting Meshoufs, closely based on the traditional canoes of the Iraqi marshlands. These beautiful boats range from 6m to 10m in length and have the ability to be sailed as well as paddled. Some clubs also use Guffa coracles, the traditional fishing and cargo boats of central Iraq. In each location we are working with local communities to study and, where possible, reconstruct and reintroduce further traditional boat types.</p>
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
                                        <h3 class="title">More</h3>
                                        <h5 class="subtitle"><span>Find</span> <span>Out More</span></h5>
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
                                        <p>If you would like to contact a local club to join training sessions or experience a boat trip, please visit our Contacts page for details of local coordinators. We also welcome enquiries from existing boat clubs or interested communities who would like to become part of the next stage of expansion of the Heritage Boat Clubs Network.<br>
                                            <b>For background information please visit:</b>
                                        </p>
                                        <span class="user">
                                                <span class="position"><a href="arkforiraq.org">arkforiraq.org</a> </span>, <span class="name">for an overview of Safina Projects’ research on traditional Iraqi boats since 2016;</span></span>
                                        <span class="user">
                                                <span class="position"><a href="safinaprojects.org">safinaprojects.org</a> </span>, <span class="name">for an introduction to the founding organisation</span></span>
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
                            <h3 class="title">Statistics</h3>
                            <h5 class="subtitle"><span>Our Achievements</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="counter-block counter--text-lower">
                <div class="container">
                    <div class="row no-gutters counter-holder offset-margin">
                        <div class="col-sm-4">
                            <!-- statistics item start-->
                            <div class="statistics-item"><span class="counter">50</span><span class="description">Clubs</span></div>
                            <!-- statistics item end-->
                        </div>
                        <div class="col-sm-4">
                            <!-- statistics item start-->
                            <div class="statistics-item"><span class="counter">700</span><span class="description">Events</span></div>
                            <!-- statistics item end-->
                        </div>
                        <div class="col-sm-4">
                            <!-- statistics item start-->
                            <div class="statistics-item"><span class="counter">200</span><span class="description">Visitors</span></div>
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
