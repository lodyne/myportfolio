
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Lodyne Mark - Portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/katuni.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantata+One&family=Cardo:ital@1&family=Domine:wght@400;500&family=Merriweather:ital,wght@0,300;0,400;1,300;1,400&family=Montserrat:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300;1,400&family=Roboto+Slab:wght@100;200;300;400&display=swap" rel="stylesheet">

    @include('template.partials.cssfiles')

</head>

<body>

    <!-- ======= Header ======= -->
        @include('template.partials.header')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
        @include('template.partials.hero')
    <!-- End Hero -->

    <!-- ======= Main ======= -->
        @yield('content')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
        @include('template.partials.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/typed.js/typed.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
