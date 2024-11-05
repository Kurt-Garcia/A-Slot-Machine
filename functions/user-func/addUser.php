<?php

	include('connect.php');


		$username = $_POST['username'];
		$branch = $_POST['branch'];
		$user_role = $_POST['user_role'];
		$team = $_POST['team'];
		$password = $_POST['password'];

		$sql_u = "SELECT * FROM tbl_user WHERE username='$username'";
  		$res_u = odbc_exec($connect, $sql_u);

		if (odbc_num_rows($res_u) == 1) 
		{
			header('Location: /engineering/users.php?error=1');
  		}
		else
  		{
            $query = "insert into tbl_user (username,branch,user_role,team,password) values('$username','$branch','$user_role','$team','$password')";
			$result = odbc_exec($connect,$query);

			header ('location: /engineering/users.php');
  		}

 ?>