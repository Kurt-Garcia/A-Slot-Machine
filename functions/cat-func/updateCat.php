<?php 

	include('connect.php');

		$id = $_POST['id'];
		$category = $_POST['category'];
		$brand = $_POST['brand'];
		$description = $_POST['description'];

		$query = "update tbl_category set category='$category', brand='$brand', description='$description' where id='$id'";
		$result = odbc_exec($connect,$query);

		if (!$result)
		{
			echo "failed to update data";
		}
		elseif ($result)
		{
			header ('location: /engineering/categories.php');
		}

 ?>