<?php
 
 include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/header.php');
 
 if(isset($_GET['id']) && $_GET['id']>0){
    $courseId=$_GET['id'];
    $coursedet=mysqli_query($con,"select * from course where id='$courseId' ");
    if(mysqli_num_rows($coursedet)>0){
        $row=mysqli_fetch_assoc($coursedet);
    }
    else{

        redirect(SITE_PATH.'batches');
    }
 

 
}

?>

  <main id="main">

   
    <!-- ======= course details ======= -->
    <section id="coursedet" class="coursedet">

    <div class="container">
        <div class="section-title">
          <h2><?php echo $row['name']; ?></h2>
        </div>


        <div class="row">
         <div class="col-lg-4 order-1 order-lg-2" data-aos="fade-left" style="text-align: center;padding:4rem 2rem;">
            <img src="<?php  echo SITE_COURSE_IMAGE.$row['pic']; ?>" class="img-fluid">  
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
           
            <p>
                    <?php  echo $row['description']; ?>
            </p>

            <a href="<?php echo SITE_PATH.'enrollcourse.php?id='.$row['id']; ?>" ><button class="enrollBtn">Enroll Now</button></a>

          </div>
        
        </div>
    </div>
    
    </section>
    <!-- End testimonial Section -->

 

  </main><!-- End #main -->
<?php
 
 include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/footer.php');

?>