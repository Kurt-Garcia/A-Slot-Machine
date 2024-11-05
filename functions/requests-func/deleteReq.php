<?php 

	include('connect.php');

		$req_no = $_POST['req_no'];
		$query = "delete from tbl_requests where req_no = $req_no";
		$result = odbc_exec($connect,$query);
		if (!$result)
		{
			echo "failed to remove data";
		}
		elseif ($result)
		{
			header ('location: /engineering/requests.php');
		}

 ?>