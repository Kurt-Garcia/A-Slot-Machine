<?php
# create database connection
include('connect.php');

$allocurrentdatexx      =$_POST['allocurrentdatex'];
$alloDatexx             =$_POST['alloDatex'];

  
$query_testdate         ="INSERT INTO testdate ('currentdate','allodate')values ('$allocurrentdatexx','$alloDatexx')"; 
$update_testdate        = mysqli_query($conn,$query_testdate);



?>