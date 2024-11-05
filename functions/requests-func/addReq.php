<?php
include('connect.php');
$target_dir    = "C:/xampp/htdocs/engineering/Attachments/";
$target_file   = $target_dir . basename($_FILES["attachment"]["name"]);
$uploadOk      = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if (isset($_POST["submit"])) {
    $check = filesize($_FILES["attachment"]["tmp_name"]);
    if ($check !== false) {
        echo "File is zip - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<script>alert('Sorry, file not valid.');window.location.href='/engineering/user_reqlist.php';</script>";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    echo "<script>alert('Sorry, filename already exists.');window.location.href='/engineering/user_reqlist.php';</script>";
    $uploadOk = 0;
}
if ($_FILES["attachment"]["size"] > 5000000) {
    echo "<script>alert('Sorry, your file is too large.');window.location.href='/engineering/user_reqlist.php';</script>";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "<script>alert('Sorry, your file was not uploaded.');window.location.href='/engineering/user_reqlist.php';</script>";
} else {
    if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["attachment"]["name"]) . " has been uploaded.";
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.');window.location.href='/engineering/user_reqlist.php';</script>";
    }
    $attachment = basename($_FILES['attachment']['name']);
    $name       = $_POST['name'];
    $branch     = $_POST['branch'];
    $department = $_POST['department'];
    $problem    = $_POST['category'];
    $subject    = $_POST['subject'];
    $user_id    = $_POST['user_id'];
    $s_category    = $_POST['s_category'];
    $s_items    = $_POST['s_items'];
    $quotation      = $_POST['optradio'];
    $procurement = $_POST['procurement_ticket'];
    $engineering = $_POST['engineering_ticket'];
    $status     = 0;
    $query      = "insert into tbl_requests (name,branch,department,category,subject,user_id,status,attachment,s_category,s_items,quotation,procurement_ticket,engineering_ticket) values('$name','$branch','$department','$problem','$subject','$user_id','$status','$attachment','$s_category','$s_items','$quotation','$procurement','$engineering')";
    $result     = odbc_exec($connect, $query);
    if (!$result) {
        echo "<script>alert('Failed to save data.');window.location.href='/engineering/user_reqlist.php';</script>";
    } elseif ($result) {
        header('location: /engineering/user_reqlist.php');
    }
}
?>