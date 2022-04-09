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
        <!-- row -->
        <div class="container-fluid">
            <!-- Add Order -->
            <div class="row">
                <div class="col-12" id="notos-container">
                    @include('admin.layout.notifications')
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Contact Request from : {{$TheContactRequest->name}}</h4>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li class="mb-4"><b>Subject:</b> {{$TheContactRequest->subject}}</li>
                                <li class="mb-4"><b>From:</b> {{$TheContactRequest->name}}</li>
                                <li class="mb-4"><b>Email:</b> <a href="mailto:{{$TheContactRequest->email}}">{{$TheContactRequest->email}}</a></li>
                                <li class="mb-4"><b>Phone:</b> <a href="mailto:{{$TheContactRequest->phone}}">{{$TheContactRequest->phone}}</a></li>
                                <li class="mb-4"><b>Date:</b> {{$TheContactRequest->created_at->format('Y-m-d')}} ({{$TheContactRequest->created_at->diffForHumans()}}) </li>
                                <li class="mb-4"><b>Content:</b> <br> {{$TheContactRequest->message}}</li>
                            </ul>
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
<!--**********************************
    Scripts
***********************************-->
@include('admin.layout.scripts')
</body>
</html>
