<?php
    session_start();
        if(!isset($_SESSION['id'])){
            header('location:index.php');
            exit();
    }

include('connect.php');
        $query_CONS     = "SELECT * FROM user WHERE id='$_SESSION[id]'";
        $result         = mysqli_query($conn,$query_CONS);
        $fetch          = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
    <html lang="en">
        
        <head>
            <title>Gcap Slot for Fun</title>
            <link rel="icon" href="image/gaisano.png" type="image/x-icon">
                
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                
    <!---------------------------   BOOTSTRAP LINKS --------------------------------------------->
               
                <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
                <script src="bootstrap/jquery.min.js"></script>
                <script src="bootstrap/popper.min.js"></script>
                <script src="bootstrap/bootstrap.min.js"></script>
                <script src="bootstrap/jquery-1.11.1.min.js"></script>
                <link rel="stylesheet" href="bootstrap/jquery-ui.css" />
                <script src="bootstrap/jquery-ui.js"></script>
                <link rel="stylesheet" href="css/bar-designed.css">
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                
                   
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


    <style type="text/css">
            
            /* body {
            
            background-repeat: no-repeat;
            background-size:auto;
            background-position: center;
            background-size: cover;
            background-color: #a3a3a3;


            }
            img{
                width: 100%;
                height: auto;
                background-size: auto;
            } */

    </style>


<!--------------------------- START INPUT BOX COLOR ---------------------------------->

<style>
         
          select:focus {
              outline: none;
              background-color: #676767; /* Change background color on focus */
              border-color: #00ffff; /* Change border color on focus */
              color: #ffffff; /* Change text color on focus */
          }

    </style>


        <!-- /* ************************************* */
              /* *   start input highlights design   * */
              /* *************************************** */ -->

        <style>

            .form-control {
                width: 100%;
                font-size: 15px;
                background-color: #676767;
                color: #cccccc;
                border-color: #676767;
                border-radius: 8px;
                transition: all 0.3s ease;
            }

            .form-control:focus {
                outline: none;
                background-color: #676767; /* Change background color on focus */
                border-color: #00ffff; /* Change border color on focus */
                color: #ffffff; /* Change text color on focus */
            }

        </style>


        <!-- /* ************************************* */
            /* *   end input highlights design      * */
            /* *************************************** */ -->

       
       
        <!-- /* ************************************* */
            /* *   start input background design   * */
            /* *************************************** */ -->

        <style>

            .intro {
            height: 100%;
            }

            .gradient-custom {
            /* fallback for old browsers */
            background: #fa709a;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom right, rgba(250, 112, 154, 1), rgba(254, 225, 64, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom right, rgba(250, 112, 154, 1), rgba(254, 225, 64, 1))
            }


            /* Change dissabled Button color  */
            #submit:disabled{
            background-color: #0275d8;
            /* opacity:0.5; */
            border-color: #0275d8;  
            }

            #prize_edit:disabled{
            background-color: #555555;
            /* opacity:0.5; */
            border-color: #555555;  
            }

            #qty_edit:disabled{
            background-color: #555555;
            /* opacity:0.5; */
            border-color: #555555;  
            }


            #prize_delete:disabled{
            background-color: #555555;
            /* opacity:0.5; */
            border-color: #555555;  
            }

            #qty_delete:disabled{
            background-color: #555555;
            /* opacity:0.5; */
            border-color: #555555;  
            }

            #allo_cat_del:disabled{
            background-color: #555555;
            /* opacity:0.5; */
            border-color: #555555;  
            }

            #allo_date_del:disabled{
            background-color: #555555;
            /* opacity:0.5; */
            border-color: #555555;  
            }
          
            #orno1:disabled{
            background-color: #555555;
            /* opacity:0.5; */
            border-color: #555555;  
            }
            
            #amount1:disabled{
            background-color: #555555;
            /* opacity:0.5; */
            border-color: #555555;  
            }

            #player_name_del:disabled{
            background-color: #555555;
            /* opacity:0.5; */
            border-color: #555555;  
            }

            #player_invno_del:disabled{
            background-color: #555555;
            /* opacity:0.5; */
            border-color: #555555;  
            }

            #amount_del:disabled{
            background-color: #555555;
            /* opacity:0.5; */
            border-color: #555555;  
            }

            #ctr_del:disabled{
            background-color: #555555;
            /* opacity:0.5; */
            border-color: #555555;  
            }

        </style>

        <!-- /* ************************************* */
            /* *  end input background design   * */
            /* *************************************** */ -->



        <!-- /* ************************************* */
             /* *   start modal confirmation design   * */
             /* *************************************** */ -->

        <style>

            .modal {
                display: none;
                position: fixed;
                left: 0;
                top: 20;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0,0,0,0.5);
                
            }

            .modal-dialog {
                margin-top: 100px;
            }

            .modal-content {
                background-color: #484848;
                border-radius: 15px; /* Adjust the value as needed */
  
            }

            .modal-content h2 {
                margin: 0 0 20px;
                font-size: 20px;
                
            }

            .btn-large-close {
                font-size: 2rem; /* Adjust the font size as needed */
                padding: 10px;   /* Adjust the padding as needed */
                color: white;    /* Set the text color to white */
                background: none; /* Ensure no background to maintain transparency */
                border: 1px solid white; /* Add a white border */
                border-radius: 5px;     /* Optionally, add rounded corners */
            }

        </style>


    <!-- /* ************************************* */
        /* *   end modal confirmation design   * */
        /* *************************************** */ -->





     <!-- /* ************************************* */
        /* *         start table design          * */
        /* *************************************** */ -->

        <style>
            
            .table {
                border-collapse: separate;
                border-spacing: 0;
                border-radius: 13px;
                overflow: hidden;
            }
            .table td, .table th {
                padding: 6px;
                font-size: 15px;
            }
            .table-striped tbody tr:nth-of-type(odd) td {
                background-color: white;
            }
            .table-striped tbody tr:nth-of-type(even) td {
                background-color: #ffd45b;
            }
            .table-bordered td, .table-bordered th {
                border: .5px solid #ddd;
            }
            #mydatatable thead th {
                background-color: #ff840d;
                color: white;
            }
            body {
                background-color: #a3a3a3;
            }

         </style>

      <!-- /* ************************************* */
        /* *         end table design          * */
        /* *************************************** */ -->


        <!-- /* ************************************* */
             /* *         start claar fields        * */
            /* ************************************** */ -->

       
        <script>

            function clearFields() {
            document.getElementById("search_prize").value=""
            window.location.href = window.location.href;

            }

        </script>

        <!-- /* ************************************* */
             /* *           end claar fields        * */
            /* ************************************** */ -->

        
   

</head>



<body>
    <div class="container-fluid">
        <?php include 'navbar2.php'; ?>
    </div>

<br><br><br>
    
    <div class="container" style="width:100%; margin-top: 5px;">
        
        <div class='row' style=' display: flex; justify-content: flex-end; margin-right: 0px'>
            <div class='col-sm-2'>
                <div class="form-group row" style='display: flex; justify-content: flex-end; margin-right: -40px;'>
                    <button class="btn" type="button" id="btn_add_prize" data-toggle="modal" data-target="#modal_add_player" 
                    style="background-color:#099E3D;color:#fff; padding: 3.5% 23%;border-radius: 8px;"  tabindex="1"> Add <i class="fa fa-save"></i></button>  
                </div>
            </div>
           
            <div class='col-sm-2'>
                <div class="form-group row" style='display: flex; justify-content: flex-end; margin-right: -10px;'>
                    <button  class="btn" type="button" id="btn_delete_prize" data-toggle="modal" data-target="#modal_delete_player" 
                    style="background-color:#ff0000;color:#fff; padding: 3.8% 20%; border-radius: 8px;" tabindex="3"> Delete <i class="fa fa-trash"></i></button>
                </div>
            </div>
        </div>
    </div>

</div>


      <!-- /* ************************************* */
        /* *               start add modal          * */
        /* *************************************** */ -->

<div class="container-fluid" style="margin-top: 30px;">
   
        <div id="modal_add_player" class="modal fade bs-example-modal-lg" role="dialog" aria-labelledby="classInfo" aria-hidden="true" data-backdrop="static" tabindex="1" >
            
            <div class="modal-dialog modal-lg">
                <div class="modal-content">          
                
                    <div class="modal-header bg-success" style="padding: 10px 20px; ">
                        <h5 class="modal-title" style="font-size:25px; font-weight:bold; margin-left: 5px; margin-bottom: 5px; margin-top: 5px; color: #FFFAF0;" id="exampleModalLongTitle"><i class="fa fa-floppy-o" aria-hidden="true"></i> ADD PLAYER </h5>
                        <button type="button" id="close_btn" class="close btn-large-close" data-dismiss="modal" aria-hidden="true"  onclick="clearFields()"> × </button>
                    </div>
                   
                <form id="modal_add">

                    <div class="modal-body">
                        <div class="container-fluid" style='padding-top: 20px; padding-bottom: px; width:100%; margin-left: 0px;'>
                            <div class='container'>

                            <div class = "row" style=' margin-top: 15px;'>
                                <div class="col-sm-2">
                                    <div class="form-group row">
                                        <label for="sel1" style ="padding-top: 5px; font-size: 15px;  color: #cccccc;  margin-left:20px;" > No of Spins </label> 
                                    </div>
                                </div>     
                        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                
                                        <select type="text2" style="width:75%; text-align: right; background-color:#676767;color:#fff; padding: 6px 10px; border-radius: 8px; margin-left:30px;" name="ticketno" id="ticketno" autocomplete="off" aria-describedby="basic-addon2"  >
                                            <option value="1">1 &nbsp</option>
                                            <option value="2">2 &nbsp</option>
                                            <option value="3">3 &nbsp</option>
                                            <option value="4">4 &nbsp</option>
                                            <option value="5">5 &nbsp</option>
                                            <option value="6">6 &nbsp</option>
                                            <option value="7">7 &nbsp</option>
                                            <option value="8">8 &nbsp</option>
                                            <option value="9">9 &nbsp</option>
                                            <option value="10">10 &nbsp</option>
                                        </select> &nbsp&nbsp&nbsp&nbsp
                                        
                                        <!-- <button class="btn" type="submit" id="search-btn" style="background-color:#ff9900;color:#fff; border-radius: 8px ;"  >&nbsp&nbsp&nbsp&nbsp&nbsp Enter &nbsp&nbsp&nbsp&nbsp</button>
                                     -->
                                    </div>
                                </div>

                                <!-- <div class="col-sm-3">   
                                    <div class="form-group row" style="margin-left: -90%">
                                        
                                     <button class="btn" type="submit" id="search-btn" style="background-color:#ff9900;color:#fff; border-radius: 8px;"  >&nbsp&nbsp&nbsp&nbsp&nbsp Enter &nbsp&nbsp&nbsp&nbsp</button>
                                    
                                    </div>
                                </div> -->

                            &nbsp&nbsp
                            &nbsp&nbsp
                            &nbsp&nbsp
                            
                                <div class='col-sm-1'>  
                                    <div class='form-group row'>
                                                
                                            <label style ='padding-top: 5px; color: #cccccc; font-size: 15px;  margin-left: -20px'>Counter</label>
                            
                                    </div>
                                </div>
                                    
                                    <div class='col-sm-3'>  
                                    <div class='form-group row'>
                                                
                                            <input type='number' class='form-control' id='ctr1' name='ctr1'  style ='width: 100%; margin-left:20px;' autocomplete='off'  onInput='checkUsername()'>
                            
                                    </div>
                                    </div>
                            
                            &nbsp&nbsp
                            &nbsp&nbsp
                            &nbsp&nbsp
                            </div>
                                            
                            <div class='row' style='margin-top: 0px'>
                                    
                                    <div class='col-sm-2'>   
                                    <!-- <div class='form-group row'>
                            
                                    <label style ='padding-top: 5px; color: #cccccc; font-size: 15px;'>Name </label>
                            
                            
                                    </div> -->
                                    </div>
                            
                            
                                    <div class='col-sm-4'>
                                    <!-- <div class='form-group row'>
                                                
                                            <input type='text' class='form-control' id='player_name' name='player_name' style ='width: 100%;' autocomplete='off' required>
                            
                                    </div> -->
                                    </div>
                            
                            <!-- &nbsp&nbsp
                            &nbsp&nbsp
                            &nbsp&nbsp
                             -->
                            
                                    <div class='col-sm-1'> 
                                    <!-- <div class='form-group row'>
                                                
                                            <label style ='padding-top: 5px; color: #cccccc; font-size: 15px; margin-left: -15px' >Cell No </label>
                            
                                    </div> -->
                                    </div>
                                    
                                    <div class='col-sm'>  
                                    <!-- <div class='form-group row'>
                                                
                                            <input type='text' class='form-control' id='player_celno' name='player_celno'  style ='width: 100%;'  onkeypress='return onlyNumberKey(event)'  autocomplete='off'>
                            
                                    </div>  -->
                                    </div>
                            
                                </div>
                            
                                            
                                <div class='row' style='margin-bottom: 0px;'>
                                    <div class='col-sm-2'>   
                                    <!-- <div class='form-group row'>
                                            
                                        <label style ='padding-top: 5px; color: #cccccc; font-size: 15px;' >Address </label>
                                    
                                    </div> -->
                                    </div>            
                            
                                    <div class='col-sm'>   
                                    <!-- <div class='form-group row'> 
                                            
                                            <input type='text' style='width:100%;' class='form-control' id='player_add' name='player_add' autocomplete='off' required>
                                            
                                    </div> -->
                                    </div>                
                                
                                </div>
                            
                            
                            
                            
                                <div class='row' style='margin-bottom: px;'>
                                    
                                    <div class='col-sm-2'> 
                                    <div class='form-group row'>
                            
                                        <label style ='padding-top: 5px; color: #cccccc; font-size: 15px; margin-left: 20px; ' > Sales Inv No </label>
                            
                                    </div>
                                    </div>
                            
                            
                                    <div class='col-sm-4'>  
                                    <div class='form-group row'>
                                            
                                            
                                        <input type='text' class='form-control' id='orno1' name='orno1'  style ='width: 75%; margin-left:30px;'  autocomplete='off'  onInput='checkUsername()' onkeypress='return onlyNumberKey(event)'  required disabled >
                                        <input type='text' class='form-control' id='idticket' name='idticket' value='"." $ticket"."' hidden > 
                                                                    
                                    </div> 
                                    </div>
                            
                            
                            
                            
                                    <div class='col-sm-2'>  
                                    <div class='form-group row'>
                                                
                                            <!-- <label style ='padding-top: 5px; color: #cccccc; font-size: 15px; margin-left: -20px'>Amount </label> -->
                                            
                                    </div>
                                </div>
                                    

                            &nbsp&nbsp
                            &nbsp&nbsp
                            
                                    <div class='col-sm-3'>  
                                    <div class='form-group row'>
                                                
                                          
                                        <button type='submit'  class='btn btn-primary' id='submit_add' style='color:#fff; border-radius: 8px; margin-bottom: 20px; margin-left: 2px;' 
                                        tabindex='3' disabled> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Save &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>

                                    </div>
                                    </div> 
                            
                            <!-- &nbsp&nbsp
                            &nbsp&nbsp
                            &nbsp&nbsp
                            
                            
                                    <div class='col-sm-1'>  
                                    <div class='form-group row'>
                                                
                                            <label style ='padding-top: 5px; color: #cccccc; font-size: 15px;  margin-left: -15px'>Counter</label>
                            
                                    </div>
                                </div> 
                                    
                                    <div class='col-sm'>  
                                    <div class='form-group row'>
                                                
                                            <input type='number' class='form-control' id='ctr1' name='ctr1'  style ='width: 100%;' autocomplete='off'  onInput='checkUsername()'>
                            
                                    </div>
                                    </div>
                                </div>-->
                            
                            </div>
                            
                            
                            <!-- <span id='check-username' ></span> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                            <span id='check-username2'></span> -->
                                
                                <div class='row' style='margin-bottom:-40px; margin-top: 25px; margin-right: 10px;'>
                                    <div class='col-sm' style='display: flex; justify-content: flex-end'>
                                        <div class='form-group row'> 
                                        
                                                <!-- <button type='submit'  class='btn btn-primary' id='submit_add' style='color:#fff; border-radius: 8px; margin-left: -20px; margin-bottom: 20px; margin-top: -2px; ' 
                                                tabindex='3' disabled> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Save &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button> -->
                            
                                        </div>
                                    </div>
                                </div>
                                
                                <span id='check-username' ></span> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                                            <span id='check-username2' ></span>
                            
                                <div class='col-sm-2 offset-sm-3' >
                                    <div class='form-group row' style="margin-top: 10px;">
                                        <!-- <button type='submit' class='btn btn-primary' id='submit_add' style="width: 83%; padding: 6px 10px; border-radius: 8px;" tabindex='3'> Save <i class="fa fa-save" aria-hidden="true"></i> </button> -->
                                    </div>
                                </div>
                                <div class='col-sm-2 offset-sm-3' >
                                    <div class='form-group row' style="margin-top: 10px;">
                                        <!-- <button type='submit' class='btn btn-primary' id='submit_add' style="width: 83%; padding: 6px 10px; border-radius: 8px;" tabindex='3'> Save <i class="fa fa-save" aria-hidden="true"></i> </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                    <div id="formResponse"></div>
                    
                    <!-- <div class="modal-footer bg-success" style="padding: 1px 10px;">
                        <button type="button" class="btn btn-danger" id="close_add_modal" name="close_add_modal" data-dismiss="modal" style="padding: 8px 10px;">Close <i class="fa fa-window-close" aria-hidden="true"></i></button>
                    </div> -->

                </div>
            </div>
        </div>
    
</div>


        <!-- /* ************************************* */
        /* *            end add modal               * */
        /* *************************************** */ -->

   
    <!-- /* ************************************* */
        /* *           start delete modal          * */
        /* *************************************** */ -->

<div class="container-fluid" style="margin-top: 30px;">
    <div id="modal_delete_player" class="modal fade bs-example-modal-lg" role="dialog" aria-labelledby="classInfo" aria-hidden="true" data-backdrop="static" tabindex="1">
        <div class="modal-dialog modal-lg">
        
        <form id="modal_delete">
            <div class="modal-content">
                <div class="modal-header" style="padding: 10px 20px; background-color:#ff0000; color:#fff;">
                    <h5 class="modal-title" style="font-size:20px; font-weight:bold; margin-left: 20px; color: #FFFAF0;" id="exampleModalLongTitle"><i class="fa fa-floppy-o" aria-hidden="true"></i> DELETE PLAYER </h5>
                    <button type="button" id="close_btn" class="close btn-large-close" data-dismiss="modal" aria-hidden="true" onclick="clearFields_del()" > × </button>
                </div>
                
                    <div class="modal-body">
                        <div class="container-fluid" style='padding-top: 20px; padding-bottom: px; width:100%; margin-left: 20px;'>
                            <div class='row' style='margin-top: 5px'>
                                <div class='col-sm-2'>
                                    <div class='form-group row'>
                                        <label style='padding-top: 5px; color: #cccccc; font-size: 15px;'>Search Inv No </label>
                                    </div>
                                </div>
                                <div class='col-sm-4'>
                                    <div class='form-group row'>
                                        <input type="text" class="form-control" id="search_invno" name="search_invno" style="width: 80%;" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class='col-sm-1'>
                                    <div class='form-group row'>
                                        <button class="btn" type="submit" id="search-btn_del" style="background-color:#5cb85c;color:#fff; border-radius: 8px; padding: 10% 10%; margin-left: -30px"> &nbsp Search <i class="fa fa-search" aria-hidden="true"></i> &nbsp </button>
                                    </div>
                                </div>
                            </div>
                           
                                            
                            <div class='row' style='margin-top: 0px'>
                                    
                                    <div class='col-sm-2'>   
                                        <div class='form-group row'>
                                            <label style ='padding-top: 5px; color: #cccccc; font-size: 15px;'>Name </label>
                                        </div>
                                    </div>
                            
                                    <div class='col-sm-4'>
                                        <div class='form-group row'>
                                            <input type='text' class='form-control' id='player_name_del' name='player_name_del' style ='width: 80%;' autocomplete='off' disabled>
                                        </div>
                                    </div>
                            
                            &nbsp&nbsp
                            &nbsp&nbsp
                            &nbsp&nbsp
                            
                                    <div class='col-sm-1'> 
                                        <div class='form-group row'>
                                            <label style ='padding-top: 5px; color: #cccccc; font-size: 15px; margin-left: -15px' >Inv No</label>
                                        </div>
                                    </div>
                                    
                                    <div class='col-sm'>  
                                        <div class='form-group row'>
                                            <input type='text' class='form-control' id='player_invno_del' name='player_invno_del'  style ='width: 75%;'  onkeypress='return onlyNumberKey(event)'  autocomplete='off' disabled>
                                        </div> 
                                    </div>
                            
                            </div>
                            
                            <div class='row' style='margin-bottom: px;'>
                            
                                    <div class='col-sm-2'>  
                                        <div class='form-group row'>
                                            <label style ='padding-top: 5px; color: #cccccc; font-size: 15px; '>Amount </label>
                                        </div>
                                    </div>
                                        
                                    <div class='col-sm-4'>  
                                        <div class='form-group row'>
                                            <input type='text' class='form-control' id='amount_del' name='amount_del'  style ='width: 80%; ' autocomplete='off' onkeypress='return onlyNumberKey(event)'  disabled>
                                        </div>
                                    </div>
                            
                            &nbsp&nbsp
                            &nbsp&nbsp
                            &nbsp&nbsp
                            
                                    <div class='col-sm-1'>  
                                        <div class='form-group row'>
                                            <label style ='padding-top: 5px; color: #cccccc; font-size: 15px;  margin-left: -15px'>Counter</label>
                                        </div>
                                    </div>
                                    
                                    <div class='col-sm'>  
                                        <div class='form-group row'>
                                            <input type='text' class='form-control' id='ctr_del' name='ctr_del'  style ='width: 75%;' autocomplete='off' disabled>
                                            <input type='text' class='form-control' id='id_del' name='id_del' style='width: 90%;' autocomplete='off' hidden>
                                        </div>
                                    </div>
                            </div>
                            
                        </div>
                            <div class='row' style='margin-bottom: 0px;'>
                                <div class='col-sm-2'>
                                    <div class='form-group row'>
                                    </div>
                                </div>
                                <div class='col-sm-4'>
                                    <div class='form-group row'>
                                    </div>
                                </div>
                                <div class='col-sm-2 offset-sm-3'>
                                    <div class='form-group row' style="margin-top: 10px; margin-right: -45px;">
                                        <button type='submit' class='btn btn-danger' id='submit_delete' style="width: 83%; padding: 6px 10px; border-radius: 8px; " tabindex='3' disabled> Delete <i class="fa fa-trash" aria-hidden="true"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div id="formResponse_delete"></div>
            </div>
        </div>
    </div>


   <!-- /* ************************************* */
   /* *            end delete modal            * */
   /* *************************************** */ -->





        <!-- /* ************************************* */
        /* *            start table display          * */
        /* *************************************** */ -->

 
        <?php
            // require("connect.php");   
            // $datecurrent = date('m-d-Y');
         ?>



<div class="container-fluid" style="width:84.5%; margin-top: -55px; " id="contentToCapture">
    <div class="row">
        <div class="col-sm-7">
            <div class="form-group row">
                <div class="form-group row">
                   

                    <h3 align="left" style="font-weight: bold;  font-size: 20px; color: black; margin-bottom:-5px; margin-left: 30px;"> TOTAL PLAYER FOR TODAY &nbsp&nbsp <?php 
                    $datecurrent2 = date('Y-m-d');

                        $query = "SELECT count(id) as x FROM customer where date >' $datecurrent2' ";
                                $result = mysqli_query($conn,$query);
                                while($row = mysqli_fetch_array($result))
                                {

                                $total= "<td>". $row["x"] ."</td>" ; 

                                }                     
                                echo "$total";?>  </h3>
  
                </div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group row justify-content-end">
                <label for="sel1"  style ="font-size: 16px;  color: black;  margin-top:15px; " > Date: </label> &nbsp; &nbsp;
                <h1 align="right" style="font-size: 16px; color: black; margin-top:18px; margin-right:18px;"><?php echo $datecurrent2; ?></h1>
            </div>
        </div>
    </div>
    
    <table class="table table-striped" id="mydatatable">
        
        <thead>
            <tr>
                <th class="hide-column">Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Inv No</th>
                <th>Amount</th>
                <th>Spin</th>
                <th>Status</th>
            </tr>
        </thead>
        
        <tbody>
  
            <?php 
               
                
                // Query to fetch the data
                $query = "SELECT * FROM customer WHERE date > '$datecurrent2' ORDER BY id";
                $result = mysqli_query($conn, $query);
                
                // $counter = $total_rows; // Initialize counter variable to the total number of rows
                
                while ($row = mysqli_fetch_array($result)) {

                    $statusText = ($row["status"] == '1') ? 'not yet played' : ' played';
                    echo "<tr>";
                    echo "<td class='hide-column'> " . $row["id"] . " </td>";
                    echo "<td> " . $row["name"] . " </td>";
                    echo "<td> " . $row["address"] . " </td>";
                    echo "<td> " . $row["orno"] . " </td>";
                    echo "<td> " . $row["amount"] . " </td>";
                    echo "<td> " . $row["entries"] . " </td>";
                    echo "<td> " . $statusText . " </td>";
                    echo "</tr>";
                    
                    }
            ?>

        </tbody>

    </table>
</div>

<div class="container-fluid" style="width:85%;">
    <!-- <button id="generatePDF" class="btn btn-primary">Save as PDF</button> -->
</div>


        <!-- /* ************************************* */
             /* *         end table display          * */
             /* *************************************** */ -->





        <!-- /* ************************************* */
             /* *      start generate pdf file        * */
             /* *************************************** */ -->

<script src="bootstrap/jquery.min.js"></script>
<script src="DataTables/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>

<script>

        $(document).ready(function() {
            $('#mydatatable').DataTable();

            document.getElementById('generatePDF').addEventListener('click', function() {
                const { jsPDF } = window.jspdf;

                html2canvas(document.querySelector('#contentToCapture')).then(canvas => {
                    const imgData = canvas.toDataURL('image/png');
                    const pdf = new jsPDF('p', 'in', 'a4');
                    const imgProps = pdf.getImageProperties(imgData);
                    const pdfWidth = pdf.internal.pageSize.getWidth();
                    const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;
                    
                    // 0.5 inch margin on left, right, and top
                    const margin = 0.5;
                    pdf.addImage(imgData, 'PNG', margin, margin, pdfWidth - 2 * margin, pdfHeight - margin);
                    
                    // Get current date
                const currentDate = new Date();
                const day = String(currentDate.getDate()).padStart(2, '0');
                const month = String(currentDate.getMonth() + 1).padStart(2, '0'); // Months are zero based
                const year = currentDate.getFullYear();
                const formattedDate = `${month}-${day}-${year}`;
                
                pdf.save(`SOUTH_ALLOCATIONS_${formattedDate}.pdf`);
                
                });
            });
        });

</script>

        <!-- /* ************************************* */
             /* *      end generate pdf file     * */
                /* *************************************** */ -->



<!-- /* *************************************************************** */
        /* *        start refresh page when exit modal button         * */
        /* ************************************************************ */ -->

<script>

        function clearFields() {
            document.getElementById("player_name").value = "";
            document.getElementById("player_cel").value = "";
            document.getElementById("player_add").value = "";
            document.getElementById("ticketno").value = "";
            document.getElementById("orno1").value = "";
            document.getElementById("amount1").value = "";
            document.getElementById("ctr1").value = "";

                                 
        }

</script>               

<script>

        function clearFields_del() {
           
            document.getElementById("search_invno").value = "";
            document.getElementById("player_name_del").value = "";
            document.getElementById("player_invno_del").value = "";
            document.getElementById("amount_del").value = "";
            document.getElementById("ctr_del").value = "";
            document.getElementById("id_del").value = "";
            window.location.href = window.location.href;
                       
        }

</script>               

<!-- /* *************************************************************** */
        /* *          end refresh page when exit modal button         * */
        /* ************************************************************ */ -->



 <!-- /* ************************************* */
        /* *        start save modal         * */
        /* *************************************** */ -->

<script>

    // Handle form submission
        $("#modal_add").on("submit", function(event) {
            event.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                type: "POST",
                url: "player_add.php",
                data: formData,
                success: function(response) {
                    $("#formResponse").html(response);
                    $("#modal_add")[0].reset();
                    
                    setTimeout(function() {
                        modal.hide();
                    }, 2000);
                }
            });
        });

</script>

       <!-- /* ************************************* */
        /* *            end save modal             * */
        /* *************************************** */ -->





    <!-- /* ********************************************* */
         /* *      start search & delete prize modal      * */
         /* ********************************************* */ -->

<script>
    
    // Handle form submission
    $(document).ready(function() {
           $("#modal_delete").on("submit", function(event) {
               event.preventDefault();
               var formData_del = $(this).serialize();
   
               $.ajax({
                   type: "POST",
                   url: "player_delete.php",
                   data: formData_del,
                   success: function(response) {
                       $("#formResponse_delete").html(response);
                       $("#modal_delete")[0].reset();
                       disableFields(true);
                       setTimeout(function() {
                           $('#modal_delete_player').modal('hide');
                       }, 2000);
                   }
               });
           });
   
           // Clear the input fields when the modal is closed
           $('#modal_delete_player').on('hidden.bs.modal', function () {
               $(this).find('form').trigger('reset');
               $('#message').remove(); // Remove the message if it's present
               disableFields(true);
           });
           
             // Clear the input fields when the close button is clicked
           $('#close_btn').on('click', function () {
               $('#modal_delete')[0].reset();
               disableFields(true);
               location.reload();
           });
   
   
           function disableFields(disable) {
            //    $('#prize_delete').prop('disabled', disable);
            //    $('#qty_delete').prop('disabled', disable);
               $('#submit_delete').prop('disabled', disable);
           }
   
           $('#search-btn_del').on('click', function(event) {
               event.preventDefault();
               var searchInvno_del = $('#search_invno').val();
   
               if (searchInvno_del) {
                   console.log('Searching for prize:', searchInvno_del); // Debug info
                   $.ajax({
                       url: 'search_player_invno.php', // Ensure this URL is correct
                       type: 'POST',
                       data: { search_invno: searchInvno_del },
                       dataType: 'json', // Expecting JSON response
                       success: function(response) {
                           console.log('Response from server:', response); // Log the response
                           if (response.success) {
                               // Populate the fields with the data
                               $('#player_name_del').val(response.name);
                               $('#player_invno_del').val(response.orno);
                               $('#amount_del').val(response.amount);
                               $('#ctr_del').val(response.ctr);
                               $('#id_del').val(response.id);

                               disableFields(false);
                           } else {
                               // Display the custom message
                                if ($('#message').length === 0) { // Check if the message element already exists
                                    $('#modal_delete').append("<div id='message' style='color: white; text-align: center; background-color: red; padding: 10px; border-radius: 5px;'>Player Inv No not found</div>");
                                }
                
                                // Remove the message after 2 seconds
                                setTimeout(function() {
                                    $('#message').fadeOut('slow', function() {
                                        $(this).remove(); // Remove the message element from the DOM
                                    });
                                }, 2000);
                           }
                       },
                       error: function(xhr, status, error) {
                           console.error('AJAX error:', status, error); // Debug info
                           console.error(xhr.responseText); // Add this line to see the server response
                           alert('Error in the AJAX request');
                       }
                   });
               } else {
                   // Display the custom message
                   if ($('#message').length === 0) { // Check if the message element already exists
                       $('#modal_delete').append("<div id='message' style='color: white; text-align: center; background-color: red; padding: 10px; border-radius: 5px;'>Please enter a prize to search for</div>");
                   }
   
                   // Remove the message after 2 seconds
                   setTimeout(function() {
                       $('#message').fadeOut('slow', function() {
                           $(this).remove(); // Remove the message element from the DOM
                       });
                   }, 2000);
               }
           });
   
           disableFields(true);
       });
   
       function onlyNumberKey(evt) {
           // Only ASCII character in that range allowed
           var ASCIICode = (evt.which) ? evt.which : evt.keyCode
           if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
               return false;
           return true;
       }
   </script> 
          
    <!-- /* ********************************************* */
         /* *      end search & delete prize modal      * */
         /* ********************************************* */ -->



   

<!-- /* ***************************************************** */
         /* *      start search inv no available modal      * */
         /* ************************************************* */ -->

        <script>

                function checkUsername() {
                
                var orno1x=+$('#orno1').val();
                var orno2x=+$('#orno2').val();
                var orno3x=+$('#orno3').val();
                var orno4x=+$('#orno4').val();
                var orno5x=+$('#orno5').val();

                var ctr1x=+$('#ctr1').val();
                var ctr2x=+$('#ctr2').val();
                var ctr3x=+$('#ctr3').val();
                var ctr4x=+$('#ctr4').val();
                var ctr5x=+$('#ctr5').val();

                jQuery.ajax({
                url: 'check_availability.php',
                
                data:{orno1xx:orno1x, orno2xx:orno2x, orno3xx:orno3x, orno4xx:orno4x, orno5xx:orno5x, ctr1xx:ctr1x, ctr2xx:ctr2x, ctr3xx:ctr3x, ctr4xx:ctr4x, ctr5xx:ctr5x,}, 
                

                type: 'POST',
                success:function(data){
                    $('#check-username').html(data);
                },
                error:function (){}
                });
                }
                
        </script>

<!-- /* ***************************************************** */
         /* *        end search inv no available modal      * */
         /* ************************************************* */ -->


    <style>
        .hide-column {
            display: none;
        }
    </style>


</body>
</html>
