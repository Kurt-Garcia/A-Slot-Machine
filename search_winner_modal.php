<?php
include('connect.php');
  
  //PROMO ORDER NUMBER: 2023-06-031_BJC
  $winner_status = isset($_REQUEST['winner_status']) ? $_REQUEST['winner_status'] : "";
  
    $query = "SELECT * FROM customer WHERE status ='$winner_status' ORDER BY RAND() LIMIT 1";
      $result_total = mysqli_query($conn,$query);

       if (mysqli_num_rows($result_total) == 0) 
      {
        echo"<br>";
        echo"<h3 style='font-weight: bold;  font-size: 63px'> NO DATA FOUND";
        echo"<br>";      
      }


      else 
       {

      while($row = mysqli_fetch_array($result_total))
       {

      $name =$row['name'];
      $brticket=$row['brticket']; 
      $address=$row['address'];
      $cell=$row['cell'];
      $date=$row['date'];
      $idticket=$row['idticket'];

       }

        $name = strtoupper($name);
        echo"<h3 style='font-weight: bold;  font-size: 63px; color:#E3071D; '> CONGRATULATIONS!!!";
        echo"<br>";
        
        
        echo "<h3 style='font-weight: bold;  font-size: 55px; color:#3f6cb5;'> $name";
        echo"<br>";
        echo"TN: $brticket";

        $query2    ="UPDATE customer SET status='2' where brticket='$brticket'"; 
        $update = mysqli_query($conn,$query2);

        include('connect2.php');

        $query3    ="UPDATE customer SET status='2' where brticket='$brticket'";
        $update3 = mysqli_query($conn2,$query3);

        
        $save = "insert into winners (brticket,name,address,cell,date,idticket) values('$brticket','$name','$address','$cell','$date','$idticket')";
        $result =  mysqli_query($conn,$save);


      }

 ?>