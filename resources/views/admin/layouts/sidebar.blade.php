<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!--<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i class="zmdi zmdi-home m-r-5"></i>Oreo</a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user"><i class="zmdi zmdi-account m-r-5"></i>Agent</a></li>
    </ul>-->
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image">

                                <a href="profile.html"><img src="{{ asset('admin/light/assets/img/icon/Person.ico') }}"
                                        alt="admin">
                                    &nbsp; <small class="admin">Admin</small></a>
                            </div>

                        </div>
                    </li>


                    <li><a href="javascript:void(0);" class="menu-toggle"><span>Sell</span></a>
                        <ul class="ml-menu">
                            <li class="{{ setActiveClass('admin/property_add') }}"><a
                                    href="{{ url('admin/property_add') }}">Property Add</a></li>
                            <li class="{{ setACtiveClass('admin/manage-property') }}"><a
                                    href="{{ url('admin/manage-property') }}">Manage Property </a></li>
                            <li><a href="#">Assigned Cp List </a></li>

                        </ul>
                    </li>

                    <li><a href="groups.html"><span>Account</span></a></li>
                    <li><a href="file-dashboard.html"><span>CP</span></a></li>
                    <li class="{{ setACtiveClass('admin/approval-property') }}"><a
                            href="{{ url('admin/approval-property') }}"><span>Property Approval</span></a></li>
                    <li><a href="jvectormap.html"><span>Relationship Manager</span></a></li>
                    <li><a href="jvectormap.html"><span>Employee
                            </span></a></li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><span>Blog</span></a>
                        <ul class="ml-menu">
                            <li><a href="{{url('/admin/blog-approval')}}"> Blog Approval</a></li>
                        </ul>
                    </li>


                    <li><a href="{{url('admin/spv-id')}}"><span>Spv id</span></a></li>
                    <li><a href="{{url('/admin/users')}}"><span>Users</span></a></li>

                </ul>
            </div>
        </div>

    </div>
</aside>

<!-- Right Sidebar -->
