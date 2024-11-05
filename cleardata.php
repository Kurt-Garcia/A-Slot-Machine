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
     <?php include 'navbar3.php'; ?>
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
  

<div class ="row" align="center">  
      <div class="container-fluid" style="width:83%;margin-bottom:-8px; ">
        <div class = "row">
   
           <div class='col-sm' >
              <div class="form-group row">
                <h3   style="font-weight: bold;  font-size: 23px; "> E-RAFFLE ENTRY &nbsp&nbsp </h3>
              </div>
            </div>

            <div class='col-sm-2'  >
                <div class="form-group row">
                    <a class="btn" href="backup.php"  role="button" id="btn_download" style="background-color:#177EE4;color:#fff;" tabindex="4">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp BACKUP DATA &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                </div>
          </div>

          <div class='col-sm-2'  >
                <div class="form-group row">
                    <a class="btn" href="deletedata.php"  role="button" id="btn_clear" style="background-color:#ff9900;color:#fff;" onclick='return confirm_clear()' tabindex="4">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp CLEAR DATA &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                </div>
          </div>
        
        </div>
      </div>
      </div>
  <br>
     

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
       

<!--***************************************************************
    **                                                           **
    **                START CONFIRM SUBMIT MESSAGE               **
    **                                                           **
    *************************************************************** -->

<script>

function confirm_clear() {
  return confirm('(Pls BACKUP UP DATABASE)  Are you sure you want to CLEAR DATABASE?');
}
</script>

<!--***************************************************************
    *                                                            **
    **                END CONFIRM SUBMIT MESSAGE                 **
    **                                                           **
    *************************************************************** -->



</html>
        