<div class="deznav">
    <div class="deznav-scroll">
        <a href="javascript:void(0)" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside" >+ New Article</a>
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
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Management</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.contact.all')}}">Contact Requests</a></li>
                    <li><a href="./chart-morris.html">Club Views</a></li>
                    <li><a href="./form-element.html">Overall Report</a></li>
                    <li><a href="./form-element.html">Traffic Report</a></li>
                    <li><a href="./form-element.html">Conversions Report</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:;" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Events</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./ui-accordion.html">List Events</a></li>
                    <li><a href="./ui-alert.html">Add New</a></li>
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
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Clubs</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./uc-select2.html">List Clubs</a></li>
                    <li><a href="./uc-nestable.html">Add New</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:;" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./page-register.html">Register</a></li>
                    <li><a href="./page-login.html">Login</a></li>
                    <li><a class="has-arrow" href="javascript:;" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="./page-error-400.html">Error 400</a></li>
                            <li><a href="./page-error-403.html">Error 403</a></li>
                            <li><a href="./page-error-404.html">Error 404</a></li>
                            <li><a href="./page-error-500.html">Error 500</a></li>
                            <li><a href="./page-error-503.html">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                </ul>
            </li>
            <li><a class="ai-icon" href="{{route('home')}}">
                    <i class="fas fa-globe"></i>
                    <span class="nav-text">Back to Website</span>
                </a>
            </li>
            <li><a class="ai-icon" href="#">
                    <i class="fas fa-sign-out"></i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
