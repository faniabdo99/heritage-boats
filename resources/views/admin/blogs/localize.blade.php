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
                            <h4 class="card-title">Translate Article: {{$TheArticle->title}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{route('admin.blogs.postLocalize')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="blog_id" value="{{$TheArticle->id}}">
                                    <div class="form-group">
                                        <label>Title: *</label>
                                        <input name="title_value" type="text" class="form-control input-default " placeholder="{{$TheArticle->title}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Category: *</label>
                                        <input class="form-control input-default" type="text" name="category_value" id="category" placeholder="{{$TheArticle->category}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tags">Tags:</label>
                                        <input class="form-control input-default" type="text" name="tags_value" id="tags" placeholder="{{$TheArticle->tags}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Description: *</label>
                                        <textarea name="description_value" class="form-control input-default" rows="10" placeholder="{{$TheArticle->description}}" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Content: *</label>
                                        <textarea name="content_value" class="editor form-control input-default" rows="10">{{$TheArticle->content}}</textarea>
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
