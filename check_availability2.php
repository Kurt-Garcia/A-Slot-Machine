<?php
# create database connection
require("connect.php");

if
  (!empty($_POST["orno1xxi"])||!empty($_POST["orno2xxi"])||!empty($_POST["orno3xxi"])||!empty($_POST["orno4xxi"])||!empty($_POST["orno5xxi"])||!empty($_POST["ctr1xxi"])||!empty($_POST["ctr2xxi"])||!empty($_POST["ctr3xxi"])||!empty($_POST["ctr4xxi"])||!empty($_POST["ctr5xxi"]) );
  
 {
  
  $query1x = "SELECT * FROM counter WHERE no = '" . $_POST["ctr1xxi"] . "'";
  $result1x = mysqli_query($conn,$query1x);
  $ctr1en  = mysqli_num_rows($result1x);



  echo"$ctr1en";



  if($ctr1en>=1) {
    
    echo "<script>$('#orno1').prop('disabled',false);</script>";
  }else{
    
    echo "<script>$('#orno1').prop('disabled',true);</script>";
  }



}
?>