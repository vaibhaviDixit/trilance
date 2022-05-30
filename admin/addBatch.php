<?php

include ('top.php');

$msg="";
$name="";
$description="";
$start="";
$id="";




if(isset($_GET['id']) && $_GET['id']>0){
	$id=getSafeVal( $_GET['id'] ) ;


	$row=mysqli_fetch_assoc( mysqli_query($con,"select * from batches where id='$id' ") );
	$name=$row['name'];
	$description=$row['description'];
	$start=$row['start'];

}


if (isset($_POST['submit'])) {
	$name=getSafeVal( $_POST['name'] ) ;
	$description=getSafeVal( $_POST['description'] ) ;
	$start=getSafeVal( $_POST['start'] ) ;
 

	if($id==""){
		//here id is blank means admin wants to add new category
		$sql="select * from batches where name='$name' ";

	}
	else{
		//here id is set means admin wants to edit existing category
		$sql="select * from batches where name='$name' and id!='$id' ";

	}


	if(mysqli_num_rows(mysqli_query($con,$sql)) >0 ){

		$msg="Already exists";

	}
	else{

		//if id is not set then insert new category 
		if($id==""){
			mysqli_query($con,"INSERT INTO `batches`(`name`, `description`, `start`) VALUES ('$name','$description','$start')");
			
		}
		else{
			//if id is set then update exsting category
			mysqli_query($con,"update batches set name='$name', description='$description',start='$start' where id='$id'  ");
		}
		redirect(SITE_PATH.'admin/listbatches');
		
	}
	
}






?>
 


			<main class="content">
				<div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Manage Upcoming Batches</strong></h1>

			
			
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
										<h5>Batch Name</h5>
										<input type="text" class="form-control"  name="name" required autocomplete="off" value="<?php echo $name; ?>"/>
								      		
								    </div>
						</div>

						<div class="row">
								    <div class="col-sm-12 mb-3">
									<h5>Description</h5>
							           <textarea class="form-control" rows="3"  name="description" autocomplete="off"  required> <?php echo $description; ?> </textarea>
								      		
								    </div>
						</div>

						<div class="row">
								    <div class="col-sm-6 mb-3">
									<h5>Start From</h5>
									<input type="date" name="start" class="form-control"  value="<?php echo $start; ?> " required>
								      		
								    </div>
						</div>

						<input type="submit" name="submit" class="btn btn-success" value="Submit">
					</form>

					


                </div>
			</main>

      <?php

        include 'footer.php';
      ?>
