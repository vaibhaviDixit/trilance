<?php
 
 include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/header.php');

?>



  <main id="main" class="contactSection">

   
   
    <!-- ======= Contact Section ======= -->

     <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Get in Touch With Trilance IT Solutions</p>
        </div>

    <section id="contact" class="contact" style="padding: 0;">
      <div class="container">


        <div class="row contactForm" data-aos="fade-up">

          <div class="col-lg-4 text-center">
            <img src="assets/img/support.png" class="img-fluid">
          </div>

          <div class="col-lg-7">
            <form  method="post" role="form" class="php-email-form" id="sendMessageForm">
        
                <div class="form-group mt-3">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>

                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
             
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
              </div>

              <div class="form-group mt-3">
                <select class="form-control" name="course">
                   <?php 

                  $res=fetchCourse();
                  while ($row=mysqli_fetch_assoc($res)) {
                ?>
                <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                <?php
                 }
                ?>
                </select> 
              </div>


              <div class="my-2">
                <div class="loading">Loading</div>
                <label id="loader"></label>
                <label id="info"></label>

                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" id="submitSendMsg">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

 

  </main><!-- End #main -->
<?php
 
 include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/footer.php');

?>