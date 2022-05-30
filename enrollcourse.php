<?php
 
 include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/header.php');
 
 if(isset($_GET['id']) && $_GET['id']>0){
    $courseId=$_GET['id'];
    $batch=mysqli_query($con,"select * from course where id='$courseId' ");
    if(mysqli_num_rows($batch)>0){
        $batchRow=mysqli_fetch_assoc($batch);
    }
    else{

        redirect(SITE_PATH.'batches');
    }
 

 
}

?>

  <main id="main">

   
    <!-- ======= testimonial Section ======= -->
    <section id="batches" class="batches">
      <div class="container">

        <div class="section-title">
          <span>Enroll for </span>
          <h2><?php echo $batchRow['name']; ?></h2>
        </div>


            <!-- ############ -->

             <div class="page-wrapper  p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Please fill the Enrollment Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST" id="enrollCourseform">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name" id="first_name">
                                            <input type="hidden" name="courseId" value="<?php echo $courseId; ?>">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name" id="last_name">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="phone" id="phone">
                                        </div>
                                    
                            </div>
                        </div>

                         <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="address" id="address" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">DOB</div>
                            <div class="value">
                                <div class="input-group">
                                    <input type="date" class="input--style-5" type="text" name="dob" id="dob" required>
                                </div>
                            </div>
                        </div>

                          <div class="form-row m-b-55">
                            <div class="name">Gender</div>
                            <div class="value">
                                <div class="p-t-15">
                                <label class="radio-container m-r-55">Male
                                    <input type="radio" checked="checked" name="gender" value="male" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender" value="female">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            </div>
                        </div>

                        <div class="form-row m-b-55">
                            <div class="name">Highest Qualification</div>
                            <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="qualification" id="qualification" required>
                                        </div>
                  
                            </div>
                        </div>


                    
                        <div>
                            <input type="submit" name="enroll" class="btn btn--radius-2 btn--red" value="Enroll Now" id="submitEnrollCourse">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


            <!-- ############ -->

      </div>
    </section><!-- End testimonial Section -->

 

  </main><!-- End #main -->
<?php
 
 include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/footer.php');

?>