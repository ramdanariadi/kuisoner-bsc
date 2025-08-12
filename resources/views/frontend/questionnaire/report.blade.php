<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('bootstrap-5.0.2-dist\css\bootstrap.min.css')}}"> -->
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="wrapper">
        <form id="logout-form" style="display: none;" action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}
        </form>
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-success">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Quisoner</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="{{ route('frontend.users.profile', auth()->user()->username) }}" class="dropdown-item">
                            <i class="fas fa-user mr-2"></i> My Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out-alt"></i> LOGOUT
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-success elevation-4">
            <!-- Brand Logo -->
            <!-- <a href="index3.html" class="brand-link"> -->
            <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
            <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
            <!-- </a> -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Kuisoner</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
                </div>
            </div>
            </div> -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{route('frontend.index')}}" class="nav-link">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('frontend.questionnaire.index')}}" class="nav-link @if(request()->routeIs('frontend.questionnaire.index')) active @endif">
                                <i class="fa fa-clipboard-list"></i>
                                <p>Kuisoner</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('frontend.questionnaire.penilaian')}}" class="nav-link @if(request()->routeIs('frontend.questionnaire.penilaian')) active @endif">
                                <i class="fa fa-list"></i>
                                <p>Penilaian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('frontend.questionnaire.report')}}" class="nav-link @if(request()->routeIs('frontend.questionnaire.report')) active @endif">
                                <i class="fa fa-chart-bar"></i>
                                <p>Report</p>
                            </a>
                        </li>
                        <li class="nav-item menu-open d-none">
                            <a href="#" class="nav-link">
                                <i class="fa fa-clipboard-list"></i>
                                <p>Kuisoner<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('frontend.questionnaire.keuangan')}}" class="nav-link @if(request()->routeIs('frontend.questionnaire.keuangan')) active @endif">
                                        <i class="fa fa-arrow-right nav-icon"></i>
                                        <p>KEUANGAN</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('frontend.questionnaire.pelanggan')}}" class="nav-link @if(request()->routeIs('frontend.questionnaire.pelanggan')) active @endif">
                                        <i class="fa fa-arrow-right nav-icon"></i>
                                        <p>PELANGGAN</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('frontend.questionnaire.internal')}}" class="nav-link @if(request()->routeIs('frontend.questionnaire.internal')) active @endif">
                                        <i class="fa fa-arrow-right nav-icon"></i>
                                        <p>PROSES INTERNAL</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('frontend.questionnaire.pertumbuhan')}}" class="nav-link @if(request()->routeIs('frontend.questionnaire.pertumbuhan')) active @endif">
                                        <i class="fa fa-arrow-right nav-icon"></i>
                                        <p>PEMBELAJARAN DAN PERTUMBUHAN</p>
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
            <div class="container-fluid">
                <div class="w-100 d-flex align-items-center justify-content-between mb-2 mt-2">
                    <h3>Laporan Benchmarking BSC Antar Sekolah</h3>
                    <button class="btn btn-warning btn-sm text-white" onclick="exportTableToExcel()"><i class="fa fa-file-excel"></i> Export to Excel</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">Ringkasan Hasil</div>
                    <div class="card-body">
                        <table class="table table-bordered" id="rankSchool">
                            <thead>
                                <tr>
                                    <th>Sekolah</th>
                                    <th>Skor</th>
                                    <th>Ranking</th>
                                    <!-- <th>Perubahan dari S1</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schoolScores as $key => $scoreScore)
                                <tr>
                                    <td>{{ $scoreScore->name }}</td>
                                    <td>{{ $scoreScore->score }}</td>
                                    <td>#{{ $key }}</td>
                                    <!-- <td></td> -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header bg-success text-white">Analisis BSC SMAN 1 Selong</div>
                    <div class="card-body">
                        <table class="table table-striped" id="scoreBsc">
                            <thead>
                                <tr>
                                    <th>Perspektif</th>
                                    <th>Skor</th>
                                    <th>Target</th>
                                    <!-- <th>Keterangan</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perfectiveBsc as $perfective)
                                <tr>
                                    <td>{{ $perfective->name }}</td>
                                    <td>{{ $perfective->score }}</td>
                                    <td>{{ $perfective->target }}</td>
                                    <!-- <td></td> -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2025 <a href="https://Kuisoner">Kuisoner</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->
</body>
<!-- <script src="{{ asset('bootstrap-5.0.2-dist\js\bootstrap.min.js') }}"></script> -->
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{asset('dist/js/demo.js')}}"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard3.js')}}"></script>
<!-- Include SheetJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script>
    function exportTableToExcel() {
        const wb = XLSX.utils.book_new();

        // First table
        const ws1 = XLSX.utils.table_to_sheet(document.getElementById("rankSchool"));
        XLSX.utils.book_append_sheet(wb, ws1, "Peringkat Sekolah");

        // Second table
        const ws2 = XLSX.utils.table_to_sheet(document.getElementById("scoreBsc"));
        XLSX.utils.book_append_sheet(wb, ws2, "Score BSC");

        // Write to file
        XLSX.writeFile(wb, "Laporan.xlsx");
    }
</script>

</html>