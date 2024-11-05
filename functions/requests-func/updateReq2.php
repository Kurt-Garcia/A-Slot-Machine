<?php 
include ('connect.php');
$query = "SELECT * FROM tbl_requests";
$result = odbc_exec($connect,$query);
$row = odbc_fetch_array($result);
$stat == $row['status'];
// for ntp/po
if ($stat <= 3 && empty($row['attachment_procurement'])) 
{
$target_dir    = "C:/xampp/htdocs/engineering/Attachments/";
$target_file   = $target_dir . basename($_FILES["attachment_procurement"]["name"]);
$uploadOk      = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if (isset($_POST["submit"])) {
    $check = filesize($_FILES["attachment_procurement"]["tmp_name"]);
    if ($check !== false) {
        echo "File is zip - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<script>alert('Sorry, file not valid.');window.location.href='/engineering/user_reqlist.php';</script>";
        $uploadOk = 0;
    }
}
if ($_FILES["attachment_procurement"]["size"] > 5000000) {
    echo "<script>alert('Sorry, your file is too large.');window.location.href='/engineering/user_reqlist.php';</script>";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "<script>alert('Sorry, your file was not uploaded.');window.location.href='/engineering/user_reqlist.php';</script>";
} else {
    if (move_uploaded_file($_FILES["attachment_procurement"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["attachment_procurement"]["name"]) . " has been uploaded.";
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.');window.location.href='/engineering/user_reqlist.php';</script>";
    }
    $attachment = basename($_FILES['attachment_procurement']['name']);
    $req_no = $_POST['req_no'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];
    $remarks = $_POST['remarks'];
    $procurement = $_POST['procurement_ticket'];
    $engineering = $_POST['engineering_ticket'];
    $query = "UPDATE tbl_requests SET attachment_procurement = '$attachment', status='$status', priority='$priority', remarks='$remarks', procurement_ticket='$procurement',engineering_ticket='$engineering' WHERE req_no = '$req_no'";
    $result     = odbc_exec($connect, $query);
    if (!$result) {
        echo "<script>alert('Failed to save data.');window.location.href='/engineering/requests.php';</script>";
    } elseif ($result) {
        header('location: /engineering/requests.php');
    }
}
}

elseif ($stat <= 3 && empty($row['attachment_evaluation']))
{
    //for evaluation
        $target_dir    = "C:/xampp/htdocs/engineering/Attachments/";
        $target_file   = $target_dir . basename($_FILES["attachment_evaluation"]["name"]);
        $uploadOk      = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (isset($_POST["submit"])) {
            $check = filesize($_FILES["attachment_evaluation"]["tmp_name"]);
            if ($check !== false) {
                echo "File is zip - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "<script>alert('Sorry, file not valid.');window.location.href='/engineering/user_reqlist.php';</script>";
                $uploadOk = 0;
            }
        }
        if ($_FILES["attachment_evaluation"]["size"] > 5000000) {
            echo "<script>alert('Sorry, your file is too large.');window.location.href='/engineering/user_reqlist.php';</script>";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "<script>alert('Sorry, your file was not uploaded.');window.location.href='/engineering/user_reqlist.php';</script>";
        } else {
            if (move_uploaded_file($_FILES["attachment_evaluation"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["attachment_evaluation"]["name"]) . " has been uploaded.";
            } else {
                echo "<script>alert('Sorry, there was an error uploading your file.');window.location.href='/engineering/user_reqlist.php';</script>";
            }
            $attachment = basename($_FILES['attachment_evaluation']['name']);
            $req_no = $_POST['req_no'];
            $priority = $_POST['priority'];
            $status = $_POST['status'];
            $remarks = $_POST['remarks'];
            $procurement = $_POST['procurement_ticket'];
            $engineering = $_POST['engineering_ticket'];
            $query = "UPDATE tbl_requests SET attachment_evaluation = '$attachment', status='$status', priority='$priority', remarks='$remarks', procurement_ticket='$procurement',engineering_ticket='$engineering' WHERE req_no = '$req_no'";
            $result     = odbc_exec($connect, $query);
            if (!$result) {
                echo "<script>alert('Failed to save data.');window.location.href='/engineering/requests.php';</script>";
            } elseif ($result) {
                header('location: /engineering/requests.php');
            }  
        }
}

?>