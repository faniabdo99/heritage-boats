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
                                <form action="{{route('admin.counter.postUpdate')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Clubs Count: *</label>
                                        <p style="font-size: 12px;">The actual count of the clubs currently in the system: <b>{{getClubsCount()}}</b> but you can specify another value in the input below if needed, the specified value in the input is the one that will be shown in the counters.</p>
                                        <input name="clubs" type="number" class="form-control input-default " placeholder="Enter clubs counter value" value="{{$Counters->clubs ?? 0}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Events Count: *</label>
                                        <input name="events" type="number" class="form-control input-default " placeholder="Enter events counter value" value="{{$Counters->events ?? 0}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Visits Count: *</label>
                                        <input name="visits" type="number" class="form-control input-default " placeholder="Enter visits counter value" value="{{$Counters->visits ?? 0}}" required>
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
