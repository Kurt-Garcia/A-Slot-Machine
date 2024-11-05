<?php
include('connect.php');


//add image
if(isset($_POST['save']))
{
    $theme =$_POST['theme'];
    $image = $_FILES['image']['name'];
    $tmp_file = $_FILES['image']['tmp_name'];
    $feature = $_POST['feature'];

    if($feature == 'Yes')
    {     
    $sql_update = "UPDATE `image` SET feature = 'no' WHERE  feature = 'yes'";
    $result_update = mysqli_query($conn, $sql_update);
    }

    move_uploaded_file($tmp_file, "image/feature/$image");

    $sql = "INSERT INTO `image`(`theme`, `img`, `feature`) VALUES ('$theme','$image','$feature')";
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
else
{
    header('location: image.php');
}










?>