@include('admin.layout.header')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
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
                            <h4 class="card-title">Attachments: {{$TheClub->title}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <input type="hidden" name="id" value="{{$TheClub->id}}">
                                <input type="hidden" name="sku" value="{{$TheClub->sku}}">
                                @csrf
                                <div class="tab-content">
                                    <div class="row justify-content-center mb-5">
                                        <div class="col-lg-12 mb-2">
                                            <h4 class="my-4">Gallery Images</h4>
                                            <div id="gallery-images-dropzone" class="dropzone"></div>
                                            @if(count($TheClub->Gallery))
                                               <br>
                                                <div class="d-flex w-100">
                                                    @foreach ($TheClub->Gallery as $key => $Image )
                                                        <div class="mr-1">
                                                            <img class="preview-images h-auto" width="200" src="{{$Image->ImageSrc}}" alt="">
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <a class="btn btn-danger mt-2" href="{{route('admin.clubs.deleteAttachments', $TheClub->id)}}"><i class="fas fa-delete"></i> Delete Gallery Images ({{count($TheClub->Gallery)}})</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
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
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<script>
    GalleryDropzone = new Dropzone("div#gallery-images-dropzone" , {
        url: "{{route('upload-club-gallery-images')}}",
        method: "post",
        params: {'club_id':$('input[name="id"]').val()},
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 5, //MB
        timeout: 180000,
        maxFiles: 8
    });
</script>
</body>
</html>
