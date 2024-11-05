

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
        

        $image_sql = "select * from image WHERE feature = 'Yes'";
        $image_result = mysqli_query($conn, $image_sql);
        $image_row = mysqli_fetch_assoc($image_result);
?>





<!---------------------------   END DISPLAY TAB-NO  --------------------------------------------->




<!DOCTYPE html>
<html>
  <head>
    <title>Gcap Slot Machine</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="styles.css" />

    <!---------------------------   BOOTSTRAP LINKS --------------------------------------------->
  
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    
    <script src="bootstrap/jquery-1.11.1.min.js"></script>
    <link  rel="stylesheet" href="bootstrap/jquery-ui.css" />
    <script src="bootstrap/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/bar-designed.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    

<style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');
        @import url('https://fonts.googleapis.com/css?family=Roboto+Mono');
        a{
          color: #283593;
          text-decoration: none;
        }
        h3{
          margin-top: 12px;
        }
        *{
          margin:0px;
        }
        body{
          background-color: #424242;
          font-family: 'Roboto', sans-serif;
        }
        main{
          border-radius: 15px;
          background-color: #f70d0d;
          margin-top: 150px;
          padding-top: 25px;
          padding-bottom: 25px;
          padding-left: 30px;
          padding-right: 30px;
          margin-left: calc((100% - 610px) / 2);
          width: 610px;
          
        }
        section#status{
          margin-bottom: 25px;
          padding-top: 10px;
          padding-bottom: 10px;
          border-radius: 5px;
          background-color: #3b3a3a;
          color: #fdf901;
          font-size: 40px;
          font-family: 'Roboto Mono', monospace;
          font-weight:bold;
          text-align: center;
          
        }

        .running {
          margin-bottom: -25px;
          padding-bottom: 10px;
          color: #fdf901;
          font-size: 40px;
          font-family: 'Roboto Mono', monospace;
          font-weight:bold;
          text-align: center;
          /* text-shadow: 1px 3px 1px #FFFFFF; */

        }

        section#Slots{
          border-radius: 10px;
          background-color: #FFFFFF;
          
        }
        section#Gira{
          margin-top: 25px;
          padding-top: 15px;
          padding-bottom: 15px;
          border-radius: 5px;
          text-align: center;
          background-color: #c40e0e;
          color: #FFFFFF;
          font-size: 30px;
        }
        section#Gira:hover{
          background-color: #fc2c1d;
        }
        /* section#options{
          margin-top: 20px;
          padding-top: 5px;
          border-radius: 5px;
          background-color: #C62828;
          color: #FFFFFF;
        } */
        .option{
          padding-left: 5px;
        }
        section#info{
          background-color: #616161;
          padding-left: 12px;
          padding-bottom: 12px;
          border-radius: 5px;
          overflow: hidden;
          animation-duration: 1s;
          color: #BDBDBD;
          margin-top: 50px;
          margin-left: 30%;
          margin-right: 30%;
          display: none;
        }
        #slot1{
          display: inline-block;
          margin-top: 2px;
          margin-bottom: -3px;
          margin-left: 8px;
          margin-right: 12px;
          background-size: 150px;
          width: 150px;
          height: 150px;
          
        }

        #slot2 {
          display: inline-block;
          margin-top: 2px;
          margin-bottom: -3px;
          margin-left: 18px;
          margin-right: 11px;
          background-size: 150px;
          width: 150px;
          height: 150px;
          
        }

        #slot3{
          display: inline-block;
          margin-top: 2px;
          margin-bottom: -3px;
          margin-left: 25px;
          margin-right: 3px;
          background-size: 150px;
          width: 150px;
          height: 150px;
          
        }



        .a1{
          background-image: url("res/tiles/ariel.jpg");
        }
        .a2{
          background-image: url("res/tiles/casino.jpg");
        }
        .a3{
          background-image: url("res/tiles/closeup.jpg");
        }
        .a4{
          background-image: url("res/tiles/colgate.jpg");
        }
        .a5{
          background-image: url("res/tiles/palmolive.jpg");
        }
        .a6{
          background-image: url("res/tiles/sunsilk.jpg");
        }
        .a7{
          background-image: url("res/tiles/gcap.jpg");
        }

        
    </style>


<style> 
       
        section#lights{
            float: left;
            margin-top: -143px;
        }

        section#lights2{
            float: right;
            margin-top: -143px;
        }

        section#rectangles{
            float: right;
            margin-top: -8px;
        }

        section#rectangles2{
            float: right;
            margin-top: -8px;
        }
  
        

        .light { 
            width: 20px; 
            height: 20px; 
            border-radius: 50%; 
            margin: 15px; 
            transition: background-color 5s; 
            margin-left: calc((100% - 60px) / 2);
        } 

        .light2 { 
            width: 20px; 
            height: 20px; 
            border-radius: 50%; 
            margin: 15px; 
            transition: background-color 5s; 
            margin-right: calc((100% - 50px) / 2);
        } 
        
             
        .rectangle {
            height: 180px;
            width: 10px;
            background-color: #f70d0d;
            margin-left: calc((100% - 360px) / 2);
        }

        .rectangle2 {
            height: 180px;
            width: 10px;
            background-color: #f70d0d;
            margin-left: calc((100% - 730px) / 2);
        }

        section#lightsdown{
            float: right;
            margin-top: -3px;
            transform: rotate(-0.25turn);
            margin-right: -45px;
        } 

        .lightdown { 
            width: 20px; 
            height: 20px; 
            border-radius: 50%; 
            margin: calc((100% - 30px) * 2);; 
            transition: background-color 5s; 
            margin-left: calc((100% - 50px) / 2);
        }
  
        section#lightsup{
            float: right;
            margin-top: -133px;
            transform: rotate(-0.25turn);
            margin-right: -45px;
        } 

        .lightup { 
            width: 20px; 
            height: 20px; 
            border-radius: 50%; 
            margin: calc((100% - 30px) * 2);; 
            transition: background-color 5s; 
            margin-left: calc((100% - 50px) / 2);
        }
        @keyframes blinkRed { 
  
            0%, 
            49% { 
                background-color: #fdf901; 
            } 
  
            50%, 
            100% { 
                background-color: #8c8d56; 
            } 
        } 
  
        @keyframes blinkYellow { 
  
            0%, 
            49% { 
                background-color: #8c8d56; 
            } 
  
            50%, 
            100% { 
                background-color: #fdf901; 
            } 
        } 
  
         
        .red { 
            background-color: #fdf901; 
            animation: blinkRed 3s infinite; 
            animation-delay: 3s; 
        } 
  
        .yellow { 
            background-color: #8c8d56; 
            animation: blinkYellow 3s infinite; 
            animation-delay: 3s; 
        } 
  
        
    </style> 


<style>

</style>
</head>

<html>
  
  

<body onload="toggleAudio()" background="image/feature/<?php echo $image_row['img']; ?>" style="background-color:#71C2E2">
    
    <main>

    <section id="status">
          <marquee class="running">WELCOME TO GCAP SLOT MACHINE</marquee>
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

         

        <section onclick="doSlot()" id="Gira"> ⭐⭐⭐ &nbsp   SPIN  &nbsp ⭐⭐⭐</section>

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
        <!-- </div> -->
    </main>

    

<script>
var doing = false;
var spin = [new Audio("res/sounds/spin.mp3"),new Audio("res/sounds/spin.mp3"),new Audio("res/sounds/spin.mp3"),new Audio("res/sounds/spin.mp3"),new Audio("res/sounds/spin.mp3"),new Audio("res/sounds/spin.mp3"),new Audio("res/sounds/spin.mp3")];
var coin = [new Audio("res/sounds/coin.mp3"),new Audio("res/sounds/coin.mp3"),new Audio("res/sounds/coin.mp3")]
var win = new Audio("res/sounds/win.mp3");
var lose = new Audio("res/sounds/lose.mp3");
var audio = false;
let status = document.getElementById("status")
var info = true;

function doSlot(){
	if (doing){return null;}
	doing = true;
	var numChanges = randomInt(1,4)*7
	var numeberSlot1 = numChanges+randomInt(1,7)
	var numeberSlot2 = numChanges+2*7+randomInt(1,7)
	var numeberSlot3 = numChanges+4*7+randomInt(1,7)

	var i1 = 0;
	var i2 = 0;
	var i3 = 0;
	var sound = 0
	status.innerHTML = "SPINNING"
	slot1 = setInterval(spin1, 100);
	slot2 = setInterval(spin2, 100);
	slot3 = setInterval(spin3, 100);
	function spin1(){
		i1++;
		if (i1>=numeberSlot1){
			coin[0].play()
			clearInterval(slot1);
			return null;
		}
		slotTile = document.getElementById("slot1");
		if (slotTile.className=="a7"){
			slotTile.className = "a0";
		}
		slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
	}
	function spin2(){
		i2++;
		if (i2>=numeberSlot2){
			coin[1].play()
			clearInterval(slot2);
			return null;
		}
		slotTile = document.getElementById("slot2");
		if (slotTile.className=="a7"){
			slotTile.className = "a0";
		}
		slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
	}
	function spin3(){
		i3++;
		if (i3>=numeberSlot3){
			coin[2].play()
			clearInterval(slot3);
			testWin();
			return null;
		}
		slotTile = document.getElementById("slot3");
		if (slotTile.className=="a7"){
			slotTile.className = "a0";
		}
		sound++;
		if (sound==spin.length){
			sound=0;
		}
		spin[sound].play();
		slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
	}
}

function testWin(){
	var slot1 = document.getElementById("slot1").className
	var slot2 = document.getElementById("slot2").className
	var slot3 = document.getElementById("slot3").className

	if (((slot1 == slot2 && slot2 == slot3) ||
		(slot1 == slot2 && slot3 == "a7") ||
		(slot1 == slot3 && slot2 == "a7") ||
		(slot2 == slot3 && slot1 == "a7") ||
		(slot1 == slot2 && slot1 == "a7") ||
		(slot1 == slot3 && slot1 == "a7") ||
		(slot2 == slot3 && slot2 == "a7") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a7")){
		status.innerHTML = "YOU WIN";
		win.play();
	}else{
		status.innerHTML = "TRY AGAIN"
		lose.play();
	}
	doing = false;
}

function toggleAudio(){
	if (!audio){
		audio = !audio;
		for (var x of spin){
			x.volume = 0.5;
		}
		for (var x of coin){
			x.volume = 0.5;
		}
		win.volume = 1.0;
		lose.volume = 1.0;
	}else{
		audio = !audio;
		for (var x of spin){
			x.volume = 0;
		}
		for (var x of coin){
			x.volume = 0;
		}
		win.volume = 0;
		lose.volume = 0;
	}
	document.getElementById("audio").src = "res/icons/audio"+(audio?"On":"Off")+".png";
}

function randomInt(min, max){
	return Math.floor((Math.random() * (max-min+1)) + min);
}
</script>
    




<div>

</div>
 
<!-- --------------------------------------- END ADD COUNT MODAL ------------------------------------>
  </body>
</html>
