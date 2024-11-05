<?php
include('connect.php');

// get the invoice value from the AJAX request

$invoice    = $_POST['invoice'];
$cust_date  = $_POST['cust_date'];


$query_cust             = "SELECT * FROM win_result WHERE orno='$invoice' AND date='$cust_date' ORDER BY id ASC";
$result_cust            = mysqli_query($conn,$query_cust);
$fetch_cust             = mysqli_fetch_array($result_cust);


if($fetch_cust < 1)
{
  ?>
    <thead>
        <tr>
            <th>Spin No</th>
            <th>Result</th>
            <th>Prize</th>
        </tr>
    </thead>

    <tbody>

    <?php
    while($row = mysqli_fetch_array($result_cust))
    {
    ?>
        <tr>
            <td><?php echo $row['spin_no'] ?></td>
            <td><?php echo $row['result'] ?></td>
            <td><?php echo $row['prize'] ?></td>
        </tr>


    <?php } ?>

    </tbody>

    <?php }else{ ?>

        <tr>
            <th width = "50">Spin No</th>
            <th>Result</th>
            <th>Prize</th>
        </tr>

    <?php } ?>
    
<?php












