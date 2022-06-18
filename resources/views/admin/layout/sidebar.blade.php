<div class="deznav">
    <div class="deznav-scroll">
        <a href="{{route('admin.blogs.getNew')}}" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside" >+ New Article</a>
        <ul class="metismenu" id="menu">
            <li><a class="ai-icon" href="{{route('admin.home')}}">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:;" aria-expanded="false">
                    <i class="fas fa-users"></i>
                    <span class="nav-text">Admins</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.admins.all')}}">List Admins</a></li>
                    @if(auth()->user()->role == 1)
                        <li><a href="{{route('admin.admins.getNew')}}">Add New</a></li>
                    @endif
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:;" aria-expanded="false">
                    <i class="fa fa-user-tie"></i>
                    <span class="nav-text">Management</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.contact.all')}}">Contact Requests</a></li>
                    <li><a href="{{route('admin.counter.all')}}">System Counters</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:;" aria-expanded="false">
                    <i class="fas fa-newspaper"></i>
                    <span class="nav-text">Blog</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.categories.all')}}">Categories</a></li>
                    <li><a href="{{route('admin.blogs.all')}}">Articles</a></li>
                    <li><a href="{{route('admin.blogs.getNew')}}">Add New</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:;" aria-expanded="false">
                    <i class="fa fa-ship"></i>
                    <span class="nav-text">Clubs</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.clubs.all')}}">List Clubs</a></li>
                    <li><a href="{{route('admin.clubs.getNew')}}">Add New</a></li>
                </ul>
            </li>
            <li><a class="ai-icon" href="{{route('home')}}">
                    <i class="fa fa-globe"></i>
                    <span class="nav-text">Back to Website</span>
                </a>
            </li>
            <li><a class="ai-icon" href="{{route('logout')}}">
                    <i class="fa fa-sign-out"></i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
