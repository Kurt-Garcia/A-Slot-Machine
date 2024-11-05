<?php 

	include('connect.php');

		$id = $_POST['id'];
		$branch = $_POST['branch'];

		 $query = "update tbl_branches set branch='$branch' where id='$id'";
		 $result = odbc_exec($connect,$query);

		if (!$result)
		{
			echo "failed to update data";
		}
		elseif ($result)
		{
			header ('location: /engineering/branches.php');
		}

 ?>