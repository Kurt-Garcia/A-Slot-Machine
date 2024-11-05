<?php
# create database connection
include('connect.php');

$onhand_total_jackx     =$_POST['onhand_totals_jackxxx'];
$onhand_item_jackx      =$_POST['onhand_items_jackxxx'];
$onhand_won_jackx       =$_POST['onhand_won_jackxxx'];
$alloDateTimeStrx       =$_POST['alloDateTimeStrxx'];

$cust_name_jack         =$_POST['cust_name_jackx'];
$cust_tot_entries       =$_POST['cust_tot_entriesx'];
$cust_or_jack           =$_POST['cust_or_jackx'];
$cust_date              =$_POST['cust_datex'];


  
$query_onhand           ="UPDATE win_prizes SET onhand='$onhand_total_jackx', won='$onhand_won_jackx' where item='$onhand_item_jackx'"; 
$update_onhand          = mysqli_query($conn,$query_onhand);

$query_allocation       ="UPDATE allocation SET status='2' where date_time='$alloDateTimeStrx'"; 
$update_allocation      = mysqli_query($conn,$query_allocation);

$query_cust             ="UPDATE customer SET total_entries='$cust_tot_entries' where name='$cust_name_jack' AND orno='$cust_or_jack'"; 
$update_cust            = mysqli_query($conn,$query_cust);



// Retrieve the current maximum spin_no from the database
$datecurrent = date('Y-m-d');

$query_max_spin = "SELECT MAX(spin_no) AS max_spin_no FROM win_result WHERE DATE(date) = '$datecurrent'";
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
    $save_win = "INSERT INTO win_result (name, orno, spin_no, result, prize, date) 
                 VALUES ('$cust_name_jack', '$cust_or_jack', '$new_spin_no', 'Jackpot', '$onhand_item_jackx', '$cust_date')";
    $result_win = mysqli_query($conn, $save_win);

}



?>