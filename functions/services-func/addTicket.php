<?php

	include('connect.php');

		$user_id = $_POST['user_id'];
		$name = $_POST['name'];
		$branch = $_POST['branch'];
		$department = $_POST['department'];
		$problem = $_POST['problem'];
		$subject = $_POST['subject'];

		$status = 0;
		$query = "insert into tbl_services (user_id,name,branch,department,problem,subject,status) values('$user_id','$name','$branch','$department','$problem','$subject','$status')";

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