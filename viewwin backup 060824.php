<?php
  session_start();
  if (!isset($_SESSION['id'])) {
    header('location:index.php');
  }
?>

<?php 
   include('connect.php');
   $con = "SELECT * FROM win_result WHERE result IN ('win', 'jackpot') ORDER BY id ";
   $result1 = mysqli_query($conn, $con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>GCAP E-Raffle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles.css" />

  <!---------------------------   BOOTSTRAP LINKS --------------------------------------------->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <script src="bootstrap/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="bootstrap/jquery-ui.css" />
  <script src="bootstrap/jquery-ui.js"></script>
  <link rel="stylesheet" href="css/bar-designed.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="DataTables/Buttons-1.7.1/css/buttons.dataTables.min.css"> <!-- Add this line -->
</head>

<style>
  .table {
    border-collapse: separate;
    border-spacing: 0;
    border-radius: 13px;
    overflow: hidden;
  }

  .table td, .table th {
    padding: 6px;
    font-size: 15px;
  }
  
  .table-striped tbody tr:nth-of-type(odd) td {
    background-color: white;
  }

  .table-striped tbody tr:nth-of-type(even) td {
    background-color: #ffd45b;
  }

  .table-bordered td, .table-bordered th {
    border: .5px solid #ddd;
  }

  #mydatatable thead th {
    background-color: #ff840d;
    color: white;
  }

  body {
    background-repeat: no-repeat;
    background-size: auto;
    background-position: center;
    background-size: cover;
    background-color: #f2f2f2;
  }

  img {
    width: 100%;
    height: auto;
    background-size: auto;
  }

  #header {
    visibility: hidden;
    margin: 0 0 0 285px;
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
    right: 0; 
    border-top-left-radius: 30px; 
    text-align: center;
    background-color: #003366;
  } 

  @media print {
    #header {
      visibility: visible;
    }
    p {
      visibility: visible;
    }
    #button1 {
      visibility: hidden;
    }
  }
</style>

<body>
<div class="container-fluid">
  <?php include 'navbar3.php'; ?>
</div>

<br><br><br><br>

<div class="container-fluid" style="width:85%; margin-top:-30px;">
  <div class='float-sm'>
    <div>
      <h3 align="left" style="font-weight: bold; font-size: 25px;">SLOT FOR FUN WINNERS</h3>
    </div>
  </div>
</div>

<div class="row" align="center">
  <div class="container-fluid">
    <div class="row" style="width:85%">
      <div class="col-md">
        <table class="table table-striped" id="mydatatable">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Inv No</th>
              <th>Spin</th>
              <th>Result</th>
              <th>Prize</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $counter = 1;
              while ($row = mysqli_fetch_array($result1)) {
                echo "<tr>";
                echo "<td>".$counter."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['orno']."</td>";
                echo "<td>".$row['spin_no']."</td>";
                echo "<td>".$row['result']."</td>";
                echo "<td>".$row['prize']."</td>";
                echo "<td>".$row['date_spin']."</td>";
                echo "</tr>";
                $counter++;
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <br><br>
  </div>
</div>

<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script type="text/javascript" src="DataTables/Buttons-1.7.1/js/dataTables.buttons.min.js"></script> <!-- Add this line -->
<script type="text/javascript" src="DataTables/JSZip-2.5.0/jszip.min.js"></script> <!-- Add this line -->
<script type="text/javascript" src="DataTables/pdfmake-0.1.36/pdfmake.min.js"></script> <!-- Add this line -->
<script type="text/javascript" src="DataTables/pdfmake-0.1.36/vfs_fonts.js"></script> <!-- Add this line -->
<script type="text/javascript" src="DataTables/Buttons-1.7.1/js/buttons.html5.min.js"></script> <!-- Add this line -->

<script type="text/javascript">
  $(document).ready(function() {
    $('#mydatatable').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    });
  });
</script>
</body>
</html>
