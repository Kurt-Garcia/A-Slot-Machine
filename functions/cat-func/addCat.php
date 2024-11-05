<?php

	include('connect.php');

		$category = $_POST['category'];
		$brand = $_POST['brand'];
		$description = $_POST['description'];

			$query = "insert into tbl_category (category,brand,description) values('$category','$brand','$description')";
  			$result = odbc_exec($connect, $query);

		if (!$result)
		{
			echo "failed to remove data";
		}
		elseif ($result)
		{
			header ('location: /engineering/categories.php');
		}

 ?>