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
                        <div class="align-item"><span>Iraqi Heritage Boat Clubs Network</span>
                            <h1 class="title">Our Blog</h1>
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
                                    <div class="article-item__details"><span class="article-item__category">TODO: Category</span>
                                        <h3 class="article-item__title"> <a class="article-item__link" href="{{route('blog.single' , [$Article->slug, $Article->id])}}">{{$Article->title}}</a></h3>
                                        <div class="article-item__date">{{$Article->created_at->format('M Y, d')}}</div>
                                        <p class="article-item__text">{{$Article->description}}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse


{{--                        <div class="col-12 text-center">--}}
{{--                            <!-- pagination start-->--}}
{{--                            <ul class="pagination pagination--primary">--}}
{{--                                <li class="back"><a href="#">Back</a></li>--}}
{{--                                <li class="number current"><a href="#">1</a></li>--}}
{{--                                <li class="number"><a href="#">2</a></li>--}}
{{--                                <li class="number"><a href="#">3</a></li>--}}
{{--                                <li class="number"><a href="#">4</a></li>--}}
{{--                                <li class="number"><a href="#">5</a></li>--}}
{{--                                <li class="next"><a href="#">Next</a></li>--}}
{{--                            </ul>--}}
{{--                            <!-- pagination end-->--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-sm-8 offset-sm-2 col-md-5 offset-md-0 col-lg-4 col-xl-3">
                    <div class="articles__inner">
                        <h4 class="articles__title">Category</h4>
                        <ul class="category-list">
                            <li class="category-list__item"><span>Event</span><span class="text-right">2</span></li>
                            <li class="category-list__item"><span>Training</span><span class="text-right">3</span></li>
                            <li class="category-list__item"><span>News</span><span class="text-right">1</span></li>
                            <li class="category-list__item"><span>Uncategorized</span><span class="text-right">12</span></li>
                        </ul>
                    </div>
                    <div class="articles__inner">
                        <h4 class="articles__title">Recent post</h4>
                        @forelse($RecentPosts as $RecentPost)
                            <div class="recent-item">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="recent-item__img"><img class="img-bg" src="{{$RecentPost->imagePath}}" alt="{{$RecentPost->title}}"/></div>
                                    </div>
                                    <div class="col-8">
                                        <h6 class="recent-item__title"><a class="recent-item__link" href="#">{{$RecentPost->title}}</a></h6>
                                        <span class="recent-item__date">{{$RecentPost->created_at->format('m/d')}}</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                    <div class="articles__inner">
                        <h4 class="articles__title">Archive</h4>
                        <ul class="category-list">
                            <li class="category-list__item"><span>December</span><span class="text-right">2</span></li>
                            <li class="category-list__item"><span>January</span><span class="text-right">3</span></li>
                            <li class="category-list__item"><span>October</span><span class="text-right">1</span></li>
                            <li class="category-list__item"><span>November</span><span class="text-right">6 </span></li>
                            <li class="category-list__item"><span>September</span><span class="text-right">12</span></li>
                        </ul>
                    </div>
                    <div class="articles__inner">
                        <h4 class="articles__title">Recent comments</h4>
                        <div class="recent-comment"><span><a href="#">Mohammed Ahmed</a> Event in Basra</span></div>
                        <div class="recent-comment"><span><a href="#">Abdulrahman</a> Event in Baghdad</span></div>
                        <div class="recent-comment"><span><a href="#">Dima Hassan</a> Event in Babil</span></div>
                    </div>
                    <div class="articles__inner">
                        <h4 class="articles__title">Tags</h4>
                        <div class="tags-block">
                            <span class="tag">Clubs</span>
                            <span class="tag">Clubs</span>
                            <span class="tag">Clubs</span>
                            <span class="tag">Clubs</span>
                        </div>
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
