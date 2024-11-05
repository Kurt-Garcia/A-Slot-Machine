<?php 

	include('connect.php');

		$serv_no = $_POST['serv_no'];
		$problem = $_POST['problem'];
		$status = $_POST['status'];
		$team = $_POST['team'];
		$attend_by = $_POST['attend_by'];
		$level = $_POST['level'];
		$priority = $_POST['priority'];
		$solution = $_POST['solution'];

		$query3 = "update tbl_services set problem='$problem', status='$status', team='$team', attend_by='$attend_by', level='$level', priority='$priority', solution='$solution' where serv_no='$serv_no'";
		$result = odbc_exec($connect,$query3);

		if(!$result)
		{
			echo "failed to update data";
		}
		elseif($result)
		{
			header ('location: /engineering/services.php');
		}

 ?>