<?php
 
 include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/header.php');

?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Trilance IT Solutions</h1>
      <h1>WE OFFER YOU A BRIGHTER FUTURE</h1>
      <h2>Innovation | Courage | Sincerity</h2>
      <a href="courses.php" class="btn-get-started scrollto">All Courses</a>
    </div>
    <div class="heroImg">
      <img src="assets/img/hero.png" class="animated">
    </div>
  </section><!-- End Hero -->

  <main id="main">




    <!-- ======= services Section ======= -->
    <section id="service" class="service">

      <div class="container" data-aos="zoom-in">

         <div class="section-title">
          <span>Features</span>
          <h2>Our core features</h2>
        </div>



        <div class="row align-items-center">
          <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-left">
            <img src="assets/img/programmer.jpg" class="img-fluid" alt="" style="border-radius: 5%;">
          </div>

          <div class="col-lg-6 order-2 order-lg-2 mt-4" data-aos="fade-right">

            <ul id="listoffeatures">
              <li><i class="bi bi-bookmark-check-fill"></i> 300+ Certification Courses</li>
              <li><i class="bi bi-bookmark-check-fill"></i> 24/7 Support</li>
              <li><i class="bi bi-bookmark-check-fill"></i> Supervisory staff</li>
              <li><i class="bi bi-bookmark-check-fill"></i> Practical Training</li>
            </ul>
            

          </div>
          

 

          </div>

      </div>
    </section><!-- End service Section -->

 <!-- ======= count Section ======= -->
    <section id="count" class="count">
      <div class="container">


         <div class="row">

          <div class="col-lg-3 col-md-4 d-flex justify-content-center align-items-center flex-column countcards" data-aos="zoom-in" data-aos-delay="150">
            <div class="card-img"> 
              <img src="assets/img/openings.png" class="img-fluid" alt="" >
            </div>
            <div class="card-content text-center">
              <h1 class="number"><span class="countnum">2050</span>+</h1>
              <p>Openings Received</p>
              
            </div>

          </div>

           <div class="col-lg-3 col-md-4 d-flex justify-content-center align-items-center flex-column countcards" data-aos="zoom-in" data-aos-delay="150">
            <div class="card-img"> 
              <img src="assets/img/campus.png" class="img-fluid" alt="">
            </div>
            <div class="card-content text-center">
              <h1 class="number"><span class="countnum">100</span>+</h1>
              <p>Campus Drives Conducted</p>
              
            </div>

          </div>

           <div class="col-lg-3 col-md-4 d-flex justify-content-center align-items-center flex-column countcards" data-aos="zoom-in" data-aos-delay="150">
            <div class="card-img"> 
              <img src="assets/img/placement.png" class="img-fluid" alt="">
            </div>
            <div class="card-content text-center">
              <h1 class="number"><span class="countnum">450</span>+</h1>
              <p>Students Placed</p>
              
            </div>

          </div>

           <div class="col-lg-3 col-md-4 d-flex justify-content-center align-items-center flex-column countcards" data-aos="zoom-in" data-aos-delay="150">
            <div class="card-img"> 
              <img src="assets/img/certified.png" class="img-fluid" alt="">
            </div>
            <div class="card-content text-center">
              <h1 class="number"><span class="countnum">650</span>+</h1>
              <p>Students Certified</p>
              
            </div>

          </div>

        </div>
    


      </div>
    </section><!-- End count Section -->


    <!-- ======= testimonial Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title">
          <span>Testimonials</span>
          <h2>Testimonials</h2>
          <p>Satisfied Students</p>
        </div>

    

        <div class="owl-carousel owl-theme" data-aos="fade-up" data-aos-delay="150">

          <?php 

            $testi=fetchTesti();
            while ($testirow=mysqli_fetch_assoc($testi)) {
          ?>

          <div class="portfolio-item">
            <a href="<?php  echo SITE_TESTI_IMAGE.$testirow['photo']; ?>" target="_blank"><img src="<?php  echo SITE_TESTI_IMAGE.$testirow['photo']; ?>" class="img-fluid" alt=""></a>
          </div>

          <?php
            }
          ?>


        </div>

      </div>
    </section><!-- End testimonial Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <span>Professionals</span>
          <h2>Our Professionals</h2>
          <p>We are here to provide you with expert assistance</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img class="lazy" data-src="assets/img/team/team-3.jpg" alt="">
              <h4>Shashi Sir</h4>
              <span>Business Intelligence Analyst</span>
              <div class="social">
                <a href=""><i class="bi bi-envelope-fill"></i></a>
                <a href="tel:+918600007988"><i class="bi bi-telephone-fill"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img class="lazy" data-src="assets/img/team/team-1.jpg" alt="">
              <h4>Yashwant Sir</h4>
              <span>Software Test Engineer</span>
              <div class="social">
                <a href=""><i class="bi bi-envelope-fill"></i></a>
                <a href="tel:+918600007944"><i class="bi bi-telephone-fill"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img class="lazy" data-src="assets/img/team/team-3.jpg" alt="">
              <h4>Sujit Sir</h4>
              <span>Database Analyst</span>
              <div class="social">
                <a href=""><i class="bi bi-envelope-fill"></i></a>
                <a href="tel:+919607656761"><i class="bi bi-telephone-fill"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">


        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Hadapsar -Kharadi Bypass Road,<br> Kharadi, Pune, Pin-411014</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>trilanceitsolutions@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+91 9607656761</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<?php
 
 include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/footer.php');

?>