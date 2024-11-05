<?php
  session_start();
  if(!ISSET($_SESSION['id'])){
    header('location:index.php');
  }
?>



<?php 

   include('connect.php');

   $num = 1;

    $con = "SELECT * FROM image";
    $result1 = mysqli_query($conn,$con);
 
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

       <body>

<div class="container-fluid">
     <?php include 'navbar3.php'; ?>
</div>

<br>


<!-- ---------------------------------------------------------------------------------------------------- -->


  <!-- <style type="text/css">
    #header{
      visibility:hidden;
      margin: 0 0 0 285px;
    }
    body{
      margin:0;
    }
    #signature { 
  color:#e0ebd2;
  font-family: 'Century Gothic'; 
  font-size: 15.5px; 
  border: 1px solid rgba(255, 255, 255, 0.4); 
  background: rgba(255, 255, 255, 0.8); 
  width: 330px; 
  padding: 3px; 
  position: fixed; 
  bottom: -10px; 
  right:0; 
  border-top-left-radius: 30px; 
  text-align: center;
  background-color:  #003366;
} 

    @media print{
      #header{
        visibility: visible;
      }
      p{
        visibility: visible;
      }
            #button1{
        visibility: hidden;
      }
    }
  </style> -->
<!-- ---------------------------------------------------------------------------------------------------- -->
  

<div class ="row" align="center">  
      <div class="container-fluid" style="width:83%;margin-bottom:-8px; ">
        <div class = "row">
   
           <div class='col-sm' >
              <div class="form-group row">
                <h3   style="font-weight: bold;  font-size: 23px; "> MANAGE IMAGE &nbsp&nbsp </h3>
              </div>
            </div>

            <div class='col-sm-2'  >
                <div class="form-group row">
                <a href="" data-toggle ="modal" data-target = "#addImage" class="btn btn-success">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp NEW IMAGE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                </div>
          </div>

          <!-- <div class='col-sm-2'  >
                <div class="form-group row">
                    <a class="btn" href="deletedata.php"  role="button" id="btn_clear" style="background-color:#ff9900;color:#fff;" onclick='return confirm_clear()' tabindex="4">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp CLEAR DATA &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                </div>
          </div>  -->
           
        </div>
      </div>
      </div>
  <br>
     

  <div class ="row" align="center" >
  <div class="container-fluid">

          
        <div class="row" style="width:87%">

            <div class="col-md">
                <table class="table table-striped" id="mydatatable">
                  <thead>
                      <tr>
                      <th >IMAGE</th>
                      <th >THEME</th>
                      <th >FEATURE</th>
                      <th>TOOLS</th>
                      </tr>
                  </thead>
                
                <tbody>
                <?php 
                    while($row=mysqli_fetch_array($result1)){
                ?>
                        <tr style = "align-items: center;">
                                <td hidden><?php echo $row['id']; ?></td>
                                <td class="pic"  style= "width: 20rem;">
                                    <img src="image/feature/<?php echo $row['img']; ?>" class="" width = "150px" style ="">
                                    <a href="" class="text-success btn-sm btn_image" data-bs-toggle="modal" data-bs-target ="#update_image" style="float:right;" ><i class="fa-regular fa-pen-to-square"></i></a>
                                </td>
                                <td style="text-transform: capitalize;"><?php echo $row['theme']; ?></td>
                                <td style="text-transform: capitalize;"><?php echo $row['feature']; ?></td>
                                
                                <td>
                                    <a href="image_update.php?id=<?php echo $row['id']; ?>" class="btn btn-success" >Edit Feature</a>
                                    <a href="javascript:void(0);" class="btn btn-danger" onclick="confirmDelete(<?php echo $row['id']; ?>)" >Delete</a>
                                    <!-- <a href="" class="btn btn-danger btn-sm btn_delete" data-bs-toggle="modal" data-bs-target="" >Delete</a> -->
                                </td>
                        </tr>

                 <?php } ?>        
                 
                </tbody>
                </table>
            </div>
        </div>
            <br>
            <br>
        <div class="row1">
        <br />
                        
      </div>
       
    </div>



    
 
 

    <?php include 'image_modal.php'; ?>  

    <!-- <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){

      $('.btnEdit').on('click',function(){
             alert("meaw");
        $("#imageupdate").modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
          return $(this).text();
        }).get();

        console.log(data);

        $('#id').val(data[0]);
        $('#category_name').val(data[1]);
        
          
      });
    });
  </script> -->
  

</body>

   

<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#mydatatable').DataTable();
    });
</script>
       

<!--***************************************************************
    **                                                           **
    **                START CONFIRM SUBMIT MESSAGE               **
    **                                                           **
    *************************************************************** -->

<script>

function confirm_clear() {
  return confirm('(Pls BACKUP UP DATABASE)  Are you sure you want to CLEAR DATABASE?');
}
</script>

<!--***************************************************************
    *                                                            **
    **                END CONFIRM SUBMIT MESSAGE                 **
    **                                                           **
    *************************************************************** -->

    <script>
    function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this record?")) {
        // Redirect to delete script with record ID
        window.location.href = "image_delete.php?id=" + id;
    }
}
</script> 
</html>
        