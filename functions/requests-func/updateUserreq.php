<?php 
	
	include('connect.php');

		$req_no = $_POST['req_no'];
		$name = $_POST['name'];
		$branch = $_POST['branch'];
		$department = $_POST['department'];
		$subject = $_POST['subject'];
		$quotation = $_POST['optradio'];

		$query3 = "update tbl_requests set name='$name',branch='$branch', department='$department', subject='$subject', quotation='$quotation' where req_no='$req_no'";
		$result = odbc_exec($connect,$query3);

		if(!$result)
		{
			echo "failed to update data";
		}
		elseif($result)
		{
			header ('location: /engineering/user_reqlist.php');
		}

 ?>