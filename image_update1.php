<?php
include_once('connect.php');

//update
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $feature = $_POST['feature'];


    
    

    if($feature == 'Yes')
    {     
    $sql_update = "UPDATE `image` SET feature = 'No' WHERE  feature = 'Yes'";
    $result_update = mysqli_query($conn, $sql_update);

    }



    $sql = "UPDATE `image` SET feature = '$feature' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        header("location: image.php");
    }
    else
    {
        echo '<script>
            alert("Failed to insert data!");
        <script>';
    }

}
?>