<?php
require("connect.php");
session_start();

if(ISSET($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];


 
  $query_CONS   = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn,$query_CONS);
  $fetch  = mysqli_fetch_array($result);
  $row    = mysqli_num_rows($result);

    

  $query2 = "SELECT user_role FROM user WHERE username='$username' and password='$password'";
  $res = mysqli_query($conn, $query2);
  while($role = mysqli_fetch_array($res))

   

       {
      $role_no =$role['user_role'];
      }


  if ($role_no == 1) {
          $_SESSION['id']=$fetch['id'];
          header("location: raffle.php");}

        else if ($role_no == 2){
            $_SESSION['id']=$fetch['id'];
            header("location: index.php?error=1");}

        else if ($role_no == 3){
            $_SESSION['id']=$fetch['id'];
            header("location: index.php?error=1");}
  

        else if ($role_no['user_role'] == 0) {
          header("location: index.php?error=1");}}


?>




<html>
<head>
	  <meta charset="UTF-8">
	  <title>GCAP E-Raffle</title>
    <link rel="icon" href="image/gaisano.png" type="image/x-icon">

	  <link rel="stylesheet" type="text/css" href="css/login.css">
	  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">

   <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/jquery-1.11.1.min.js"></script>
    <link  rel="stylesheet" href="bootstrap/jquery-ui.css" />
    <script src="bootstrap/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/bar-designed.css">
    


    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style_s.css">



</head>
<body>

  <?php 
            $get = (isset($_GET['error'])) ? $_GET['error'] : '';
            if ((!empty($get)) && ($get == 1)) {
            echo "<div class='alert' style='width:330px;margin-left:70%'>
            <span class='closebtn'>&times;</span>  
            <h4><strong>Login Failed!</strong><br> Username or Password is Incorrect.</h4>
            </div>";}
            /*else if((!empty($get)) && ($get == 1)){
            echo "<div class='alert' style='width:350px;margin-left:70%'>
            <span class='closebtn'>&times;</span>  
           <h4><strong>Login Failed!</strong><br> Username or Password is Incorrect.</h4>
            </div>";}*/
          
            else {}
        ?>
 

         <script>
            var close = document.getElementsByClassName("closebtn");
            var i;
            for (i = 0; i < close.length; i++) {
            close[i].onclick = function(){
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);}}
         </script>

 
<div class="container-fluid bg">
	   <div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form class="form-container" method="POST">
                    <h3 align="center" style="font-weight: bold; font-size: 210%; color: #fdf901; text-shadow: 2px 2px 0 #000, -2px 2px 0 #000,-2px -2px 0 #000,2px -2px 0 #000; margin-top:-15px;">GAISANO CAPITAL</h3>
                    <h3 align="center" style="font-weight: bold; font-size: 210%; color: #fdf901; text-shadow: 2px 2px 0 #000, -2px 2px 0 #000,-2px -2px 0 #000,2px -2px 0 #000;margin-top:-6px;">SLOT MACHINE </h3>
                    <h3 align="center" style="font-weight: bold; font-size: 210%; color: #fdf901; text-shadow: 2px 2px 0 #000, -2px 2px 0 #000,-2px -2px 0 #000,2px -2px 0 #000;margin-top:-6px;">SOUTH</h3>
                    <br>
					<div class="form-group">
						<label style="font-size: 120%;color: #fdf901; text-shadow: 2px 2px 0 #000, -2px 2px 0 #000,-2px -2px 0 #000,2px -2px 0 #000;">Username</label>
						<input type="text" class="form-control" name="username" id="username" autocomplete="off">
					</div>

					<div class="form-group">
						<label style="font-size: 120%;margin-top:-19px; color: #fdf901; text-shadow: 2px 2px 0 #000, -2px 2px 0 #000,-2px -2px 0 #000,2px -2px 0 #000;">Password</label>
						<input type="password" class="form-control" name="password" id="password"  autocomplete="off">
					</div>
                   
					<button type="submit" name="login" class="btn btn-block" style=" padding: 7px 20%; font-size: 15px; margin-top: 18px; background-color: #FFC300; font-weight: bold; ">LOGIN</button>
          <!-- <label align="center" style="font-size: 12px; margin-top: 5px;">Powerd by kikoisay</label> -->
          <h1 align="center" style=" font-size: 100%;margin-top: 5px; margin-bottom: -20; color: #fdf901; text-shadow: 2px 2px 0 #000, -2px 2px 0 #000,-2px -2px 0 #000,2px -2px 0 #000;">Powerd by kikoisay</h1>
           <br>         
				</form>
			</div>
		</div>
	</div>

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> 
 
</body>
</html>