<?php

include ('top.php');

$msg="";
$name="";
$job="";
$id="";




if(isset($_GET['id']) && $_GET['id']>0){
	$id=getSafeVal( $_GET['id'] ) ;


	$row=mysqli_fetch_assoc( mysqli_query($con,"select * from placed where id='$id' ") );
	$name=$row['name'];
	$job=$row['job'];

}


if (isset($_POST['submit'])) {
	$name=getSafeVal( $_POST['name'] ) ;
	$job=getSafeVal( $_POST['job'] ) ;
 

	if($id==""){
		//here id is blank means admin wants to add new category
		$sql="select * from placed where name='$name' ";

	}
	else{
		//here id is set means admin wants to edit existing category
		$sql="select * from placed where name='$name' and id!='$id' ";

	}


	if(mysqli_num_rows(mysqli_query($con,$sql)) >0 ){

		$msg="Already exists";

	}
	else{

		//if id is not set then insert new category 
		if($id==""){
			mysqli_query($con,"insert into placed(name,job) values('$name','$job') ");

		}
		else{
			//if id is set then update exsting category
			mysqli_query($con,"update course set name='$name', job='$job' where id='$id'  ");
		}
		redirect(SITE_PATH.'admin/listplaced');
		
	}
	
}






?>
 


			<main class="content">
				<div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Manage Placed Students</strong></h1>

			
			
					<?php 
					if(strlen( $msg ) > 0){
					?>
					<div class="alert alert-danger" role="alert" >  <?php echo $msg;  ?> </div>
					<?php
						}

					?>
					<form method="post">
				

					 	<div class="row">
								    <div class="col-sm-12 mb-3">
										<h5>Student Name</h5>
										<input type="text" class="form-control"  name="name" required autocomplete="off" value="<?php echo $name; ?>"/>
								      		
								    </div>
						</div>

						<div class="row">
								    <div class="col-sm-12 mb-3">
									<h5>Job Profile</h5>
							           <textarea required class="form-control" rows="3"  name="job" autocomplete="off"  > <?php echo $job; ?> </textarea>
								      		
								    </div>
						</div>
						<input type="submit" name="submit" class="btn btn-success" value="Submit">
					</form>

					


                </div>
			</main>

      <?php

        include 'footer.php';
      ?>
