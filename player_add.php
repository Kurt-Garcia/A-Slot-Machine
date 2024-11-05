<?php

include('connect.php');



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ticket  = htmlspecialchars($_POST['ticketno']);
    //$name    = htmlspecialchars($_POST['player_name']);
    //$celno   = htmlspecialchars($_POST['player_celno']);
    //$address = htmlspecialchars($_POST['player_add']);
    $orno1   = htmlspecialchars($_POST['orno1']);
    //$amount1 = htmlspecialchars($_POST['amount1']);
    $ctr1    = htmlspecialchars($_POST['ctr1']);
       
    // $playerno 	= htmlspecialchars($_POST['player_ctr1']);




		// $save 				= "INSERT INTO customer (name, address, status, celno, orno, amount, ctr, entries, total_entries) 
		// 					VALUES ('$name', '$address', '1', '$celno', '$orno1', '$amount1', '$ctr1', '$ticket', '$ticket')";

        $save 				= "INSERT INTO customer (status, orno, ctr, entries, total_entries) 
							VALUES ('1', '$orno1', '$ctr1', '$ticket', '$ticket')";           

		$result = mysqli_query($conn, $save);

        echo "<div id='message' style='color: white; text-align: center; background-color: #22bb33; padding: 10px; border-radius: 5px;'>New player created successfully</div>";
        echo " <br>";

            echo "<script>
            setTimeout(function() {
                document.getElementById('message').style.display = 'none';}, 2000); disableFields(true); 
                </script>";
                
          echo "<script>$('#submit_add').prop('disabled',true);</script>";

		// Check for existing record with the same unique identifier
		$check_query 		= "SELECT * FROM customer WHERE orno='$orno1' AND ctr='$ctr1'";
		$check_result 		= mysqli_query($conn, $check_query);

        

        $datecurrent = date('Y-m-d H:i:s');

		$query_id         	= "SELECT * FROM customer WHERE status='1' AND date >'$datecurrent' ORDER BY date DESC LIMIT 1";
		$result_id        	= mysqli_query($conn,$query_id);
		$fetch_id         	= mysqli_fetch_array($result_id);

		$id            		= $fetch_id['id'];



        if (mysqli_num_rows($check_result) > 1) {
            // Record exists, handle as needed
    
            $del2 = "DELETE FROM customer WHERE id='$id'";
            $result2 = mysqli_query($conn,$del2);
            
                   
        } 
        else {
            
               
            }


     $conn->close();
}
?>
