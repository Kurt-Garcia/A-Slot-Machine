<?php

	include('connect.php');

		$serial = $_POST['serial'];
		$category_id = $_POST['category_id'];
		$received_by = $_POST['received_by'];
		$qty = $_POST['qty'];
		$supplier_id = $_POST['supplier_id'];
		$unit = $_POST['unit'];
		$cost = $_POST['cost'];
		$invoice_num = $_POST['invoice_num'];
		$invoice_type = $_POST['invoice_type'];
		$receive = $_POST['received'];

			$query = "insert into tbl_inventory (serial,category_id,received_by,qty,supplier_id,unit,cost,invoice_number,invoice_type,receive_accouting) values('$serial',
			'$category_id','$received_by','$qty','$supplier_id','$unit','$cost',
			'$invoice_num','$invoice_type','$receive')";
  			$result = odbc_exec($connect, $query);

		if (!$result)
		{
			echo "failed to remove data";
		}
		elseif ($result)
		{
			header ('location: /engineering/inventory.php');
		}

 ?>