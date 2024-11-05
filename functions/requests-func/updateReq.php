<?php 

	include('connect.php');

		$req_no = $_POST['req_no'];
		$priority = $_POST['priority'];
		$status = $_POST['status'];
		$remarks = $_POST['remarks_engr'];
		$procurement = $_POST['procurement_ticket'];
		$engineering = $_POST['engineering_ticket'];
		$evaluated_by = $_POST['evaluated'];

		$query3 = "update tbl_requests set status='$status', priority='$priority', remarks_engr='$remarks', procurement_ticket='$procurement', engineering_ticket='$engineering', evaluated_by='$evaluated_by' where req_no='$req_no'";

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