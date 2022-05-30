
<?php
	include 'top.php';


	$msg="";


if (isset($_POST['submit'])) {

        $type=$_FILES['photo']['type'];
	
			//add validations on image
			if($type!="image/jpeg" && $type!="image/png" && $type!="image/jpg"){
				$msg="Invalid image format";
			}
			else{

				$photo=rand(111111111,999999999).'_'.$_FILES['photo']['name'];
				move_uploaded_file($_FILES['photo']['tmp_name'],SERVER_TESTI_IMAGE.$photo);

			    $addPck=mysqli_query($con,"INSERT INTO `testimonials`(`photo`) VALUES ('$photo')");
			  	
			    
			    if($addPck){
                    // notify user here
					redirect(SITE_PATH.'admin/listTestimonial');	
			    }

			}
	
		
	}
	


?>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Manage Testimonials</h1>				
					</div>
					<hr>

					<?php 
					if(strlen( $msg ) > 0){
					?>
					<div class="alert alert-danger" role="alert" >  <?php echo $msg;  ?> </div>
					<?php

						}
					?>					


					<form method="post" enctype="multipart/form-data" id="addPckgForm">
						<div class="row">
						
								 <div class="col-sm-4 mb-3">


								    	<label for="packagePhoto" class="form-label">Testimonial Screenshot
								     		<span class="redStar">*</span>
										</label>
								    	<input class="form-control form-control-sm" type="file" id="photo" name="photo" required>


								 </div>

							</div>
							

						
							 <input type="submit" name="submit" class="btn btn-success" value="Submit">

					</form>


				</div>
			</main>

<?php

include 'footer.php';
?>
