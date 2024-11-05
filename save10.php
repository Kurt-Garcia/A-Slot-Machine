<?php

	include ('connect.php');

	if (isset($_POST['btn_submit']))

	
		$name 		= $_POST['name'];
		$address 	= $_POST['address'];
		$ticket 	= $_POST['ticket'];
		$ticket2 	= $_POST['ticket2'];
		$ticket3	= $_POST['ticket3'];
		$ticket4	= $_POST['ticket4'];
		$ticket5	= $_POST['ticket5'];
		$ticket6	= $_POST['ticket6'];
		$ticket7	= $_POST['ticket7'];
		$ticket8	= $_POST['ticket8'];
		$ticket9	= $_POST['ticket9'];
		$ticket10	= $_POST['ticket10'];
		$brticket 	= $_POST['brticket'];
		$brticket2 	= $_POST['brticket2'];
		$brticket3 	= $_POST['brticket3'];
		$brticket4 	= $_POST['brticket4'];
		$brticket5 	= $_POST['brticket5'];
		$brticket6 	= $_POST['brticket6'];
		$brticket7 	= $_POST['brticket7'];
		$brticket8 	= $_POST['brticket8'];
		$brticket9 	= $_POST['brticket9'];
		$brticket10	= $_POST['brticket10'];
		$date		= $_POST['presdate'];
		$celno		= $_POST['celno'];
		$orno1		= $_POST['orno1'];
		$amount1	= $_POST['amount1'];
		$ctr1		= $_POST['ctr1'];
		$orno2		= $_POST['orno2'];
		$amount2	= $_POST['amount2'];
		$ctr2		= $_POST['ctr2'];
		$orno3		= $_POST['orno3'];
		$amount3	= $_POST['amount3'];
		$ctr3		= $_POST['ctr3'];
		$orno4		= $_POST['orno4'];
		$amount4	= $_POST['amount4'];
		$ctr4		= $_POST['ctr4'];
		$orno5		= $_POST['orno5'];
		$amount5	= $_POST['amount5'];
		$ctr5		= $_POST['ctr5'];
		$valno		= $_POST['valno'];
		$idticket	= $_POST['idticket'];
		$id			= $_POST['id'];		


		$save = "insert into customer (id,idticket,name,address,ticket,brticket,status,date,cell,orno,amount,ctr1,orno2,amount2,ctr2,orno3,amount3,ctr3,orno4,amount4,ctr4,orno5,amount5,ctr5,valno) values
		('$id','$idticket','$name','$address','$ticket','$brticket','1','$date','$celno','$orno1','$amount1','$ctr1','$orno2','$amount2','$ctr2','$orno3','$amount3','$ctr3','$orno4','$amount4','$ctr4','$orno5','$amount5','$ctr5','$valno'),
		('$id','$idticket','$name','$address','$ticket2','$brticket2','1','$date','$celno','$orno1','$amount1','$ctr1','$orno2','$amount2','$ctr2','$orno3','$amount3','$ctr3','$orno4','$amount4','$ctr4','$orno5','$amount5','$ctr5','$valno'),
		('$id','$idticket','$name','$address','$ticket3','$brticket3','1','$date','$celno','$orno1','$amount1','$ctr1','$orno2','$amount2','$ctr2','$orno3','$amount3','$ctr3','$orno4','$amount4','$ctr4','$orno5','$amount5','$ctr5','$valno'),
		('$id','$idticket','$name','$address','$ticket4','$brticket4','1','$date','$celno','$orno1','$amount1','$ctr1','$orno2','$amount2','$ctr2','$orno3','$amount3','$ctr3','$orno4','$amount4','$ctr4','$orno5','$amount5','$ctr5','$valno'),
		('$id','$idticket','$name','$address','$ticket5','$brticket5','1','$date','$celno','$orno1','$amount1','$ctr1','$orno2','$amount2','$ctr2','$orno3','$amount3','$ctr3','$orno4','$amount4','$ctr4','$orno5','$amount5','$ctr5','$valno'),
		('$id','$idticket','$name','$address','$ticket6','$brticket6','1','$date','$celno','$orno1','$amount1','$ctr1','$orno2','$amount2','$ctr2','$orno3','$amount3','$ctr3','$orno4','$amount4','$ctr4','$orno5','$amount5','$ctr5','$valno'),
		('$id','$idticket','$name','$address','$ticket7','$brticket7','1','$date','$celno','$orno1','$amount1','$ctr1','$orno2','$amount2','$ctr2','$orno3','$amount3','$ctr3','$orno4','$amount4','$ctr4','$orno5','$amount5','$ctr5','$valno'),
		('$id','$idticket','$name','$address','$ticket8','$brticket8','1','$date','$celno','$orno1','$amount1','$ctr1','$orno2','$amount2','$ctr2','$orno3','$amount3','$ctr3','$orno4','$amount4','$ctr4','$orno5','$amount5','$ctr5','$valno'),
		('$id','$idticket','$name','$address','$ticket9','$brticket9','1','$date','$celno','$orno1','$amount1','$ctr1','$orno2','$amount2','$ctr2','$orno3','$amount3','$ctr3','$orno4','$amount4','$ctr4','$orno5','$amount5','$ctr5','$valno'),
		('$id','$idticket','$name','$address','$ticket10','$brticket10','1','$date','$celno','$orno1','$amount1','$ctr1','$orno2','$amount2','$ctr2','$orno3','$amount3','$ctr3','$orno4','$amount4','$ctr4','$orno5','$amount5','$ctr5','$valno')";
		$result =  mysqli_query($conn,$save);

		

		if(!$result)
		{
			echo mysqli_error($conn);
		}
		else
		{
			header ('location: data_input.php');
		}




		

		
 ?>