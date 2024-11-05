

var doing 			= false;
var spin 			= [new Audio("res/sounds/spin.mp3"),new Audio("res/sounds/spin.mp3"),new Audio("res/sounds/spin.mp3"),new Audio("res/sounds/spin.mp3"),new Audio("res/sounds/spin.mp3"),new Audio("res/sounds/spin.mp3"),new Audio("res/sounds/spin.mp3")];
var coin 			= [new Audio("res/sounds/coin.mp3"),new Audio("res/sounds/coin.mp3"),new Audio("res/sounds/coin.mp3")]
var win 			= new Audio("res/sounds/win.mp3");
var jackpot 		= new Audio("res/sounds/jackpot.mp3");
var lose 			= new Audio("res/sounds/lose.mp3");
var audio 			= false;
let status 			= document.getElementById("status")
var info 			= true;
var alloDateTimeStr = $('#allodatetime').html().trim(); // Get the allocation date and time string from HTML
var alloprize 		= $('#alloprize').html().trim(); // Get the allocation prize string from HTML
var allotype 		= $('#allotype').html().trim(); // Get the allocation prize string from HTML

//console.log(alloDateTimeStr);
var prizedata2nd	= '2nd';
var prizedatajack	= 'jackpot';
var prizedata_type1	= '1';
var prizedata_type2	= '2';
var prizedata_type3	= '3';

var currentDateTime; // Declare currentDateTime as a global variable


	/* ******************************* */
    /* *     start currentdatetime   * */
    /* ******************************* */

    $(document).ready(function() {
      // Function to update the current date and time
      function updateDateTime() {
        // Get the current date and time
        var currentDate = new Date();

        // Format the date and time in the desired format
        var year 	= currentDate.getFullYear();
        var month 	= String(currentDate.getMonth() + 1).padStart(2, '0');
        var day 	= String(currentDate.getDate()).padStart(2, '0');
        var hours 	= String(currentDate.getHours()).padStart(2, '0');
        var minutes = String(currentDate.getMinutes()).padStart(2, '0');
        var seconds = String(currentDate.getSeconds()).padStart(2, '0');

        var formattedDateTime = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;

        // Display the date and time in the HTML element
        $('#currentDateTime').text(formattedDateTime);

        // Assign the formatted date and time to the global currentDateTime variable
        currentDateTime = formattedDateTime;
		console.log(currentDateTime);

      }

      // Update the date and time initially
      updateDateTime();

      // Update the date and time every second (1000 milliseconds)
      setInterval(updateDateTime, 10000);
    });


	/* ******************************* */
    /* *     end currentdatetime   * */
    /* ******************************* */



function doSlot(){
	

	/* **************************** */
    /* *     start Refresh page   * */
    /* **************************** */
			

			// Start refreshing the page every 3 seconds
			refreshIntervalId = setInterval(refreshPage, 11000);
					
			// Automatically stop the refresh after 10 seconds (for example)
			setTimeout(stopRefresh, 12000);
				

				function stopRefresh() {
					// Clear the interval to stop refreshing
					clearInterval(refreshIntervalId);
				}

				function refreshPage() {
					// Reload the current page
					location.reload();
				}

	/* **************************** */
    /* *     stop Refresh page    * */
    /* **************************** */



	
	/* ****************************** */
    /* *     start disable button   * */
    /* ****************************** */

	 // Disable the button to prevent multiple clicks
	 document.getElementById("Gira").classList.add("disabled");
	 document.getElementById("next").classList.add("disabled");


	/* ****************************** */
    /* *     end disable button     * */
    /* ****************************** */

	
	if (doing){return null;}
	doing = true;
	var numChanges 		= randomInt(1,4)*7
	var numeberSlot1 	= numChanges+randomInt(1,7)
	var numeberSlot2 	= numChanges+2*8+randomInt(1,8)
	var numeberSlot3 	= numChanges+4*9+randomInt(1,9)

	var i1 = 0;
	var i2 = 0;
	var i3 = 0;
	var sound = 0

	status.innerHTML = "SPINNING"


	/* ****************************** */
    /* *     start enable  button   * */
    /* ****************************** */

	setTimeout(function() {
        // Re-enable the button after some time (e.g., 3 seconds)
        document.getElementById("Gira").classList.remove("disabled");
		document.getElementById("next").classList.remove("disabled");
    }, 12000); // 12000 milliseconds = 12 seconds


	/* ****************************** */
    /* *     end enable  button     * */
    /* ****************************** */

	

	/* ****************************** */
    /* *     start hide prizes      * */
    /* ****************************** */

	$(document).ready(function(){
		
		$('.blink').hide(); // Hides the blinking element initially
		$('.blinkjackpot').hide(); // Hides the blinking element initially
		
	});

	/* ****************************** */
    /* *       end hide prizes      * */
    /* ****************************** */

	



	
	/* ******************************************* */
    /* *            start condition date         * */
    /* ******************************************* */




	/* ******************************** */
    /* *       start spin 2nd win 1   * */
    /* ******************************** */


if (currentDateTime>=alloDateTimeStr  && alloprize == prizedata2nd && allotype == prizedata_type1 ){
	
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
		if (slotTile.className=="a10"){
			slotTile.className = "a0";
		}
		slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
	}
	
	function spin2(){
		i2++;
		if (i2 >= numeberSlot2){
			coin[1].play();
			clearInterval(slot2);
			return null;
		}
	
		var slotTile = document.getElementById("slot2");
		if (slotTile.className == "a10"){
			slotTile.className = "a0";
		}
		slotTile.className = "a" + (parseInt(slotTile.className.substring(1)) + 1);
	
		// Get the result of spin1
		var slotx1 = document.getElementById("slot1").className;
	
		
	
		// Stop when slot2 reaches its end
		if (i2 >= numeberSlot2 - 1) {
			coin[1].play();
			clearInterval(slot2);

			// Apply the result of spin1 to slot2
		slotTile.className = slotx1;
		}
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
		if (slotTile.className=="a10"){
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


	/* ******************************** */
    /* *       end spin 2nd win 1     * */
    /* ******************************** */



	
	/* ******************************** */
    /* *       start spin 2nd win 2   * */
    /* ******************************** */


else if (currentDateTime>=alloDateTimeStr  && alloprize == prizedata2nd && allotype == prizedata_type2){
	
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
		if (slotTile.className=="a10"){
			slotTile.className = "a0";
		}
		slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
	}
	
	function spin2(){
		i2++;
		let slotTile = document.getElementById("slot2");
		if (i2 >= numeberSlot2) {
			coin[1].play();
			clearInterval(slot2);
			return null;
		}
		if (slotTile.className === "a10") {
			slotTile.className = "a0";
		} else {
			slotTile.className = "a" + (parseInt(slotTile.className.substring(1)) + 1);
		}
	
		let slotx1 = document.getElementById("slot1").className;
	
		if (i2 >= numeberSlot2 - 1) {
			coin[1].play();
			clearInterval(slot2);
			slotTile.className = "a" + ((parseInt(slotx1.substring(1)) + 1) % 18);
		}
	}
	
			
	function spin3(){
		i3++;
			if (i3>=numeberSlot3){
				coin[2].play()
				clearInterval(slot3);
				// testWin();
				return null;
			}
			var slotTile = document.getElementById("slot3");
			if (slotTile.className=="a10"){
				slotTile.className = "a0";
			}
			sound++;
			if (sound==spin.length){
				sound=0;
			}
			spin[sound].play();
			slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)

			// Get the result of spin2
			var slotx2 = document.getElementById("slot2").className;
		
			// Stop when slot2 reaches its end
			if (i3 >= numeberSlot3 - 1) {
				coin[1].play();
				clearInterval(slot3);
	
				// Apply the result of spin1 to slot2
			slotTile.className = slotx2;
			testWin();
			}
		}
}


	/* ******************************** */
    /* *       end spin 2nd win 2     * */
    /* ******************************** */



	
	/* ******************************** */
    /* *       start spin 2nd win 3   * */
    /* ******************************** */


else if (currentDateTime>=alloDateTimeStr  && alloprize == prizedata2nd && allotype == prizedata_type3 ){
	
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
		if (slotTile.className=="a10"){
			slotTile.className = "a0";
		}
		slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
	}
	
	function spin2(){
		i2++;
		let slotTile = document.getElementById("slot2");
		if (i2 >= numeberSlot2) {
			coin[1].play();
			clearInterval(slot2);
			return null;
		}
		if (slotTile.className === "a10") {
			slotTile.className = "a0";
		} else {
			slotTile.className = "a" + (parseInt(slotTile.className.substring(1)) + 1);
		}
	
		let slotx1 = document.getElementById("slot1").className;
	
		if (i2 >= numeberSlot2 - 1) {
			coin[1].play();
			clearInterval(slot2);
			slotTile.className = "a" + ((parseInt(slotx1.substring(1)) + 1) % 18);
		}
	}
			
	function spin3(){
		i3++;
			if (i3>=numeberSlot3){
				coin[2].play()
				clearInterval(slot3);
				// testWin();
				return null;
			}
			var slotTile = document.getElementById("slot3");
			if (slotTile.className=="a10"){
				slotTile.className = "a0";
			}
			sound++;
			if (sound==spin.length){
				sound=0;
			}
			spin[sound].play();
			slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)

			// Get the result of spin2
			var slotx1 = document.getElementById("slot1").className;
		
			// Stop when slot2 reaches its end
			if (i3 >= numeberSlot3 - 1) {
				coin[1].play();
				clearInterval(slot3);
	
				// Apply the result of spin1 to slot2
			slotTile.className = slotx1;
			testWin();
			}
		}
}


	/* ******************************** */
    /* *       end spin 2nd win 3     * */
    /* ******************************** */



	/* ****************************** */
	/* *      start spin jack       * */
	/* ****************************** */

else if (currentDateTime>=alloDateTimeStr  && alloprize == prizedatajack ){

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
			if (slotTile.className=="a10"){
				slotTile.className = "a0";
			}
			slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
		}
		
		function spin2(){
			i2++;
			if (i2 >= numeberSlot2){
				coin[1].play();
				clearInterval(slot2);
				return null;
			}
		
			var slotTile = document.getElementById("slot2");
			if (slotTile.className == "a10"){
				slotTile.className = "a0";
			}
			slotTile.className = "a" + (parseInt(slotTile.className.substring(1)) + 1);
		
			// Get the result of spin1
			var slotx1 = document.getElementById("slot1").className;
		
			
		
			// Stop when slot2 reaches its end
			if (i2 >= numeberSlot2 - 1) {
				coin[1].play();
				clearInterval(slot2);
	
				// Apply the result of spin1 to slot2
			slotTile.className = slotx1;
			}
		}
				
		function spin3(){
			i3++;
			if (i3>=numeberSlot3){
				coin[2].play()
				clearInterval(slot3);
				// testWin();
				return null;
			}
			var slotTile = document.getElementById("slot3");
			if (slotTile.className=="a10"){
				slotTile.className = "a0";
			}
			sound++;
			if (sound==spin.length){
				sound=0;
			}
			spin[sound].play();
			slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)

			// Get the result of spin2
			var slotx2 = document.getElementById("slot2").className;
		
			
		
			// Stop when slot2 reaches its end
			if (i3 >= numeberSlot3 - 1) {
				coin[1].play();
				clearInterval(slot3);
	
				// Apply the result of spin1 to slot2
			slotTile.className = slotx2;
			testWin();
			}
		}
	}
	
	
		/* ****************************** */
		/* *       end spin jack        * */
		/* ****************************** */
	
		
	
else {

	/* ****************************** */
    /* *     start spin slot        * */
    /* ****************************** */


	slot1 = setInterval(spin1, 100);
	slot2 = setInterval(spin2, 101);
	slot3 = setInterval(spin3, 101);
// Function to spin slot1
function spin1(){
	i1++;
	if (i1>=numeberSlot1){
		coin[0].play()
		clearInterval(slot1);
		return null;
	}
	slotTile = document.getElementById("slot1");
	if (slotTile.className=="a10"){
		slotTile.className = "a0";
	}
	slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
}

// Function to spin slot2
function spin2() {
    i2++;
    let slotTile = document.getElementById("slot2");
    if (i2 >= numeberSlot2) {
        coin[1].play();
        clearInterval(slot2);
        return null;
    }
    if (slotTile.className === "a10") {
        slotTile.className = "a0";
    } else {
        slotTile.className = "a" + (parseInt(slotTile.className.substring(1)) + 1);
    }

    let slotx1 = document.getElementById("slot1").className;

    if (i2 >= numeberSlot2 - 1) {
        coin[1].play();
        clearInterval(slot2);
        slotTile.className = "a" + ((parseInt(slotx1.substring(1)) + 1) % 18);
    }
}

function spin3() {
    i3++;
    let slotTile = document.getElementById("slot3");
    if (i3 >= numeberSlot3) {
        coin[2].play();
        clearInterval(slot3);
        testWin();
        return null;
    }
    if (slotTile.className === "a10") {
        slotTile.className = "a0";
    } else {
        slotTile.className = "a" + (parseInt(slotTile.className.substring(1)) + 1);
    }
    
    sound++;
    if (sound == spin.length) {
        sound = 0;
    }
    spin[sound].play();

    let slotx2 = document.getElementById("slot2").className;

    if (i3 >= numeberSlot3 - 1) {
        coin[2].play();
        clearInterval(slot3);
        slotTile.className = "a" + ((parseInt(slotx2.substring(1)) + 1) % 18);
        testWin();
    }
}
}
}






// 	slot1 = setInterval(spin1, 100);
// 	slot2 = setInterval(spin2, 100);
// 	slot3 = setInterval(spin3, 100);
	
// 	function spin1(){
// 		i1++;
// 		if (i1>=numeberSlot1){
// 			coin[0].play()
// 			clearInterval(slot1);
// 			return null;
// 		}
// 		slotTile = document.getElementById("slot1");
// 		if (slotTile.className=="a17"){
// 			slotTile.className = "a0";
// 		}
// 		slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
// 	}
	
	
	
// 	/* ****************************** */
//     /* *    start old 2nd slot      * */
//     /* ****************************** */
// 	function spin2(){
// 		i2++;
// 			if (i2>=numeberSlot2){
// 				coin[1].play()
// 				clearInterval(slot2);
// 				return null;
// 			}
// 			slotTile = document.getElementById("slot2");
// 			if (slotTile.className=="a17"){
// 				slotTile.className = "a0";
// 			}
// 			slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
// 		}

// 	/* ****************************** */
//     /* *      end old 2nd slot      * */
//     /* ****************************** */
	
// 	function spin3(){
// 		i3++;
// 		if (i3>=numeberSlot3){
// 			coin[2].play()
// 			clearInterval(slot3);
// 			testWin();
// 			return null;
// 		}
// 		slotTile = document.getElementById("slot3");
// 		if (slotTile.className=="a17"){
// 			slotTile.className = "a0";
// 		}
// 		sound++;
// 		if (sound==spin.length){
// 			sound=0;
// 		}
// 		spin[sound].play();
// 		slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
// 	}
// }
// }

	/* ****************************** */
    /* *       end spin slot        * */
    /* ****************************** */





function testWin(){
	var slot1 = document.getElementById("slot1").className
	var slot2 = document.getElementById("slot2").className
	var slot3 = document.getElementById("slot3").className


	
	/* ****************************** */
    /* *     start jackpot winner   * */
    /* ****************************** */


	if (((slot1 == slot2 && slot2 == slot3)))
		{
			
			/* **************************** */
        	/* *     start Popup winner   * */
        	/* **************************** */
			

			$(document).ready(function() {
				var blinkIntervaljackpot = setInterval(blink_text, 500); // Start blinking every second
		  
				// Function to toggle blink effect
				function blink_text() {
				  var $blink = $('.blinkjackpot');
				  if ($blink.is(':visible')) {
					$blink.fadeOut(300);
					
				  } else {
					$blink.fadeIn(500);
					// $blink.css('visibility', 'visible');
					
				  }
				  
				}
		  
				// Function to stop the blinking after a certain time (e.g., 5 seconds)
				setTimeout(function() {
				  clearInterval(blinkIntervaljackpot); // Clear the interval to stop blinking
				},3500); // Stop the blinking after 5 seconds
				
			  });


			/* **************************** */
        	/* *    end Popup winner      * */
        	/* **************************** */

			
			/* **************************** */
        	/* *     start graffiti       * */
        	/* **************************** */

			var duration = 3 * 1000;
			var animationEnd = Date.now() + duration;
			var defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

			function randomInRange(min, max) {
			return Math.random() * (max - min) + min;
			}

			var interval = setInterval(function() {
			var timeLeft = animationEnd - Date.now();

			if (timeLeft <= 0) {
				return clearInterval(interval);
			}

			var particleCount = 50 * (timeLeft / duration);
			// since particles fall down, start a bit higher than random
			confetti({ ...defaults, particleCount, origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 } });
			confetti({ ...defaults, particleCount, origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 } });
			}, 250);

			/* **************************** */
        	/* *       end graffiti       * */
        	/* **************************** */


			/* **************************** */
        	/* *     update  onhand       * */
        	/* **************************** */

			var onhand_total_jackxxx 	= $('#blinkidjack_total').html().trim();
        	var onhand_item_jackxxx 	= $('#blinkidjack').html().trim();
			var onhand_won_jackxxx 		= $('#blinkidjack_won').html().trim();

			var cust_or_jack 			= $('#cust_or').html().trim();
			var cust_name_jack			= $('#cust_name').html().trim();
			var cust_tot_entries		= $('#cust_tot_entries').html().trim();
			var cust_date 				= $('#cust_date').html().trim();

			
			$.ajax({
				url: "updatejack_onhand.php",
				type: "POST",
				data: { onhand_totals_jackxxx: onhand_total_jackxxx, onhand_items_jackxxx: onhand_item_jackxxx, 
					    onhand_won_jackxxx: onhand_won_jackxxx, alloDateTimeStrxx: alloDateTimeStr, cust_or_jackx:cust_or_jack, 
						cust_name_jackx:cust_name_jack, cust_tot_entriesx: cust_tot_entries, cust_datex: cust_date},

				success: function(response) {
					// Handle success, if needed
					// alert(onhand_total_2ndxxx);
				},
				error: function(xhr, status, error) {
					// Handle error, if needed
					console.error(xhr.responseText);
				}
			});
			


			/* **************************** */
        	/* *     end update  onhand   * */
        	/* **************************** */

			status.innerHTML = "JACKPOT";
			jackpot.play();
		}


		/* ****************************** */
    	/* *     end jackpot winner   	* */
    	/* ****************************** */


		/* ****************************** */
    	/* *     start 2nd winner   	* */
    	/* ****************************** */


	else if
	  (((slot1 == slot2 && slot3 == "a7") ||
		(slot1 == slot3 && slot2 == "a7") ||
		(slot2 == slot3 && slot1 == "a7") ||
		(slot1 == slot2 && slot1 == "a7") ||
		(slot1 == slot3 && slot1 == "a7") ||
		(slot2 == slot3 && slot2 == "a7") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a7") ||
	   ((slot1 == slot2 && slot3 == "a1") ||
		(slot1 == slot3 && slot2 == "a1") ||
		(slot2 == slot3 && slot1 == "a1") ||
		(slot1 == slot2 && slot1 == "a1") ||
		(slot1 == slot3 && slot1 == "a1") ||
		(slot2 == slot3 && slot2 == "a1") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a1") ||
	   ((slot1 == slot2 && slot3 == "a2") ||
		(slot1 == slot3 && slot2 == "a2") ||
		(slot2 == slot3 && slot1 == "a2") ||
		(slot1 == slot2 && slot1 == "a2") ||
		(slot1 == slot3 && slot1 == "a2") ||
		(slot2 == slot3 && slot2 == "a2") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a2") ||
       ((slot1 == slot2 && slot3 == "a3") ||
		(slot1 == slot3 && slot2 == "a3") ||
		(slot2 == slot3 && slot1 == "a3") ||
		(slot1 == slot2 && slot1 == "a3") ||
		(slot1 == slot3 && slot1 == "a3") ||
		(slot2 == slot3 && slot2 == "a3") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a3") ||
	   ((slot1 == slot2 && slot3 == "a4") ||
		(slot1 == slot3 && slot2 == "a4") ||
		(slot2 == slot3 && slot1 == "a4") ||
		(slot1 == slot2 && slot1 == "a4") ||
		(slot1 == slot3 && slot1 == "a4") ||
		(slot2 == slot3 && slot2 == "a4") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a4") ||
	   ((slot1 == slot2 && slot3 == "a5") ||
		(slot1 == slot3 && slot2 == "a5") ||
		(slot2 == slot3 && slot1 == "a5") ||
		(slot1 == slot2 && slot1 == "a5") ||
		(slot1 == slot3 && slot1 == "a5") ||
		(slot2 == slot3 && slot2 == "a5") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a5") ||
	   ((slot1 == slot2 && slot3 == "a6") ||
		(slot1 == slot3 && slot2 == "a6") ||
		(slot2 == slot3 && slot1 == "a6") ||
		(slot1 == slot2 && slot1 == "a6") ||
		(slot1 == slot3 && slot1 == "a6") ||
		(slot2 == slot3 && slot2 == "a6") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a6") ||
	   ((slot1 == slot2 && slot3 == "a8") ||
		(slot1 == slot3 && slot2 == "a8") ||
		(slot2 == slot3 && slot1 == "a8") ||
		(slot1 == slot2 && slot1 == "a8") ||
		(slot1 == slot3 && slot1 == "a8") ||
		(slot2 == slot3 && slot2 == "a8") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a8") ||
	   ((slot1 == slot2 && slot3 == "a9") ||
		(slot1 == slot3 && slot2 == "a9") ||
		(slot2 == slot3 && slot1 == "a9") ||
		(slot1 == slot2 && slot1 == "a9") ||
		(slot1 == slot3 && slot1 == "a9") ||
		(slot2 == slot3 && slot2 == "a9") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a9") ||
	   ((slot1 == slot2 && slot3 == "a10") ||
		(slot1 == slot3 && slot2 == "a10") ||
		(slot2 == slot3 && slot1 == "a10") ||
		(slot1 == slot2 && slot1 == "a10") ||
		(slot1 == slot3 && slot1 == "a10") ||
		(slot2 == slot3 && slot2 == "a10") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a10"))
	//    ((slot1 == slot2 && slot3 == "a11") ||
	// 	(slot1 == slot3 && slot2 == "a11") ||
	// 	(slot2 == slot3 && slot1 == "a11") ||
	// 	(slot1 == slot2 && slot1 == "a11") ||
	// 	(slot1 == slot3 && slot1 == "a11") ||
	// 	(slot2 == slot3 && slot2 == "a11") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a11") ||
	//    ((slot1 == slot2 && slot3 == "a12") ||
	// 	(slot1 == slot3 && slot2 == "a12") ||
	// 	(slot2 == slot3 && slot1 == "a12") ||
	// 	(slot1 == slot2 && slot1 == "a12") ||
	// 	(slot1 == slot3 && slot1 == "a12") ||
	// 	(slot2 == slot3 && slot2 == "a12") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a12") ||
	//    ((slot1 == slot2 && slot3 == "a13") ||
	// 	(slot1 == slot3 && slot2 == "a13") ||
	// 	(slot2 == slot3 && slot1 == "a13") ||
	// 	(slot1 == slot2 && slot1 == "a13") ||
	// 	(slot1 == slot3 && slot1 == "a13") ||
	// 	(slot2 == slot3 && slot2 == "a13") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a13") ||
	//    ((slot1 == slot2 && slot3 == "a14") ||
	// 	(slot1 == slot3 && slot2 == "a14") ||
	// 	(slot2 == slot3 && slot1 == "a14") ||
	// 	(slot1 == slot2 && slot1 == "a14") ||
	// 	(slot1 == slot3 && slot1 == "a14") ||
	// 	(slot2 == slot3 && slot2 == "a14") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a14") ||
	//    ((slot1 == slot2 && slot3 == "a15") ||
	// 	(slot1 == slot3 && slot2 == "a15") ||
	// 	(slot2 == slot3 && slot1 == "a15") ||
	// 	(slot1 == slot2 && slot1 == "a15") ||
	// 	(slot1 == slot3 && slot1 == "a15") ||
	// 	(slot2 == slot3 && slot2 == "a15") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a15") ||
	//    ((slot1 == slot2 && slot3 == "a16") ||
	// 	(slot1 == slot3 && slot2 == "a16") ||
	// 	(slot2 == slot3 && slot1 == "a16") ||
	// 	(slot1 == slot2 && slot1 == "a16") ||
	// 	(slot1 == slot3 && slot1 == "a16") ||
	// 	(slot2 == slot3 && slot2 == "a16") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a16") ||
	//    ((slot1 == slot2 && slot3 == "a17") ||
	// 	(slot1 == slot3 && slot2 == "a17") ||
	// 	(slot2 == slot3 && slot1 == "a17") ||
	// 	(slot1 == slot2 && slot1 == "a17") ||
	// 	(slot1 == slot3 && slot1 == "a17") ||
	// 	(slot2 == slot3 && slot2 == "a17") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a17"))
		{

			
			/* **************************** */
        	/* *     start Popup winner   * */
        	/* **************************** */
			

			$(document).ready(function() {
				var blinkInterval = setInterval(blink_text, 500); // Start blinking every second
		  
				// Function to toggle blink effect
				function blink_text() {
				  var $blink = $('.blink');
				  if ($blink.is(':visible')) {
					$blink.fadeOut(300);
					
				  } else {
					$blink.fadeIn(500);
										
				  }
				  
				}
		  
				// Function to stop the blinking after a certain time (e.g., 5 seconds)
				setTimeout(function() {
				  clearInterval(blinkInterval); // Clear the interval to stop blinking
				}, 3500); // Stop the blinking after 5 seconds
				
			  });


			/* **************************** */
        	/* *    end Popup winner      * */
        	/* **************************** */

			
			/* **************************** */
        	/* *     graffiti             * */
        	/* **************************** */

			var duration = 3 * 1000;
			var animationEnd = Date.now() + duration;
			var defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };
			
			function randomInRange(min, max) {
			  return Math.random() * (max - min) + min;
			}
			
			var interval = setInterval(function() {
			  var timeLeft = animationEnd - Date.now();
			
			  if (timeLeft <= 0) {
				return clearInterval(interval);
			  }
			
			  var particleCount = 50 * (timeLeft / duration);
			  // since particles fall down, start a bit higher than random
			  confetti({ ...defaults, particleCount, origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 } });
			  confetti({ ...defaults, particleCount, origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 } });
			}, 250);

			/* **************************** */
        	/* *     end graffiti         * */
        	/* **************************** */



			/* **************************** */
        	/* *     update  onhand       * */
        	/* **************************** */

			var onhand_total_2ndxxx =  $('#blinkid_total').html();
        	var onhand_item_2ndxxx 	= $('#blinkid').html();
			var onhand_won_2ndxxx 	= $('#blinkid_won').html();

			var cust_or_win 		= $('#cust_or').html().trim();
			var cust_name_win		= $('#cust_name').html().trim();
			var cust_tot_entries	= $('#cust_tot_entries').html().trim();
			var cust_date 			= $('#cust_date').html().trim();

			
			$.ajax({
				url: "update_onhand.php",
				type: "POST",
				data: { onhand_totals_2ndxxx: onhand_total_2ndxxx, onhand_items_2ndxxx: onhand_item_2ndxxx,
					   onhand_won_2ndxxx: onhand_won_2ndxxx, alloDateTimeStrxx: alloDateTimeStr,cust_or_winx:cust_or_win, 
					   cust_name_winx:cust_name_win, cust_tot_entriesx: cust_tot_entries, cust_datex: cust_date }, 

				success: function(response) {
					// Handle success, if needed
					// alert(onhand_total_2ndxxx);
				},
				error: function(xhr, status, error) {
					// Handle error, if needed
					console.error(xhr.responseText);
				}
			});
			


			/* **************************** */
        	/* *     end update  onhand   * */
        	/* **************************** */




		status.innerHTML = "YOU WIN";
		win.play();
		}
	
		/* ****************************** */
    	/* *       end 2nd winner   	* */
    	/* ****************************** */



		/* ****************************** */
    	/* *     start try again   	 * */
    	/* ****************************** */


	else
		{


		
			/* **************************** */
        	/* *     update  onhand       * */
        	/* **************************** */

			var onhand_total_2ndxxx = $('#blinkid_total').html();
        	var onhand_item_2ndxxx 	= $('#blinkid').html();
			var onhand_won_2ndxxx 	= $('#blinkid_won').html();

			var cust_or_win 		= $('#cust_or').html().trim();
			var cust_name_win		= $('#cust_name').html().trim();
			var cust_tot_entries	= $('#cust_tot_entries').html().trim();
			var cust_date 			= $('#cust_date').html().trim();

			
			$.ajax({
				url: "updatelose_entries.php",
				type: "POST",
				data: { onhand_totals_2ndxxx: onhand_total_2ndxxx, onhand_items_2ndxxx: onhand_item_2ndxxx,
					   onhand_won_2ndxxx: onhand_won_2ndxxx, alloDateTimeStrxx: alloDateTimeStr,cust_or_winx:cust_or_win, 
					   cust_name_winx:cust_name_win, cust_tot_entriesx: cust_tot_entries, cust_datex: cust_date }, 

				success: function(response) {
					// Handle success, if needed
					// alert(onhand_total_2ndxxx);
				},
				error: function(xhr, status, error) {
					// Handle error, if needed
					console.error(xhr.responseText);
				}
			});
			


			/* **************************** */
        	/* *     end update  onhand   * */
        	/* **************************** */


			
		status.innerHTML = "😄 TRY AGAIN 😄"
		lose.play();

		}
	doing = false;
}

		/* ****************************** */
    	/* *       end  try again       * */
    	/* ****************************** */




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