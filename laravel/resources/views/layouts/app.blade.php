<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
        <title>@yield('title')</title>
        <link rel="icon" type="image/png" href="{{URL::to('/images/icons/bank-logo.jpg')}}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://fontawesome.com">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- <link href="../css/all.min.css" rel="stylesheet" type="text/css"> -->
        <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->
    <!-- <link href="css/d2.css" rel="stylesheet"> -->
    <!-- <link href="css/all.min.css" rel="stylesheet" type="text/css"> -->
    <script src="js/jquery.min.js"></script>
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->

    <!-- Core plugin JavaScript-->
    <!-- <script src="js/jquery.easing.min.js"></script> -->

    <!-- Custom scripts for all pages-->
    <!-- <script src="js/sb-admin-2.min.js"></script> -->

    <!-- Page level plugins -->
    <script src="js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <!-- <script src="js/chart-area-demo.js"></script>
    <script src="js/chart-pie-demo.js"></script> -->
     <!-- Sidebar CSS-->
  <link href="css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="css/app-style.css" rel="stylesheet"/>
  <link href="css/animate.css" rel="stylesheet"/>
  <link href="css/bootstrap.css" rel="stylesheet"/>
  <link href="css/icons.css" rel="stylesheet"/>
  <link href="css/pace.min.css" rel="stylesheet"/>
  <link href="css/simplebar.min.css" rel="stylesheet"/>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/pace.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 <!-- simplebar js -->
  <script src="js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <!-- <script src="js/jquery.loading-indicator.js"></script> -->
  <!-- Custom scripts -->
  <script src="js/app-script.js"></script>
  <script src="js/bootstrap5.bundle.min.js" crossorigin="anonymous"></script>

  <!-- Chart js -->

  <!-- <script src="plugins/Chart.js/Chart.min.js"></script> -->

  <!-- Index js -->
  <script src="js/index.js"></script>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <!-- <body class="font-sans antialiased"> -->

    <body class="bg-theme bg-theme8" id="wrapper">
    <x-jet-banner />

    <header class="topbar-nav navbar"  >


        @livewire('navigation-menu')

        </header>


            <!-- Page Heading -->
            <!-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif -->

            <!-- Page Content -->
            <main>
                {{ $slot }}

            </main>




        @stack('modals')

        @livewireScripts

    </body>
</html>
