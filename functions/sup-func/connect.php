<?php

	//$connect = mysqli_connect("localhost","root","","help_deskdb");

		//if (mysqli_connect_errno())
  		//{
  		//	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		//}


	$server = "192.168.180.201";
	$database = "engineering";
	$user = "sa";
	$password = "";


	$connect = odbc_connect("Driver={SQL Server};Server=$server;Database=$database;", $user, $password);

	if(!$connect) {
		echo "CONNECTION ERROR";
	}
?>