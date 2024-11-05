<?php


include('connect.php');

// Get POST data
$name 		= $_POST['namex'];
$address 	= $_POST['addressx'];
$celno 		= $_POST['celnox'];
$orno1 		= $_POST['orno1x'];
$amount1 	= $_POST['amount1x'];
$ctr1 		= $_POST['ctr1x'];
$ticket 	= $_POST['idticketx'];
$playerno 	= $_POST['playernox'];



		$save 				= "INSERT INTO customer (name, address, status, celno, orno, amount, ctr, entries, total_entries, player_no) 
							VALUES ('$name', '$address', '1', '$celno', '$orno1', '$amount1', '$ctr1', '$ticket', '$ticket', '$playerno')";
		$result = mysqli_query($conn, $save);

		// Check for existing record with the same unique identifier
		$check_query 		= "SELECT * FROM customer WHERE name='$name' AND address='$address' AND celno='$celno' AND orno='$orno1' AND amount='$amount1' AND ctr='$ctr1' AND entries='$ticket' AND total_entries='$ticket'";
		$check_result 		= mysqli_query($conn, $check_query);


		$query_id         	= "SELECT * FROM customer WHERE status='1' AND date >' $datecurrent' ORDER BY date DESC LIMIT 1";
		$result_id        	= mysqli_query($conn,$query_id);
		$fetch_id         	= mysqli_fetch_array($result_id);

		$id            		= $fetch_id['id'];


	if (mysqli_num_rows($check_result) > 1) {
		// Record exists, handle as needed

		$del2 = "DELETE FROM customer WHERE id='$id'";
		$result2 = mysqli_query($conn,$del2);

		header ('location: data_input.php');
		
	} 
	else {
	
			header('Location: data_input.php');
		}

			
		
 ?>