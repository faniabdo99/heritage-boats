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
    <!--*********************************
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
                            <h4 class="card-title">Edit Club: {{$TheClub->title}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{route('admin.clubs.postEdit' , $TheClub->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title: *</label>
                                        <input name="title" type="text" class="form-control input-default" value="{{$TheClub->title}}" placeholder="Babylon Heritage Boat Club" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Short Title: *</label>
                                        <input name="short_title" type="text" class="form-control input-default" value="{{$TheClub->short_title}}" placeholder="Babylon Club" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Image: *</label>
                                        <input name="image" type="file" class="form-control input-default">
                                        <br>
                                        <img src="{{$TheClub->ImageSrc}}" width="250" class="h-auto">
                                    </div>
                                    <div class="form-group">
                                        <label>Background Image: *</label>
                                        <input name="background_image" type="file" class="form-control input-default" required>
                                        <br>
                                        <img src="{{$TheClub->BackgroundImageSrc}}" width="350" class="h-auto">
                                    </div>
                                    <div class="form-group">
                                        <label>Description: *</label>
                                        <textarea name="description" class="form-control input-default" rows="10" placeholder="Short description about the article" required>{{$TheClub->description}}</textarea>
                                    </div>
                                    <h4>Statistics:</h4>
                                    <div class="form-group">
                                        <label>Members: *</label>
                                        <input name="members" type="number" class="form-control input-default" value="{{$TheClub->members}}" placeholder="X" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Palms: *</label>
                                        <input name="palms" type="number" class="form-control input-default" value="{{$TheClub->palms}}" placeholder="X" required>
                                    </div>
                                    <h4>Coordinator:</h4>
                                    <div class="form-group">
                                        <label>Name: *</label>
                                        <input name="cord_name" type="text" class="form-control input-default " value="{{$TheClub->cord_name}}" placeholder="John Doe" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input name="cord_email" type="email" class="form-control input-default " value="{{$TheClub->cord_email}}" placeholder="john@doe.com">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number: *</label>
                                        <input name="cord_phone" type="text" class="form-control input-default " value="{{$TheClub->cord_phone}}" placeholder="xxxxxxxxxxx" required>
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
