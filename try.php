
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

<body>

<div class="container">
  <div style="text-align:center">
    <h2>Make An Appoinment</h2>
    <p>Please fill in your details to make an appoinment</p>
  </div>
  <div class="row">
    <div class="try">
      <form method="POST" action="tryreg.php">
        <label for="Nama">Nama</label> 
        <input type="text" id="Nama" name="Nama" placeholder="Nama Penuh"> <br> <br>

        <label for="IC">IC</label>
        <input type="int" id="IC" name="IC" placeholder="Nombor IC tanpa -"> <br><br>
        
        <label for="Telefon">Nombor Telefon</label>
        <input type="int" id="Telefon" name="Telefon" placeholder="Eg. 6012345678"> <br><br>

        <label for="Tarikh">Tarikh</label> 
        <input type="date" id="Tarikh" name="Tarikh" placeholder="Tarikh"> <br><br>

        <label for="subject">Department</label> 
        <input type="text" id="Department" name="Department" placeholder="e.g blablabla"> <br><br>

        <label for="Tujuan">Tujuan</label><br>
        <textarea id="Tujuan" name="Tujuan" placeholder="Nyatakan tujuan temujanji" style="height:170px"></textarea> <br>
        <input type="submit" name="Submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>