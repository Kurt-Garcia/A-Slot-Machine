<?php 

	include('connect.php');

		$req_no = $_POST['req_no'];
		$status = $_POST['status'];

		$query3 = "UPDATE tbl_requests set status='$status' where req_no='$req_no'";
		$result = odbc_exec($connect,$query3);

		if(!$result)
		{
			echo "failed to update data";
		}
		elseif($result)
		{
			header ('location: /engineering/user_reqlist2.php');
		}
		
 ?>