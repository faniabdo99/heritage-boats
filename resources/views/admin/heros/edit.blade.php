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
                            <h4 class="card-title">Update System Counters</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{route('admin.hero.postUpdate')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Homepage Hero: *</label>
                                        <input name="homepage" type="file" class="form-control input-default" />
                                    </div>
                                    <div class="form-group">
                                        <label>About Hero: *</label>
                                        <input name="about" type="file" class="form-control input-default" />
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Hero: *</label>
                                        <input name="contact" type="file" class="form-control input-default" />
                                    </div>
                                    <div class="form-group">
                                        <label>Acknowledgments Hero: *</label>
                                        <input name="acknowledgments" type="file" class="form-control input-default" />
                                    </div>
                                    <div class="form-group">
                                        <label>Calendar Hero: *</label>
                                        <input name="calendar" type="file" class="form-control input-default" />
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
