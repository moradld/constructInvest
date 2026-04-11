<!doctype html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light">
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construct Invest - Construction Management Software">
    <meta name="author" content="Lender Direct">
    <meta name="keywords" content="lunder direct, construction management software, project management, contractor management, payment processing, draw requests, construction scheduling, construction budgeting, construction analytics">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    <!-- Main Theme Js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Choices JS -->
    <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <!-- TITLE -->
    <title>@yield('title', 'Construct Invest')</title>
    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- STYLE CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <!-- Simplebar Css -->
    <link href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/%40simonwep/pickr/themes/nano.min.css') }}">
    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
</head>
<body class="app sidebar-mini">
    <!-- GLOBAL-LOADER -->
    <div id="loader">
        <img src="https://preview.sprukomarket.com/html/bootstrap/vexel/dist/assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <!-- app-header -->
            @include('layouts.header')
            <!-- /app-header -->
            <!-- Start::app-sidebar -->
            @include('layouts.sidebar')
            <!-- End::app-sidebar -->
            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <!-- PAGE-HEADER -->
                @include('layouts.page-header')
                <!-- PAGE-HEADER END -->
                <!-- CONTAINER -->
                <div class="main-container container-fluid">
                    @yield('content')
                </div>
                <!-- CONTAINER END -->
            </div>
            <!--app-content close-->
        </div>
        <!-- FOOTER -->
        @include('layouts.footer')
        <!-- FOOTER CLOSED -->
    </div>
   
    @include('layouts.js')
</body>
</html>