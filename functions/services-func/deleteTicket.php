<?php 

	include('connect.php');

		$serv_no = $_POST['serv_no'];
		$query = "delete from tbl_services where serv_no = $serv_no";
		$result = odbc_exec($connect,$query);
		if (!$result)
		{
			echo "failed to remove data";
		}
		elseif ($result)
		{
			header ('location: /engineering/services.php');
		}

 ?>