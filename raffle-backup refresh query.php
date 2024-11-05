

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


        $query_2nd      = "SELECT * FROM win_prizes WHERE category ='2nd' ORDER BY RAND() LIMIT 1";
        $result_2nd     = mysqli_query($conn,$query_2nd);
        $fetch_2nd      = mysqli_fetch_array($result_2nd);




        $query_jack     = "SELECT * FROM win_prizes WHERE category ='jackpot' ORDER BY RAND() LIMIT 1";
        $result_jack    = mysqli_query($conn,$query_jack);
        $fetch_jack     = mysqli_fetch_array($result_jack);
        

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
    
    
   
  
</head>

<html>


<body onload="toggleAudio()" background="image/feature/<?php echo $image_row['img']; ?>" style="background-color:#71C2E2">

    <script>
        function disableButton() {
            // document.getElementById("Gira").disabled = true;
            $('#Gira').prop('disabled', true);
        }

        function enableButton() {
            // document.getElementById("Gira").disabled = false;
            $('#Gira').prop('disabled', false);
        }

    </script>

<div class="container-fluid">
        <?php include 'navbar2.php'; ?>
    </div>
    
<div class="container">  
    <div id="prize" class="prizes">

    <?php
        require("connect.php");
       
        $query_2nd              = "SELECT * FROM win_prizes WHERE category ='2nd'and onhand>='1' ORDER BY RAND() LIMIT 1";
        $result_2nd             = mysqli_query($conn,$query_2nd);
        $fetch_2nd              = mysqli_fetch_array($result_2nd);

        
  if($fetch_2nd<1) {
    echo "PLS CALL ADMIN ";
    echo '<script>disableButton();</script>';
   }
   else{
    

        $onhand_item_2nd        = $fetch_2nd['item'];

        $onhand_total_2nd       = $fetch_2nd['onhand'];
        $onhand_total_2nd --;
        $onhand_total_2nd_1     = $onhand_total_2nd;

        $onhand_won_2nd       = $fetch_2nd['won'];
        $onhand_won_2nd ++;
        $onhand_won_2nd_1     = $onhand_won_2nd;


                

     
        $query_jack             = "SELECT * FROM win_prizes WHERE category ='jackpot' ORDER BY RAND() LIMIT 1";
        $result_jack            = mysqli_query($conn,$query_jack);
        $fetch_jack             = mysqli_fetch_array($result_jack);

       

    }
    ?>

            <span class="blink" style="margin-bottom: -120;" id="blinkid_won" name="blinkid_won" ><?php echo $onhand_won_2nd_1; ?></span>
            <span class="blink" style="margin-bottom: -120;" id="blinkid_total" name="blinkid_total" hidden><?php echo $onhand_total_2nd_1; ?></span>

            <span class="blink" style="margin-bottom: -120;" id="blinkid" name="blinkid"><?php echo $fetch_2nd['item']; ?></span>
            <span class="blinkjackpot" style="margin-bottom: -120;" id="blinkidjack" name="blinkidjack"><?php echo $fetch_jack['item']; ?></span>
    </div>
 
   


    <main>

    <section id="status">
          <marquee class="running">WELCOME TO GCAP SLOT FOR FUN</marquee>
    </section>

   
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
            <div id="slot1" class="a5"></div>
            <div id="slot2" class="a5"></div>
            <div id="slot3" class="a5"></div>
          </section>

         

        <section onclick="doSlot()" id="Gira" style="cursor: pointer;" > ⭐⭐⭐ &nbsp   SPIN ME  &nbsp ⭐⭐⭐</section>

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
