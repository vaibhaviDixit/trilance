<?php
	
	session_start();
	
	  include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/database.inc.php');
      include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/functions.inc.php');
      include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/constants.inc.php');

if(isset($_POST['batchId'])){
  // print_r($_POST);
  $batchId=$_POST['batchId'];
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address =$_POST['address'];
  $dob=$_POST['dob'];
  $gender= $_POST['gender'];
  $qualification=$_POST['qualification'];

  $exe=mysqli_query($con,"INSERT INTO `enrolled`(`batchId`, `first_name`, `last_name`, `email`, `phone`, `address`, `dob`, `gender`, `qualification`) VALUES ('$batchId','$first_name','$last_name','$email','$phone','$address','$dob','$gender','$qualification' )");

	if($exe){
		echo json_encode(array("success"=>true));
      die();
	}
	else{
	  echo json_encode(array("success"=>false));
      die();
	}


 }
 else{
	  echo json_encode(array("success"=>false));
      die();
	}






 ?>