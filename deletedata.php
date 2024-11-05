<?php

	include ('connect.php');

    $del = "DELETE FROM customer";
    $result = mysqli_query($conn,$del);

    $del2 = "DELETE FROM winners";
    $result2 = mysqli_query($conn,$del2);

    $save = "INSERT INTO customer (id,idticket,name,address,ticket,brticket,status,date,cell,orno,amount,ctr1,orno2,amount2,ctr2,orno3,amount3,ctr3,orno4,amount4,ctr4,orno5,amount5,ctr5,valno) values('0','0','','','','','2','','','','','','','','','','','','','','','','','','')";
			
    $result3 =  mysqli_query($conn,$save);
    

    if(!$result)
    {
        echo mysqli_error($conn);
    }
    else
    {
        header ('location: cleardata.php');
    }


			




		
 ?>