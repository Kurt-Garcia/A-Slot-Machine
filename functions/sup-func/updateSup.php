<?php 

	include('connect.php');

		$id = $_POST['id'];
		$supplier = $_POST['supplier'];
		$cntct_person = $_POST['cntct_person'];
		$cp_no = $_POST['cp_no'];
		$tel_no = $_POST['tel_no'];

		$query = "update tbl_supplier set supplier='$supplier', cntct_person='$cntct_person', cp_no='$cp_no', tel_no='$tel_no' where id='$id'";
		$result = odbc_exec($connect,$query);

		if (!$result)
		{
			echo "failed to update data";
		}
		elseif ($result)
		{
			header ('location: /engineering/suppliers.php');
		}

 ?>