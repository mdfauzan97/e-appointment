  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hospital Kental</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v3.0.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">hosp.kental@fakemail.com</a>
        <i class="icofont-phone"></i> +088 111 222 33
        <i class="icofont-google-map"></i> Selayang, Selangor
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Hospital Kental</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
      </nav><!-- .nav-menu -->
      <a href="index.html" class="appointment-btn">Back to Home</a>
        
    </div>
  </header><!-- End Header -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Insert your details according to the boxes below as it required for making appointment with us.</p>
        </div>

        <form action="tryreg.php" method="POST">
          <div class="row">
            
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <label for="Nama">Name</label> 
              <input type="text" id="Nama" name="Nama" placeholder="Nama Penuh" class="form-control"> <br> <br>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <label for="IC">Identity Card</label>
              <input type="int" id="IC" name="IC" placeholder="Nombor IC tanpa -" class="form-control"> <br><br>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <label for="Telefon">Phone Number</label>
              <input type="int" id="Telefon" name="Telefon" placeholder="Eg. 6012345678" class="form-control"> <br><br>
            </div>

          
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <label for="Tarikh">Date</label>
              <input type="date" id="Tarikh" name="Tarikh" placeholder="Tarikh" class="form-control">
            </div>
            <div class="col-md-4 form-group mt-3">
              <label for="Department">Departments</label>
              <select type="text" name="Department" id="Department" class="form-select">
                <option value="">Select Department</option>
                <option value="Cardiology">Cardiology</option>
                <option value="Neurology">Neurology</option>
                <option value="Hepatology">Hepatology</option>
                <option value="Obstetric & Gynecology">Obstetric & Gynecology</option>
                <option value="Opthalmology">Opthalmology</option>
                <option value="Anesthesiology">Anesthesiology</option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <label for="Tujuan">Appointment Purposes</label><br>
            <textarea id="Tujuan" name="Tujuan" placeholder=" Write down Appointment Purposes" style="height:170px " style="width:700px "></textarea> <br>
          </div>
          <input type="submit" name="Submit" value="Submit">
        </form>

      </div>
    </section><!-- End Appointment Section -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>