
<?php

  include('connect.php');
  
  $datecurrent = date('Y-m-d');
  
  
echo "<style>

    .table {
      border-collapse: separate; /* Ensure borders do not collapse to allow border-radius */
      border-spacing: 0; /* Ensure there is no extra space between cells */
      border-radius: 13px; /* Adjust as needed for rounded corners */
      overflow: hidden; /* Ensure overflow is handled to keep rounded corners */
    }

    .table td, .table th {
        padding: 6px;  /* Adjust padding to make cells smaller */
        font-size: 15px;  /* Adjust font size to make text smaller */
    }
    .table-striped tbody tr:nth-of-type(odd) td {
        background-color: #343434;
    }
    .table-striped tbody tr:nth-of-type(even) td {
        background-color: #676767;
    }
    .table-bordered td, .table-bordered th {
        border: .5px solid #ddd;  /* Add border styling */
    }
    </style>";


    echo"<table class='table table-striped table-bordered' style='width:100%; '>";
        echo"<tr align='center' style='background-color: #ff840d; color:#cccccc; font-size: 14px;'>";
        echo"<th > No </th>";
        echo"<th > Name </th>";
        echo"<th > Address </th>";
        echo"<th > Inv No </th>";
        echo"<th > Amount </th>";
        echo"<th > Spin </th>";
    echo"</tr>";
  
    
      
// Get the total number of rows that match the query
$query = "SELECT COUNT(*) as total FROM customer WHERE date > '$datecurrent'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$total_rows = $row['total'];

// Adjust total_rows to be at most 15, as we are limiting to 15 rows
$total_rows = min($total_rows, 15);

// Query to fetch the data
$query = "SELECT * FROM customer WHERE date > '$datecurrent' AND status='1' ORDER BY id DESC LIMIT 15";
$result = mysqli_query($conn, $query);

$counter = $total_rows; // Initialize counter variable to the total number of rows

while ($row = mysqli_fetch_array($result)) {
    echo "<tr style='color: #cccccc;'>";
    echo "<td> " . ucwords(strtolower($row["player_no"])) . " </td>";
    echo "<td> " . ucwords(strtolower($row["name"])) . " </td>";
    echo "<td> " . ucwords(strtolower($row["address"])) . " </td>";
    echo "<td> " . ucwords(strtolower($row["orno"])) . " </td>";
    echo "<td> " . ucwords(strtolower($row["amount"])) . " </td>";
    echo "<td> " . ucwords(strtolower($row["entries"])) . " </td>";
    echo "</tr>";
    
   //$counter--; // Decrement counter
}


  echo"</table>";




?>


