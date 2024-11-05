

<!---------------------------   START DISPLAY TAB-NO  --------------------------------------------->

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
        

        $image_sql      = "select * from image WHERE feature = 'Yes'";
        $image_result   = mysqli_query($conn, $image_sql);
        $image_row      = mysqli_fetch_assoc($image_result);


        // $query_2nd      = "SELECT * FROM win_prizes WHERE category ='2nd' ORDER BY RAND() LIMIT 1";
        // $result_2nd     = mysqli_query($conn,$query_2nd);
        // $fetch_2nd      = mysqli_fetch_array($result_2nd);




        // $query_jack     = "SELECT * FROM win_prizes WHERE category ='jackpot' ORDER BY RAND() LIMIT 1";
        // $result_jack    = mysqli_query($conn,$query_jack);
        // $fetch_jack     = mysqli_fetch_array($result_jack);
        

?>





<!---------------------------   END DISPLAY TAB-NO  --------------------------------------------->




<!DOCTYPE html>
<html>
  <head>
    <title>Gcap Slot for Fun</title>
    <link rel="icon" href="image/gaisano.png" type="image/x-icon">

    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="styles.css" />

    <!---------------------------   BOOTSTRAP LINKS --------------------------------------------->
  
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/jquery-ui.js"></script>
   
    
    <link rel="stylesheet" href="css/bar-designed.css">
    <link rel="stylesheet" href="css/slotmachine.css">
    <link  rel="stylesheet" href="bootstrap/jquery-ui.css" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   




     <!-- /* ************************************* */
        /* *   start modal confirmation design   * */
        /* *************************************** */ -->
    
    <style>
        /* Add your custom styles here */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.5);
        }

        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 300px;
            text-align: center;
            border-radius: 10px;
            font-size: 15px;
            display: flex;
            justify-content: center; 
            align-items: center;    
            flex-direction: column; 
        }

        .modal-content h2 {
            margin: 0 0 20px;
            font-size: 20px;
        }

        .modal-content button {
            margin: 5px;
            padding: 10px 10px;
            border: none;
            cursor: pointer;
            border-radius: 15px;
            transition: background-color 0.3s ease;
            width: 80%;
            max-width: 200px; 

        }

        .modal-content .confirm {
            background-color: #4CAF50;
            color: white;
        }

        .modal-content .confirm:hover {
        background-color: #37803A;
        }

        .modal-content .cancel {
            background-color: #f44336;
            color: white;
        }

        .modal-content .cancel:hover {
        background-color: #B72E2A;
        }
    </style>


    <!-- /* ************************************* */
        /* *   end modal confirmation design   * */
        /* *************************************** */ -->
   
   
    <!-- /* ****************************** */
        /* *     start customer prizes   * */
        /* ****************************** */ -->

    <style>

            .container .customer-prizes{
                position: absolute;
                left: 0;
                padding: 1rem;
                width: 18rem;
                top: 18rem;
                height: auto;
                background: #9B59B6;
                color: #fff;
                border-radius: .5rem;
            }
            .container .customer-prizes .container-box .header-title{
                display: flex;
                justify-content: space-between;
                margin: .5rem 0;
                margin-top: -10px;
                margin-bottom: 8px;
            }
            .container .customer-prizes .container-box table th{
                
                border-bottom: 1px solid #fff;
            }
            .container .customer-prizes .container-box table th{
                color: #fff;
                font-weight: normal;
                
                padding: 5px 5px; /* Minimal padding to reduce cell height */
                line-height: 1; /* Line height of 1 ensures minimal vertical spacing */
                border: 1px solid #ddd; /* Optional: adds borders for clarity */
            }

            /* .container .container-box table tr,  */
            .container .container-box table td {
                padding: 3px 2px; /* Remove padding */
                line-height: 1; /* Ensure line height is minimal */
                font-size: 12px; /* Reduce font size */
                border: none; /* Remove border if not needed */
            }

            .container .print-display{
                background: #6C3483 ;
                margin-top: -10px;
                margin-left: -15px;
                padding-top: 1px;
                padding-bottom: 1px;
                width: 18rem;
                
            }

    </style>


    <!-- /* ****************************** */
        /* *       end customer prizes   * */
        /* ****************************** */ -->



    <!-- /* ****************************** */
        /* *     start disable spin      * */
        /* ****************************** */ -->

    <style>
        .disabled {
            pointer-events: none;
            opacity: 0.5;
        }
    </style>
    

    <!-- /* ****************************** */
        /* *       end disable spin      * */
        /* ****************************** */ -->




    <!--/* ****************************** */
        /* *   start next player button  * */
        /* ****************************** */ -->


    <style>

        .container .next-player-con{
            position: absolute;
            left: 0;
            padding: 1rem;
            width: 15rem;
            top: 17.5rem;
            height: auto;
            
        }
        
        .next-player-con {
            display: inline-block;
            }
        
        .next {
                cursor: pointer;
                display: flex;
                align-items: center;
                background-color: lightviolet;
                padding: 10px 20px;
                border-radius: 5px;
                font-size: 16px;
                color: white;
                font-weight: normal;
                text-align: center;
                transition: background-color 0.3s;
                background: #6C3483;
                /* text-shadow:
                        2px 2px 0 #000,
                        -2px 2px 0 #000,
                        -2px -2px 0 #000,
                        2px -2px 0 #000; */
            }
        
        .next:hover {
                background-color: #b07cc6;
            }
        
        .arrow {
                display: inline-block;
                margin-left: 10px;
                width: 5px;
                height: 5px;
                border-top: 8px solid transparent;
                border-bottom: 8px solid transparent;
                border-left: 8px solid yellow;
                
                               
            }

    </style>

    <!-- /* ****************************** */
         /* *   end next player button   * */
         /* ****************************** */ -->



</head>





<body onload="toggleAudio()" background="image/feature/<?php echo $image_row['img']; ?>" style="background-color:#71C2E2">
     

    <div class="container-fluid">
        <?php include 'navbar1.php'; ?>
    </div>
    
    <script>

        /* ****************************** */
        /* *     start enable  button   * */
        /* ****************************** */

            document.getElementById("Gira").classList.remove("disabled");
        

        /* ****************************** */
        /* *     end enable  button     * */
        /* ****************************** */

    </script>




<?php
    require("connect.php");   

    //  *********************************
    //  *     start query allocation    *
    //  ********************************* 

    $query_allo             = "SELECT * FROM allocation WHERE status='1' ORDER BY date_time ASC LIMIT 1";
    $result_allo            = mysqli_query($conn,$query_allo);
    $fetch_allo             = mysqli_fetch_array($result_allo);


    if($fetch_allo<1) {
        $allo_datetime ="1";
        $allo_prize ="1";
        $allo_type ="9";

    }
    
    else{
    
        $allo_datetime      = $fetch_allo['date_time'];
        $allo_prize         = $fetch_allo['prize'];
        $allo_type          = $fetch_allo['type'];
        
    
    }
    
    //  *********************************
    //  *       end query allocation    *
    //  *********************************     

?>

<?php
    require("connect.php");

   



    //  **********************************
    //  *     start query 2nd display    *
    //  ********************************** 
   
    $query_2nd              = "SELECT * FROM win_prizes WHERE category ='2nd'and onhand>='1' ORDER BY RAND() LIMIT 1";
    $result_2nd             = mysqli_query($conn,$query_2nd);
    $fetch_2nd              = mysqli_fetch_array($result_2nd);

    //  **********************************
    //  *       end query 2nd display    *
    //  ********************************** 


    //  **************************************
    //  *     start query jackpot display    *
    //  ************************************** 

    $query_jack             = "SELECT * FROM win_prizes WHERE category ='jackpot' and onhand>='1' ORDER BY RAND() LIMIT 1";
    $result_jack            = mysqli_query($conn,$query_jack);
    $fetch_jack             = mysqli_fetch_array($result_jack);

    //  **************************************
    //  *      end query jackpot display     *
    //  ************************************** 
    
if($fetch_2nd<1) {
    $onhand_item_2nd_dis ="PLS CALL ADMIN ";
}

else{


    $onhand_item_2nd        = $fetch_2nd['item'];
    $onhand_item_2nd_dis    = $onhand_item_2nd;

    $onhand_total_2nd       = $fetch_2nd['onhand'];
    $onhand_total_2nd --;
    $onhand_total_2nd_1     = $onhand_total_2nd;

    $onhand_won_2nd         = $fetch_2nd['won'];
    $onhand_won_2nd ++;
    $onhand_won_2nd_1       = $onhand_won_2nd;

    

}

if($fetch_jack<1) {
    $onhand_item_jack_dis ="PLS CALL ADMIN ";
}
else{


    $onhand_item_jack        = $fetch_jack['item'];
    $onhand_item_jack_dis    = $onhand_item_jack;

    $onhand_total_jack       = $fetch_jack['onhand'];
    $onhand_total_jack --;
    $onhand_total_jack_1     = $onhand_total_jack;

    $onhand_won_jack         = $fetch_jack['won'];
    $onhand_won_jack ++;
    $onhand_won_jack_1       = $onhand_won_jack;

    

}


?>
</div>

<div class="container">  


<div id="prize" class="prizes">

        <!--******************************
            *    start 2nd prize blink   *
            ****************************** -->

            <span class="blink" style="margin-bottom: -120;" id="blinkid_won" name="blinkid_won" hidden><?php echo $onhand_won_2nd_1; ?></span>
            <span class="blink" style="margin-bottom: -120;" id="blinkid_total" name="blinkid_total" hidden><?php echo $onhand_total_2nd_1; ?></span>
         
            <span class="blink" style="margin-bottom: -120;" id="blinkid" name="blinkid"><?php echo $onhand_item_2nd_dis; ?></span>
         
        <!--******************************
            *    end 2nd prize blink     *
            ****************************** -->

        <!--************************************
            *    start jackpo prize blink      *
            ************************************ -->
         
         
            <span class="blinkjackpot" style="margin-bottom: -120;" id="blinkidjack_won" name="blinkidjack_won" hidden><?php echo $onhand_won_jack_1; ?></span>
            <span class="blinkjackpot" style="margin-bottom: -120;" id="blinkidjack_total" name="blinkidjack_total" hidden><?php echo $onhand_total_jack_1; ?></span>
         
            <span class="blinkjackpot" style="margin-bottom: -120;" id="blinkidjack" name="blinkidjack"><?php echo $onhand_item_jack_dis; ?></span>

        <!--************************************
            *    end jackpo prize blink      *
            ************************************ -->
    
    </div>


    <!--************************************
        *      start customer prize        *
        ************************************ -->


    <div class = "row" style='margin-top:px;'>
               
        <div class="col-sm-1"  style='margin-left: -50px; margin-right: -45px; margin-top: -80px;'>
            <div class="form-group row">

                <div class="customer-prizes justprint">

                <?php
                    require("connect.php");   

                    $datecurrent = date('Y-m-d H:i:s');

                    //  *********************************
                    //  *     start query customer      *
                    //  ********************************* 

                    $query_cust             = "SELECT * FROM customer WHERE status='1' AND date >' $datecurrent' ORDER BY date ASC LIMIT 1";
                    $result_cust            = mysqli_query($conn,$query_cust);
                    $fetch_cust             = mysqli_fetch_array($result_cust);


                    if($fetch_cust<1) {
                        $cust_or                ="0";
                        $cust_name              ="No Player";
                        $cust_entries           ="0";
                        $cust_date              ="0";
                        $cust_tot_entriesx      ="0";

                    }
                    
                    else{
                        $cust_or                = $fetch_cust['orno'];
                        $cust_name              = $fetch_cust['name'];
                        $cust_entries           = $fetch_cust['entries'];
                        $cust_date              = $fetch_cust['date'];
                        $cust_tot_entriesx       = $fetch_cust['total_entries'];

                        $cust_tot_entries       = $fetch_cust['total_entries'];
                        $cust_tot_entries --;
                        $cust_tot_entries_1     = $cust_tot_entries;

                    }
                    
                    
                    //  *********************************
                    //  *       end query customer      *
                    //  *********************************     

                ?>



                            <div class="print-display">
                                <h4 class="d-flex justify-content-center text-capitalize" ><?php echo $cust_name; ?></h4>
                            </div>
                            
                            <div class="container-box">
                        
                                <h5 class="d-flex justify-content-start text-capitalize"><?php ?></h5>
                        
                            <div class="header-title">   
                                <span>Spins : <?php echo $cust_tot_entriesx; ?></span>
                                <span>OR No : <?php echo $cust_or; ?></span>
                            </div>

                            <div id="cust_or" name="cust_or" hidden> <?php echo  $cust_or; ?> </div>
                            <div id="cust_name" name="cust_name" hidden> <?php echo $cust_name; ?> </div>
                            <div id="cust_tot_entries" name="cust_tot_entries" hidden> <?php echo $cust_tot_entries_1; ?> </div>
                            <div id="cust_date" name="cust_date" hidden> <?php echo $cust_date; ?> </div>
                            
                            <?php
                            $query_win              = "SELECT * FROM win_result WHERE date='$cust_date' ORDER BY id ASC";
                            $result_win             = mysqli_query($conn, $query_win);
                            ?>

                            <table class="table table-borderless" id="display-prizes">
                                <thead>
                                    <tr>
                                        <th >Spin</th>
                                        <th >Result</th>
                                        <th >Prize</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php 

                                   

                                        while($row=mysqli_fetch_array($result_win)){
                                        echo "<tr>";
                                        echo "<td>".$row['spin_no']."</td>";
                                        echo "<td>".$row['result']."</td>";
                                        echo "<td>".$row['prize']."</td>";
                                        echo "</tr>";
                                            }
                                    ?>
                                </tbody>
                            </table>
                    </div>
                    
                </div>
            </div>
        </div>
    <!-- </div> -->

    <!--************************************
        *       end customer prize         *
        ************************************ -->


<!-- 
<div class = "row" > -->
           
    <main>

    

    <section id="status">
          <marquee class="running">WELCOME TO GCAP SLOT FOR FUN</marquee>
    </section>


        <!--************************************
            *      start allocation data       *
            ************************************ -->

    <div id="allodatetime" name="allodatetime" style="font-size: 20px;" hidden> <?php echo $allo_datetime; ?> </div>
    <div id="alloprize" name="alloprize" style="font-size: 20px;" hidden> <?php echo $allo_prize; ?> </div>
    <div id="allotype" name="allotype" style="font-size: 20px;" hidden> <?php echo $allo_type; ?> </div>

        <!--************************************
            *      end allocation data       *
            ************************************ -->
    
   
    <section id="lights">
        <div class="light red animate"></div> 
        <div class="light yellow"></div> 
        
        <div class="light red animate"></div> 
        <div class="light yellow"></div> 
        
        <div class="light red animate"></div> 
        <div class="light yellow"></div> 
       
        <div class="light red animate"></div> 
        <div class="light yellow"></div> 
      
        <div class="light red animate"></div> 
        <div class="light yellow"></div> 

        <div class="light red animate"></div> 
        <div class="light yellow"></div> 
    </section>

    <section id="lights2">
        <div class="light2 red animate"></div> 
        <div class="light2 yellow"></div> 
        
        <div class="light2 red animate"></div> 
        <div class="light2 yellow"></div> 
        
        <div class="light2 red animate"></div> 
        <div class="light2 yellow"></div> 
       
        <div class="light2 red animate"></div> 
        <div class="light2 yellow"></div> 
      
        <div class="light2 red animate"></div> 
        <div class="light2 yellow"></div> 

        <div class="light2 red animate"></div> 
        <div class="light2 yellow"></div> 
    </section>

    <section id="lightsup" >
        <div class="lightup red animate"></div> 
        <div class="lightup yellow"></div> 
            
        <div class="lightup red animate"></div> 
        <div class="lightup yellow"></div>
            
        <div class="lightup red animate"></div> 
        <div class="lightup yellow"></div>  
          
        <div class="lightup red animate"></div> 
        <div class="lightup yellow"></div>
          
        <div class="lightup red animate"></div> 
        <div class="lightup yellow"></div> 

        <div class="lightup red animate"></div> 
        <div class="lightup yellow"></div>

        <div class="lightup red animate"></div> 
        <div class="lightup yellow"></div> 
    </section>   
        
    

        <section id="rectangles">
            <div class="rectangle"></div>
        </section>

        <section id="rectangles2">
            <div class="rectangle2"></div>
        </section>


          <section id="Slots">
            <div id="slot1" class="a8"></div>
            <div id="slot2" class="a8"></div>
            <div id="slot3" class="a8"></div>
          </section>

         

        <section onclick="doSlot()" onclick="'.$query_2nd.'" id="Gira" style="cursor: pointer;" class="spin <?php echo ($cust_tot_entriesx < 1) ? 'disabled' : ''; ?>" > ⭐⭐⭐ &nbsp   SPIN ME  &nbsp ⭐⭐⭐</section>


        
        <section id="lightsdown" >
            <div class="lightdown red animate"></div> 
            <div class="lightdown yellow"></div> 
            
            <div class="lightdown red animate"></div> 
            <div class="lightdown yellow"></div> 
            
            <div class="lightdown red animate"></div> 
            <div class="lightdown yellow"></div>  
          
            <div class="lightdown red animate"></div> 
            <div class="lightdown yellow"></div> 
          
            <div class="lightdown red animate"></div> 
            <div class="lightdown yellow"></div> 

            <div class="lightdown red animate"></div> 
            <div class="lightdown yellow"></div> 

            <div class="lightdown red animate"></div> 
            <div class="lightdown yellow"></div> 
        </section>
       
        
        <section id="options">
            <img src="res/icons/audioOn.png" id="audio" class="option" onclick="toggleAudio()" hidden/>
        </section>
        
    </main>

<!-- </div> -->
     <!--************************************
        *         start next player         *
        ************************************ -->


        
      
               <div class="col-sm"  style='margin-top: -80px; margin-left: 40px;'>
                   <div class="form-group row">
       
                       <div class="next-player">
       
                       <?php
                           require("connect.php");   
       
                           $datecurrent = date('Y-m-d H:i:s');
       
                           //  *********************************
                           //  *     start query customer      *
                           //  ********************************* 
       
                           $query_next            = "SELECT * FROM customer WHERE status='1' AND date >' $datecurrent' ORDER BY date ASC LIMIT 1";
                           $result_next          = mysqli_query($conn,$query_next);
                           $fetch_next            = mysqli_fetch_array($result_next);
       
       
                           if($fetch_cust<1) {
                               $next_or                ="0";
                               $next_name              ="No Player";
                              
                               
                           }
                           
                           else{
                               $next_or                = $fetch_next['orno'];
                               $next_name              = $fetch_next['name'];
                              
                              
                           }
                           
                           
                           //  *********************************
                           //  *       end query customer      *
                           //  *********************************     
       
                       ?>
       
                        
                        
                            <div class="next-player-con">
                                <section onclick="handleNextPlayerClick()" onclick="doSlot()" id="next" class="next" type='submit'> &nbsp Next Player &nbsp;
                                    <div class="arrow"></div>
                                    <div class="arrow"></div>
                                    <div class="arrow"></div>
                                </section>
                            </div>

                            <div id="confirmModal" class="modal">
                                <div class="modal-content">
                                    <h2>Are you sure you want to move to the next player?</h2>
                                    <button class="confirm">Yes</button>
                                    <button class="cancel">No</button>
                                </div>
                            </div>
                           
                       </div>
                   </div>
               </div>
       
    </div>
       
           <!--************************************
               *          end next player         *
               ************************************ -->


<script src="bootstrap/slotconfig.js"></script>  

</div>


            <!--********************************************
               *      start update status next player      *
               ********************************************* -->
           
    <script>
        
        function handleNextPlayerClick() {
            $('#confirmModal').show();
        }

        $(document).ready(function() {
            $('.confirm').click(function() {
                $('#confirmModal').hide();
                update_nextplayer();
            });

            $('.cancel').click(function() {
                $('#confirmModal').hide();
            });
        });

        function update_nextplayer() {
            var next_or = "<?php echo $next_or; ?>";
            var next_name = "<?php echo $next_name; ?>";

            $.ajax({
                url: "update_status_nextpl.php",
                type: "POST",
                data: { next_orx: next_or, next_namex: next_name },
                success: function(response) {
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    </script>

            <!--********************************************
               *      end update status next player      *
               ********************************************* -->



</body>
</html>
