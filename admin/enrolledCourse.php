<?php

include ('top.php');

$sql="select enrolledcourse.*,course.name as batchName from enrolledcourse,course where course.id=enrolledcourse.id order by enrolledcourse.id desc";

$res=mysqli_query($con,$sql);

?>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Enrolled Students For Course</h1>
					</div>
					<hr>

				<div class="container table-responsive">

					<table class="table table-striped   table-hover  table-sm pt-3" id="dttable">
					<thead class="table-primary">
						<tr>

						<th scope="col">Sr No.</th>
						<th scope="col">Name</th>
						<th scope="col">Course</th>
						<th scope="col">Email</th>
						<th scope="col">Phone</th>
						<th scope="col">Address</th>
						<th scope="col">DOB</th>
						<th scope="col">Gender</th>
						<th scope="col">Qualification</th>
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

						<td scope="col"><?php echo $row['first_name']." ".$row['last_name']; ?></td>
            			<td scope="col"><?php echo $row['batchName']; ?></td>
            			<td scope="col"><?php echo $row['email']; ?></td>
            			<td scope="col"><?php echo $row['phone']; ?></td>
            			<td scope="col"><?php echo $row['address']; ?></td>
            			<td scope="col"><?php echo mydate($row['dob']); ?></td>
            			<td scope="col"><?php echo $row['gender']; ?></td>
            			<td scope="col"><?php echo $row['qualification']; ?></td>

						
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
		

