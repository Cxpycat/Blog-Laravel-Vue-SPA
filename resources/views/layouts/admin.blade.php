<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    {{--    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }} ">--}}
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href=" {{ asset('dist/css/adminlte.min.css') }} ">

    @vite(['resources/js/app.js'])
    <script src="{{ asset('js.app.js') }}"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
             height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light ">
        <!-- Left navbar links -->
        <div class="col-12 d-flex justify-content-between">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-right: 10px">
                    <a href="#" class="btn btn-outline-primary">Профиль</a>
                </li>
                <li class="nav-item">

                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-outline-primary" value="Выйти">
                    </form>
                </li>

            </ul>
        </div>

    </nav>
    <!-- /.navbar -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src=" {{ asset('dist/img/AdminLTELogo.png') }} " alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>


        <!-- Sidebar -->
        <div class="sidebar"></div>

        @include('Admin.includes.sidebar')
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <div id="app">
            @yield('content')
        </div>

    </div>

    <aside class="control-sidebar control-sidebar-dark">

    </aside>

</div>


{{-- <script src="{{ asset('plugins/jquery/jquery.min.js') }} "></script> --}}
{{-- <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }} "></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src=" {{ asset('dist/js/adminlte.js') }} "></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }} "></script>

<script>
    $(function () {
        bsCustomFileInput.init();
    });
</script>

</body>

</html>
