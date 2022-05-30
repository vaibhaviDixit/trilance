<?php

include ('top.php');

$msg="";
$course="";
$description="";
$pic="";
$id="";
$required="required";



if(isset($_GET['id']) && $_GET['id']>0){
	$required="";
	$id=getSafeVal( $_GET['id'] ) ;


	$row=mysqli_fetch_assoc( mysqli_query($con,"select * from course where id='$id' ") );
	$course=$row['name'];
	$description=$row['description'];
	$pic=$row['pic'];


}


if (isset($_POST['submit'])) {
	$course=getSafeVal( $_POST['course'] ) ;
	$description=getSafeVal( $_POST['description'] ) ;


	if(isset($_FILES['pic'])){

		$type=$_FILES['pic']['type'];
	
			//add validations on image
			if($type!="image/jpeg" && $type!="image/png" && $type!="image/jpg"){
				$msg="Invalid image format";
			}
			else{

				$pic=rand(111111111,999999999).'_'.$_FILES['pic']['name'];
				move_uploaded_file($_FILES['pic']['tmp_name'],SERVER_COURSE_IMAGE.$pic);

			}



	}
	 

	if($id==""){
		//here id is blank means admin wants to add new category
		$sql="select * from course where name='$course' ";

	}
	else{
		//here id is set means admin wants to edit existing category
		$sql="select * from course where name='$course' and id!='$id' ";

	}


	if(mysqli_num_rows(mysqli_query($con,$sql)) >0 ){

		$msg="Already exists";

	}
	else{

		//if id is not set then insert new category 
		if($id==""){
			mysqli_query($con,"insert into course(name,pic,description) values('$course','$pic','$description') ");

		}
		else{
			//if id is set then update exsting category
			if(isset($_FILES['pic'])){
				$delrow=mysqli_fetch_assoc(mysqli_query($con,"select * from course where id='$id'"));
				deleteFile(SERVER_COURSE_IMAGE.$delrow['pic']);
				mysqli_query($con,"update course set name='$course',pic='$pic',description='$description' where id='$id'  ");

			}
			else{
				mysqli_query($con,"update course set name='$course', description='$description' where id='$id'  ");
			}
		}
		redirect(SITE_PATH.'admin/courses');
		
	}
	
}






?>
 


			<main class="content">
				<div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Manage Course</strong></h1>

			
			
					<?php 
					if(strlen( $msg ) > 0){
					?>
					<div class="alert alert-danger" role="alert" >  <?php echo $msg;  ?> </div>
					<?php
						}

					?>
					<form method="post" enctype="multipart/form-data">
				

					 	<div class="row">
								    <div class="col-sm-12 mb-3">
										<h5>Course Name</h5>
										<input type="text" class="form-control"  name="course" required autocomplete="off" value="<?php echo $course; ?>"/>
								      		
								    </div>
						</div>

						<div class="row">
								    <div class="col-sm-12 mb-3">
									<h5>Image of Course</h5>
									<?php 
										if(strlen( $pic ) > 0){
									?>
									<img src="<?php echo SITE_COURSE_IMAGE.$pic;  ?>" id="courseImg" class="img-fluid" width="150px">
								<?php
									}
									?>
								      <input class="form-control" type="file" name="pic" <?php  echo $required;?> >
								    </div>
						</div>

						<div class="row">
								    <div class="col-sm-12 mb-3">
									<h5>Description of Course</h5>
							           <textarea class="form-control" rows="3"  name="description" autocomplete="off"  required> <?php echo $description; ?> </textarea>
								      		
								    </div>
						</div>
						<input type="submit" name="submit" class="btn btn-success" value="Submit">
					</form>

					


                </div>
			</main>

      <?php

        include 'footer.php';
      ?>
