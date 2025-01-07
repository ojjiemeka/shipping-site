<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Amanda">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="../../../amanda/img/amanda-social.html">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/amanda">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="../../../amanda/img/amanda-social.html">
    <meta property="og:image:secure_url" content="../../../amanda/img/amanda-social.html">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('lib/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('lib/Ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('lib/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    
    <!-- Amanda CSS -->
    <link rel="stylesheet" href="{{asset('css/amanda.css')}}">
</head>

<body>

    <div class="am-signin-wrapper">
        @yield('content')
    </div><!-- am-signin-wrapper -->

    <script src="{{asset('lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>

    <script src="{{asset('js/amanda.js')}}"></script>
</body>

<!-- Mirrored from themepixels.me/demo/amanda/app/page-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jan 2025 19:05:51 GMT -->

</html>
