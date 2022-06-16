<?php
      include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/database.inc.php');
      include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/functions.inc.php');
      include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/constants.inc.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo SITE_NAME; ?></title>

  <meta name="author" content="trilance IT solutions">
  <meta content="trilance IT solutions,trilance,IT solutions,software testing,course,online testing course" name="description">
  <meta content="trilance IT solutions,trilance,IT solutions,software testing,course,online testing course" name="keywords">


  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo SITE_PATH;?>assets/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo SITE_PATH;?>assets/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo SITE_PATH;?>assets/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo SITE_PATH;?>assets/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo SITE_PATH;?>assets/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo SITE_PATH;?>assets/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo SITE_PATH;?>assets/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo SITE_PATH;?>assets/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo SITE_PATH;?>assets/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo SITE_PATH;?>assets/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo SITE_PATH;?>assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo SITE_PATH;?>assets/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo SITE_PATH;?>assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo SITE_PATH;?>assets/img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo SITE_PATH;?>assets/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo SITE_PATH;?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo SITE_PATH;?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo SITE_PATH;?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo SITE_PATH;?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo SITE_PATH;?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo SITE_PATH;?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo SITE_PATH;?>assets/css/form.css" rel="stylesheet" media="all">
   <link href="<?php echo SITE_PATH;?>assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link href="<?php echo SITE_PATH;?>assets/vendor/owl/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo SITE_PATH;?>assets/vendor/owl/owl.theme.default.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo SITE_PATH;?>assets/css/style.css" rel="stylesheet">

  <!-- js -->
    <script src="<?php echo SITE_PATH;?>assets/vendor/jquery.min.js"></script>
    <script src="<?php echo SITE_PATH;?>assets/vendor/sweetalert.min.js"></script>
    <script src="<?php echo SITE_PATH;?>assets/vendor/owl/owl.carousel.min.js"></script>

</head>

<body>


  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container ">
      <marquee behavior="scroll" class="d-flex align-items-center " direction="left">
        
        <div>Congratulations Alkesh K. for getting placed in Vodafone as a Functional Test Engineer. |
       Congratulations Pooja Y. for getting placed in Wipro as Automation Test Engineer.
      </div>
      </marquee>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo"><a href="<?php echo SITE_PATH;?>"><img src="<?php echo SITE_PATH;?>assets/img/favicon/apple-icon-180x180.png"><span class="spacing" style="font-size: medium;">Trilance</span></a></div>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link link active" href="index.php">Home</a></li>
          <li><a class="nav-link link" href="courses.php">Courses</a></li>
          <li><a class="nav-link link" href="batches.php">Upcoming Batches</a></li>
          <li><a class="nav-link link" href="about.php">About</a></li>
          <li><a class="nav-link link" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->