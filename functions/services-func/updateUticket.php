<?php 

	include('connect.php');

		$serv_no = $_POST['serv_no'];
		$name = $_POST['name'];
		$branch = $_POST['branch'];
		$department = $_POST['department'];
		$subject = $_POST['subject'];
		$problem = $_POST['problem'];

		$query3 = "update tbl_services set name='$name',branch='$branch', department='$department', problem='$problem', subject='$subject' where serv_no='$serv_no'";
		$result = odbc_exec($connect,$query3);

		if(!$result)
		{
			echo "failed to update data";
		}
		elseif($result)
		{
			header ('location: /engineering/u_tickets.php');
		}

 ?>