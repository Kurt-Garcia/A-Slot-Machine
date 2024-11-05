<?php 
    
    include('connect.php');

        $req_no = $_POST['req_no'];
        $attachment = $_POST['attachment'];
        $date = $_POST['date_finished'];
        $status = $_POST['status'];

        $query3 = "UPDATE tbl_requests SET attach = '$attachment', date_finish = '$date', status = '$status' WHERE req_no = '$req_no' ";
        $result = odbc_exec($connect,$query3);

        if(!$result)
        {
            echo "failed to update data";
        }
        elseif($result)
        {
            header ('location: /engineering/user_reqlist.php');
        }

 ?>