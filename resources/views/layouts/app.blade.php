<!DOCTYPE html>
<html lang="en">

<head>
    <title>DevBlog - Bootstrap 5 Blog Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- <link rel="shortcut icon" href="favicon.ico"> --}}

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/theme-' . $theme . '.css') }}">

</head>

<body>

    <header class="header text-center">
        @include('layouts.components.sidebar')
    </header>

    <div class="main-wrapper">


        @yield('content')

        <x-footer />

    </div><!--//main-wrapper-->


    <!-- Javascript -->
    <script src="{{ asset('assets/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>



</body>

</html>
