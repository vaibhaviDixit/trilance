<?php

  session_start();
  
  include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/database.inc.php');
  include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/functions.inc.php');
  include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/constants.inc.php');

if($_POST) {

  $name = getSafeVal($_POST['name']);
  $email = getSafeVal($_POST["email"]);
  $phone = getSafeVal($_POST["phone"]);
  $message = getSafeVal($_POST["message"]);
  $course=getSafeVal($_POST["course"]);

 $exe=mysqli_query($con,"INSERT INTO `contact`(`name`, `email`, `phone`, `message`, `course`) VALUES ('$name','$email','$phone','$message','$course')");

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




