<?php
 
 include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/header.php');

?>



  <main id="main">

   
    <!-- ======= testimonial Section ======= -->
    <section id="batches" class="batches">
      <div class="container">

        <div class="section-title">
          <span>Batches</span>
          <h2>Upcoming Batches</h2>
        </div>

  

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">


          <?php 

            $res=fetchBatches();
            while ($row=mysqli_fetch_assoc($res)) {

          ?>
          <div class="col-lg-5 col-md-4 batchBox" data-aos="fade-up">
            <div class="text-center">
                <h6><?php echo $row['name']; ?></h6>
                <p><?php echo $row['description']; ?></p>
                <p><i class="bi bi-calendar-event-fill"></i> Starting From : <?php echo mydate($row['start']); ?></p>
                <a href="<?php echo SITE_PATH.'enroll.php?id='.$row['id']; ?>" ><button class="enrollBtn">Enroll Now</button></a>
            </div>
          </div>
          <?php 
            }
          ?>



        </div>

      </div>
    </section><!-- End testimonial Section -->

 

  </main><!-- End #main -->
<?php
 
 include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/footer.php');

?>