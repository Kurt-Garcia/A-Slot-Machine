<?php

	include('connect.php');

		$name = $_POST['name'];
		$ass_team = $_POST['ass_team'];

			$sql_u = "SELECT * FROM tbl_assignee WHERE name='$name'";
  			$res_u = odbc_exec($connect, $sql_u);

		if (odbc_num_rows($res_u) == 1) 
		{
			header('Location: /engineering/assignee.php?error=1');
  		}
		else
  		{
            $query = "insert into tbl_assignee (name, ass_team) values('$name', '$ass_team')";
			$result = odbc_exec($connect,$query);

			header ('location: /engineering/assignee.php');
  		}

 ?>