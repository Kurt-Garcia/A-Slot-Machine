<?php 

	include('connect.php');

		$serv_no = $_POST['serv_no'];
		$status = $_POST['status'];
		$cmpltn_date = date("Y-m-d H:i:s");

		$query3 = "update tbl_services set status='$status', cmpltn_date='$cmpltn_date' where serv_no='$serv_no'";
		$result = odbc_exec($connect,$query3);

		if(!$result)
		{
			echo "failed to update data";
		}
		elseif($result)
		{
			header ('location: /engineering/ctech_home.php');
		}

 ?>