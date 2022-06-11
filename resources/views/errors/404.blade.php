<!DOCTYPE html>
<html lang="en">
@include('layout.header' , ['PageTitle' => 'Error 404'])
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
                            <h5 class="subtitle text-center"><span>حصل خطأ ما</span></h5>
                            <p>هذه الصفحة غير موجودة</p>
                            <a class="button button--filled" href="{{route('home')}}" data-hover="Home Page"><span>الصفحة الرئيسية</span></a>
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
