<?php
# create database connection
include('connect.php');

$next_or                =$_POST['next_orx'];
$next_name              =$_POST['next_namex'];
  
$query_onhand           ="UPDATE customer SET status='2' where orno='$next_or' AND name='$next_name'"; 
$update_onhand          = mysqli_query($conn,$query_onhand);


?>