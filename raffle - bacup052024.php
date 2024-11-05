

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

</head>





<body onload="toggleAudio()" background="image/feature/<?php echo $image_row['img']; ?>" style="background-color:#71C2E2">

     

    <div class="container-fluid">
        <?php include 'navbar2.php'; ?>
    </div>
    


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

    }
    
    else{
    
        $allo_datetime          = $fetch_allo['date_time'];
        $allo_prize             = $fetch_allo['prize'];
        
    
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
 
    
    

    <main>

    

    <section id="status">
          <marquee class="running">WELCOME TO GCAP SLOT FOR FUN</marquee>
    </section>


        <!--************************************
            *      start allocation data       *
            ************************************ -->

    <div id="allodatetime" name="allodatetime" style="font-size: 20px;" hidden> <?php echo $allo_datetime; ?> </div>
    <div id="alloprize" name="alloprize" style="font-size: 20px;" hidden> <?php echo $allo_prize; ?> </div>

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

         

        <section onclick="doSlot()" onclick="'.$query_2nd.'" id="Gira" style="cursor: pointer;" class="spin" > ⭐⭐⭐ &nbsp   SPIN ME  &nbsp ⭐⭐⭐</section>

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


    <!-- <button onclick="disableButton()">Disable Button</button>
    <button onclick="enableButton()">Enable Button</button>  -->



<script src="bootstrap/slotconfig.js"></script>  

</div>
</body>
</html>
