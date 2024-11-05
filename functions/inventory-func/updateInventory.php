<?php 

	include('connect.php');

		$id = $_POST['id'];
		$serial = $_POST['serial'];
		$category_id = $_POST['category_id'];
		$received_by = $_POST['received_by'];
		$qty = $_POST['qty'];
		$recv_date = $_POST['recv_date'];
		$supplier_id = $_POST['supplier_id'];
		$unit = $_POST['unit'];
		$cost = $_POST['cost'];

		$query = "update tbl_inventory set serial='$serial', category_id='$category_id', received_by='$received_by', qty='$qty',recv_date='$recv_date', supplier_id='$supplier_id', unit='$unit', cost='$cost' where id='$id'";
		$result = odbc_exec($connect,$query);

		if (!$result)
		{
			echo "failed to update data";
		}
		elseif ($result)
		{
			header ('location: /engineering/inventory.php');
		}

 ?>