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
                                <h4 class="card-title">Add New Admin</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{route('admin.admins.postNew')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input name="name" type="text" class="form-control input-default " placeholder="John Doe" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input name="email" type="email" class="form-control input-default" placeholder="email@domain.com" required> 
                                        </div>
                                        <div class="form-group">
                                            <label>Password:</label>
                                            <input name="password" type="password" class="form-control input-default" placeholder="Please enter account password" required>
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