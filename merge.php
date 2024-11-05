<?php

	include ('connect.php');


		

	//$sql ="INSERT INTO [192.168.180.191].[Grocery_Maintenance].[dbo].[AVG_COST]

      $sql ="INSERT INTO region_db_eraffle_cebu.customer Select * from customer";

    
	$result = mysqli_query($conn, $sql); 
		
      if(!$result)
		{
			echo mysqli_error($conn);
		}
		else
		{
			header ('location: raffle.php');
		}

		
 ?>