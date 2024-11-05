<!-- <?php 

    include('connect.php');

        $req_no = $_POST['req_no'];
        $priority = $_POST['priority'];
        $status = $_POST['status'];
        $remarks = $_POST['remarks'];
        $procurement = $_POST['procurement_ticket'];
        $engineering = $_POST['engineering_ticket'];

        $query3 = "update tbl_requests set status='$status', priority='$priority', remarks='$remarks', procurement_ticket='$procurement',engineering_ticket='$engineering' where req_no='$req_no'";

        $result = odbc_exec($connect,$query3);

        if(!$result)
        {
            echo "failed to update data";
        }
        elseif($result)
        {
            header ('location: /engineering/requests.php');
        }

 ?>
 -->
<?php 
$target_dir    = "C:/xampp/htdocs/engineering/Attachments/";
$target_file   = $target_dir . basename($_FILES["attachment_negotation"]["name"]);
$uploadOk      = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if (isset($_POST["submit"])) 
{
    $check = filesize($_FILES["attachment_negotation"]["tmp_name"]);
    if ($check !== false) {
        echo "File is zip - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<script>alert('File not valid.');window.location.href='/engineering/requests.php';</script>";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) 
{
    echo "<script>alert('Sorry, filename already exists.');window.location.href='/engineering/requests.php';</script>";
    $uploadOk = 0;
}
if ($_FILES["attachment_negotation"]["size"] > 5000000) 
{
    echo "<script>alert('Sorry, your file is too large.');window.location.href='/engineering/requests.php';</script>";
    $uploadOk = 0;
}
if ($uploadOk == 0) 
{
    echo "<script>alert('Sorry, your file was not uploaded.');window.location.href='/engineering/requests.php';</script>";
} 
else 
{
    if (move_uploaded_file($_FILES["attachment_negotation"]["tmp_name"], $target_file)) 
    {
        echo "The file " . basename($_FILES["attachment_negotation"]["name"]) . " has been uploaded.";
    } 
    else 
    {
        echo "<script>alert('Sorry, there was an error uploading your file.');window.location.href='/engineering/requests.php';</script>";
    }
}
    $attachment = basename($_FILES['attachment_negotation']['name']);
    $req_no = $_POST['req_no'];
    $status = $_POST['status'];
    $priority = $_POST['priority'];
    if (empty($row['attachment_negotation']))
    {
        $query = "UPDATE tbl_requests SET attachment_negotation = '$attachment', status = '$status', priority = '$priority' WHERE req_no = '$req_no'";
        $result     = odbc_exec($connect, $query);
        if (!$result) {
            echo "<script>alert('Failed to save data.');window.location.href='/engineering/requests.php';</script>";
        } elseif ($result) {
            header('location: /engineering/requests.php');
        }
    }
 ?>