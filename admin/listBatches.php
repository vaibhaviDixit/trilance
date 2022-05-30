<?php

include ('top.php');

$sql="select * from batches order by id desc";
$res=mysqli_query($con,$sql);

?>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Batches</h1>
					</div>
					<hr>

				<div class="container table-responsive">

					<table class="table table-striped   table-hover  table-sm pt-3" id="dttable">
					<thead class="table-primary">
						<tr>

						<th scope="col">Sr No.</th>
						<th scope="col">Batch</th>
						<th scope="col">Description</th>
						<th scope="col">Start From</th>
						<th scope="col" width="20%">Actions</th>

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

						<td scope="col"><?php echo $row['name']; ?></td>
            			<td scope="col"><?php echo $row['description']; ?></td>
            			<td scope="col"><?php echo mydate($row['start']); ?></td>

						<td scope="col" >

							<a href="<?php echo SITE_PATH.'admin/'; ?>addBatch/<?php echo $row['id']; ?>"> <button class="btn btn-success btn-sm">Edit</button> </a>
							
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
					 mysqli_query($con,"delete from batches where id='$id' ");
					 redirect(SITE_PATH.'admin/listBatches');

				}




			}

?>
