<?php
include('connect.php');

// Get the invoice value from the AJAX request
$invoice = $_POST['invoice'];
$cust_date = $_POST['cust_date'];

$query_cust = "SELECT * FROM win_result WHERE orno='$invoice' AND date='$cust_date' ORDER BY id ASC";
$result_cust = mysqli_query($conn, $query_cust);

if(mysqli_num_rows($result_cust) > 0) {
    echo '<thead>
            <tr>
                <th>Spin No</th>
                <th>Result</th>
                <th>Prize</th>
            </tr>
          </thead>
          <tbody>';
          
    while($row = mysqli_fetch_array($result_cust)) {
        echo '<tr>
                <td>' . $row['spin_no'] . '</td>
                <td>' . $row['result'] . '</td>
                <td>' . $row['prize'] . '</td>
              </tr>';
    }

    echo '</tbody>';
} else {
    echo '<thead>
            <tr>
                <th>Spin No</th>
                <th>Result</th>
                <th>Prize</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td colspan="3">No results found.</td>
            </tr>
          </tbody>';
}
?>
