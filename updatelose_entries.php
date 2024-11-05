<?php
# create database connection
include('connect.php');

$onhand_total_2ndx      =$_POST['onhand_totals_2ndxxx'];
$onhand_item_2ndx       =$_POST['onhand_items_2ndxxx'];
$onhand_won_2ndx        =$_POST['onhand_won_2ndxxx'];
$alloDateTimeStrx       =$_POST['alloDateTimeStrxx'];

$cust_name_win         =$_POST['cust_name_winx'];
$cust_tot_entries       =$_POST['cust_tot_entriesx'];
$cust_or_win           =$_POST['cust_or_winx'];
$cust_date              =$_POST['cust_datex'];


$query_cust             ="UPDATE customer SET total_entries='$cust_tot_entries' where name='$cust_name_win' AND orno='$cust_or_win'"; 
$update_cust            = mysqli_query($conn,$query_cust);


// Retrieve the current maximum spin_no from the database
$datecurrent = date('Y-m-d');

$query_max_spin = "SELECT MAX(spin_no) AS max_spin_no FROM win_result WHERE DATE(date) = '$datecurrent' AND orno='$cust_or_win'";
$result_max_spin = mysqli_query($conn, $query_max_spin);

// Check if the query was successful
if ($result_max_spin) {
    $row = mysqli_fetch_assoc($result_max_spin);
    $max_spin_no = $row['max_spin_no'];
    // If there are no records, set max_spin_no to 0
    if ($max_spin_no === null) {
        $max_spin_no = 0;
    }
    // Increment the spin_no for the new entry
    $new_spin_no = $max_spin_no + 1;

    // Insert the new record with the incremented spin_no
    $save_win = "INSERT INTO win_result (name, orno, spin_no, result, date) 
                 VALUES ('$cust_name_win', '$cust_or_win', '$new_spin_no', 'Lose', '$cust_date')";
    $result_win = mysqli_query($conn, $save_win);

}

?>