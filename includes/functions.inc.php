<?php

function redirect ($path)
{
    ?>
    <script>
        window.location.href='<?php echo $path ?>'
    </script>
    <?php
    die();
}

//print array
function pra($arr){
  echo "<pre>";
  print_r($arr);
}

function deleteFile($link){
  unlink($link);
}



function getSafeVal($str){
  global $con;
  $str=strip_tags(mysqli_real_escape_string($con,htmlspecialchars($str)));
  return $str;
}

function getAdminDetails(){

   global $con;
    $arr=array();
    if(isset($_SESSION['ADMIN'])){
      $uid=$_SESSION['ADMIN'];
      $res=mysqli_query($con,"select * from admin where name ='$uid' ");
       $row=mysqli_fetch_assoc($res);
      $arr=$row;
    }
    
    return $arr;
}

function fetchCourse(){

   global $con;
    $res=mysqli_query($con,"select * from course ");
  
    return $res;

}

function fetchTesti(){

   global $con;
    $res=mysqli_query($con,"select * from testimonials order by id desc ");
  
    return $res;

}
function fetchBatches(){

  global $con;
    $res=mysqli_query($con,"select * from batches order by id desc ");
  
    return $res;

}

function noofcourses(){

  global $con;
    $res=mysqli_num_rows(mysqli_query($con,"select * from course"));
  
    return $res;

}

function noofstudents(){


  global $con;
    $res=mysqli_num_rows(mysqli_query($con,"select * from placed"));
  
    return $res;


}

function mydate($date){
  $dt=date_create($date);
  return date_format($dt,"d F Y");
}


?>