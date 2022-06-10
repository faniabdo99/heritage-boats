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
            <source srcset="{{url('public/img')}}/blogholder.jpg" media="(min-width: 992px)"/><img class="jarallax-img img-bg" src="{{url('public/img')}}/blogholder.jpg" alt="img"/>
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="align-container">
                        <div class="align-item"><span>@lang('pages/blog.site_title')</span>
                            <h1 class="title">@lang('pages/blog.page_title')</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- promo primary end-->
    <section class="section articles">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8 col-xl-8">
                    <div class="row">
                        @forelse($AllArticles as $Article)
                            <div class="col-12">
                                <div class="article-item">
                                    <div class="article-item__img"><img class="img-bg" src="{{$Article->imagePath}}"  alt="img"/></div>
                                    <div class="article-item__details"><span class="article-item__category">{{$Article->local_category}}</span>
                                        <h3 class="article-item__title"> <a class="article-item__link" href="{{route('blog.single' , [$Article->slug, $Article->id])}}">{{$Article->local_title}}</a></h3>
                                        <div class="article-item__date">{{$Article->created_at->format('d.m.Y')}}</div>
                                        <p class="article-item__text">{{$Article->local_description}}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
                <div class="col-sm-8 offset-sm-2 col-md-5 offset-md-0 col-lg-4 col-xl-3">
                    <div class="articles__inner">
                        <h4 class="articles__title">@lang('pages/blog.category')</h4>
                        <ul class="category-list">
                            @forelse ($Categories as $Category)
                                <li class="category-list__item"><span>{{$Category->local_title}}</span><span class="text-right">{{$Category->Blog->count()}}</span></li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                    <div class="articles__inner">
                        <h4 class="articles__title">@lang('pages/blog.recent_posts')</h4>
                        @forelse($RecentPosts as $RecentPost)
                            <div class="recent-item">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="recent-item__img"><img class="img-bg" src="{{$RecentPost->imagePath}}" alt="{{$RecentPost->local_title}}"/></div>
                                    </div>
                                    <div class="col-8">
                                        <h6 class="recent-item__title"><a class="recent-item__link" href="#">{{$RecentPost->local_title}}</a></h6>
                                        <span class="recent-item__date">{{$RecentPost->created_at->format('m.d.Y')}}</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
{{--                    <div class="articles__inner">--}}
{{--                        <h4 class="articles__title">@lang('pages/blog.archive')</h4>--}}
{{--                        <ul class="category-list">--}}
{{--                            @forelse($ArchivesKeys as $Archive)--}}
{{--                                <li class="category-list__item"><span>{{$Archive}}</span><span class="text-right">{{count($Archives[$Archive])}}</span></li>--}}
{{--                            @empty--}}
{{--                            @endforelse--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="articles__inner">--}}
{{--                        <h4 class="articles__title">@lang('pages/blog.recent_comments')</h4>--}}
{{--                        @forelse($RecentComments as $Comment)--}}
{{--                            <div class="recent-comment"><span><a href="{{route('blog.single' , [$Comment->Blog->slug , $Comment->Blog->id])}}">{{$Comment->name}}</a> {{$Comment->Blog->local_title}}</span></div>--}}
{{--                        @empty--}}
{{--                            ---}}
{{--                        @endforelse--}}
{{--                    </div>--}}
{{--                    <div class="articles__inner">--}}
{{--                        <h4 class="articles__title">@lang('pages/blog.tags')</h4>--}}
{{--                        <div class="tags-block">--}}
{{--                            @forelse($uniqueTags as $Tag)--}}
{{--                                <span class="tag">{{$Tag}}</span>--}}
{{--                            @empty--}}
{{--                            @endforelse--}}
{{--                        </div>--}}
{{--                    </div>--}}
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
