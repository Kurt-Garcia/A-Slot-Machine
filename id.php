<?php
  session_start();
  if(!ISSET($_SESSION['id'])){
    header('location:index.php');
  }
?>



<?php 

   include('connect.php');

    $con = "SELECT ticket,idticket,brticket,orno,amount,ctr1,orno2,amount2,ctr2,orno3,amount3,ctr3,orno4,amount4,ctr4,orno5,amount5,ctr5,valno FROM customer order by ticket ";
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


  <style type="text/css">
   .tftable {
  font-size: 12px;
  color: #333333;
  width: 100%;
  border-width: 1px;
  border-color: #9dcc7a;
  border-collapse: collapse;
}

.tftable th {
  font-size: 10px;
  background-color: #32CF39;
  border-width: 1px;
  padding: 8px;
  border-style: solid;
  border-color: #9dcc7a;
  text-align: left;
}

.tftable tr {
  background-color: #bedda7;
}

.tftable td {
  font-size: 10px;
  border-width: 1px;
  padding: 8px;
  border-style: solid;
  border-color: #9dcc7a;
}

.tftable tr:hover {
  background-color: #ffffff;
}

  </style> 
<!-- ---------------------------------------------------------------------------------------------------- -->
  <br>

  <div class="container-fluid" style="width:98%; margin-top:-30px;">
   <div class='float-sm' >
        <div>
              <h3 align="left" style="font-weight: bold;   font-size: 25px;"> E-RAFFLE SALES INVOICE NO</h3>
        </div>
   </div>
   </div>
  
     

  <div class ="tftable" align="center" >
  <div class="container-fluid">

          
        <div class="tftable" style="width:100%">

            <div class="col-md">
                <table class="table table-striped" id="mydatatable">
                  <thead>
                      <tr>
                      <th >NO</th>
                      <th >ID</th>
                      <th >TICKET</th>
                      <th >INV NO1</th>
                      <th >AMT1</th>
                      <th >CTR 1</th>
                      <th >INV NO2</th>
                      <th >AMT2</th>
                      <th >CTR 2</th>
                      <th >INV NO3</th>
                      <th >AMT3</th>
                      <th >CTR 3</th>
                      <th >INV NO4</th>
                      <th >AMT4</th>
                      <th >CTR 4</th>
                      <th >INV NO5</th>
                      <th >AMT5</th>
                      <th >CTR 5</th>
                      <th >VAL NO</th>
                      
                      </tr>
                  </thead>
                

                <tbody>
                <?php 
                    while($row=mysqli_fetch_array($result1)){
                      echo "<tr>";
                      echo "<td>".$row['ticket']."</td>";
                      echo "<td>".$row['idticket']."</td>";
                      echo "<td>".$row['brticket']."</td>";
                     
                      echo "<td>".$row['orno']."</td>";
                      echo "<td>".$row['amount']."</td>";
                      echo "<td>".$row['ctr1']."</td>";

                      echo "<td>".$row['orno2']."</td>";
                      echo "<td>".$row['amount2']."</td>";
                      echo "<td>".$row['ctr2']."</td>";

                      echo "<td>".$row['orno3']."</td>";
                      echo "<td>".$row['amount3']."</td>";
                      echo "<td>".$row['ctr3']."</td>";

                      echo "<td>".$row['orno4']."</td>";
                      echo "<td>".$row['amount4']."</td>";
                      echo "<td>".$row['ctr4']."</td>";

                      echo "<td>".$row['orno5']."</td>";
                      echo "<td>".$row['amount5']."</td>";
                      echo "<td>".$row['ctr5']."</td>";

                      echo "<td>".$row['valno']."</td>";

                      
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

<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#mydatatable').DataTable();
    });
</script>
       

</html>
        