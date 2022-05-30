<?php
   session_start();
   
      include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/database.inc.php');
      include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/functions.inc.php');
      include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/constants.inc.php');
     
      $row=getAdminDetails();

   
      if(!isset($_SESSION['ADMIN'])){
         redirect(SITE_PATH.'admin/login');
      }
      
      ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">
      <meta name="author" content="AdminKit">
      <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

      
      <!-- cdn for data table -->
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
     
      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
      <!-- custom css -->
      <link href="<?php echo SITE_PATH; ?>assets/css_admin/custom.css" rel="stylesheet">
       
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <link href="<?php echo SITE_PATH; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <!-- admin profile -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="canonical" href="https://demo-basic.adminkit.io/" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
      <link href="<?php echo SITE_PATH; ?>assets/css_admin/app.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
      <link rel="canonical" href="https://demo-basic.adminkit.io/" />
      <title>Admin Panel</title>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">


   <style type="text/css">
      .linkActive{
         background-color: darkgoldenrod;
         color: white;
      }

   </style>
   
   </head>
   <body>
      <div class="wrapper">
      <nav id="sidebar" class="sidebar js-sidebar">
         <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="<?php echo SITE_PATH; ?>"><span class="align-middle"><?php echo SITE_NAME; ?></span></a>
            <ul class="sidebar-nav">
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'admin/index'; ?>">
                  <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                  </a>
               </li>

                <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'admin/enrolled'; ?>">
                  <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Enrolled Students</span>
                  </a>
               </li>

                 <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'admin/enrolledCourse'; ?>">
                  <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Enrolled Courses</span>
                  </a>
               </li>

                <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'admin/contacts'; ?>">
                  <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Contacts</span>
                  </a>
               </li>

               <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'admin/password'; ?>">
                  <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Change Password</span>
                  </a>
               </li>
             

	      <li class="sidebar-header">
                  Courses
               </li>

               <li class="sidebar-item">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'admin/' ?>addCourse">
                  <i class="align-middle" data-feather="message-circle"></i> <span class="align-middle">Add Course</span>
                  </a>
               </li>
               
               <li class="sidebar-item">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'admin/' ?>courses">
                  <i class="align-middle" data-feather="message-circle"></i> <span class="align-middle">Courses</span>
                  </a>
               </li>
             


               
               <li class="sidebar-header">
                  Testimonials
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'admin/' ?>addTestimonial">
                  <i class="align-middle" data-feather="plus-square"></i> <span class="align-middle">Add Testimonial</span>
                  </a>
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'admin/' ?>listTestimonial">
                  <i class="align-middle" data-feather="list"></i> <span class="align-middle">List Testimonials</span>
                  </a>
               </li>
              

               <li class="sidebar-header">
                  Placed Students
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'admin/' ?>addPlaced">
                  <i class="align-middle" data-feather="plus-square"></i> <span class="align-middle">Add Student</span>
                  </a>
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'admin/' ?>listplaced">
                  <i class="align-middle" data-feather="list"></i> <span class="align-middle">List Students</span>
                  </a>
               </li>
             
             <li class="sidebar-header">
                  Upcoming Batches
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'admin/' ?>addBatch">
                  <i class="align-middle" data-feather="plus-square"></i> <span class="align-middle">Add Batch</span>
                  </a>
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'admin/' ?>listBatches">
                  <i class="align-middle" data-feather="list"></i> <span class="align-middle">List Batches</span>
                  </a>
               </li>
              
         </div>
      </nav>
      <!-- admin navbar starts -->
      <div class="main">
      <nav class="navbar navbar-expand navbar-light navbar-bg">
         <a class="sidebar-toggle js-sidebar-toggle">
         <i class="hamburger align-self-center"></i>
         </a>
         <div style=" position: absolute !important; right: 4rem;">
            <ul class="navbar-nav navbar-align">
               <li class="nav-item">
                  <a class="nav-link  userdropdown d-sm-inline-block " href="javascript:void(0)"  >
               
                  <span class="text-dark"><?php echo $row['name']; ?></span>
                  <span> <i class="fas fa-caret-down"></i> </span>
                  </a>
                  <div class="card"  id="userDrop" style=" position: absolute !important; top: 2rem; display: none;">
                     <ul class="list-group list-group-flush">

                        <li class="list-group-item"><a class="dropdown-item" href="<?php echo SITE_PATH.'admin/' ?>logout">Log out</a></li>
                     </ul>
                  </div>
               </li>
            </ul>
         </div>
      </nav>

   