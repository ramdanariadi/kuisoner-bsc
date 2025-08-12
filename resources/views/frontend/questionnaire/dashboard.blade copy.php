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
                @if(auth()->check())
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
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">
                        <i class="fas fa-sign-in-alt"></i> LOGIN
                    </a>
                </li>
                @endif
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
                            <a href="{{route('frontend.index')}}" class="nav-link active">
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
                                    <a href="{{route('frontend.questionnaire.keuangan')}}" class="nav-link">
                                        <i class="fa fa-arrow-right nav-icon"></i>
                                        <p>KEUANGAN</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('frontend.questionnaire.pelanggan')}}" class="nav-link">
                                        <i class="fa fa-arrow-right nav-icon"></i>
                                        <p>PELANGGAN</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('frontend.questionnaire.internal')}}" class="nav-link">
                                        <i class="fa fa-arrow-right nav-icon"></i>
                                        <p>PROSES INTERNAL</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('frontend.questionnaire.pertumbuhan')}}" class="nav-link">
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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <!-- $data = [
                        'userCount' => $userCount,
                        'userCompleted' => $userCompleted,
                        'totalScore' => $totalScore,
                    ]; -->
                    <!-- KPI Card Section -->
                    <div class="row mb-4 d-none">
                        <!-- Total Responden -->
                        <!-- <div class="col-md-6 col-lg-3 mb-4">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="bg-success bg-opacity-25 p-3 rounded-circle">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-muted small">vs Target</div>
                                            <div class="text-success font-weight-bold">+{{($userCount - $userCountMonth)/$userCount*100}}%</div>
                                        </div>
                                    </div>
                                    <h5 class="card-title text-dark font-weight-bold w-100">Total Responden</h5>
                                    <p class="display-4 text-success font-weight-bold">{{$userCount}}</p>
                                    <div class="d-float">
                                        <div class="progress mb-1" style="height: 13px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: {{ $userCount/100*100 }}%">{{ $userCount/100*100 }}%</div>
                                        </div>
                                    </div>
                                    <small class="text-success">+{{($userCount - $userCountMonth)/$userCount*100}}% dari bulan lalu</small>
                                </div>
                            </div>
                        </div> -->

                        <!-- Selesai -->
                        <!-- <div class="col-md-6 col-lg-3 mb-4">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="bg-info bg-opacity-25 p-3 rounded-circle">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-muted small">Completion Rate</div>
                                            <div class="text-info font-weight-bold">76.5%</div>
                                        </div>
                                    </div>
                                    <h5 class="card-title text-dark font-weight-bold w-100">Selesai</h5>
                                    <p class="display-4 text-info font-weight-bold">189</p>
                                    <div class="progress mb-1" style="height: 13px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 76.5%">76.5%</div>
                                    </div>
                                    <small class="text-info">+8% dari target</small>
                                </div>
                            </div>
                        </div> -->

                        <!-- Dalam Proses -->
                        <!-- <div class="col-md-6 col-lg-3 mb-4">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="bg-warning bg-opacity-25 p-3 rounded-circle">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-muted small">Avg. Time</div>
                                            <div class="text-warning font-weight-bold">15 min</div>
                                        </div>
                                    </div>
                                    <h5 class="card-title text-dark font-weight-bold w-100">Dalam Proses</h5>
                                    <p class="display-4 text-warning font-weight-bold">58</p>
                                    <div class="progress mb-1" style="height: 13px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%">60%</div>
                                    </div>
                                    <small class="text-warning">Deadline 3 hari</small>
                                </div>
                            </div>
                        </div> -->

                        <!-- Skor BSC -->
                        <!-- <div class="col-md-6 col-lg-3 mb-4">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="bg-primary bg-opacity-25 p-3 rounded-circle">
                                            <i class="fas fa-percentage"></i>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-muted small">Trend</div>
                                            <div class="text-danger font-weight-bold">-{{ 100-($totalScore > 80 ? 0 : $totalScore)/80*100 }}%</div>
                                        </div>
                                    </div>
                                    <h5 class="card-title text-dark font-weight-bold w-100">Skor BSC</h5>
                                    <p class="display-4 text-primary font-weight-bold">{{ $totalScore }}</p>
                                    <div class="progress mb-1" style="height: 13px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $totalScore }}%">{{ $totalScore }}%</div>
                                    </div>
                                    <small class="text-muted">Target: 80.0</small>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <div class="row mt-2 bg-white rounded shadow p-4 mb-4">
                        <div class="col-12 d-flex justify-content-between align-items-center mb-4">
                            <h3 class="h5 font-weight-bold text-dark">Benchmarking Skor BSC Antar Sekolah</h3>
                            <div class="d-flex align-items-center">
                                <span class="text-muted small mr-2">Periode:</span>
                                <select class="form-control form-control-sm">
                                    <option>Q4 2024</option>
                                    <option>Q3 2024</option>
                                    <option>Q2 2024</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 row">
                            <!-- Sekolah Anda -->
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="border border-primary bg-light rounded p-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="bg-primary text-white p-2 rounded-circle">
                                            <i class="fas fa-school"></i>
                                        </div>
                                        <div class="text-right">
                                            <div class="small text-primary">SEKOLAH ANDA</div>
                                            <div class="font-weight-bold text-primary">Peringkat #3</div>
                                        </div>
                                    </div>
                                    <h5 class="text-primary">SMA Negeri 1 Jakarta</h5>
                                    <p class="h3 font-weight-bold text-primary">76.8</p>
                                    <div class="progress mb-1" style="height: 10px;">
                                        <div class="progress-bar bg-primary" style="width: 76.8%;"></div>
                                    </div>
                                    <p class="small text-danger mb-0"><i class="fas fa-arrow-down mr-1"></i>-2.1% dari Q3</p>
                                </div>
                            </div>

                            <!-- Peringkat 1 -->
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="border border-warning bg-light rounded p-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="bg-warning text-white p-2 rounded-circle">
                                            <i class="fas fa-trophy"></i>
                                        </div>
                                        <div class="text-right">
                                            <div class="small text-warning">PERINGKAT #1</div>
                                            <div class="font-weight-bold text-warning">Best Practice</div>
                                        </div>
                                    </div>
                                    <h5 class="text-warning">SMA Negeri 3 Bandung</h5>
                                    <p class="h3 font-weight-bold text-warning">89.2</p>
                                    <div class="progress mb-1" style="height: 10px;">
                                        <div class="progress-bar bg-warning" style="width: 89.2%;"></div>
                                    </div>
                                    <p class="small text-success mb-0"><i class="fas fa-arrow-up mr-1"></i>+4.3% dari Q3</p>
                                </div>
                            </div>

                            <!-- Peringkat 2 -->
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="border border-secondary bg-light rounded p-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="bg-secondary text-white p-2 rounded-circle">
                                            <i class="fas fa-medal"></i>
                                        </div>
                                        <div class="text-right">
                                            <div class="small text-secondary">PERINGKAT #2</div>
                                            <div class="font-weight-bold text-secondary">Runner Up</div>
                                        </div>
                                    </div>
                                    <h5 class="text-secondary">SMA Negeri 5 Surabaya</h5>
                                    <p class="h3 font-weight-bold text-secondary">82.4</p>
                                    <div class="progress mb-1" style="height: 10px;">
                                        <div class="progress-bar bg-secondary" style="width: 82.4%;"></div>
                                    </div>
                                    <p class="small text-success mb-0"><i class="fas fa-arrow-up mr-1"></i>+1.8% dari Q3</p>
                                </div>
                            </div>

                            <!-- Rata-rata Nasional -->
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="border border-success bg-light rounded p-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="bg-success text-white p-2 rounded-circle">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div class="text-right">
                                            <div class="small text-success">BENCHMARK</div>
                                            <div class="font-weight-bold text-success">Nasional</div>
                                        </div>
                                    </div>
                                    <h5 class="text-success">Rata-rata Nasional</h5>
                                    <p class="h3 font-weight-bold text-success">71.5</p>
                                    <div class="progress mb-1" style="height: 10px;">
                                        <div class="progress-bar bg-success" style="width: 71.5%;"></div>
                                    </div>
                                    <p class="small text-success mb-0"><i class="fas fa-arrow-up mr-1"></i>+0.9% dari Q3</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 mb-4">
                                <!-- Benchmarking Analysis -->
                                <div class="mt-4 p-3 bg-light border-left border-primary rounded">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-primary text-white p-1 rounded-circle mr-2">
                                            <i class="fas fa-chart-bar"></i>
                                        </div>
                                        <div>
                                            <h5 class="text-primary font-weight-bold mb-2">Analisis Benchmarking</h5>
                                            <div class="row text-muted small">
                                                <div class="col-md-6 mb-2">
                                                    <p><strong>Posisi Anda:</strong> Peringkat 3 dari 25 sekolah</p>
                                                    <p><strong>Gap dengan #1:</strong> 12.4 poin (SMA Negeri 3 Bandung)</p>
                                                    <p><strong>Di atas rata-rata:</strong> +5.3 poin dari nasional</p>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <p><strong>Kekuatan:</strong> Perspektif Keuangan (85 - Rank #2)</p>
                                                    <p><strong>Area Perbaikan:</strong> Perspektif Pelanggan (72 - Rank #8)</p>
                                                    <p><strong>Target Q1 2025:</strong> Naik ke peringkat #2 (target: 82+)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
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

</html>