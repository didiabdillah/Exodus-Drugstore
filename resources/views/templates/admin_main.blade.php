<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="{{URL::asset('assets/img/favicon.ico')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{  url('/dashboard') }}">MONITORING CONTENT</a>
     
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="@if(Request::segment(1) == 'dashboard') {{'active'}} @endif">
                        <a href="{{  url('/dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard (Operator)</a>
                    </li>

                    </li>
                    <li class="@if(Request::segment(1) == 'transaksi') {{'active'}} @endif">
                        <a href="{{  url('/transaksi') }}"> <i class="menu-icon fa fa-table"></i>Dashboard (Superadmin)</a>
                    </li>

                    <li class="@if(Request::segment(1) == 'transaksi') {{'active'}} @endif">
                        <a href="{{  url('/transaksi') }}"> <i class="menu-icon fa fa-table"></i>Content</a>
                    </li>

                    <li class="@if(Request::segment(1) == 'transaksi') {{'active'}} @endif">
                        <a href="{{  url('/transaksi') }}"> <i class="menu-icon fa fa-table"></i>Operator</a>
                    </li>

                    <li class="@if(Request::segment(1) == 'transaksi') {{'active'}} @endif">
                        <a href="{{  url('/transaksi') }}"> <i class="menu-icon fa fa-table"></i>Setting</a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
         
                    <div class="header-left">

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{URL::asset('assets/img/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{url('/logout')}}"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>



                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        @yield('page')


        <!-- <script src="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}"></script>
        <script src="{{URL::asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}"></script>
        <script src="{{URL::asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}"></script>
        <script src="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}"></script>
        <script src="{{URL::asset('assets/dist/css/adminlte.min.css')}}"></script>
        <script src="{{URL::asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}"></script>
        <script src="{{URL::asset('assets/plugins/daterangepicker/daterangepicker.css')}}"></script>
        <script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.min.css')}}"></script> -->






        <script src="{{URL::asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets/assets/js/main.js')}}"></script>

        <script src="{{URL::asset('assets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendors/jszip/dist/jszip.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{URL::asset('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/init-scripts/data-table/datatables-init.js')}}"></script>


</body>

</html>