<?php 

	include('connect.php');

		$id = $_POST['id'];
		$curpass = $_POST['curpass'];
		$npass = $_POST['npass'];
		$repass = $_POST['repass'];

		$sql_u = "SELECT * FROM tbl_user WHERE id='$id' AND password='$curpass'";
  		$res_u = odbc_exec($connect, $sql_u);
        

  		if (odbc_num_rows($res_u) == 1) {
  			if (($npass == $repass)) {
  				$query = "update tbl_user set password='$npass' where id='$id'";
				$result = odbc_exec($connect,$query);

					session_start();
					unset($_SESSION['user']);
					header('location: /engineering/index.php?error=8');
				}
		  		else {
		  			header('Location: /engineering/dashboard.php?error=7');
		  		}
  			}
  			else {
  				header('Location: /engineering/dashboard.php?error=9');
  			}

 ?>