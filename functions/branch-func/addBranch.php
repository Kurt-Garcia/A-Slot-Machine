<?php

	include('connect.php');

		$branch = $_POST['branch'];

			$sql_u = "SELECT * FROM tbl_branches WHERE branch='$branch'";
  			$res_u = odbc_exec($connect, $sql_u);

		if (odbc_num_rows($res_u) == 1) 
		{
			header('Location: /helpdesk/branches.php?error=1');
  		}
		else
  		{
            $query = "insert into tbl_branches (branch) values('$branch')";
			$result = odbc_exec($connect,$query);

			header ('location: /engineering/branches.php');
  		}

 ?>