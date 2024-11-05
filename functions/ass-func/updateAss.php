<?php 

	include('connect.php');


		$id = $_POST['id'];
		$name = $_POST['name'];
		$ass_team = $_POST['ass_team'];

		 $query = "update tbl_assignee set name='$name', ass_team='$ass_team' where id='$id'";
		 $result = odbc_exec($connect,$query);

		if (!$result)
		{
			echo "failed to update data";
		}
		elseif ($result)
		{
			header ('location: /engineering/assignee.php');
		}

 ?>