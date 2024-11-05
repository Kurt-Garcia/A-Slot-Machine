<?php 
include('connect.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    // Retrieve the image file name from the database
    $sql_select = "SELECT `img` FROM `image` WHERE `id` = $id";
    $result_select = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_assoc($result_select);
    $image = $row['img'];

    // Delete the record from the database
    $sql_delete = "DELETE FROM `image` WHERE `id` = $id";
    $result_delete = mysqli_query($conn, $sql_delete);

    if ($result_delete) {
        // Delete the image file from the server
        unlink("image/feature/$image");
        
        header("location: image.php");
    } else {
        echo '<script>
            alert("Failed to delete data!");
        <script>';
    }

}

?>