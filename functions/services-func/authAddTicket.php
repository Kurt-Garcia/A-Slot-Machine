<?php

	include('connect.php');

		$user_id = $_POST['user_id'];
		$name = $_POST['name'];
		$branch = $_POST['branch'];
		$department = $_POST['department'];
		$problem = $_POST['problem'];
		$subject = $_POST['subject'];
		$team = $_POST['team'];
		$attend_by = $_POST['attend_by'];
		$level = $_POST['level'];
		$priority = $_POST['priority'];
		$solution = $_POST['solution'];
		$status = $_POST['status'];

			$query = "insert into tbl_services (
			user_id,name,branch,department,problem,subject,status,team,attend_by,level,priority,solution) values('$user_id','$name','$branch','$department','$problem','$subject','$status','$team','$attend_by','$level','$priority','$solution')";

		$result = odbc_exec($connect,$query);

		if(!$result)
		{
			echo "failed to save data";
		}
		elseif ($result)
		{
			header ('location: /engineering/services.php');
		}

 ?>