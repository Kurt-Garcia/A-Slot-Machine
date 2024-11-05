<?php
  session_start();
  if(!ISSET($_SESSION['id'])){
    header('location:index.php');
  }

  
            
 

  include_once('connect.php');

//   if(isset($_GET['id']))
//   {
    $id = $_GET['id'];

    $sql = "SELECT * FROM `image` WHERE `id`= '$id'";
    $result = mysqli_query($conn, $sql);
    $row1 = mysqli_fetch_assoc($result);

  //}

  
?>





<html lang="en">
<head>
  <title>GCAP E-Raffle</title>


    <meta charset="utf-8">
   <!--  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    -->
<!---------------------------   BOOTSTRAP LINKS --------------------------------------------->
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/jquery-1.11.1.min.js"></script>
    <link  rel="stylesheet" href="bootstrap/jquery-ui.css" />
    <script src="bootstrap/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/bar-designed.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
</head>
       <!--  <script>
           
            function timedRefresh(timeoutPeriod) {
                setTimeout("location.reload(true);", timeoutPeriod);
            }

            window.onload = timedRefresh(20000);

            
        </script> -->


        <style type="text/css">
            .row1 {
                float: right;
            }
            
            th {
                background-color: #32CF39;
                color: white;
            }
            
            
        </style>

       <body class ="bg-light">

<div class="container-fluid">
     <?php include 'navbar3.php'; ?>
</div>




<div class="container  pt-2 pl-5 pr-5 pb-2 w-50 shadow">
    <div class="">
        <h1 class="text-center text-primary">Image Feature Update</h1>

        <hr>

        <form action="image_update1.php" method = "POST">

            <div class="form-group">
                
                <input type="text" value ="<?php echo $row1['id']; ?>" name= "id" class = "form-control" hidden  >
            </div>
            <div class="form-group">
                <label for="theme">Theme:</label>
                <input type="text" value ="<?php echo $row1['theme']; ?>" name= "theme" class = "form-control" disabled  >
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <img src="image/feature/<?php echo $row1['img']; ?>" alt="" width="250px" class="ml-5">

            </div>
            <div class="form-group">
                <label for="feature">Feature:</label>
                <select name="feature" class="form-control" id="">
                    <?php
                        if($row1['feature'] == 'Yes')
                        {
                    ?>
                            <option value="<?php echo $row1['feature']; ?>" ><?php echo $row1['feature']; ?></option>
                            <option value="No">No</option>
                    <?php }else{ ?>
                        <option value="<?php echo $row1['feature']; ?>" ><?php echo $row1['feature'] ;?></option>
                        <option value="Yes">Yes</option>
                    <?php } ?>
                    
                </select>
            </div>
            <div class="mt-2">
                <button type = "submit" name ="update" class="btn btn-success mt-2">Update</button>
                <a href="image.php" class="btn btn-danger mt-2">Cancel</a>
            </div>
           
        </form>
    </div>
</div>



    
 
 

  

</body>
</html>
        