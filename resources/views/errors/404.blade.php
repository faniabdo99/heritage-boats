<!DOCTYPE html>
<html lang="en">
@include('layout.header')
<body>
@include('layout.loader')
<div class="page-wrapper">
@include('layout.navbar')
<!-- header end-->
    <main class="main">
        <section class="section error">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading primary-heading mx-auto">
                            <img src="https://cdn.rawgit.com/ahmedhosna95/upload/1731955f/sad404.svg" alt="404">
                            <h1 class="primary-heading">404</h1>
                            <h5 class="subtitle text-center"><span>Something Went Wrong</span></h5>
                            <p>The page not found</p><a class="button button--filled" href="index.html" data-hover="Home Page"><span>Home Page</span></a>
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
