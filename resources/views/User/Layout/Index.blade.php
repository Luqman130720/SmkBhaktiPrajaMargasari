<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SMK Bhakti Praja Margasari</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/assets-user/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/assets-user/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/assets-user/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets-user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets-user/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets-user/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets-user/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets-user/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url ('/assets-user/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('User.Components.Navbar',
    [
        'prodis' => $prodis,
        'organisasis' => $organisasis,
        'unitusahas' => $unitusahas,

    ])

    @yield('content')
    @include('User.Components.Footer')

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('/assets-user/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('/assets-user/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('/assets-user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/assets-user/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('/assets-user/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('/assets-user/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('/assets-user/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('/assets-user/js/main.js') }}"></script>
        
        <!-- vidio-youtube JS  -->
        <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
