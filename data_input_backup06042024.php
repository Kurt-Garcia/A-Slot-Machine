

<?php
  session_start();
  if(!ISSET($_SESSION['id'])){
    header('location:index.php');
  }
?>

<?php
        require("connect.php");
                            
        $query_CONS   = "SELECT * FROM user WHERE id='$_SESSION[id]'";
        $result       = mysqli_query($conn,$query_CONS);
        $fetch        = mysqli_fetch_array($result);
        
?>


<html lang="en">
<head>
  <title>GCAP E-Raffle</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="styles.css" />
   
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
    <script src="bootstrap/jquery-3.6.0.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!---------------------------   START SEARCH BARCODE   -------------------------------------------->

<script>
    $(document).ready(function(){
     
      $('#search-btn').click(function(){
          showValues();
      });
      $(function() {
          $('form').bind('submit',function(){
              showValues();
              return false;
          });
      });  
      function showValues() {
          //loader will be show until result from
          //search_results.php is shown
   
          //this will pass the form input
          $.post('search_ticket.php',  { ticketno: form11.ticketno.value, presdate: form11.presdate.value},
         
          //then print the result
          function(result){
              $('#s-results').html(result).show();
             /* $('#count2').focus();*/
          });
      }  
      });
    </script>

<!----------------------------  END SEARCH BARCODE  ------------------------------------------->



<!--------------------------- START REFRESH DISPLAY BARCODE ---------------------------------->

<script>
    
    $(document).ready(function(){
    $('#s-results').load('search_ticket_ref.php').show();
       });

</script>

<!----------------------------  END REFRESH DISPLAY BARCODE  --------------------------------->



<!--------------------------- START REFRESH DISPLAY BARCODE ---------------------------------->

<script>
    
    $(document).ready(function(){
    $('#s-results-viewer2').load('search_ticket_viewer.php').show();
       });

</script>

<!----------------------------  END REFRESH DISPLAY BARCODE  --------------------------------->







<!----------------------------------------------- START NUMBERS ONLY ----------------------------------------------->

<script> 
    function onlyNumberKey(evt) { 
          
        // Only ASCII charactar in that range allowed 
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
    } 
</script> 

<!-----------------------------------------------END NUMBERS ONLY ----------------------------------------------->


<!----------------------------------- START DATE  -------------------------------------->

<script>
     
function myFunction() {


    var d = new Date();
    var month = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];

    var date = " " + month[d.getMonth()] + "/" + d.getDate() +"/" + d.getFullYear();
    var time = d.toLocaleTimeString().toLowerCase().replace(/([\d]+:[\d]+:[\d])+(\s\w+)/g, "$1$2");

    var datetime = (date + " " + time);

    document.getElementById('presdate').value= datetime; 

}


</script>

<!----------------------------------- END DATE  -------------------------------------->


<!----------------------------------- START CLEAR BARCODE WHEN CLICK  -------------------------------------->

<script>

    function clearFields() {
    document.getElementById("ticketno").value=""
    window.location.href = window.location.href;
    
}
</script>

<!----------------------------------- END CLEAR BARCODE WHEN CLICK  -------------------------------------->


<script>

 /*function myFunction(){
  s='00000'+document.getElementById("barcode").value;
  document.getElementById("barcode").value=s.slice(-5);
}*/


</script>

<style type="text/css">
         
         body {
        
          background-repeat: no-repeat;
          background-size:auto;
          background-position: center;
          background-size: cover;
          background-color: #343434;


         }
         img{
            width: 100%;
            height: auto;
            background-size: auto;
         }





      </style>


<!--------------------------- START INPUT BOX COLOR ---------------------------------->

<style> 
select[type=text2] {
  
  box-sizing: border-box;
  /*border: 1px;*/
  border-radius: 8px ;
  border-color: #343434;
}
</style>


<!--------------------------- START INPUT BOX COLOR ---------------------------------->




</head>
<!-- ---------------------------------------------------------------------------------------------------- -->

<body onload="myFunction()" >

    <div class="container-fluid">
        <?php include 'navbar2.php'; ?>
    </div>

    <br>
    <br>
    <br>
    <br>

<!-- ---------------------------------------------------------------------------------------------------- -->


  <style type="text/css">
    
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
  </style>
<!-- ---------------------------------------------------------------------------------------------------- -->
  

<div class="box" style="border: 1px solid #cccccc; padding: 20px; margin: 25px auto; border-radius: 15px; width: 84%;  background-color: #272727; margin-top:-10px;">
  
    <div class="container-fluid" style="width:100%; margin-top:-10px;">
        <div class='float-sm' >
            <div>
                  <h3 align="left" style="font-weight: bold; font-size: 20px; color: #cccccc; margin-left: 0px; margin-bottom: 20px">CUSTOMER DATA </h3>
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid" style="width:85.5%; margin-bottom:0px; margin-top:-5px;">
        <hr style="height:2px; color:gray;background-color:gray">
    </div> -->
    
    
    

    <div class="container" style="width:90%">
        <form name="form11" >
            <div class = "row" style='margin-bottom:-10px; margin-top:10px;'>
               
                <div class="col-sm-2">
                  <div class="form-group row">
                      <label for="sel1" style ="padding-top: 5px; font-size: 15px;  color: #cccccc;  margin-left:0" > No of Entries </label> 
                  </div>
                </div>     
          
                <div class="col-sm-5">
                    <div class="form-group row">
                   
                        <select type="text2" style="width:45%; text-align: right; background-color:#676767;color:#fff;" name="ticketno" id="ticketno" autocomplete="off" aria-describedby="basic-addon2"  >
                            <option value="0"> &nbsp&nbsp</option>
                            <option value="1">1 &nbsp&nbsp</option>
                            <option value="2">2 &nbsp&nbsp</option>
                            <option value="3">3 &nbsp&nbsp</option>
                            <option value="4">4 &nbsp&nbsp</option>
                            <option value="5">5 &nbsp&nbsp</option>
                            <option value="6">6 &nbsp&nbsp</option>
                            <option value="7">7 &nbsp&nbsp</option>
                            <option value="8">8 &nbsp&nbsp</option>
                            <option value="9">9 &nbsp&nbsp</option>
                            <option value="10">10 &nbsp&nbsp</option>
                        </select> &nbsp&nbsp&nbsp&nbsp
                        
                        <button class="btn" type="submit" id="search-btn" style="background-color:#ff9900;color:#fff; border-radius: 8px ;"  >&nbsp&nbsp&nbsp&nbsp&nbsp Enter &nbsp&nbsp&nbsp&nbsp</button>
                    
                     </div>
                </div>

                <div class="col-sm-1">   
                  <div class="form-group row">
                      <!-- <label for="sel1" style ="padding-top: 5px; " class ="control-label font-weight-bold" >Date   </label>  -->
                  </div>
                </div>

                <div class="col-sm">   
                    <div class="form-group row">
                        <input type="text" class="form-control" id="presdate" name ="presdate" style="width:100%; "  hidden>
                    </div>
                </div>
            
            </div>
        </form>
    </div>



    <div class ="row" align="center">
      <div class="container-fluid">
          <div id = "s-results" align="center" style="width:90%">
      </div>
    </div>


    </div>
    </div>

    <!-- <div class="container-fluid" style="width:84%; margin-bottom:-10px;">
          <hr style="height:2px; color:gray;background-color:gray">
    </div> -->
   
    <div class="container-fluid" style="width:82%; margin-top:-10px; ">
        <div class = "row">
   
            <div class='col-sm-6' >
                <div class="form-group row">
                    <?php $datecurrent = date('Y-m-d'); ?>

                    <h3 align="left" style="font-weight: bold;  font-size: 20px; color: #cccccc; margin-bottom:-5px;"> TOTAL TICKETS &nbsp&nbsp <?php 

                        $query = "SELECT count(id) as x FROM customer where date >' $datecurrent' ";
                                $result = mysqli_query($conn,$query);
                                while($row = mysqli_fetch_array($result))
                                {

                                $total= "<td>". $row["x"] ."</td>" ; 

                                }                     
                                echo "$total";?>  </h3>
  
                </div>
            </div>

        </div>
    </div>
</div>


    <div class ="row" align="center">
      <div class="container-fluid">
          <div id = "s-results-viewer2" align="center" style="width:84%;">
      </div>
    </div>

</div>


</body>
</html>
