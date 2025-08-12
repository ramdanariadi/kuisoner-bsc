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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            @if($questionnaires)
                            @php
                            $questionnaire = $questionnaires[0];
                            $questionnaireId = $questionnaire ? $questionnaire->questionnaire_id : null;
                            $questionnaireTitle = $questionnaire ? $questionnaire->title : null;
                            $questionnaireRespondent = $questionnaire ? $questionnaire->respondent : null;
                            $perspective = $questionnaire ? $questionnaire->perspective : null;
                            @endphp
                            @endif
                            <h1 class="m-0"><?= $perspective ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Kuisoner 1</li> -->
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @if($questionnaires)
                    <div class="row">
                        <h1 class="w-100"><?= $questionnaireTitle ?></h1>
                        <p class="w-100"><strong>Responden:</strong> <?= $questionnaireRespondent ?></p>
                        <p class="w-100 mb-0"><strong>Petunjuk Pengisian:</strong></p>
                        <ol class="w-100">
                            <li>Bacalah setiap pernyataan dengan saksama.</li>
                            <li>Pilih angka yang sesuai dengan pendapat Anda.</li>
                            <li>
                                Skala Yang Digunakan:<br>
                                <ul>
                                    <li>1 = Sangat Tidak Setuju / Sangat Buruk / Sangat Tidak Efektif</li>
                                    <li>2 = Tidak Setuju / Buruk / Tidak Efektif</li>
                                    <li>3 = Cukup Setuju / Cukup Baik / Cukup Efektif</li>
                                    <li>4 = Setuju / Baik / Efektif</li>
                                    <li>5 = Sangat Setuju / Sangat Baik / Sangat Efektif</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kuisionerModal">
                            Isi Kuisioner
                        </button>
                    </div>
                    <div class="row">
                        <form action="#" method="post">
                            <table class="table">
                                <tbody>
                                    @php
                                    $alphabet = range('A', 'Z');
                                    $alphabetIndex = -1;
                                    $statementIndex = 0;
                                    $questionnaireTmp = null;
                                    @endphp
                                    @foreach($questionnaires as $questionnaire)
                                    @if($questionnaireTmp == null || $questionnaireTmp->perspective != $questionnaire->perspective)
                                    @php
                                    $questionnaireTmp = $questionnaire;
                                    $alphabetIndex++;
                                    @endphp
                                    <thead>
                                        <tr class="bg-success">
                                            <th colspan="7">
                                                <h2><?= $alphabet[$alphabetIndex] . "." . $questionnaireTmp->perspective ?></h2>
                                            </th>
                                        </tr>
                                        <tr class="bg-success">
                                            <th>No</th>
                                            <th class="statement">Pernyataan</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                        </tr>
                                    </thead>
                                    @endif
                                    <tr>
                                        <td><?= $alphabet[$alphabetIndex] . ++$statementIndex ?></td>
                                        <td class="statement"><?= $questionnaire->statement ?></td>
                                        <td><input type="radio" name="answers[<?= $questionnaire->questionnaire_id ?>][<?= $questionnaire->perspective_id ?>][<?= $questionnaire->statement_id ?>]" <?= $questionnaire->value == 1 ? 'checked' : '' ?> value="1" required></td>
                                        <td><input type="radio" name="answers[<?= $questionnaire->questionnaire_id ?>][<?= $questionnaire->perspective_id ?>][<?= $questionnaire->statement_id ?>]" <?= $questionnaire->value == 2 ? 'checked' : '' ?> value="2"></td>
                                        <td><input type="radio" name="answers[<?= $questionnaire->questionnaire_id ?>][<?= $questionnaire->perspective_id ?>][<?= $questionnaire->statement_id ?>]" <?= $questionnaire->value == 3 ? 'checked' : '' ?> value="3"></td>
                                        <td><input type="radio" name="answers[<?= $questionnaire->questionnaire_id ?>][<?= $questionnaire->perspective_id ?>][<?= $questionnaire->statement_id ?>]" <?= $questionnaire->value == 4 ? 'checked' : '' ?> value="4"></td>
                                        <td><input type="radio" name="answers[<?= $questionnaire->questionnaire_id ?>][<?= $questionnaire->perspective_id ?>][<?= $questionnaire->statement_id ?>]" <?= $questionnaire->value == 5 ? 'checked' : '' ?> value="5"></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="6"></td>
                                        <td>
                                            <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Simpan</button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </form>

                    </div>
                    @endif
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Modal -->
        <div class="modal fade" id="kuisionerModal" tabindex="-1" role="dialog" aria-labelledby="kuisionerModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="kuisionerModalLabel">Kuisioner Efektivitas Aplikasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form id="form-kuisioner">
                            <!-- Bagian A. SUS -->
                            <h3 class="mt-4 mb-2">A. System Usability Scale (SUS)</h3>

                            <?php foreach ($applicationPerformanceQuestionnaire as $key => $questionnaire): if($questionnaire->questionnaire_type_id != 5) break; ?>

                                <div class="form-group">
                                    <label><?= $key + 1 ?>. <?= $questionnaire->statement ?></label>
                                    <div>
                                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="answers[<?= $questionnaire->questionnaire_id ?>][<?= $questionnaire->perspective_id ?>][<?= $questionnaire->statement_id ?>]" <?= $questionnaire->value == 1 ? 'checked' : '' ?> value="1"> <label class="form-check-label">Sangat Tidak Setuju</label></div>
                                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="answers[<?= $questionnaire->questionnaire_id ?>][<?= $questionnaire->perspective_id ?>][<?= $questionnaire->statement_id ?>]" <?= $questionnaire->value == 2 ? 'checked' : '' ?> value="2"> <label class="form-check-label">Tidak Setuju</label></div>
                                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="answers[<?= $questionnaire->questionnaire_id ?>][<?= $questionnaire->perspective_id ?>][<?= $questionnaire->statement_id ?>]" <?= $questionnaire->value == 3 ? 'checked' : '' ?> value="3"> <label class="form-check-label">Netral</label></div>
                                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="answers[<?= $questionnaire->questionnaire_id ?>][<?= $questionnaire->perspective_id ?>][<?= $questionnaire->statement_id ?>]" <?= $questionnaire->value == 4 ? 'checked' : '' ?> value="4"> <label class="form-check-label">Setuju</label></div>
                                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="answers[<?= $questionnaire->questionnaire_id ?>][<?= $questionnaire->perspective_id ?>][<?= $questionnaire->statement_id ?>]" <?= $questionnaire->value == 5 ? 'checked' : '' ?> value="5"> <label class="form-check-label">Sangat Setuju</label></div>
                                    </div>
                                </div>

                            <?php endforeach ?>

                            <!-- Tambahkan sus_3 sampai sus_10 dengan pola yang sama -->

                            <!-- Bagian B. Efektivitas -->
                            <h3 class="mt-4 mb-2">B. Efektivitas Penggunaan Aplikasi</h3>

                            <?php $no = 1;
                            foreach ($applicationPerformanceQuestionnaire as $key => $questionnaire): if($questionnaire->questionnaire_type_id != 6) continue; ?>
                                <div class="form-group">
                                    <label><?= $no++ ?>. <?= $questionnaire->statement ?></label>
                                    <div>
                                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="answers[<?= $questionnaire->questionnaire_id ?>][<?= $questionnaire->perspective_id ?>][<?= $questionnaire->statement_id ?>]" <?= $questionnaire->value == 1 ? 'checked' : '' ?> value="1"> <label class="form-check-label">Sangat Tidak Setuju</label></div>
                                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="answers[<?= $questionnaire->questionnaire_id ?>][<?= $questionnaire->perspective_id ?>][<?= $questionnaire->statement_id ?>]" <?= $questionnaire->value == 2 ? 'checked' : '' ?> value="2"> <label class="form-check-label">Tidak Setuju</label></div>
                                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="answers[<?= $questionnaire->questionnaire_id ?>][<?= $questionnaire->perspective_id ?>][<?= $questionnaire->statement_id ?>]" <?= $questionnaire->value == 3 ? 'checked' : '' ?> value="3"> <label class="form-check-label">Netral</label></div>
                                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="answers[<?= $questionnaire->questionnaire_id ?>][<?= $questionnaire->perspective_id ?>][<?= $questionnaire->statement_id ?>]" <?= $questionnaire->value == 4 ? 'checked' : '' ?> value="4"> <label class="form-check-label">Setuju</label></div>
                                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="answers[<?= $questionnaire->questionnaire_id ?>][<?= $questionnaire->perspective_id ?>][<?= $questionnaire->statement_id ?>]" <?= $questionnaire->value == 5 ? 'checked' : '' ?> value="5"> <label class="form-check-label">Sangat Setuju</label></div>
                                    </div>
                                </div>
                            <?php endforeach ?>

                            <!-- Tambahkan efektivitas_2 sampai efektivitas_8 -->

                            <!-- Bagian D. Komentar -->
                            <h6 class="mt-4 mb-2">Komentar dan Saran</h6>
                            <div class="form-group">
                                <textarea class="form-control" name="komentar" rows="3" placeholder="Tulis komentar Anda di sini..."></textarea>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-success">Kirim</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


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
<!-- <!-- <script src="{{asset('dist/js/demo.js')}}"></script> --> -->
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
                    $('#kuisionerModal').modal('hide')
                    if(response.status) {
                        // If the response indicates success, show a success message
                        Swal.fire({
                            title: "Good job!",
                            text: response.message,
                            icon: "success"
                        }).then((result) => {
                            if(response.count === 0){
                                $('#kuisionerModal').modal('show');
                            }
                        })
                    } else {
                        // If the response indicates failure, show an error message
                        Swal.fire({
                            title: "Error!",
                            text: response.message,
                            icon: "error"
                        });
                    }
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while saving data: ' + error);
                }
            });
        });
    });
</script>

</html>