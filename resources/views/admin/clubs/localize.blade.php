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
                            <h4 class="card-title">Translate Club: {{$TheClub->title}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{route('admin.clubs.postLocalize')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="club_id" value="{{$TheClub->id}}">
                                    <div class="form-group">
                                        <label>Title: *</label>
                                        <input name="title_value" type="text" class="form-control input-default " placeholder="{{$TheClub->title}}" value="{{$ClubLocal->title_value ?? ''}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Short Title: *</label>
                                        <input name="short_title_value" type="text" class="form-control input-default " placeholder="{{$TheClub->short_title}}" value="{{$ClubLocal->short_title_value ?? ''}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description: *</label>
                                        <textarea name="description_value" class="form-control input-default" rows="10" placeholder="{{$TheClub->description}}" required>{{$ClubLocal->description_value ?? ''}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Coordinator Name: *</label>
                                        <input name="cord_name_value" type="text" class="form-control input-default " placeholder="{{$TheClub->cord_name}}" value="{{$ClubLocal->cord_name_value ?? ''}}" required>
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
