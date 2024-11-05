<?php
# create database connection
require("connect.php");

if
  (!empty($_POST["orno1xx"])||!empty($_POST["ctr1xx"]));
  
 {
  $query = "SELECT * FROM customer WHERE orno='" . $_POST["orno1xx"] . "' and  ctr='" . $_POST["ctr1xx"] . "' ";
  $result = mysqli_query($conn,$query);
  $count = mysqli_num_rows($result);


 
  if($count>0) {
    echo "<span  style='color:white;font-weight: bold;  font-size: 13px; background-color: #D80F27; padding-top: 5px; padding-bottom: 5px; border-radius: 5px;  '>   &nbsp  INVOICE NO. ALREADY EXIST  &nbsp  </span>";
    echo "<script>$('#submit_add').prop('disabled',true);</script>";
  }else{
    echo "<span  style='color:white; font-weight: bold;  font-size: 13px; background-color: #0AAD4D; padding-top: 5px; padding-bottom: 5px; border-radius: 5px; margin-left: 5px; '>&nbsp    INVOICE NO. IS AVAILABLE    &nbsp </span>";
    echo "<script>$('#submit_add').prop('disabled',false);</script>";
  }

 

 

 /* $query1x  = "SELECT * FROM customer WHERE orno in ('" . $_POST["orno1xx"] . "','" . $_POST["orno2xx"] . "',)";*/


   $query1x = "SELECT * FROM customer WHERE orno='" . $_POST["orno1xx"] . "' and  ctr='" . $_POST["ctr1xx"] . "'";


  $result1x = mysqli_query($conn,$query1x);
  $count1x  = mysqli_num_rows($result1x);


  if($count1x>=1) {
    echo "<script>$('#submit_add').prop('disabled',true);</script>";
  }else{
    echo "<script>$('#submit_add').prop('disabled',false);</script>";
  }






 $query1en = "SELECT * FROM counter WHERE no = '" . $_POST["ctr1xx"] . "'";
  $result1en = mysqli_query($conn,$query1en);
  $ctr1en  = mysqli_num_rows($result1en);



  if($ctr1en>=1) {
      echo "<script>$('#orno1').prop('disabled',false);</script>";
  }else{
      echo "<script>$('#orno1').prop('disabled',true);</script>";
  }





  $query2en = "SELECT * FROM counter WHERE no = '" . $_POST["ctr2xx"] . "'";
  $result2en = mysqli_query($conn,$query2en);
  $ctr2en  = mysqli_num_rows($result2en);


 if($ctr2en>=1) {
    
    echo "<script>$('#orno2').prop('disabled',false);</script>";
    echo "<script>$('#amount2').prop('disabled',false);</script>";
  }else{
    
    echo "<script>$('#orno2').prop('disabled',true);</script>";
    echo "<script>$('#amount2').prop('disabled',true);</script>";
  }





  $query3en = "SELECT * FROM counter WHERE no = '" . $_POST["ctr3xx"] . "'";
  $result3en = mysqli_query($conn,$query3en);
  $ctr3en  = mysqli_num_rows($result3en);


 if($ctr3en>=1) {
    
    echo "<script>$('#orno3').prop('disabled',false);</script>";
    echo "<script>$('#amount3').prop('disabled',false);</script>";
  }else{
    
    echo "<script>$('#orno3').prop('disabled',true);</script>";
    echo "<script>$('#amount3').prop('disabled',true);</script>";
  }





  $query4en = "SELECT * FROM counter WHERE no = '" . $_POST["ctr4xx"] . "'";
  $result4en = mysqli_query($conn,$query4en);
  $ctr4en  = mysqli_num_rows($result4en);


 if($ctr4en>=1) {
    
    echo "<script>$('#orno4').prop('disabled',false);</script>";
    echo "<script>$('#amount4').prop('disabled',false);</script>";
  }else{
    
    echo "<script>$('#orno4').prop('disabled',true);</script>";
    echo "<script>$('#amount4').prop('disabled',true);</script>";
  }




  $query5en = "SELECT * FROM counter WHERE no = '" . $_POST["ctr5xx"] . "'";
  $result5en = mysqli_query($conn,$query5en);
  $ctr5en  = mysqli_num_rows($result5en);


 if($ctr5en>=1) {
    
    echo "<script>$('#orno5').prop('disabled',false);</script>";
    echo "<script>$('#amount5').prop('disabled',false);</script>";
  }else{
    
    echo "<script>$('#orno5').prop('disabled',true);</script>";
    echo "<script>$('#amount5').prop('disabled',true);</script>";
  }


}
?>