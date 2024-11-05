<?php

  include('connect.php');
  session_start();

  
   

  $ticket = isset($_REQUEST['ticketno']) ? $_REQUEST['ticketno'] : "";
  $presdate = isset($_REQUEST['presdate']) ? $_REQUEST['presdate'] : "";   
  

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
           
                 <button type='submit'  class='btn btn-primary' id='submit' style='color:#fff; border-radius: 8px; margin-right: -10px; margin-bottom: 15px; margin-top: -2px; ' onclick='saveplayer()' tabindex='3' disabled> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Save &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>

            </div>
        </div>
    </div>

    <div id='confirmModal' class='modal'>
        <div class='modal-content'>
        
            <h2>Are you sure you want to Save this player?</h2>
            <button class='confirm'>Yes</button>
            <button class='cancel'>No</button>
            
        </div>
    </div>

 "; 
           
 

/***************************************************************
**                                                            **
**    START WONT ALLOW BLACK COUNT AND LESS THAN 13 MESSAGE   **
**                                                            **
***************************************************************/

echo" <script>

function validateForm() {
 
  var x     = document.forms['form123']['name'].value;
  var xx    = document.forms['form123']['address'].value;
  var xxx   = document.forms['form123']['celno'].value;
  
  var xxxx  = document.forms['form123']['orno1'].value;
  var x2 = document.forms['form123']['orno2'].value;
  var x3 = document.forms['form123']['orno3'].value;
  var x4 = document.forms['form123']['orno4'].value;
  var x5 = document.forms['form123']['orno5'].value;

  var amt1 = document.forms['form123']['amount1'].value;
  var amt2 = document.forms['form123']['amount2'].value;
  var amt3 = document.forms['form123']['amount3'].value;
  var amt4 = document.forms['form123']['amount4'].value;
  var amt5 = document.forms['form123']['amount5'].value;

  var ct1 = document.forms['form123']['ctr1'].value;
  var ct2 = document.forms['form123']['ctr2'].value;
  var ct3 = document.forms['form123']['ctr3'].value;
  var ct4 = document.forms['form123']['ctr4'].value;
  var ct5 = document.forms['form123']['ctr5'].value;

  var ct1x = xxxx + ct1
  var ct2x = x2 + ct2
  var ct3x = x3 + ct3
  var ct4x = x4 + ct4
  var ct5x = x5 + ct5

  var sa1x = xxxx + amt1
  var sa2x = x2 + amt1
  var sa3x = x3 + amt1
  var sa4x = x4 + amt1
  var sa5x = x5 + amt1


  var ct12xx = ct1x + ct2x
  var ct13xx = ct1x + ct3x
  var ct14xx = ct1x + ct4x
  var ct15xx = ct1x + ct5x
  var ct23xx = ct2x + ct3x
  var ct24xx = ct2x + ct4x
  var ct25xx = ct2x + ct5x
  var ct34xx = ct3x + ct4x
  var ct35xx = ct3x + ct5x
  var ct45xx = ct4x + ct5x



/***************************************************************
**                                                            **
**                       START FILLED OUT                     **
**                                                            **
***************************************************************/


  if (x == '' || x == null) {
    alert('Name Must be filled out');
    return false;
    }

   if (xx == '' || xx == null) {
    alert('Address Must be filled out');
    return false;
    }

  // if (xxx == '' || xxx == null) {
  //   alert('Cell No Must be filled out');
  //   return false;
  //   }





  if (ct1=='' || ct1 == null){
    return true;
  }
  else if
    (xxxx=='' || xxxx == null) {
    alert('Inv No 1 Must be filled out ');
    return false;
    }
  else if
    (amt1=='' || amt1 == null) {
    alert('Amount 1 Must be filled out ');
    return false;
    }
   else if
    (ct1x == ct2x) {
    alert('Duplicate Inv No 1 and Inv No 2 ');
    return false;
    }
  else if
    (ct1x == ct3x) {
    alert('Duplicate Inv No 1 and Inv No 3 ');
    return false;
    }  
  else if
    (ct1x == ct4x) {
    alert('Duplicate Inv No 1 and Inv No 4 ');
    return false;
    } 
  else if
    (ct1x == ct5x) {
    alert('Duplicate Inv No 1 and Inv No 5 ');
    return false;
    }





  if (ct2=='' || ct2 == null){
    return true;
  }
  else if
    (x2=='' || x2 == null) {
    alert('Inv No 2 Must be filled out ');
    return false;
    }
  else if
    (amt2=='' || amt2 == null) {
    alert('Amount 2 Must be filled out ');
    return false;
    }
  else if
    (ct2x == ct3x) {
    alert('Duplicate Inv No 2 and Inv No 3 ');
    return false;
    }
  else if
    (ct2x == ct4x) {
    alert('Duplicate Inv No 2 and Inv No 4 ');
    return false;
    }  
  else if
    (ct2x == ct5x) {
    alert('Duplicate Inv No 2 and Inv No 5 ');
    return false;
    }  


  


  if (ct3=='' || ct3 == null){
    return true;
  }
  else if
    (x3=='' || x3 == null) {
    alert('Inv No 3 Must be filled out ');
    return false;
    }
   else if
    (amt3=='' || amt3 == null) {
    alert('Amount 3 Must be filled out ');
    return false;
    }
  else if
    (ct3x == ct4x) {
    alert('Duplicate Inv No 3 and Inv No 4 ');
    return false;
    }
  else if
    (ct3x == ct5x) {
    alert('Duplicate Inv No 3 and Inv No 5 ');
    return false;
    }

  



  if (ct4=='' || ct4 == null){
    return true;
  }
  else if
    (x4=='' || x4 == null) {
    alert('Inv No 4 Must be filled out ');
    return false;
    }
  else if
    (amt4=='' || amt4 == null) {
    alert('Amount 4 Must be filled out ');
    return false;
    }
  else if
    (ct4x == ct5x) {
   alert('Duplicate Inv No 4 and Inv No 5 ');
    return false;
    }

 
  


  if (ct5=='' || ct5 == null){
    return true;
  }
  else if
    (x5=='' || x5 == null) {
    alert('Inv No 5 Must be filled out ');
    return false;
    }
   else if
    (amt5=='' || amt5 == null) {
    alert('Amount 5 Must be filled out ');
    return false;
    }

 




/***************************************************************
**                                                            **
**                       END FILLED OUT                       **
**                                                            **
***************************************************************/

/***************************************************************
**                                                            **
**                  START SALES INV DUPLICATE                 **
**                                                            **
***************************************************************/


 /* if (ct12xx=='' || ct12xx == null)
    return true;
  else if
    (ct1x == ct2x) {
    alert('Duplicate Inv No 1 and Inv No 2 ');
    return false;
    }
  
  if (ct13xx=='' || ct13xx == null)
    return true;
  else if
    (ct1x == ct3x) {
    alert('Duplicate Inv No 1 and Inv No 3 ');
    return false;
    }  

  if (ct14xx=='' || ct14xx == null)
    return true;
  else if
    (ct1x == ct4x) {
    alert('Duplicate Inv No 1 and Inv No 4 ');
    return false;
    }  

  if (ct15xx=='' || ct15xx == null)
    return true;
  else if
    (ct1x == ct5x) {
    alert('Duplicate Inv No 1 and Inv No 5 ');
    return false;
    }  



  if (ct23xx=='' || ct23xx == null)
    return true;
  else if
    (ct2x == ct3x) {
    alert('Duplicate Inv No 2 and Inv No 3 ');
    return false;
    }

  if (ct24xx=='' || ct24xx == null)
    return true;
  else if
    (ct2x == ct4x) {
    alert('Duplicate Inv No 2 and Inv No 4 ');
    return false;
    }  

  if (ct25xx=='' || ct25xx == null)
    return true;
  else if
    (ct2x == ct5x) {
    alert('Duplicate Inv No 2 and Inv No 5 ');
    return false;
    }  



  if (ct34xx=='' || ct34xx == null)
    return true;
  else if
    (ct3x == ct4x) {
    alert('Duplicate Inv No 3 and Inv No 4 ');
    return false;
    }

  if (ct35xx=='' || ct35xx == null)
    return true;
  else if
    (ct3x == ct5x) {
    alert('Duplicate Inv No 3 and Inv No 5 ');
    return false;
    }



  if (ct45xx=='' || ct45xx == null)
    return true;
  else if
    (ct4x == ct5x) {
   alert('Duplicate Inv No 4 and Inv No 5 ');
    return false;
    }*/


/***************************************************************
**                                                            **
**                  END SALES INV DUPLICATE                   **
**                                                            **
***************************************************************/

}


</script>";

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
   



    </head>


<body>

      <script src="bootstrap/jquery-3.6.0.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     
      <script> 

            function saveplayer() {
                $('#confirmModal').show();
            }

            $(document).ready(function() {
                $('.confirm').click(function() {
                    $('#confirmModal').hide();
                    save_newplayer();
                });

                $('.cancel').click(function() {
                    $('#confirmModal').hide();
                });
            });

            function save_newplayer() {

              
                var name      = $('#name').val();
                var celno     = $('#celno').val();
                var address   = $('#address').val();
                var orno      = $('#orno1').val();
                var amount    = $('#amount1').val();
                var ctr       = $('#ctr1').val();
                var idticket  = $('#idticket').val();

                $('.confirm').prop('disabled', true);
                
                $.ajax({
                    url: "save1.php",
                    type: "POST",
                    data: { namex: name, celnox: celno, addressx: address, orno1x: orno, amount1x: amount, ctr1x: ctr, idticketx: idticket },
                    success: function(response) {
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
            
 
      </script>

</body>
</html>

