<?php

	include('connect.php');

		$supplier = $_POST['supplier'];
		$cntct_person = $_POST['cntct_person'];
		$cp_no = $_POST['cp_no'];
		$tel_no = $_POST['tel_no'];

			$query = "insert into tbl_supplier (supplier,cntct_person,cp_no,tel_no) values('$supplier','$cntct_person','$cp_no','$tel_no')";
  			$result = odbc_exec($connect, $query);

		if (!$result)
		{
			echo "failed to remove data";
		}
		elseif ($result)
		{
			header ('location: /engineering/suppliers.php');
		}

 ?>