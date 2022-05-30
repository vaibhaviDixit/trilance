<?php
 
 include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/header.php');

?>



  <main id="main">

    
    <!-- ======= Services Section ======= -->
    <section id="courses" class="courses">
      <div class="container">

        <div class="section-title">
          <span>Courses</span>
          <h2> Our Courses</h2>
          <p>Most Trending Job Oriented Courses</p>
        </div>

        <div class="row">
        

          <?php 

            $res=fetchCourse();
            while ($row=mysqli_fetch_assoc($res)) {

          ?>
          <div class="col-lg-3 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">

        
            <div class="icon-box">
              <div class="icon">
                <img src="<?php  echo SITE_COURSE_IMAGE.$row['pic']; ?>" class="img-fluid">             
              </div>
                
              <h4><a href="<?php echo SITE_PATH.'coursedetails.php?id='.$row['id']; ?>"><?php echo $row['name']; ?></a></h4>

              <a href="<?php echo SITE_PATH.'enrollcourse.php?id='.$row['id']; ?>" ><button class="enrollBtn">Enroll Now</button></a>

            </div>
          </div>
          <?php
            }

          ?>
       

        </div>

      </div>
    </section><!-- End Services Section -->

   
  </main><!-- End #main -->
<?php
 
 include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/footer.php');

?>