<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ config('app.name', 'RSP Innovations') }}</title>

    <link rel="stylesheet" href="{{ asset('admin/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/jquery.dataTables.min.css')}}">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<header class="main-header">
    <!-- Logo -->
    <a href="http://13.78.180.95" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>R</b>SP</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b> RSP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
         <div class="navbar-custom-menu">
             <ul class="nav navbar-nav">
                 <!-- Messages: style can be found in dropdown.less-->
                 <li class="dropdown messages-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                         <i class="fa fa-envelope-o"></i>
                         <span class="label label-success">4</span>
                     </a>
                     <ul class="dropdown-menu">
                         <li class="header">You have 4 messages</li>
                         <li>
                             <!-- inner menu: contains the actual data -->
                             <ul class="menu">
                                 <li><!-- start message -->
                                     <a href="#">
                                         <div class="pull-left">
                                             <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                         </div>
                                         <h4>
                                             Support Team
                                             <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                         </h4>
                                         <p>Why not buy a new awesome theme?</p>
                                     </a>
                                 </li>
                                 <!-- end message -->
                                 <li>
                                     <a href="#">
                                         <div class="pull-left">
                                             <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                         </div>
                                         <h4>
                                             AdminLTE Design Team
                                             <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                         </h4>
                                         <p>Why not buy a new awesome theme?</p>
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#">
                                         <div class="pull-left">
                                             <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                         </div>
                                         <h4>
                                             Developers
                                             <small><i class="fa fa-clock-o"></i> Today</small>
                                         </h4>
                                         <p>Why not buy a new awesome theme?</p>
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#">
                                         <div class="pull-left">
                                             <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                         </div>
                                         <h4>
                                             Sales Department
                                             <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                         </h4>
                                         <p>Why not buy a new awesome theme?</p>
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#">
                                         <div class="pull-left">
                                             <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                         </div>
                                         <h4>
                                             Reviewers
                                             <small><i class="fa fa-clock-o"></i> 2 days</small>
                                         </h4>
                                         <p>Why not buy a new awesome theme?</p>
                                     </a>
                                 </li>
                             </ul>
                         </li>
                         <li class="footer"><a href="#">See All Messages</a></li>
                     </ul>
                 </li>
                 <!-- Notifications: style can be found in dropdown.less -->
                 <li class="dropdown notifications-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                         <i class="fa fa-bell-o"></i>
                         <span class="label label-warning">10</span>
                     </a>
                     <ul class="dropdown-menu">
                         <li class="header">You have 10 notifications</li>
                         <li>
                             <!-- inner menu: contains the actual data -->
                             <ul class="menu">
                                 <li>
                                     <a href="#">
                                         <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#">
                                         <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                         page and may cause design problems
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#">
                                         <i class="fa fa-users text-red"></i> 5 new members joined
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#">
                                         <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#">
                                         <i class="fa fa-user text-red"></i> You changed your username
                                     </a>
                                 </li>
                             </ul>
                         </li>
                         <li class="footer"><a href="#">View all</a></li>
                     </ul>
                 </li>
                 <!-- Tasks: style can be found in dropdown.less -->
                 <li class="dropdown tasks-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                         <i class="fa fa-flag-o"></i>
                         <span class="label label-danger">9</span>
                     </a>
                     <ul class="dropdown-menu">
                         <li class="header">You have 9 tasks</li>
                         <li>
                             <!-- inner menu: contains the actual data -->
                             <ul class="menu">
                                 <li><!-- Task item -->
                                     <a href="#">
                                         <h3>
                                             Design some buttons
                                             <small class="pull-right">20%</small>
                                         </h3>
                                         <div class="progress xs">
                                             <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                 <span class="sr-only">20% Complete</span>
                                             </div>
                                         </div>
                                     </a>
                                 </li>
                                 <!-- end task item -->
                                 <li><!-- Task item -->
                                     <a href="#">
                                         <h3>
                                             Create a nice theme
                                             <small class="pull-right">40%</small>
                                         </h3>
                                         <div class="progress xs">
                                             <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                 <span class="sr-only">40% Complete</span>
                                             </div>
                                         </div>
                                     </a>
                                 </li>
                                 <!-- end task item -->
                                 <li><!-- Task item -->
                                     <a href="#">
                                         <h3>
                                             Some task I need to do
                                             <small class="pull-right">60%</small>
                                         </h3>
                                         <div class="progress xs">
                                             <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                 <span class="sr-only">60% Complete</span>
                                             </div>
                                         </div>
                                     </a>
                                 </li>
                                 <!-- end task item -->
                                 <li><!-- Task item -->
                                     <a href="#">
                                         <h3>
                                             Make beautiful transitions
                                             <small class="pull-right">80%</small>
                                         </h3>
                                         <div class="progress xs">
                                             <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                 <span class="sr-only">80% Complete</span>
                                             </div>
                                         </div>
                                     </a>
                                 </li>
                                 <!-- end task item -->
                             </ul>
                         </li>
                         <li class="footer">
                             <a href="#">View all tasks</a>
                         </li>
                     </ul>
                 </li>
                 <!-- User Account: style can be found in dropdown.less -->
                 <li class="dropdown user user-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                         <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                         <span class="hidden-xs">Alexander Pierce</span>
                     </a>
                     <ul class="dropdown-menu">
                         <!-- User image -->
                         <li class="user-header">
                             <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                             <p>
                                 Alexander Pierce - Web Developer
                                 <small>Member since Nov. 2012</small>
                             </p>
                         </li>
                         <!-- Menu Body -->
                         <li class="user-body">
                             <div class="row">
                                 <div class="col-xs-4 text-center">
                                     <a href="#">Followers</a>
                                 </div>
                                 <div class="col-xs-4 text-center">
                                     <a href="#">Sales</a>
                                 </div>
                                 <div class="col-xs-4 text-center">
                                     <a href="#">Friends</a>
                                 </div>
                             </div>
                             <!-- /.row -->
                         </li>
                         <!-- Menu Footer-->
                         <li class="user-footer">
                             <div class="pull-left">@if (Auth::guest())
                                 <a href="{{ route('login') }}" class="btn btn-default btn-flat">Login</a>
                             </div> @else
                             <div class="pull-right">
                                 <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-defult btn-flat">Logout</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     {{ csrf_field() }}
                                 </form>
                             </div>@endif
                         </li>
                     </ul>
                 </li>
                 <!-- Control Sidebar Toggle Button -->
                 <li>
                     <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                 </li>
             </ul>

        </div>
    </nav>
</header>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                 </div>
            <div class="pull-left info">
                <p></p>
                <a href="#"><i class="fa fa-circle text-success"></i> {{ Auth::user()->firstname }}</a>
            </div>
        </div>
        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
            <li class="header"></li>

            <li><a href="{{ route('crud') }}"><i class="fa fa-circle-o text-red"></i> <span>Task</span></a></li>
            <li><a href="{{ route('user-management.index') }}"><i class="fa fa-circle-o text-red"></i> <span>User Management</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Comming</span></a></li>
            <!-- <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
        </ul>



    </section>
    <!-- /.sidebar -->
</aside>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Admin Dashboard

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>

        </ol>
    </section>

    <!-- Main content -->

@yield('content')


    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Control Sidebar -->

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="../../plugins/morris/morris.min.js"></script>
<!-- SlimScroll -->
<script src="{{ asset('admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{ asset('admin/plugins/chartjs/Chart.min.js')}}"></script>
<script src="{{ asset('admin/dist/js/pages/dashboard2.js')}}"></script>

<script src="{{ asset('admin/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
</body>
</body>
</html>
