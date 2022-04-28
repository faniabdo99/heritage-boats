@include('admin.layout.header')

<body>

<!--*******************
    Preloader start
********************-->
@include('admin.layout.preloader')
<!--*******************
        Preloader end
    ********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    @include('admin.layout.navbar')


    <!--**********************************
            Sidebar start
        ***********************************-->
    @include('admin.layout.sidebar')
    <!--**********************************
            Sidebar end
        ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    @include('admin.layout.notifications')
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Category: {{$TheCategory->title}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{route('admin.categories.postEdit' , $TheCategory->id)}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title: *</label>
                                        <input name="title" type="text" class="form-control input-default" value="{{$TheCategory->title}}" placeholder="News" required>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3 checkbox-warning">
                                        <input type="checkbox" @if($TheCategory->is_promoted) checked @endif class="custom-control-input" name="is_promoted" id="is_promoted">
                                        <label class="custom-control-label" for="is_promoted">Promote on Homepage?</label>
                                    </div>
                                    <br><br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
</div>
<!--**********************************
    Main wrapper end
***********************************-->
@include('admin.layout.scripts')
</body>
</html>
