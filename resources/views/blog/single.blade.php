<!DOCTYPE html>
<html lang="en" dir="@lang('settings.direction')">
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
            <img class="jarallax-img img-bg" src="{{$TheArticle->imagePath}}" alt="{{$TheArticle->local_title}}"/>
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="align-container">
                        <div class="align-item"><span>@lang('pages/blog.site_title')</span>
                            <h1 class="title">{{$TheArticle->local_title}}</h1>
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
                        <p>{{$TheArticle->local_description}}</p>
                        {!! $TheArticle->local_content !!}
                            @if($TheArticle->local_tags)
                                <div class="tags-block"><span class="name">@lang('pages/blog.tags'):</span>
                                    @foreach($TheArticle->ArticleTags as $Tag)
                                        <span class="tag">{{$Tag}}</span>
                                    @endforeach
                                </div>
                            @endif
                        <!-- tags block end-->
                    </div>
                    <!-- content block end-->
                </div>
            </div>
        </div>
        {{-- TODO: Add share links --}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-12 col-lg-12">--}}
{{--                    <!-- comments block start-->--}}
{{--                    <div class="comments-block">--}}
{{--                        <!-- heading start-->--}}
{{--                        <div class="heading">--}}
{{--                            <div class="author">--}}
{{--                                <div class="author-block">--}}
{{--                                    <div class="img-holder"><img class="img-bg" src="{{url('public/img')}}/author-img.jpg" alt="img"/></div><span class="name">{{$TheArticle->User->name}}</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- socials start-->--}}
{{--                            <nav class="socials-holder">--}}
{{--                                <ul class="socials-primary">--}}
{{--                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </nav>--}}
{{--                            <!-- socials end -->--}}
{{--                        </div>--}}
{{--                        <!-- heading end-->--}}
{{--                        <!-- content start-->--}}
{{--                        <div class="content">--}}
{{--                            <p class="comments-total">{{$TheArticle->Comments->count()}} comments</p>--}}
{{--                            @forelse($TheArticle->Comments as $Comment)--}}
{{--                                <!-- item start-->--}}
{{--                                <div class="comment-item">--}}
{{--                                    <div class="text-holder">--}}
{{--                                        <div class="comment-heading">--}}
{{--                                            <div class="wrapper"><span class="name">{{$Comment->name}}</span><span class="date">{{$Comment->created_at->format('m.d.Y')}}</span></div><span class="action">--}}
{{--                                            <svg class="icon">--}}
{{--                                                <use xlink:href="#previous"></use>--}}
{{--                                            </svg></span>--}}
{{--                                        </div>--}}
{{--                                        <div class="comment-content">--}}
{{--                                            <p>{{$Comment->comment}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- item end-->--}}
{{--                        @empty--}}
{{--                        @endforelse--}}

{{--                        </div>--}}
{{--                        <!-- content end-->--}}
{{--                    </div>--}}
{{--                    <!-- comments block end-->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>
    <!-- blog detail end-->
    <!-- live comment start-->
{{--    <section class="section live-comment">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="heading primary-heading">--}}
{{--                        <h3 class="title">@lang('pages/blog.comment')</h3>--}}
{{--                        <h5 class="subtitle">@lang('pages/blog.leave_a_comment')</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-12 col-lg-12">--}}
{{--                    <!-- comment form start-->--}}
{{--                    <form class="form contact--form comment-form" action="{{route('blog.comment.post')}}" method="post">--}}
{{--                        @csrf--}}
{{--                        <input type="hidden" name="blog_id" value="{{$TheArticle->id}}">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <label class="input-label" for="#input-name">--}}
{{--                                        <input class="form-field input input-name" id="input-name" type="text" name="name" required="required"/><span>@lang('pages/blog.name')</span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <label class="input-label" for="#input-mail">--}}
{{--                                        <input class="form-field input input-mail" id="input-mail" type="email" name="email" required="required"/><span>@lang('pages/blog.email')</span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <div class="col-12">--}}
{{--                                    <label class="textarea-label" for="#textarea">--}}
{{--                                        <textarea class="form-field textarea" id="textarea" name="comment"></textarea><span>@lang('pages/blog.comment_content')</span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="button-holder">--}}
{{--                                        <button class="button button--transparent" type="submit" data-hover=">@lang('pages/blog.send')"><span>@lang('pages/blog.send')</span></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                    <!-- comment form end-->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- live comment end-->
</main>
@include('layout.footer')
</div>
@include('layout.scripts')
</body>
</html>
