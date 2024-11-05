<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:index.php');
    exit();
}
include('connect.php');
$con = "SELECT * FROM win_result WHERE result IN ('win', 'jackpot') ORDER BY id";
$result1 = mysqli_query($conn, $con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Gcap Slot for Fun</title>
<link rel="icon" href="image/gaisano.png" type="image/x-icon">

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


    <!-- <link rel="stylesheet" href="bootstrap/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">


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
            background-color: #a3a3a3;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <?php include 'navbar3.php'; ?>
</div>

<br><br>

<div class="container-fluid" style="width:83%; margin-top:20px;">

    <div class="row">
                  
          <?php
                    require("connect.php");   

                    $datecurrent = date('m-d-Y');
          ?>

        
    </div>
  </div>

<div class="container-fluid" style="width:85%;" id="contentToCapture">
    <div class="row">
        <div class="col-sm-7">
            <div class="form-group row">
                <h3 style="font-weight: bold; font-size: 25px; color: black; margin-left:18px;">SOUTH SLOT FOR FUN WINNERS</h3>
                
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group row justify-content-end">
                <label for="sel1"  style ="font-size: 16px;  color: black;  margin-top:10px" > Date: </label> &nbsp; &nbsp;
                <h1 align="right" style="font-size: 16px; color: black; margin-top:13px; margin-right:18px;"><?php echo $datecurrent; ?></h1>
            </div>
        </div>
    </div>
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
            $counter = 1;  // Initialize the counter before the loop
            while($row = mysqli_fetch_array($result1)) {
                echo "<tr>";
                echo "<td>" . $counter . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['orno'] . "</td>";
                echo "<td>" . $row['spin_no'] . "</td>";
                echo "<td>" . $row['result'] . "</td>";
                echo "<td>" . $row['prize'] . "</td>";
                echo "<td>" . $row['date_spin'] . "</td>";
                echo "</tr>";
                $counter++;
            }
            ?>
        </tbody>
    </table>
</div>

<div class="container-fluid" style="width:85%;">
    <button id="generatePDF" class="btn btn-primary">Save as PDF</button>
</div>



<!-- /* ************************************* */
        /* *      start generate pdf file   * */
        /* *************************************** */ -->

<script src="bootstrap/jquery.min.js"></script>
<script src="DataTables/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>

<script>

        $(document).ready(function() {
            $('#mydatatable').DataTable();

            document.getElementById('generatePDF').addEventListener('click', function() {
                const { jsPDF } = window.jspdf;

                html2canvas(document.querySelector('#contentToCapture')).then(canvas => {
                    const imgData = canvas.toDataURL('image/png');
                    const pdf = new jsPDF('p', 'in', 'a4');
                    const imgProps = pdf.getImageProperties(imgData);
                    const pdfWidth = pdf.internal.pageSize.getWidth();
                    const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;
                    
                    // 0.5 inch margin on left, right, and top
                    const margin = 0.5;
                    pdf.addImage(imgData, 'PNG', margin, margin, pdfWidth - 2 * margin, pdfHeight - margin);
                    
                    // Get current date
                const currentDate = new Date();
                const day = String(currentDate.getDate()).padStart(2, '0');
                const month = String(currentDate.getMonth() + 1).padStart(2, '0'); // Months are zero based
                const year = currentDate.getFullYear();
                const formattedDate = `${month}-${day}-${year}`;
                
                pdf.save(`SOUTH_WINNERS_${formattedDate}.pdf`);
                
                });
            });
        });

</script>

<!-- /* ************************************* */
        /* *      end generate pdf file     * */
        /* *************************************** */ -->




</body>
</html>
