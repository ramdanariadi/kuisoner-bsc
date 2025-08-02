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
                            <?php
                            $style = [
                                [
                                    'border' => 'border-primary',
                                    'bg' => 'bg-primary',
                                    'icon' => 'fas fa-school',
                                    'text' => 'text-primary',
                                    'rank' => 'Peringkat #1',
                                    'rank_en' => 'Champion',
                                ],
                                [
                                    'border' => 'border-warning',
                                    'bg' => 'bg-warning',
                                    'icon' => 'fas fa-trophy',
                                    'text' => 'text-warning',
                                    'rank' => 'Peringkat #2',
                                    'rank_en' => 'Runner Up',
                                ],
                                [
                                    'border' => 'border-secondary',
                                    'bg' => 'bg-secondary',
                                    'icon' => 'fas fa-medal',
                                    'text' => 'text-secondary',
                                    'rank' => 'Peringkat #3',
                                    'rank_en' => 'Third Place',
                                ],
                                [
                                    'border' => 'border-success',
                                    'bg' => 'bg-success',
                                    'icon' => 'fas fa-chart-line',
                                    'text' => 'text-success',
                                    'rank' => 'BENCHMARK NASIONAL'
                                ]
                            ];
                            ?>
                            <?php foreach ($schoolScores as $key => $school): if ($key > 2) break; ?>
                                <!-- Sekolah Anda -->
                                <div class="col-md-6 col-lg-3 mb-4">
                                    <div class="border {{ $style[$key]['border'] }} bg-light rounded p-3">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div class="{{ $style[$key]['bg'] }} text-white p-2 rounded-circle">
                                                <i class="{{ $style[$key]['icon'] }}"></i>
                                            </div>
                                            <div class="text-right">
                                                <div class="small {{ $style[$key]['text'] }}">{{auth()->check() ? (auth()->user()->school_id == $school->id ? 'SEKOLAH ANDA' : $style[$key]['rank_en']) : $style[$key]['rank_en']}}</div>
                                                <div class="font-weight-bold {{ $style[$key]['text'] }}">Peringkat #{{ $key + 1 }}</div>
                                            </div>
                                        </div>
                                        <h5 class="{{ $style[$key]['text'] }}">{{ $school->name }}</h5>
                                        <p class="h3 font-weight-bold {{ $style[$key]['text'] }}">{{ $school->score }}</p>
                                        <div class="progress mb-1" style="height: 10px;">
                                            <div class="progress-bar {{ $style[$key]['bg'] }}" style="width: <?= $school->score ?>%;"></div>
                                        </div>
                                        <p class="small text-danger mb-0"><i class="fas fa-arrow-down mr-1"></i>-2.1% dari Q3</p>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                            <!-- Peringkat 1 -->
                            <div class="col-md-6 col-lg-3 mb-4 d-none">
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
                            <div class="col-md-6 col-lg-3 mb-4 d-none">
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
                                            <div class="font-weight-bold text-success">Sekolah</div>
                                        </div>
                                    </div>
                                    <h5 class="text-success">Rata-rata Sekolah</h5>
                                    <p class="h3 font-weight-bold text-success">{{$schoolAvg}}</p>
                                    <div class="progress mb-1" style="height: 10px;">
                                        <div class="progress-bar bg-success" style="width: <?= $schoolAvg ?>%;"></div>
                                    </div>
                                    <p class="small text-success mb-0"><i class="fas fa-arrow-up mr-1"></i>+0.9% dari Q3</p>
                                </div>
                            </div>

                            @if(auth()->check())
                            <div class="col-md-6 col-lg-6 mb-4">
                                <!-- Benchmarking Analysis -->
                                <div class="mt-4 p-3 bg-light border-left border-primary rounded">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-primary text-white p-1 rounded-circle mr-2">
                                            <i class="fas fa-chart-bar"></i>
                                        </div>
                                        <div class="w-100">
                                            <h5 class="text-primary font-weight-bold mb-2">Analisis Benchmarking</h5>
                                            <div class="row text-muted small">
                                                <div class="col-md-6 mb-2">
                                                    <div><strong>Posisi Anda:</strong> Peringkat {{$yourSchoolScores->position}} dari {{count($schoolScores)}} sekolah</div>
                                                    <div><strong>Gap dengan #1:</strong> {{$yourSchoolScores->score_gap_with_first_school}} poin ({{$schoolScores->first()->name}})</div>
                                                    <div><strong>@if($yourSchoolScores->score_gap_with_avg > 0)Di atas rata-rata:@else Di bawah rata-rata:@endif</strong> {{$yourSchoolScores->score_gap_with_avg}} poin sekolah</div>
                                                </div>
                                                <div class="col-md-6 mb-2 d-none">
                                                    <p><strong>Kekuatan:</strong> Perspektif Keuangan (85 - Rank #2)</p>
                                                    <p><strong>Area Perbaikan:</strong> Perspektif Pelanggan (72 - Rank #8)</p>
                                                    <p><strong>Target Q1 2025:</strong> Naik ke peringkat #2 (target: 82+)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="mt-2 bg-white rounded shadow p-4 mb-4">
                        <div class="col-12 d-flex justify-content-between align-items-center mb-4">
                            <h3 class="h5 font-weight-bold text-dark">Perspektif BSC</h3>
                        </div>
                        @php
                        $perspectives = [
                        ['icon' => 'fas fa-dollar-sign', 'color' => 'success', 'border-color' => '#22c55e', 'linear-gradient' => 'linear-gradient(to bottom right, #f0fdf4, #dcfce7)'],
                        ['icon' => 'fas fa-users', 'color' => 'primary', 'border-color' => '#3b82f6', 'linear-gradient' => 'linear-gradient(to bottom right, #eff6ff, #dbeafe)'],
                        ['icon' => 'fas fa-cogs', 'color' => 'purple', 'border-color' => '#a855f7', 'linear-gradient' => 'linear-gradient(to bottom right, #f5f3ff, #ede9fe)'],
                        ['icon' => 'fas fa-graduation-cap', 'color' => 'warning', 'border-color' => '#f97316', 'linear-gradient' => 'linear-gradient(to bottom right, #fff7ed, #ffedd5)']
                        ];
                        @endphp

                        <div class="row mb-4">
                            <?php foreach ($perfectiveBsc as $key => $perspective): ?>
                                <div class="col-12 col-md-6 col-lg-3 mb-4">
                                    <div class="card border-left-{{$perspectives[$key]['color']}} shadow p-3" style="background: <?= $perspectives[$key]['linear-gradient'] ?>; border-left: 4px solid <?= $perspectives[$key]['border-color'] ?>; border-radius: 1rem;">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div class="p-3 rounded-circle text-white" style="background-color: <?= $perspectives[$key]['border-color'] ?>;">
                                                <i class="{{ $perspectives[$key]['icon'] }} fa-lg"></i>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-muted small">Target: {{$perspective->target}}</div>
                                                @php
                                                $percentageChange = round(($perspective->score - $perspective->target) / $perspective->target * 100, 2);
                                                @endphp
                                                <div class="font-weight-bold @if($percentageChange > 0) text-success @elseif($percentageChange < 0) text-danger @endif">{{sprintf("%+0.2f", $percentageChange)}}%</div>
                                            </div>
                                        </div>
                                        <h5 class="font-weight-bold text-dark mb-2">{{ $perspective->name }}</h5>
                                        <div class="d-flex align-items-end mb-3">
                                            <span class="h3 font-weight-bold mb-0" style="color: <?= $perspectives[$key]['border-color'] ?>;">{{ $perspective->score }}</span>
                                            <span class="ml-2 text-muted small mb-1">/ 100</span>
                                        </div>
                                        <div class="progress mb-2" style="height: 8px;">
                                            <div class="progress-bar" role="progressbar" style="width: <?= $perspective->score ?>%; background-color: <?= $perspectives[$key]['border-color'] ?>;"></div>
                                        </div>
                                        @if($perspective->score == 100)
                                        <p class="text-success small font-weight-medium">Excellent Performance</p>
                                        @elseif($perspective->score >= 80)
                                        <p class="text-success small font-weight-medium">Good Performance</p>
                                        @elseif($perspective->score >= 60)
                                        <p class="text-warning small font-weight-medium">Needs Improvement</p>
                                        @else
                                        <p class="text-warning small font-weight-medium">Needs Attention</p>
                                        @endif
                                    </div>
                                </div>
                            <?php endforeach; ?>

                            <div class="col-12 col-md-6 col-lg-3 mb-4 d-none">
                                <div class="card border-left-primary shadow p-3" style="background: linear-gradient(to bottom right, #eff6ff, #dbeafe); border-left: 4px solid #3b82f6; border-radius: 1rem;">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="bg-primary p-3 rounded-circle text-white">
                                            <i class="fas fa-users fa-lg"></i>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-muted small">Target: 75</div>
                                            <div class="font-weight-bold text-danger">-4.0%</div>
                                        </div>
                                    </div>
                                    <h5 class="font-weight-bold text-dark mb-2">Perspektif Pelanggan</h5>
                                    <div class="d-flex align-items-end mb-3">
                                        <span class="h3 font-weight-bold text-primary mb-0">72</span>
                                        <span class="ml-2 text-muted small mb-1">/ 100</span>
                                    </div>
                                    <div class="progress mb-2" style="height: 8px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%"></div>
                                    </div>
                                    <p class="text-warning small font-weight-medium">Needs Improvement</p>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-3 mb-4 d-none">
                                <div class="card border-left-purple shadow p-3" style="background: linear-gradient(to bottom right, #f5f3ff, #ede9fe); border-left: 4px solid #a855f7; border-radius: 1rem;">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="p-3 rounded-circle text-white" style="background-color: #a855f7;">
                                            <i class="fas fa-cogs fa-lg"></i>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-muted small">Target: 85</div>
                                            <div class="font-weight-bold text-danger">-8.2%</div>
                                        </div>
                                    </div>
                                    <h5 class="font-weight-bold text-dark mb-2">Proses Internal</h5>
                                    <div class="d-flex align-items-end mb-3">
                                        <span class="h3 font-weight-bold text-purple mb-0" style="color: #a855f7;">78</span>
                                        <span class="ml-2 text-muted small mb-1">/ 100</span>
                                    </div>
                                    <div class="progress mb-2" style="height: 8px;">
                                        <div class="progress-bar" role="progressbar" style="width: 78%; background-color: #a855f7;"></div>
                                    </div>
                                    <p class="text-success small font-weight-medium">Good Performance</p>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-3 mb-4 d-none">
                                <div class="card border-left-warning shadow p-3" style="background: linear-gradient(to bottom right, #fff7ed, #ffedd5); border-left: 4px solid #f97316; border-radius: 1rem;">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="p-3 rounded-circle text-white" style="background-color: #f97316;">
                                            <i class="fas fa-graduation-cap fa-lg"></i>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-muted small">Target: 70</div>
                                            <div class="font-weight-bold text-danger">-2.9%</div>
                                        </div>
                                    </div>
                                    <h5 class="font-weight-bold text-dark mb-2">Pembelajaran &amp; Pertumbuhan</h5>
                                    <div class="d-flex align-items-end mb-3">
                                        <span class="h3 font-weight-bold text-warning mb-0" style="color: #f97316;">68</span>
                                        <span class="ml-2 text-muted small mb-1">/ 100</span>
                                    </div>
                                    <div class="progress mb-2" style="height: 8px;">
                                        <div class="progress-bar" role="progressbar" style="width: 68%; background-color: #f97316;"></div>
                                    </div>
                                    <p class="text-warning small font-weight-medium">Needs Attention</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <canvas id="myChart"></canvas>
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
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
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
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard3.js')}}"></script>

<script>
    $(document).ready(function() {
        const ctx = document.getElementById('myChart');
        let target = []
        let labels = []
        let currentScore = []
        <?php foreach ($perfectiveBsc as $key => $perspective): ?>
            labels.push('<?= $perspective->name ?>')
            target.push(<?= $perspective->target ?>)
            currentScore.push(<?= $perspective->score ?>)
        <?php endforeach ?>
        const data = {
            labels: labels,
            datasets: [{
                label: 'Target',
                data: target,
                fill: true,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)'
            }, {
                label: 'Current Score',
                data: currentScore,
                fill: true,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgb(54, 162, 235)',
                pointBackgroundColor: 'rgb(54, 162, 235)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(54, 162, 235)'
            }]
        };
        const config = {
            type: 'radar',
            data: data,
            options: {
                elements: {
                    line: {
                        borderWidth: 3
                    }
                },
                scales: {
                    r: {
                        angleLines: {
                            display: false
                        },
                        suggestedMin: 10,
                        suggestedMax: 100
                    }
                }
            },
        };
        const chart = new Chart(ctx, config);
    })
</script>

</html>