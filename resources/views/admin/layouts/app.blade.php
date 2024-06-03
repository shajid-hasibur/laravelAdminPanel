<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AdminLTE 3 | Dashboard 2</title>
    @include('admin.includes.css')
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        @include('admin.includes.topbar')
        @include('admin.includes.sidebar')
        <div class="content-wrapper">
            @include('admin.includes.breadcrumb')
            @yield('content')
        </div>
        @include('admin.includes.footer')
    </div>
    @include('admin.includes.js')
</body>

</html>
