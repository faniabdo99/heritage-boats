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
                            <h4 class="card-title">Clubs</h4>
                            <a class="btn btn-primary" href="{{route('admin.clubs.getNew')}}">+ Add New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Members</th>
                                        <th>Palms</th>
                                        <th>Coordinator</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($Clubs as $Club)
                                        <tr>
                                            <td>{{$Club->id}}</td>
                                            <td>{{$Club->title}}</td>
                                            <td>{{$Club->members}}</td>
                                            <td>{{$Club->palms}}</td>
                                            <td>{{$Club->cord_name}}</td>
                                            <td>{{$Club->created_at->format('d-m-Y')}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    @if(auth()->user()->role == 1)
                                                        <a href="{{route('admin.clubs.getEdit' , $Club->id)}}" title="Edit" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{route('admin.clubs.getAttachments' , $Club->id)}}" title="Edit" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fas fa-paperclip"></i></a>
                                                        <a href="{{route('admin.clubs.getLocalize' , $Club->id)}}" title="Translate to English" class="btn btn-success shadow btn-xs sharp mr-1"><i class="fa fa-language"></i></a>
                                                        <a href="javascript:;" data-id="{{$Club->id}}" class="btn btn-danger shadow btn-xs sharp delete-btn"><i class="fa fa-trash"></i></a>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                    </tbody>
                                </table>
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
<!--**********************************
    Scripts
***********************************-->
@include('admin.layout.scripts')
<script>
    $('.delete-btn').click(function(){
        $('.alert').remove();
        $('#notos-container').prepend(`
                <div class="alert alert-warning alert-dismissible fade show">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                    <strong>Info!</strong> Double click to delete the club
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                    </button>
                </div>
            `);
    });
    $('.delete-btn').dblclick(function(){
        $('.alert').remove();
        let This = $(this);
        //Perform Ajax request to delete-user endpoint
        $.ajax({
            method: 'post',
            url: '{{route("delete-club-api")}}',
            data: {
                'club_id': This.data('id'),
                'admin_id': "{{auth()->user()->id}}"
            },
            success: function(response){
                $("html, body").animate({ scrollTop: 0 }, "fast");
                $('#notos-container').prepend(`
                        <div class="alert alert-success alert-dismissible fade show">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                            <strong>Success!</strong> ${response}
                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                            </button>
                        </div>
                    `);
                This.parent().parent().parent().fadeOut('fast');
            },
            error: function(response){
                $("html, body").animate({ scrollTop: 0 }, "fast");
                $('#notos-container').prepend(`
                        <div class="alert alert-danger alert-dismissible fade show">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                            <strong>Error!</strong> ${response.responseText}
                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                            </button>
                        </div>
                    `);
            }
        })
    });
</script>
</body>
</html>
