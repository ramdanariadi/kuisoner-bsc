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
                        <a href="profile/100001" class="dropdown-item">
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
                            <a href="{{route('frontend.index')}}" class="nav-link active">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
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
            <div class="container d-flex justify-content-center">
                @include('frontend.includes.messages')
            </div>

            <div class="container px-3 py-5">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h3 class="h5 font-weight-bold text-dark">@lang('Edit Profile')</h3>
                        <p class="text-muted small mt-2">
                            @lang('This information will be displayed publicly so be careful what you share.')
                        </p>
                        <div class="pt-3 text-center">
                            <a href='{{ route('frontend.users.profile') }}'>
                                <div class="btn btn-outline-dark btn-block font-weight-semibold">
                                    @lang(' View Profile')
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-8 mt-4 mt-md-0">
                        @php
                        $profiles = json_decode($$module_name_singular->social_profiles, true);
                        @endphp
                        {{ html()->modelForm($$module_name_singular, 'PATCH', route('frontend.users.profileUpdate'))->acceptsFiles()->open() }}
                        <div class="card shadow-sm mb-5">
                            <div class="card-body">
                                <div class="form-row">
                                    {{-- First Name --}}
                                    <div class="form-group col-md-6">
                                        <label for="first_name">{{ label_case('first_name') }}</label>
                                        <span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="{{ label_case('first_name') }}" required value="{{ old('first_name', $user->first_name) }}">
                                    </div>

                                    {{-- Last Name --}}
                                    <div class="form-group col-md-6">
                                        <label for="last_name">{{ label_case('last_name') }}</label>
                                        <span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="{{ label_case('last_name') }}" required value="{{ old('last_name', $user->last_name) }}">
                                    </div>

                                    {{-- Address --}}
                                    <div class="form-group col-md-12">
                                        <label for="address">{{ label_case('address') }}</label>
                                        <input type="text" class="form-control" name="address" id="address" placeholder="{{ label_case('address') }}" value="{{ old('address', $user->address) }}">
                                    </div>

                                    {{-- URL Website --}}
                                    <div class="form-group col-md-12">
                                        <label for="url_website">{{ label_case('url_website') }}</label>
                                        <input type="text" class="form-control" name="url_website" id="url_website" placeholder="{{ label_case('url_website') }}" value="{{ old('url_website', $profiles['website'] ?? '') }}">
                                    </div>

                                    {{-- Facebook --}}
                                    <div class="form-group col-md-6">
                                        <label for="url_facebook">{{ label_case('url_facebook') }}</label>
                                        <input type="text" class="form-control" name="url_facebook" id="url_facebook" placeholder="{{ label_case('url_facebook') }}" value="{{ old('url_facebook', $profiles['facebook'] ?? '') }}">
                                    </div>

                                    {{-- Twitter --}}
                                    <div class="form-group col-md-6">
                                        <label for="url_twitter">{{ label_case('url_twitter') }}</label>
                                        <input type="text" class="form-control" name="url_twitter" id="url_twitter" placeholder="{{ label_case('url_twitter') }}" value="{{ old('url_twitter', $profiles['twitter'] ?? '') }}">
                                    </div>

                                    {{-- LinkedIn --}}
                                    <div class="form-group col-md-6">
                                        <label for="url_linkedin">{{ label_case('url_linkedin') }}</label>
                                        <input type="text" class="form-control" name="url_linkedin" id="url_linkedin" placeholder="{{ label_case('url_linkedin') }}" value="{{ old('url_linkedin', $profiles['linkedin'] ?? '') }}">
                                    </div>

                                    {{-- Instagram --}}
                                    <div class="form-group col-md-6">
                                        <label for="url_instagram">{{ label_case('url_instagram') }}</label>
                                        <input type="text" class="form-control" name="url_instagram" id="url_instagram" placeholder="{{ label_case('url_instagram') }}" value="{{ old('url_instagram', $profiles['instagram'] ?? '') }}">
                                    </div>

                                    {{-- Bio --}}
                                    <div class="form-group col-md-12">
                                        <label for="bio">{{ label_case('bio') }}</label>
                                        <textarea class="form-control" id="bio" name="bio" rows="5" placeholder="{{ label_case('bio') }}">{{ old('bio', $user->bio) }}</textarea>
                                    </div>
                                </div>

                                {{-- Avatar --}}
                                <div class="form-row mt-4">
                                    <div class="col-md-4">
                                        <label class="font-weight-medium">Photo</label>
                                        <div class="mt-2">
                                            <img src="{{ asset($user->avatar) }}" alt="{{ $user->name }}" class="img-thumbnail" style="width: 96px; height: 96px;">
                                        </div>
                                    </div>

                                    <div class="col-md-8 mt-3 mt-md-0">
                                        <div class="form-group">
                                            <input type="file" class="form-control-file" id="avatar" name="avatar">
                                            <small class="form-text text-muted mt-2">Upload an image as profile picture.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Personal Info --}}
                        <div class="card shadow-sm mb-5">
                            <div class="card-body">
                                <div class="form-row">
                                    {{-- Email (Disabled) --}}
                                    <div class="form-group col-md-12">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control bg-light" id="email" value="{{ $user->email }}" disabled>
                                    </div>

                                    {{-- Mobile --}}
                                    <div class="form-group col-md-12">
                                        <label for="mobile">{{ label_case('mobile') }}</label>
                                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="{{ label_case('mobile') }}" value="{{ old('mobile', $user->mobile) }}">
                                    </div>

                                    {{-- Date of Birth --}}
                                    <div class="form-group col-md-6">
                                        <label for="date_of_birth">{{ label_case('date_of_birth') }}</label>
                                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth', $user->date_of_birth ? \Carbon\Carbon::parse($user->date_of_birth)->toDateString() : '') }}">
                                    </div>

                                    {{-- Gender --}}
                                    <div class="form-group col-md-6">
                                        <label for="gender">{{ label_case('gender') }}</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option value="">-- Select an option --</option>
                                            <option value="Female" {{ old('gender', $user->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                            <option value="Male" {{ old('gender', $user->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Other" {{ old('gender', $user->gender) == 'Other' ? 'selected' : '' }}>Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="text-right mt-3">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{ html()->closeModelForm() }}
                    </div>
                </div>

                {{-- Divider --}}
                <div class="d-none d-sm-block" aria-hidden="true">
                    <hr class="mb-5">
                </div>

                {{-- Account Settings --}}
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h3 class="h6 font-weight-bold text-dark">Account Settings</h3>
                        <p class="text-muted small mt-2">
                            Update account information.
                        </p>
                    </div>

                    <div class="col-md-8 mt-4 mt-md-0">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="text-center">
                                    <a href="{{ route('frontend.users.changePassword') }}">
                                        <div class="btn btn-outline-dark btn-block font-weight-semibold">
                                            Change Password
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
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