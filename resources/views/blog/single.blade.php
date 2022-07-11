<!DOCTYPE html>
<html lang="en" dir="@lang('settings.direction')">
@include('layout.header' , [
    'PageTitle' => $TheArticle->local_title,
    'PageDescription' => $TheArticle->local_description
])
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
    </section>
</main>
@include('layout.footer')
</div>
@include('layout.scripts')
</body>
</html>
