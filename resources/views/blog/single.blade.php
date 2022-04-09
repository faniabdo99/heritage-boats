<!DOCTYPE html>
<html lang="en">
@include('layout.header')
<body>
@include('layout.loader')
<div class="page-wrapper">
@include('layout.navbar')
<!-- header end-->
    <main class="main">
        <div class="mt-5 pt-5">
            {{-- This is a blade comment, you can use it instead of <!-- --> if you want --}}
            <h1>This page will show a single article.</h1>
            <p>Start adding your HTML here.</p>
        </div>
    </main>
    @include('layout.footer')
</div>
@include('layout.scripts')
</body>
</html>
