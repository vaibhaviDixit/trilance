<?php
session_start();

include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/database.inc.php');
      include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/functions.inc.php');
      include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/constants.inc.php');
//check admin login credentials
$msg="";
if (isset($_POST['submit'])) {
	$email=getSafeVal( $_POST['username'] );
	$password=getSafeVal( $_POST['password'] );

	$sql="select * from admin where username='$email'";
	$res=mysqli_query($con,$sql);

	if(mysqli_num_rows($res)>0){



		$row=mysqli_fetch_assoc($res);
		$dbhash=$row['password'];
		if(password_verify($password, $dbhash)){

			$_SESSION['ADMIN']=$row['name'];
			redirect(SITE_PATH.'admin/index');

		}

	}
	else{
		$msg="Please enter valid login details";
	}
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Admin</title>
 	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_PATH; ?>assets/vendor/bootstrap/css/bootstrap.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style type="text/css">
    	@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
    	*{
 		   font-family: 'Nunito', sans-serif;
	    }
    </style>
	
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Welcome Admin</h1>
							<p class="lead fs-6">
								Sign in to your account to continue
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form method="post">
										<span class="text-danger"><?php echo $msg; ?></span>
										<div class="mb-3 ">
											<label class="form-label fs-6">Username</label>
											<input class="form-control form-control-sm" type="text" name="username" placeholder="Username" required autocomplete="off" />
										</div>
										<label class="form-label fs-6">Password</label>
										<div class="mb-3" style="position: relative;display: flex;align-items: center;">
											
											<input class="form-control form-control-sm" type="password" id="adminPassword" name="password" placeholder="Password" required autocomplete="off" />

        								   <i class="fas fa-eye " style="position: absolute;right: 25px; cursor: pointer;" onclick="toggleEye('adminPassword')"></i>  
											<!-- <small>
									            <a href="index.html">Forgot password?</a>
									        </small> -->
										</div>
										

										<div class="text-center mt-3">

											<input type="submit" class="btn  btn-success" value="Log In" name="submit" />
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="<?php echo SITE_PATH; ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- custom js file link  -->
	<script src="<?php echo SITE_PATH; ?>assets/js/main.js"></script>

</body>

</html>