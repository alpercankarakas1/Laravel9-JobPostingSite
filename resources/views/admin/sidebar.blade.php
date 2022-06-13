<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="profile.html"><img src="{{asset('assets')}}/admin/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered">{{Auth::user()->name}}</h5>

            <li class="mt-5">
                <a href="/admin">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="mt-5">
                <a href="{{route('admin.application.index')}}">
                    <i class="fa fa-clipboard"></i>
                    <span>Applications</span>
                </a>
            </li>

            <li class="mt-5">
                <a href="{{route('admin.category.index')}}">
                    <i class="fa fa-th"></i>
                    <span>Categories</span>
                </a>
            </li>

            <li class="mt-5">
                <a href="/admin/job">
                    <i class="fa fa-book"></i>
                    <span>Jobs</span>
                </a>
            </li>

            <li class="mt-5">
                <a href="{{route('admin.user.index')}}">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                </a>
            </li>

            <li class="mt-5">
                <a href="{{route('admin.message.index')}}">
                    <i class="fa fa-comment"></i>
                    <span>Messages</span>
                </a>
            </li>

            <li class="mt-5">
                <a href="/admin/comment">
                    <i class="fa fa-comments"></i>
                    <span>Comments</span>
                </a>
            </li>

            <li class="mt-5">
                <a href="{{route('admin.faq.index')}}">
                    <i class="fa fa-question"></i>
                    <span>FAQ</span>
                </a>
            </li>

            <li class="mt-5">
                <a href="{{route('admin.setting')}}">
                    <i class="fa fa-cogs"></i>
                    <span>Settings</span>
                </a>
            </li>



        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
