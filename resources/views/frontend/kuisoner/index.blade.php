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

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
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
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
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
                            <a href="pages/widgets.html" class="nav-link active">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="fa fa-clipboard-list"></i>
                                <p>Kuisoner<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link active">
                                        <i class="fa fa-arrow-right nav-icon"></i>
                                        <p>PERSPEKTIF KEUANGAN</p>
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
                            <h1 class="m-0">Perspektif Keuangan</h1>
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
                    <div class="row">
                        <h1 class="w-100">Kuesioner Pengukuran Kinerja Sekolah Berbasis Balanced Scorecard</h1>
                        <p class="w-100"><strong>Responden:</strong> Kepala Sekolah</p>
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
                        <form action="#" method="post">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <h2>A. Perspektif Keuangan</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th class="statement">Pernyataan</th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                    </tr>
                                    <tr>
                                        <td>A1</td>
                                        <td class="statement">Sekolah memiliki sistem perencanaan anggaran berbasis data dan analisis risiko.</td>
                                        <td><input type="radio" name="A1" value="1" required></td>
                                        <td><input type="radio" name="A1" value="2"></td>
                                        <td><input type="radio" name="A1" value="3"></td>
                                        <td><input type="radio" name="A1" value="4"></td>
                                        <td><input type="radio" name="A1" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>A2</td>
                                        <td class="statement">Pengelolaan keuangan sekolah mengikuti prinsip transparansi dan akuntabilitas.</td>
                                        <td><input type="radio" name="A2" value="1" required></td>
                                        <td><input type="radio" name="A2" value="2"></td>
                                        <td><input type="radio" name="A2" value="3"></td>
                                        <td><input type="radio" name="A2" value="4"></td>
                                        <td><input type="radio" name="A2" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>A3</td>
                                        <td class="statement">Dana yang dialokasikan untuk peningkatan mutu pendidikan digunakan secara optimal.</td>
                                        <td><input type="radio" name="A3" value="1" required></td>
                                        <td><input type="radio" name="A3" value="2"></td>
                                        <td><input type="radio" name="A3" value="3"></td>
                                        <td><input type="radio" name="A3" value="4"></td>
                                        <td><input type="radio" name="A3" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>A4</td>
                                        <td class="statement">Sekolah secara rutin melakukan audit keuangan internal maupun eksternal.</td>
                                        <td><input type="radio" name="A4" value="1" required></td>
                                        <td><input type="radio" name="A4" value="2"></td>
                                        <td><input type="radio" name="A4" value="3"></td>
                                        <td><input type="radio" name="A4" value="4"></td>
                                        <td><input type="radio" name="A4" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>A5</td>
                                        <td class="statement">Sekolah memiliki sistem pelaporan keuangan berbasis teknologi yang dapat diakses oleh stakeholder.</td>
                                        <td><input type="radio" name="A5" value="1" required></td>
                                        <td><input type="radio" name="A5" value="2"></td>
                                        <td><input type="radio" name="A5" value="3"></td>
                                        <td><input type="radio" name="A5" value="4"></td>
                                        <td><input type="radio" name="A5" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7">
                                            <h2>B. Perspektif Pelanggan</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th class="statement">Pernyataan</th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                    </tr>
                                    <tr>
                                        <td>B1</td>
                                        <td class="statement">Sekolah memiliki mekanisme umpan balik dari siswa, orang tua, dan masyarakat untuk meningkatkan layanan pendidikan.</td>
                                        <td><input type="radio" name="B1" value="1" required></td>
                                        <td><input type="radio" name="B1" value="2"></td>
                                        <td><input type="radio" name="B1" value="3"></td>
                                        <td><input type="radio" name="B1" value="4"></td>
                                        <td><input type="radio" name="B1" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>B2</td>
                                        <td class="statement">Sekolah secara aktif membangun komunikasi dengan orang tua dan komite sekolah.</td>
                                        <td><input type="radio" name="B2" value="1" required></td>
                                        <td><input type="radio" name="B2" value="2"></td>
                                        <td><input type="radio" name="B2" value="3"></td>
                                        <td><input type="radio" name="B2" value="4"></td>
                                        <td><input type="radio" name="B2" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>B3</td>
                                        <td class="statement">Sekolah menyediakan layanan informasi digital yang memudahkan orang tua dalam memantau perkembangan siswa.</td>
                                        <td><input type="radio" name="B3" value="1" required></td>
                                        <td><input type="radio" name="B3" value="2"></td>
                                        <td><input type="radio" name="B3" value="3"></td>
                                        <td><input type="radio" name="B3" value="4"></td>
                                        <td><input type="radio" name="B3" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>B4</td>
                                        <td class="statement">Tingkat kepuasan orang tua terhadap pelayanan sekolah tinggi berdasarkan survei berkala.</td>
                                        <td><input type="radio" name="B4" value="1" required></td>
                                        <td><input type="radio" name="B4" value="2"></td>
                                        <td><input type="radio" name="B4" value="3"></td>
                                        <td><input type="radio" name="B4" value="4"></td>
                                        <td><input type="radio" name="B4" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>B5</td>
                                        <td class="statement">Sekolah memiliki sistem pengaduan yang efektif untuk menangani keluhan dari siswa dan orang tua.</td>
                                        <td><input type="radio" name="B5" value="1" required></td>
                                        <td><input type="radio" name="B5" value="2"></td>
                                        <td><input type="radio" name="B5" value="3"></td>
                                        <td><input type="radio" name="B5" value="4"></td>
                                        <td><input type="radio" name="B5" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7">
                                            <h2>C. Perspektif Proses Internal</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th class="statement">Pernyataan</th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                    </tr>
                                    <tr>
                                        <td>C1</td>
                                        <td class="statement">Sekolah memiliki mekanisme perencanaan strategis berbasis data untuk peningkatan mutu pendidikan.</td>
                                        <td><input type="radio" name="C1" value="1" required></td>
                                        <td><input type="radio" name="C1" value="2"></td>
                                        <td><input type="radio" name="C1" value="3"></td>
                                        <td><input type="radio" name="C1" value="4"></td>
                                        <td><input type="radio" name="C1" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>C2</td>
                                        <td class="statement">Kurikulum sekolah telah diterapkan secara konsisten sesuai dengan standar nasional pendidikan (SNP).</td>
                                        <td><input type="radio" name="C2" value="1" required></td>
                                        <td><input type="radio" name="C2" value="2"></td>
                                        <td><input type="radio" name="C2" value="3"></td>
                                        <td><input type="radio" name="C2" value="4"></td>
                                        <td><input type="radio" name="C2" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>C3</td>
                                        <td class="statement">Sekolah menggunakan teknologi informasi dalam manajemen sekolah untuk meningkatkan efisiensi operasional.</td>
                                        <td><input type="radio" name="C3" value="1" required></td>
                                        <td><input type="radio" name="C3" value="2"></td>
                                        <td><input type="radio" name="C3" value="3"></td>
                                        <td><input type="radio" name="C3" value="4"></td>
                                        <td><input type="radio" name="C3" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>C4</td>
                                        <td class="statement">Sekolah memiliki prosedur manajemen risiko untuk menangani permasalahan akademik dan non-akademik.</td>
                                        <td><input type="radio" name="C4" value="1" required></td>
                                        <td><input type="radio" name="C4" value="2"></td>
                                        <td><input type="radio" name="C4" value="3"></td>
                                        <td><input type="radio" name="C4" value="4"></td>
                                        <td><input type="radio" name="C4" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>C5</td>
                                        <td class="statement">Evaluasi kinerja sekolah dilakukan secara berkala berdasarkan indikator yang terukur.</td>
                                        <td><input type="radio" name="C5" value="1" required></td>
                                        <td><input type="radio" name="C5" value="2"></td>
                                        <td><input type="radio" name="C5" value="3"></td>
                                        <td><input type="radio" name="C5" value="4"></td>
                                        <td><input type="radio" name="C5" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7">
                                            <h2>D. Perspektif Pembelajaran dan Pertumbuhan</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th class="statement">Pernyataan</th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                    </tr>
                                    <tr>
                                        <td>D1</td>
                                        <td class="statement">Sekolah memiliki program pengembangan profesional berkelanjutan untuk guru dan staf.</td>
                                        <td><input type="radio" name="D1" value="1" required></td>
                                        <td><input type="radio" name="D1" value="2"></td>
                                        <td><input type="radio" name="D1" value="3"></td>
                                        <td><input type="radio" name="D1" value="4"></td>
                                        <td><input type="radio" name="D1" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>D2</td>
                                        <td class="statement">Guru di sekolah secara rutin mengikuti pelatihan berbasis teknologi dan inovasi pembelajaran.</td>
                                        <td><input type="radio" name="D2" value="1" required></td>
                                        <td><input type="radio" name="D2" value="2"></td>
                                        <td><input type="radio" name="D2" value="3"></td>
                                        <td><input type="radio" name="D2" value="4"></td>
                                        <td><input type="radio" name="D2" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>D3</td>
                                        <td class="statement">Sekolah mendukung penggunaan Learning Management System (LMS) dalam pembelajaran digital.</td>
                                        <td><input type="radio" name="D3" value="1" required></td>
                                        <td><input type="radio" name="D3" value="2"></td>
                                        <td><input type="radio" name="D3" value="3"></td>
                                        <td><input type="radio" name="D3" value="4"></td>
                                        <td><input type="radio" name="D3" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>D4</td>
                                        <td class="statement">Sekolah memiliki sistem pengelolaan kinerja guru berbasis data dan hasil evaluasi pembelajaran.</td>
                                        <td><input type="radio" name="D4" value="1" required></td>
                                        <td><input type="radio" name="D4" value="2"></td>
                                        <td><input type="radio" name="D4" value="3"></td>
                                        <td><input type="radio" name="D4" value="4"></td>
                                        <td><input type="radio" name="D4" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>D5</td>
                                        <td class="statement">Sekolah mendorong budaya inovasi dalam pembelajaran dan manajemen sekolah.</td>
                                        <td><input type="radio" name="D5" value="1" required></td>
                                        <td><input type="radio" name="D5" value="2"></td>
                                        <td><input type="radio" name="D5" value="3"></td>
                                        <td><input type="radio" name="D5" value="4"></td>
                                        <td><input type="radio" name="D5" value="5"></td>
                                    </tr>
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
                    <!-- /.row -->
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

</html>