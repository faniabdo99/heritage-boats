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
        <picture>
            <source srcset="{{$TheArticle->imagePath}}" media="(min-width: 992px)"/>
            <img class="jarallax-img img-bg" src="{{$TheArticle->imagePath}}" alt="{{$TheArticle->title}}"/>
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="align-container">
                        <div class="align-item"><span>Iraqi Heritage Boat Clubs Network</span>
                            <h1 class="title">{{$TheArticle->title}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- promo primary end-->
    <!-- blog detail start-->
    <section class="section blog-detail">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <!-- author start-->
                    <div class="author">
                        <div class="author-block">
                            <div class="img-holder"><img class="img-bg" src="{{url('public/img')}}/author-img.jpg" alt="img"/></div><span class="name">{{$TheArticle->User->name}}</span>
                        </div>
                        <div class="date-block">
                            <svg class="icon">
                                <use xlink:href="#calendar"></use>
                            </svg><span class="date">{{$TheArticle->created_at->format('d.m.Y')}}</span>
                        </div>
                    </div>
                    <!-- author end-->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <!-- content block start-->
                    <div class="content-block">
                        <p>{{$TheArticle->description}}</p>
                        {!! $TheArticle->content !!}
                        <div class="tags-block"><span class="name">Tags:</span><span class="tag">Boats<span class="close">
                            <svg class="icon">
                                <use xlink:href="#close"></use>
                            </svg></span></span><span class="tag">Clubs<span class="close">
                            <svg class="icon">
                                <use xlink:href="#close"></use>
                            </svg></span></span><span class="tag">Basra<span class="close">
                            <svg class="icon">
                                <use xlink:href="#close"></use>
                            </svg></span></span><span class="tag">Heritage<span class="close">
                            <svg class="icon">
                                <use xlink:href="#close"></use>
                            </svg></span></span></div>
                        <!-- tags block end-->
                    </div>
                    <!-- content block end-->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <!-- comments block start-->
                    <div class="comments-block">
                        <!-- heading start-->
                        <div class="heading">
                            <div class="author">
                                <div class="author-block">
                                    <div class="img-holder"><img class="img-bg" src="{{url('public/img')}}/author-img.jpg" alt="img"/></div><span class="name">{{$TheArticle->User->name}}</span>
                                </div>
                            </div>

                            <!-- socials start-->
                            <nav class="socials-holder">
                                <ul class="socials-primary">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </nav>
                            <!-- socials end -->
                        </div>
                        <!-- heading end-->
                        <!-- content start-->
                        <div class="content">
                            <p class="comments-total">32 comments</p>
                            <!-- item start-->
                            <div class="comment-item">
                                <div class="img-holder"><img class="img-bg" src="{{url('public/img')}}/author-img.jpg" alt="author"/></div>
                                <div class="text-holder">
                                    <div class="comment-heading">
                                        <div class="wrapper"><span class="name">Kristina Landie</span><span class="date">12.04.2022</span></div><span class="action">
                                            <svg class="icon">
                                                <use xlink:href="#previous"></use>
                                            </svg></span>
                                    </div>
                                    <div class="comment-content">
                                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- item end-->
                            <!-- item start-->
                            <div class="comment-item">
                                <div class="img-holder"><img class="img-bg" src="{{url('public/img')}}/author-img.jpg" alt="author"/></div>
                                <div class="text-holder">
                                    <div class="comment-heading">
                                        <div class="wrapper"><span class="name">Mike Lambert</span><span class="date">12.04.2022</span></div><span class="action">
                                            <svg class="icon">
                                                <use xlink:href="#previous"></use>
                                            </svg></span>
                                    </div>
                                    <div class="comment-content">
                                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine.</p>
                                    </div>
                                </div>
                                <div class="comment-item sub-comment">
                                    <div class="img-holder"><img class="img-bg" src="{{url('public/img')}}/author-img.jpg" alt="author"/></div>
                                    <div class="text-holder">
                                        <div class="comment-heading">
                                            <div class="wrapper"><span class="name">Taylor Vien</span><span class="date">12.04.2022</span></div><span class="action">
                                                <svg class="icon">
                                                    <use xlink:href="#previous"></use>
                                                </svg></span>
                                        </div>
                                        <div class="comment-content">
                                            <p>His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end-->
                        </div>
                        <!-- content end-->
                    </div>
                    <!-- comments block end-->
                </div>
            </div>
        </div>
    </section>
    <!-- blog detail end-->
    <!-- live comment start-->
    <section class="section live-comment">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading primary-heading">
                        <h3 class="title">Comment</h3>
                        <h5 class="subtitle">Leave a Comment</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <!-- comment form start-->
                    <form class="form contact--form comment-form" action="javascript:void(0);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="input-label" for="#input-name">
                                        <input class="form-field input input-name" id="input-name" type="text" name="name" required="required"/><span>Name</span>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label class="input-label" for="#input-mail">
                                        <input class="form-field input input-mail" id="input-mail" type="email" name="email" required="required"/><span>Email</span>
                                    </label>
                                </div>
                                <div class="col-12">
                                    <label class="textarea-label" for="#textarea">
                                        <textarea class="form-field textarea" id="textarea" name="comment"></textarea><span>Comment</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="button-holder">
                                        <button class="button button--transparent" type="submit" data-hover="Send"><span>Send</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- comment form end-->
                </div>
            </div>
        </div>
    </section>
    <!-- live comment end-->
</main>
@include('layout.footer')
</div>
@include('layout.scripts')
</body>
</html>
