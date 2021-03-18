<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span>User</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.user.index') }}">List User</a></li>
                        <li><a href="{{ route('admin.user.create') }}">Create User</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Category</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.category.index') }}">List Category</a></li>
                        <li><a href="{{ route('admin.category.create') }}">Create Category</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Type News</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.type-of-news.index') }}">List Category</a></li>
                        <li><a href="{{ route('admin.type-of-news.create') }}">Create Category</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                        <span>News</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.news.index') }}">List News</a></li>
                        <li><a href="{{ route('admin.news.create') }}">Create News</a></li>
                    </ul>
                </li>
            </ul> 
    </div>
        <!-- sidebar menu end-->
    </div>
</aside>