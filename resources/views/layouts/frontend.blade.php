<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">

    <title>D-Fireworks Computers</title>
    <meta content="" name="description">
    <meta content="Aliakor .C. Douglas" name="founder">
    <meta content="Odigbo Christian Ndubuisi" name="designer">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/dfw_2.png" rel="icon">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <script>
    window.setTimeout(function() {
        $(".alert-timeout").fadeTo(500, 0).slideUp(1000, function() {
            $(this).remove();
        });
    }, 15000);
    </script>
</head>

<body>

    <!-- PRELOADER START -->
    @includeIf('layouts.preloader')
    <!-- PRELOADER END -->

    <!-- NAV START -->
    @yield('navbar')
    <!-- NAV END -->

    <!-- NAV START -->
    @yield('page-navbar')
    <!-- NAV END -->

    <!-- BREADCRUMB START -->
    @yield('breadcrumb')
    <!-- BREADCRUMB END -->

    <!--SLIDER START-->
    @yield('slider')
    <!--SLIDER END-->

    <!-- CONTENT START -->
    @yield('page-content')
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    @includeIf('layouts.footer')
    <!-- FOOTER END -->

    <!--SCROLL TOP START-->
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/60eea4cb649e0a0a5ccc22b1/1fai37frv';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>