<?php

  include('connect.php');
  session_start();

  
   

  $ticket     = isset($_REQUEST['ticketno']) ? $_REQUEST['ticketno'] : "";
  $presdate   = isset($_REQUEST['presdate']) ? $_REQUEST['presdate'] : "";  
  $player_no  = isset($_REQUEST['player_no']) ? $_REQUEST['player_no'] : "";  
  

/***************************************************************
**                                                            **
**             START BRANCH TICKET AUTO INCREMENT             **
**                                                            **
***************************************************************/

  
/***************************************************************
**                                                            **
**             END BRANCH TICKET AUTO INCREMENT               **
**                                                            **
***************************************************************/



/***************************************************************
**                                                            **
**                      START TICKET 0                        **
**                                                            **
***************************************************************/



/***************************************************************
**                                                            **
**                      START TICKET 1                        **
**                                                            **
***************************************************************/


echo"

<div class='container'>
   
<div class='row' style='margin-top: -5px'>
      
      <div class='col-sm-2'>   
        <div class='form-group row'>

        <label style ='padding-top: 5px; color: #cccccc; font-size: 15px;'>Name </label>


       </div>
      </div>


      <div class='col-sm-4'>
        <div class='form-group row'>
                 
             <input type='text' class='form-control' id='name' name='name' style ='width: 100%;' autocomplete='off'>

        </div>
      </div>

&nbsp&nbsp
&nbsp&nbsp
&nbsp&nbsp


      <div class='col-sm-1'> 
        <div class='form-group row'>
                 
             <label style ='padding-top: 5px; color: #cccccc; font-size: 15px;' >Cell No </label>

        </div>
      </div>
      
       <div class='col-sm'>  
        <div class='form-group row'>
                 
             <input type='text' class='form-control' id='celno' name='celno'  style ='width: 100%;'  onkeypress='return onlyNumberKey(event)'  autocomplete='off'>

        </div> 
      </div>

    </div>

              
    <div class='row' style='margin-bottom: 0px;'>
      <div class='col-sm-2'>   
        <div class='form-group row'>
              
           <label style ='padding-top: 5px; color: #cccccc; font-size: 15px;' >Address </label>
        
        </div>
      </div>            

      <div class='col-sm'>   
        <div class='form-group row'> 
                
               <input type='text' style='width:75%;' class='form-control' id='address' name='address' autocomplete='off'>
               
        </div>
      </div>                
  
  </div>




    <div class='row' style='margin-bottom: px;'>
      
      <div class='col-sm-2'> 
        <div class='form-group row'>

            <label style ='padding-top: 5px; color: #cccccc; font-size: 15px;' > Sales Inv No </label>

        </div>
      </div>


      <div class='col-sm-4'>  
        <div class='form-group row'>
              
                
            <input type='text' class='form-control' id='orno1' name='orno1'  style ='width: 100%;'  autocomplete='off'  onInput='checkUsername()' onkeypress='return onlyNumberKey(event)' disabled >
            <input type='text' class='form-control' id='idticket' name='idticket' value='"." $ticket"."' hidden > 
            <input type='text' class='form-control' id='playerno' name='playerno' value='"." $player_no"."' hidden >

       </div> 
      </div>

&nbsp&nbsp
&nbsp&nbsp
&nbsp&nbsp

      <div class='col-sm-1'>  
        <div class='form-group row'>
                 
             <label style ='padding-top: 5px; color: #cccccc; font-size: 15px;'>Amount </label>

        </div>
   </div>
      
      <div class='col-sm-2'>  
       <div class='form-group row'>
                 
             <input type='text' class='form-control' id='amount1' name='amount1'  style ='width: 100%;' autocomplete='off' onkeypress='return onlyNumberKey(event)' disabled>

        </div>
      </div>

&nbsp&nbsp
&nbsp&nbsp
&nbsp&nbsp


      <div class='col-sm-1'>  
        <div class='form-group row'>
                 
             <label style ='padding-top: 5px; color: #cccccc; font-size: 15px;'>Counter</label>

        </div>
   </div>
      
      <div class='col-sm'>  
       <div class='form-group row'>
                 
             <input type='number' class='form-control' id='ctr1' name='ctr1'  style ='width: 100%;' autocomplete='off'  onInput='checkUsername()'>

        </div>
      </div>
    </div>

</div>


<span id='check-username'></span> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<span id='check-username2'></span>
    
    <div class='row' style='margin-bottom:-30px; margin-top:-5px; margin-right: 10px;'>
        <div class='col-sm' style='display: flex; justify-content: flex-end'>
            <div class='form-group row'> 
           
                 <button type='submit'  class='btn btn-primary' id='submit' style='color:#fff; border-radius: 8px; margin-right: -10px; margin-bottom: 15px; margin-top: -2px; ' onclick='validateAndSave()' tabindex='3' disabled> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Save &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>

            </div>
        </div>
    </div>

    

    <!--/*************************************************
    **                                              **
    **    START MODAL MESSAGE CANNOT BE EMPTY       **
    **                                              **
    **************************************************/-->

    <!-- Modal for empty fields -->
    <div id='emptyFieldModal' class='modal'>
        <div class='modal-content'>
            <h2>Name, Address, Inv No and Amount cannot be empty!</h2>
            <button class='confirm'>OK</button>
        </div>
    </div>

    <!--/*************************************************
    **                                              **
    **      END MODAL MESSAGE CANNOT BE EMPTY       **
    **                                              **
    **************************************************/-->



    <!--/*************************************************
    **                                              **
    **      START MODAL CONFORMATION MESSAGE        **
    **                                              **
    **************************************************/-->

    <!-- Modal for confirmation -->
    <div id='confirmModal' class='modal'>
        <div class='modal-content'>
            <h2>Are you sure you want to Save this player?</h2>
            <button class='confirm'>Yes</button>
            <button class='cancel'>No</button>
        </div>
    </div>

    <!--/*************************************************
    **                                              **
    **        END MODAL CONFORMATION MESSAGE        **
    **                                              **
    **************************************************/-->

 "; 
           
 

/***************************************************************
**                                                            **
**    START WONT ALLOW BLACK COUNT AND LESS THAN 13 MESSAGE   **
**                                                            **
***************************************************************/



/***************************************************************
**                                                            **
**    END WONT ALLOW BLACK COUNT AND LESS THAN 13 MESSAGE     **
**                                                            **
***************************************************************/


/***************************************************************
**                                                            **
**    START WONT ALLOW BLACK COUNT AND LESS THAN 13 MESSAGE   **
**                                                            **
***************************************************************/

echo" <script>

function testAttribute(element, attribute){
  var test =document.createElement(element);
  if (attribute in test){
    return true;
  }
  else
    return false;
}

window.onload = function() {
  if (!testAttribute('input','autofocus'))
    document.getElementById('name').focus();
  
}

</script>";


/*<!----------------------------------------------- START NUMBERS ONLY ----------------------------------------------->*/

/*echo" <script>
    function onlyNumberKey(evt) { 
          
        // Only ASCII charactar in that range allowed 
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
    } 
</script> ";*/

/*<!-----------------------------------------------END NUMBERS ONLY ----------------------------------------------->*/


/***************************************************************
**                                                            **
**                        START SEND SMS                      **
**                                                            **
***************************************************************/

echo" <script>
   var sendSMS = function(){
     
     
          console.log('Error found!');
        }
      });
    }
        
    
  </script> ";

/***************************************************************
**                                                            **
**                        END SEND SMS                        **
**                                                            **
***************************************************************/



/*<!-- ---------------------------  START COPY DESCRIPTION  ------------------------------- -->*/

/*
echo"    <script>
        
function populateSecondTextBox() {
    document.getElementById('description_copy').value = document.getElementById('description').value;
}
</script>";
*/


/*<!-- ---------------------------  END COPY BARCODE COST REG------------------------------------->*/


/***************************************************************
**                                                            **
**                    START VERIFY OR NO                      **
**                                                            **
***************************************************************/


echo" <script>
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
</script>";


echo" <script>
function checkUsername2() {
  
  var orno1xi=+$('#orno1').val();
  var orno2xi=+$('#orno2').val();
  var orno3xi=+$('#orno3').val();
  var orno4xi=+$('#orno4').val();
  var orno5xi=+$('#orno5').val();

  var ctr1xi=+$('#ctr1').val();
  var ctr2xi=+$('#ctr2').val();
  var ctr3xi=+$('#ctr3').val();
  var ctr4xi=+$('#ctr4').val();
  var ctr5xi=+$('#ctr5').val();

  jQuery.ajax({
  url: 'check_availability2.php',
  
  data:{orno1xxi:orno1xi, orno2xxi:orno2xi, orno3xxi:orno3xi, orno4xxi:orno4xi, orno5xxi:orno5xi, ctr1xxi:ctr1xi, ctr2xxi:ctr2xi, ctr3xxi:ctr3xi, ctr4xxi:ctr4xi, ctr5xxi:ctr5xi,}, 
  

  type: 'POST',
  success:function(data){
    $('#check-username2').html(data);
  },
  error:function (){}
  });
}
</script>";



/***************************************************************
**                                                            **
**                      END VERIFY OR NO                      **
**                                                            **
***************************************************************/


echo" <script> 

    function onlyNumberKey(evt) { 
          
        // Only ASCII charactar in that range allowed 
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
    } 

</script>"; 


      // ********************************************
      // *            start save player             *
      // ******************************************** 
          
// echo" <script> 

//         function saveplayer() {
//             $('#confirmModal').show();
//         }

//         $(document).ready(function() {
//             $('.confirm').click(function() {
//                 $('#confirmModal').hide();
//                 save_newplayer();
//             });

//             $('.cancel').click(function() {
//                 $('#confirmModal').hide();
//             });
//         });

//         function save_newplayer() {

          
//             var name      = 'art';
//             var celno     = '456';
//             var address   = 'art';
//             var orno      = '1234';
//             var amount    = '100';
//             var ctr       = '123';
//             var idticket  = '1';
            
//             $.ajax({
//                 url: 'save1.php',
//                 type: 'POST',
//                 data: { namex: name, celnox: celno, addressx: address, orno1x: orno, amount1x: amount, ctr1x: ctr, idticketx: idticket },
//                 success: function(response) {
//                     location.reload();
//                 },
//                 error: function(xhr, status, error) {
//                     console.error(xhr.responseText);
//                 }
//             });
//         }
 
// </script>";


              // ********************************************
              // *            start save player             *
              // ******************************************** 

?>
<!DOCTYPE html>
<html lang="en">
    
  <head>

  

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

          #orno1:disabled{
            background-color: #414141;
            opacity:0.5;
            border-color: #414141;   
          }

          #orno2:disabled{
            background-color: red;
            opacity:0.5;   
          }

          #orno3:disabled{
            background-color: red;
            opacity:0.5;   
          }

          #orno4:disabled{
            background-color: red;
            opacity:0.5;   
          }

          #orno5:disabled{
            background-color: red;
            opacity:0.5;   
          }

          #amount1:disabled{
            background-color: #414141;
            opacity:0.5;
            border-color: #414141;    
          }
          

          #amount2:disabled{
            background-color: red;
            opacity:0.5;   
          }

          #amount3:disabled{
            background-color: red;
            opacity:0.5;   
          }

          #amount4:disabled{
            background-color: red;
            opacity:0.5;   
          }

          #amount5:disabled{
            background-color: red;
            opacity:0.5;   
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
   

    </head>


<body>

      <script src="bootstrap/jquery-3.6.0.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     

    <!-- /* ************************************* */
        /* *   start modal confirmation and save   * */
        /* *************************************** */ -->

      <script>
          
          function validateAndSave() {
            
              var name1     = $('#name').val().trim();
              var address1  = $('#address').val().trim();
              var orno1     = $('#orno1').val().trim();
              var amount1    = $('#amount1').val().trim();

              if (name1 === '' || address1 === '' || orno1 === ''|| amount1 === '') {
                  $('#emptyFieldModal').show();
              } else {
                  $('#confirmModal').show();
              }
          }

        
          function saveplayer() {
            save_newplayer();
          }

          $(document).ready(function() {
              $('#emptyFieldModal .confirm').click(function() {
                  $('#emptyFieldModal').hide();
              });

              $('#confirmModal .confirm').click(function() {
                  $('#confirmModal').hide();
                  saveplayer();
              });

              $('#confirmModal .cancel').click(function() {
                  $('#confirmModal').hide();
              });
          });

          function save_newplayer() {

              var name      = $('#name').val().trim();
              var celno     = $('#celno').val().trim();
              var address   = $('#address').val().trim();
              var orno      = $('#orno1').val().trim();
              var amount    = $('#amount1').val().trim();
              var ctr       = $('#ctr1').val().trim();
              var idticket  = $('#idticket').val().trim();
              var playerno  = $('#playerno').val().trim();

            $('.confirm').prop('disabled', true);

            $.ajax({
                url: "save1.php",
                type: "POST",
                data: { namex: name, celnox: celno, addressx: address, orno1x: orno, amount1x: amount, ctr1x: ctr, idticketx: idticket, playernox: playerno },
                success: function(response) {
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

      </script>

       <!-- /* ************************************* */
        /* *   start modal confirmation and save   * */
        /* *************************************** */ -->



</body>
</html>

