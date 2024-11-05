<?php
  session_start();
  if(!ISSET($_SESSION['id'])){
    header('location:index.php');
  }
?>



<?php 

   include('connect.php');

    $con = "SELECT ticket,brticket,name,address,cell,date,idticket FROM customer order by ticket ";
    $result1 = mysqli_query($conn,$con);
 
?>


<html lang="en">
<head>
  <title>GCAP E-Raffle</title>


    <meta charset="utf-8">
   <!--  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    -->
<!---------------------------   BOOTSTRAP LINKS --------------------------------------------->
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/jquery-1.11.1.min.js"></script>
    <link  rel="stylesheet" href="bootstrap/jquery-ui.css" />
    <script src="bootstrap/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/bar-designed.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
</head>
       <!--  <script>
           
            function timedRefresh(timeoutPeriod) {
                setTimeout("location.reload(true);", timeoutPeriod);
            }

            window.onload = timedRefresh(20000);

            
        </script> -->


        <style type="text/css">
            .row1 {
                float: right;
            }
            
            th {
                background-color: #32CF39;
                color: white;
            }
            
            
        </style>

       <body>

<div class="container-fluid">
     <?php include 'navbar.php'; ?>
</div>

<br>



<!-- ---------------------------------------------------------------------------------------------------- -->


  <!-- <style type="text/css">
    #header{
      visibility:hidden;
      margin: 0 0 0 285px;
    }
    body{
      margin:0;
    }
    #signature { 
  color:#e0ebd2;
  font-family: 'Century Gothic'; 
  font-size: 15.5px; 
  border: 1px solid rgba(255, 255, 255, 0.4); 
  background: rgba(255, 255, 255, 0.8); 
  width: 330px; 
  padding: 3px; 
  position: fixed; 
  bottom: -10px; 
  right:0; 
  border-top-left-radius: 30px; 
  text-align: center;
  background-color:  #003366;
} 

    @media print{
      #header{
        visibility: visible;
      }
      p{
        visibility: visible;
      }
            #button1{
        visibility: hidden;
      }
    }
  </style> -->
<!-- ---------------------------------------------------------------------------------------------------- -->
  

  <div class="container-fluid" style="width:87%; margin-top:-30px;">
   <div class='float-sm' >
        <div>
              <h3 align="left" style="font-weight: bold;   font-size: 25px;"> E-RAFFLE ENTRY</h3>
        </div>
   </div>
   </div>
  
     

  <div class ="row" align="center" >
  <div class="container-fluid">

          
        <div class="row" style="width:87%">

            <div class="col-md">
                <table class="table table-striped" id="mydatatable">
                  <thead>
                      <tr>
                      <th >NO</th>
                      <th >TICKET</th>
                      <th >NAME</th>
                      <th >ADDRESS</th>
                      <th >CELL NO</th>
                      <th >DATE</th>
                      <th >ID</th>
                      </tr>
                  </thead>
                
                <tbody>
                <?php 
                    while($row=mysqli_fetch_array($result1)){
                      echo "<tr>";
                      echo "<td>".$row['ticket']."</td>";
                      echo "<td>".$row['brticket']."</td>";
                      echo "<td>".$row['name']."</td>";
                      echo "<td>".$row['address']."</td>";
                      echo "<td>".$row['cell']."</td>";
                      echo "<td>".$row['date']."</td>";
                      echo "<td>".$row['idticket']."</td>";
                      echo "</tr>";
                         }
                 ?>
                </tbody>
                </table>
            </div>
        </div>
            <br>
            <br>
        <div class="row1">
        <br />
                        
      </div>
    </div>
               
</body>

<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#mydatatable').DataTable();
    });
</script>
       

</html>
        