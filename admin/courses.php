<?php

include ('top.php');

$sql="select * from course order by id desc";
$res=mysqli_query($con,$sql);

?>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Courses</h1>
					</div>
					<hr>
				<div class="container table-responsive">

					<table id="dttable">
					<thead class="table-primary">
						<tr>
						<th scope="col">Sr. No</th>
						<th scope="col">Name</th>
						<th scope="col">Image</th>
						<th scope="col" width="40%">Description</th>
						<th scope="col">Actions</th>

						</tr>
					</thead>
					<tbody>

						<?php  


							if(mysqli_num_rows($res) > 0){
								$i=1;
								while( $row=mysqli_fetch_assoc($res) ){

						?>

						<tr>
						<td scope="col"> <?php  echo $i; ?></td>
						<td scope="col"> <?php  echo $row['name']; ?></td>

						<td scope="col"> <a target="_blank" href="<?php  echo SITE_COURSE_IMAGE.$row['pic']; ?>"> <img class="img-fluid" style="height:200px;" src="<?php  echo SITE_COURSE_IMAGE.$row['pic']; ?>" > </a> </td>

						<td scope="col"> <?php  echo $row['description']; ?></td>
						<td scope="col">

							<a href="<?php echo SITE_PATH.'admin/'; ?>addCourse/<?php echo $row['id']; ?>"> <button class="btn btn-success btn-sm">Edit</button> </a>
							
						
							<a href="?id=<?php echo $row['id']; ?>&type=delete "> <button class="btn btn-danger btn-sm">Delete</button> </a>



						</td>

						</tr>


						<?php
								$i++;

								}
							}
							else{
							?>
							<td colspan="4">Data not found</td>

							<?php

							}

						?>
						

						
						
					</tbody>

					</table>


				</div>



					
				</div>
			</main>

      <?php

        include 'footer.php';
      ?>

   
<?php


if( isset($_GET['type']) && $_GET['type']!==' '  &&  isset($_GET['id']) && $_GET['id'] > 0  )
{

	$type=$_GET['type'];
	$id=$_GET['id'];

	if( $type == 'delete')
	{
		$delrow=mysqli_fetch_assoc(mysqli_query($con,"select * from course where id='$id'"));
		deleteFile(SERVER_COURSE_IMAGE.$delrow['pic']);
		 mysqli_query($con,"delete from course where id='$id' ");
		 redirect(SITE_PATH.'admin/courses');

	}


}

?>