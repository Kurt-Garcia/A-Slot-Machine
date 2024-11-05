<?php 

	include('connect.php');

		$id = $_POST['id'];
		$attempt = $_POST['attempt'];
		$user_role = $_POST['user_role'];
		$team = $_POST['team'];

		$query2 = "UPDATE tbl_user set attempt='$attempt', team='$team', user_role='$user_role' WHERE id='$id'";
		$result = odbc_exec($connect,$query2);

		if (!$result)
		{
			echo "failed to update data";
		}
		elseif ($result)
		{
			header ('location: /engineering/users_reqlist.php');
		}

 ?>