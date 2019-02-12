<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
{{--<a href="index3.html" class="brand-link">--}}
{{--<img src="{{asset('images/avatar2.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"--}}
{{--style="opacity: .8">--}}
{{--<span class="brand-text font-weight-light">AdminLTE 3</span>--}}
{{--</a>--}}

<!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{--<div class="image">--}}
            {{--<img src="{{asset('images/avatar2.png')}}" class="img-circle elevation-2" alt="User Image">--}}
            {{--</div>--}}
            <div class="info">
                <a href="#" class="d-block">Welcome, User</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                {{--<li class="nav-item has-treeview">--}}
                {{--<a href="#" class="nav-link ">--}}
                {{--<i class="nav-icon fa fa-dashboard"></i>--}}
                {{--<p>--}}
                {{--Starter Pages--}}
                {{--<i class="right fa fa-angle-left"></i>--}}
                {{--</p>--}}
                {{--</a>--}}
                {{--<ul class="nav nav-treeview">--}}
                {{--<li class="nav-item">--}}
                {{--<a href="#" class="nav-link ">--}}
                {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                {{--<p>Active Page</p>--}}
                {{--</a>--}}
                {{--</li>--}}
                <li class="nav-item">


                <i class="fa fa-circle-o nav-icon"></i>
                    @if(Sentinel::check())


                        <form action="/logout" method="post" id="logout-form" class="my-2">
                            {{csrf_field()}}
                            <a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>
                        </form>

                    @endif

                </li>
                {{--</ul>--}}
                {{--</li>--}}
            <!-- About -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-info"></i>
                        <p>
                            About us
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/about/create" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/about/" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>View</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- About -->
                {{-------------Slider--------------------}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Slider
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="/slider/" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Manage Slider</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-------------CMS, Slider--------------------}}












                {{----------------Team information---------------}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-user-plus"></i>
                        <p>
                           Team
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/team/create" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create Staff</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/team" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>View Staff</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{----------------Team information---------------}}

                {{----------------Team information---------------}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-user-plus"></i>
                        <p>
                            Service
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/service/create" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create service</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/service" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>View service</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-user-plus"></i>
                        <p>
                            Contact
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/contact/create" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create contact</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>View contact</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--Galler--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-user-plus"></i>
                        <p>
                            Gallery
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/gallery/create" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add image</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/gallery" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>View gallery</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{----------------Gallery---------------}}

                {{--time--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-user-plus"></i>
                        <p>
                          Time
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/time/create" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/time" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>View </p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{----------------time---------------}}


                {{--Feedback-}}--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-user-plus"></i>
                        <p>
                         Feedback
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        {{--<li class="nav-item">--}}
                            {{--<a href="/time/create" class="nav-link ">--}}
                                {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--<p>Create </p>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        <li class="nav-item">
                            <a href="/feedback" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>View </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-user-plus"></i>
                        <p>
                           Appointment
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        {{--<li class="nav-item">--}}
                        {{--<a href="/time/create" class="nav-link ">--}}
                        {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                        {{--<p>Create </p>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        <li class="nav-item">
                            <a href="/appointment" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>View </p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{----------------feedback---------------}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>