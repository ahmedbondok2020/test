<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ Request::root() }}/admin/images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">
    <link href='https://fonts.googleapis.com/earlyaccess/droidarabickufi.css' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    {!! Html::style('admin/plugins/fontawesome-free/css/all.min.css') !!}

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    {!! Html::style('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') !!}
    <!-- iCheck -->
    {!! Html::style('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}
    <!-- JQVMap -->
    {!! Html::style('admin/plugins/jqvmap/jqvmap.min.css') !!}
    <!-- Theme style -->
    {!! Html::style('admin/dist/css/adminlte.min.css') !!}
    <!-- overlayScrollbars -->
    {!! Html::style('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') !!}
    <!-- Daterange picker -->
    {!! Html::style('admin/plugins/daterangepicker/daterangepicker.css') !!}
    <!-- summernote -->
    {!! Html::style('admin/plugins/summernote/summernote-bs4.css') !!}
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- DataTables -->
    {!! Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}
    {!! Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}

    <!-- iCheck for checkboxes and radio inputs -->
    {!! Html::style('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}
    <!-- Bootstrap Color Picker -->
    {!! Html::style('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') !!}
    <!-- Tempusdominus Bbootstrap 4 -->
    {!! Html::style('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') !!}
    <!-- Select2 -->
    {!! Html::style('admin/plugins/select2/css/select2.min.css') !!}
    {!! Html::style('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') !!}

</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
    {{--        <!-- Brand Logo -->--}}
    {{--        <a href="index3.html" class="brand-link">--}}
    {{--            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"--}}
    {{--                 style="opacity: .8">--}}
    {{--            <span class="brand-text font-weight-light">AdminLTE 3</span>--}}
    {{--        </a>--}}

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ url('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Users
                                    <i class="right fas fa-angle-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('adminpanel/users/all') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Users</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('adminpanel/users/addusers') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create User</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Categories
                                    <i class="right fas fa-angle-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('adminpanel/category/all') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Categories</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('adminpanel/category/all') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Category</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @yield('content')
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyrighttttt &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.4
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
        <!-- ./wrapper -->


    <!-- jQuery -->
    {!! Html::script('admin/plugins/jquery/jquery.min.js') !!}
    <!-- jQuery UI 1.11.4 -->
    {!! Html::script('admin/plugins/jquery-ui/jquery-ui.min.js') !!}
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    {!! Html::script('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}
    <!-- ChartJS -->
    {!! Html::script('admin/plugins/chart.js/Chart.min.js') !!}
    <!-- Sparkline -->
    {!! Html::script('admin/plugins/sparklines/sparkline.js') !!}
    <!-- JQVMap -->
    {!! Html::script('admin/plugins/jqvmap/jquery.vmap.min.js') !!}
    {!! Html::script('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') !!}
    <!-- jQuery Knob Chart -->
    {!! Html::script('admin/plugins/jquery-knob/jquery.knob.min.js') !!}
    <!-- daterangepicker -->
    {!! Html::script('admin/plugins/moment/moment.min.js') !!}
    {!! Html::script('admin/plugins/daterangepicker/daterangepicker.js') !!}
    <!-- Tempusdominus Bootstrap 4 -->
    {!! Html::script('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') !!}
    <!-- Summernote -->
    {!! Html::script('admin/plugins/summernote/summernote-bs4.min.js') !!}
    <!-- overlayScrollbars -->
    {!! Html::script('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') !!}
    <!-- AdminLTE App -->
    {!! Html::script('admin/dist/js/adminlte.js') !!}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {!! Html::script('admin/dist/js/pages/dashboard.js') !!}
    <!-- AdminLTE for demo purposes -->
    {!! Html::script('admin/dist/js/demo.js') !!}


    <!-- DataTables -->
    {!! Html::script('admin/plugins/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}
    {!! Html::script('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}
    {!! Html::script('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}

    <!-- bs-custom-file-input -->
    {!! Html::script('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') !!}
    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
    <!-- page script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    @yield('js')

</body>
</html>


{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--    <title>لوحة التحكم</title>--}}
{{--    <!--== META TAGS ==-->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">--}}
{{--    <!--== FAV ICON ==-->--}}
{{--    <link rel="shortcut icon" href="{{ Request::root() }}/admin/images/fav.ico">--}}

{{--    <!-- GOOGLE FONTS -->--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">--}}
{{--    <link href='https://fonts.googleapis.com/earlyaccess/droidarabickufi.css' rel='stylesheet' type='text/css'>--}}

{{--    <!-- FONT-AWESOME ICON CSS -->--}}
{{--    {!! Html::style('admin/css/font-awesome.min.css') !!}--}}

{{--    <!--== ALL CSS FILES ==-->--}}
{{--    {!! Html::style('admin/css/style.css') !!}--}}
{{--    {!! Html::style('admin/css/mob.css') !!}--}}
{{--    {!! Html::style('admin/css/bootstrap.css') !!}--}}
{{--    {!! Html::style('admin/css/materialize.css') !!}--}}

{{--    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->--}}
{{--    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->--}}
{{--    <!--[if lt IE 9]>--}}
{{--	<script src="js/html5shiv.js"></script>--}}
{{--	<script src="js/respond.min.js"></script>--}}

{{--	<![endif]-->--}}

{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--</head>--}}

{{--<body>--}}
{{--    <!--== MAIN CONTRAINER ==-->--}}
{{--    <div class="container-fluid sb1">--}}
{{--        <div class="row">--}}
{{--            <!--== LOGO ==-->--}}
{{--            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">--}}
{{--                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>--}}
{{--                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>--}}
{{--                <a href="{{ url('/') }}" class="logo"><img src="{{ Request::root() }}/website/img/logo.png" alt="" />--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <!--== SEARCH ==-->--}}
{{--            <div class="col-md-6 col-sm-6 mob-hide">--}}
{{--                <form class="app-search">--}}
{{--                    <input type="text" placeholder="بحث ...." class="form-control" style="direction:rtl;">--}}
{{--                    <a href=""><i class="fa fa-search"></i></a>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <!--== NOTIFICATION ==-->--}}
{{--            <div class="col-md-2 tab-hide">--}}

{{--            </div>--}}
{{--            <!--== MY ACCCOUNT ==-->--}}
{{--            <div class="col-md-2 col-sm-3 col-xs-6">--}}
{{--                <!-- Dropdown Trigger -->--}}
{{--                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><i class="fa fa-angle-down" aria-hidden="true"></i> حسابى <img src="{{ Request::root() }}/admin/images/user/6.png" alt="" />--}}
{{--                </a>--}}
{{--                <!-- Dropdown Structure -->--}}
{{--                <ul id='top-menu' class='dropdown-content top-menu-sty'>--}}
{{--                    <li><a href="{{ url('/') }}" class="waves-effect"><i class="fa fa-undo" aria-hidden="true"></i>العودة الى الموقع</a>--}}
{{--                    </li>--}}
{{--                    <li class="divider"></li>--}}
{{--                    <li>--}}
{{--                        <a href="{{ url('/logout') }} "--}}
{{--                           onclick="event.preventDefault();document.getElementById('logout-form').submit();"--}}
{{--                           class="ho-dr-con-last waves-effect">--}}
{{--                            <i class="fa fa-sign-in" aria-hidden="true"></i>--}}
{{--                            الخروج--}}
{{--                        </a>--}}
{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                            @csrf--}}
{{--                        </form>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!--== BODY CONTNAINER ==-->--}}
{{--    <div class="container-fluid sb2">--}}
{{--        <div class="row">--}}
{{--            <div class="sb2-1">--}}
{{--                <!--== USER INFO ==-->--}}
{{--                <div class="sb2-12">--}}
{{--                    <ul>--}}
{{--                        <li><img src="{{ Request::root() }}/admin/images/placeholder.jpg" alt="">--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <h5>{{Auth::user()->name}}</h5>--}}
{{--                        </li>--}}
{{--                        <li></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <!--== LEFT MENU ==-->--}}
{{--                <div class="sb2-13">--}}
{{--                    <ul class="collapsible" data-collapsible="accordion">--}}
{{--                        <li><a href="{{ url('/adminpanel/index') }}"><i class="fa fa-bar-chart" aria-hidden="true"></i> الرئيسية</a>--}}
{{--                        </li>--}}
{{--                        @if(Auth::user()->admin == 1)--}}
{{--                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> الاعضاء</a>--}}
{{--                            <div class="collapsible-body left-sub-menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="{{ url('/adminpanel/users/all') }}">كل الاعضاء</a>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="{{ url('/adminpanel/users/addusers') }}">اضافة عضو جديد</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        @endif--}}
{{--                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-umbrella" aria-hidden="true"></i> الفيديوهات</a>--}}
{{--                            <div class="collapsible-body left-sub-menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="{{ url('/adminpanel/video/all') }}">كل الفيديوهات</a> </li>--}}
{{--                                    <li><a href="{{ url('/adminpanel/video/search_page') }}">تعديل الفيديوهات</a> </li>--}}
{{--                                    <li><a href="{{ url('/adminpanel/video/review') }}">فيديوهات فى انتظار المراجعه</a> </li>--}}
{{--                                    <li><a href="{{ url('/adminpanel/video/review_ajax') }}"> ajax فيديوهات فى انتظار المراجعه</a> </li>--}}
{{--                                    <li><a href="{{ url('/adminpanel/video/addvideos') }}">اضافة الفيديوهات جديدة</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> الروابط </a>--}}
{{--                            <div class="collapsible-body left-sub-menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="{{ url('/adminpanel/urls/all') }}"> كل الروابط </a></li>--}}
{{--                                    <li><a href="{{ url('/adminpanel/urls/addurls') }}">اضافة روابط</a></li>--}}
{{--                                    <li><a href="{{ url('/adminpanel/urls/fetchurls') }}">كلمة بحث جديدة</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> القنوات </a>--}}
{{--                            <div class="collapsible-body left-sub-menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="{{ url('/adminpanel/channel/all') }}"> كل القنوات </a></li>--}}
{{--                                    <li><a href="{{ url('/adminpanel/channel/review') }}"> كل القنوات فى انتظار المراجعه </a></li>--}}
{{--                                    <li><a href="{{ url('/adminpanel/channel/review_channel') }}"> قنوات فى انتظار المراجعه - ajax </a></li>--}}
{{--                                    <li><a href="{{ url('/adminpanel/channel/addUrls') }}">اضافة قناة</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> التصنيفات</a>--}}
{{--                            <div class="collapsible-body left-sub-menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="{{ url('/adminpanel/category/all') }}"> كل التصنيفات </a></li>--}}
{{--                                    --}}{{--<li><a href="{{ url('/adminpanel/category/addCategory') }}">اضافة تصنيف جديد</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i>كلمات البحث </a>--}}
{{--                            <div class="collapsible-body left-sub-menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="{{ url('/adminpanel/keyword/all') }}">كلمات البحث فى الموقع </a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> Ads </a>--}}
{{--                            <div class="collapsible-body left-sub-menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="{{ url('/adminpanel/ads/all') }}"> All Ads </a></li>--}}
{{--                                    <li><a href="{{ url('/adminpanel/ads/addAds') }}"> Add New Ads </a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> المشاهدات </a>--}}
{{--                            <div class="collapsible-body left-sub-menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="{{ url('/adminpanel/keyword/all') }}">مشاهدات الزوار </a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> Redir </a>--}}
{{--                            <div class="collapsible-body left-sub-menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="{{ url('/adminpanel/Redir/all') }}"> كل Redir </a></li>--}}
{{--                                    <li><a href="{{ url('/adminpanel/Redir/addRedir') }}">اضافة Redir </a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> المدونة</a>--}}
{{--                            <div class="collapsible-body left-sub-menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="{{ url('/adminpanel/blog/all') }}"> كل المقالات </a></li>--}}
{{--                                    <li><a href="{{ url('/adminpanel/blog/addBlog') }}">اضافة مقالة جديدة</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> حجوزات السيارات والطيران</a>--}}
{{--                            <div class="collapsible-body left-sub-menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="{{ url('/adminpanel/car/all') }}"> كل حجوزات السيارات </a></li>--}}
{{--                                    <li><a href="{{ url('/adminpanel/flight/all') }}"> كل حجوزات الطيران </a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> Emails </a>--}}
{{--                            <div class="collapsible-body left-sub-menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="{{ url('/adminpanel/emails') }}">  Emails to Blogger </a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i>التعليقات </a>--}}
{{--                            <div class="collapsible-body left-sub-menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="{{ url('/adminpanel/comment/all') }}">كل التعليقات </a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            @yield('content')--}}

{{--            @yield('jquery')--}}

{{--        </div>--}}
{{--    </div>--}}

{{--    <!--== BOTTOM FLOAT ICON ==-->--}}
{{--    <section>--}}
{{--        <div class="fixed-action-btn vertical">--}}
{{--            <a class="btn-floating btn-large red pulse">--}}
{{--                <i class="large material-icons">mode_edit</i>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>--}}
{{--                </li>--}}
{{--                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>--}}
{{--                </li>--}}
{{--                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>--}}
{{--                </li>--}}
{{--                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <!--======== SCRIPT FILES =========-->--}}
{{--    {!! Html::script('admin/js/jquery.min.js') !!}--}}
{{--    {!! Html::script('admin/js/bootstrap.min.js') !!}--}}
{{--    {!! Html::script('admin/js/materialize.min.js') !!}--}}
{{--    {!! Html::script('admin/js/custom.js') !!}--}}
{{--    @yield('js')--}}
{{--</body>--}}

{{--</html>--}}
