<?php

	include ('connect.php');

	if (isset($_POST['btn_submit']))

	


		$name 		= $_POST['name'];
		$address 	= $_POST['address'];
		$ticket 	= $_POST['ticket1'];
		$date		= $_POST['presdate'];
		$celno		= $_POST['celno'];		

		$message = $name.''.$address.''.$ticket;

		$save = "insert into customer (name,address,ticket,status,date,cell) values('$name','$address','$ticket','1','$date','$celno')";
		$result =  mysqli_query($conn,$save);

		


try{
	

	if($message !=null && $celno !=null){
		$url = "http://100.180.104.138:8093/SendSMS?username=kiko&password=1234&phone&phone=".$celno."&message=".urlencode($message);
		$curl = curl_init($url);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
		$curl_response = curl_exec($curl);

		if($curl_response === false){
			$info = curl_getinfo($curl);
			curl_close($curl);
			die('Error occurred'.var_export($info));
		}

		curl_close($curl);

		$response  = json_decode($curl_response);
		if($response->status == 200){
			echo 'Message has been sent';
		}else{
			'Technical Problem';
		}

	}
}catch(Exception $ex){
	echo "Exception: ".$ex;
}





		/*if(!$result)
		{
			echo mysqli_error($conn);
		}
		else
		{
			header ('location: data_input.php');
		}
*/



		

		
 ?>