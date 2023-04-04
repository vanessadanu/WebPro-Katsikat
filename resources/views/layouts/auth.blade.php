<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/adminlte/img/favicon.png" rel="icon">
  <link href="assets/adminlte/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/adminlte/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/adminlte/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/adminlte/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/adminlte/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/adminlte/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/adminlte/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/adminlte/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/adminlte/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/adminlte/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              @yield('content')

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/adminlte/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/adminlte/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/adminlte/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/adminlte/vendor/echarts/echarts.min.js"></script>
  <script src="assets/adminlte/vendor/quill/quill.min.js"></script>
  <script src="assets/adminlte/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/adminlte/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/adminlte/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/adminlte/js/main.js"></script>

</body>

</html>