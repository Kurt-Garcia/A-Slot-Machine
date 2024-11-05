<?php

	include('connect.php');

		$name = $_POST['name'];
		$branch = $_POST['branch'];
		$department = $_POST['department'];
		$problem = $_POST['problem'];
		$subject = $_POST['subject'];
		$qty = $_POST['qty'];
		$user_id = $_POST['user_id'];
		$status = 0;
		
		$query = "insert into tbl_requests (name,branch,department,problem,subject,qty,user_id,status) values('$name','$branch','$department','$problem','$subject','$qty','$user_id','$status')";
		$result = odbc_exec($connect,$query);

		if(!$result)
		{
			echo "failed to save data";
		}
		elseif ($result)
		{
			header ('location: /engineering/user_reqlist.php');
		}

 ?>