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
    <link rel="icon" type="image/png" href="{{asset('dist/img/Logo-Tut-Wuri-Handayani-PNG-Warna.png')}}">
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
            <img class="animation__wobble" src="{{asset('dist/img/tut-wuri-handayani.png')}}" alt="AdminLTELogo" height="60" width="60">
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
                        <img class="animation__wobble" src="{{asset('dist/img/Logo-Tut-Wuri-Handayani-PNG-Warna.png')}}" alt="AdminLTELogo" height="60" width="60">
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
                        @if(auth()->check() && (auth()->user()->hasRole('administrator') || auth()->user()->hasRole('super admin')))
                                                <li class="nav-item">
                            <a href="{{route('frontend.questionnaire.penilaian')}}" class="nav-link @if(request()->routeIs('frontend.questionnaire.penilaian')) active @endif">
                                <i class="fa fa-list"></i>
                                <p>Penilaian</p>
                            </a>
                        </li>
                        @endif
                        @if(auth()->check() && auth()->user()->hasRole('super admin'))
                        <li class="nav-item">
                            <a href="{{route('frontend.questionnaire.report')}}" class="nav-link @if(request()->routeIs('frontend.questionnaire.report')) active @endif">
                                <i class="fa fa-chart-bar"></i>
                                <p>Report</p>
                            </a>
                        </li>
                        @endif
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
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="h4 font-weight-bold text-dark mb-4">Sistem Penilaian BSC</h2>

                    <!-- Scoring Overview -->
                    <div class="row mb-4">
                        <div class="col-lg-6 mb-3">
                            <h5 class="font-weight-bold text-dark mb-3">Bobot Perspektif</h5>
                            <div class="mb-2 p-3 bg-success bg-opacity-10 rounded">
                                <div class="d-flex justify-content-between">
                                    <span class="text-white">Keuangan</span>
                                    <span class="font-weight-bold text-white">25%</span>
                                </div>
                            </div>
                            <div class="mb-2 p-3 bg-primary bg-opacity-10 rounded">
                                <div class="d-flex justify-content-between">
                                    <span class="text-white">Pelanggan</span>
                                    <span class="font-weight-bold text-white">30%</span>
                                </div>
                            </div>
                            <div class="mb-2 p-3 bg-purple bg-opacity-10 rounded">
                                <div class="d-flex justify-content-between">
                                    <span class="text-white">Proses Internal</span>
                                    <span class="font-weight-bold text-white">25%</span>
                                </div>
                            </div>
                            <div class="mb-2 p-3 bg-warning bg-opacity-10 rounded">
                                <div class="d-flex justify-content-between">
                                    <span class="text-white">Pembelajaran &amp; Pertumbuhan</span>
                                    <span class="font-weight-bold text-white">20%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="font-weight-bold text-dark mb-3">Skala Penilaian</h5>
                            <div class="mb-2 d-flex align-items-center bg-success bg-opacity-25 rounded p-2">
                                <div class="badge badge-light rounded-circle p-2 mr-3">5</div>
                                <span class="text-white">Sangat Baik (81-100)</span>
                            </div>
                            <div class="mb-2 d-flex align-items-center bg-primary bg-opacity-25 rounded p-2">
                                <div class="badge badge-light rounded-circle p-2 mr-3">4</div>
                                <span class="text-white">Baik (61-80)</span>
                            </div>
                            <div class="mb-2 d-flex align-items-center bg-warning bg-opacity-25 rounded p-2">
                                <div class="badge badge-light rounded-circle p-2 mr-3">3</div>
                                <span class="text-white">Cukup (41-60)</span>
                            </div>
                            <div class="mb-2 d-flex align-items-center bg-orange bg-opacity-25 rounded p-2">
                                <div class="badge badge-light rounded-circle p-2 mr-3">2</div>
                                <span class="text-white">Kurang (21-40)</span>
                            </div>
                            <div class="mb-2 d-flex align-items-center bg-danger bg-opacity-25 rounded p-2">
                                <div class="badge badge-light rounded-circle p-2 mr-3">1</div>
                                <span class="text-white">Sangat Kurang (0-20)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Current Scores -->
                    <h5 class="font-weight-bold text-dark mb-3">Skor Saat Ini</h5>
                    <div class="row mb-4">
                        @php
                        $perspectives = [
                        ['color' => 'success'],
                        ['color' => 'primary'],
                        ['color' => 'purple'],
                        ['color' => 'warning']
                        ];
                        @endphp
                        @foreach ($reports as $key => $report)
                        <div class="col-md-6 col-lg-3 mb-3">
                            <div class="card bg-{{ $perspectives[$key]['color'] }} bg-opacity-10 text-center p-3">
                                <h3 class="text-white font-weight-bold">{{ $report->score }}</h3>
                                <div class="text-white">{{ $report->perspective_name }}</div>
                                <small class="text-white">{{ $report->total_respondent }} Responden</small>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-6 col-lg-3 mb-3 d-none">
                            <div class="card bg-primary bg-opacity-10 text-center p-3">
                                <h3 class="text-white font-weight-bold">72</h3>
                                <div class="text-white">Pelanggan</div>
                                <small class="text-white">Baik</small>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3 d-none">
                            <div class="card bg-purple bg-opacity-10 text-center p-3">
                                <h3 class="text-white font-weight-bold">78</h3>
                                <div class="text-white">Proses Internal</div>
                                <small class="text-white">Baik</small>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3 d-none">
                            <div class="card bg-warning bg-opacity-10 text-center p-3">
                                <h3 class="text-white font-weight-bold">68</h3>
                                <div class="text-white">Pembelajaran</div>
                                <small class="text-white">Baik</small>
                            </div>
                        </div>
                    </div>

                    <!-- Score Calculation -->
                    <div class="card bg-light p-4">
                        <h5 class="font-weight-bold text-dark mb-3">Perhitungan Skor Total</h5>
                        <?php

                        // [
                        //     {
                        //         respondent: "Siswa",
                        //         perspective: "PERSPEKTIF KEUANGAN",
                        //         perspective_id: 1,
                        //         total_answers: 5,
                        //         average_value: "3.0000"
                        //     }
                        // ]

                        $totalScore = 0;
                        foreach ($reports as $report) {
                            $score = $report->score * $report->weight_value;
                            $totalScore += $score;
                            $percentage = $report->weight_value * 100;
                            echo "<div class='mb-2 d-flex justify-content-between'>
                            <span>$report->perspective_name ($report->score x $percentage%)</span>
                            <span class='font-weight-bold'>{$score}</span>
                          </div>";
                        }

                        echo "<hr>
                      <div class='d-flex justify-content-between text-success font-weight-bold'>
                          <span>Total Skor BSC</span>
                          <span>{$totalScore}</span>
                      </div>";

                        ?>
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
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
        // Handle form submission
        $('form').on('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Collect form data
            var formData = $(this).serialize();

            // Send data to the server using AJAX
            $.ajax({
                url: '/questionnaire/answer', // Adjust the URL as needed
                type: 'POST',
                data: formData,
                success: function(response) {
                    Swal.fire({
                        title: "Good job!",
                        text: "Data saved successfully!",
                        icon: "success"
                    });
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while saving data: ' + error);
                }
            });
        });
    });
</script>

</html>