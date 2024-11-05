<?php 

	include('connect.php');

		$req_no = $_POST['req_no'];
		$status = $_POST['status'];
		$sent_on = date("Y-m-d H:i:s");

		$query3 = "update tbl_requests set status='$status', sent_on='$sent_on' where req_no='$req_no'";
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