<?php 

	include('connect.php');

		$id = $_POST['id'];
		$username = $_POST['username'];
		$branch = $_POST['branch'];
		$password = $_POST['password'];

		$sql_u = "SELECT * FROM tbl_user WHERE id='$id' AND password='$password'";
  		$res_u = odbc_exec($connect, $sql_u);
        

  		if (odbc_num_rows($res_u) == 1) {
  			$query = "update tbl_user set username='$username', branch='$branch' where id='$id'";
			$result = odbc_exec($connect,$query);

			header('Location: /engineering/dashboard.php?error=6');
  		}
  		else {
  			header('Location: /engineering/dashboard.php?error=9');
  		}

 ?>