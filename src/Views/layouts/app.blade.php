<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Confraria Web">
    <meta name="author" content="Confraria Web">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('vendor/template-dashboard-argon/img/brand/favicon.png') }}">
    <link rel="icon" href="{{ asset('vendor/template-dashboard-argon/img/brand/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="{{ asset('vendor/template-dashboard-argon/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/template-dashboard-argon/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/template-dashboard-argon/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/template-dashboard-argon/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/template-dashboard-argon/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('vendor/template-dashboard-argon/css/argon.min.css') }}" type="text/css">
</head>

<body>
    @include('templateDashboardArgon::partials.sidebar')
    <div class="main-content" id="panel">
        @include('templateDashboardArgon::partials.navbar')
        @includeUnless((Route::currentRouteName() === 'dashboard'), 'templateDashboardArgon::partials.header')
        @includeWhen((Route::currentRouteName() === 'dashboard'), 'templateDashboardArgon::partials.header_dashboard')
        <div class="container-fluid mt--6">
            <x-alert />
            @yield('content')
            @include('templateDashboardArgon::partials.footer')
        </div>
    </div>
    <script src="{{ asset('vendor/template-dashboard-argon/vendor/jquery/dist/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('vendor/template-dashboard-argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/template-dashboard-argon/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('vendor/template-dashboard-argon/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('vendor/template-dashboard-argon/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <script src="{{ asset('vendor/template-dashboard-argon/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/template-dashboard-argon/vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <script src="{{ asset('vendor/template-dashboard-argon/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/template-dashboard-argon/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/template-dashboard-argon/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendor/template-dashboard-argon/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/template-dashboard-argon/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendor/template-dashboard-argon/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('vendor/template-dashboard-argon/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendor/template-dashboard-argon/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('vendor/template-dashboard-argon/js/argon.js') }}"></script>
    @stack('scripts')
</body>

</html>
