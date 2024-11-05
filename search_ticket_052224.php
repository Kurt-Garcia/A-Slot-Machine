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

  $query_CONS = "SELECT * FROM customer ORDER BY id DESC  LIMIT 1";
  $result = mysqli_query($conn,$query_CONS);
  while($row = mysqli_fetch_array($result))



/***************************************************************
**                                                            **
**                      START TICKET 1                        **
**                                                            **
***************************************************************/

 echo"<form method='POST' name='form123' action='save1.php' onsubmit='return validateForm()' required> 
    <div class='container'>
      
<div class='row'>
      
      <div class='col-sm-2'>   
        <div class='form-group row'>

             <label style ='padding-top: 5px;font-weight:bold;'>Name </label>

       </div>
      </div>


      <div class='col-sm-4'>
        <div class='form-group row'>
                 
             <input type='text' class='form-control' id='name' name='name'  style ='width: 100%; font-size: 15px;' autocomplete='off'>

        </div>
      </div>

&nbsp&nbsp
&nbsp&nbsp
&nbsp&nbsp


      <div class='col-sm-2'> 
        <div class='form-group row'>
                 
             <label style ='padding-top: 5px;font-weight:bold;'>OR No </label>

        </div>
      </div>
      
       <div class='col-sm'>  
        <div class='form-group row'>
                 
             <input type='text' class='form-control' id='celno' name='celno'  style ='width: 100%; font-size: 15px;' maxlength = '11' onkeypress='return onlyNumberKey(event)'  autocomplete='off'>

        </div> 
      </div>

    </div>

              
    <div class='row' style='margin-bottom:-21px;'>
      <div class='col-sm-2'>   
        <div class='form-group row'>
              
           <label style ='padding-top: 5px;font-weight:bold;'>Address </label>
        
        </div>
      </div>            

      <div class='col-sm'>   
        <div class='form-group row'> 
                
               <input type='text' style='width:100%;' class='form-control' id='address' name='address' autocomplete='off'>
             
               <input style='width:185px;' class='form-control' id='presdate' name='presdate' autocomplete='off' value='$presdate' type='hidden'>

        
        </div>
      </div>                
  
  </div>




<div class='row' style='margin-bottom:-21px;'>
      
      <div class='col-sm-2'> 
        <div class='form-group row'>

            

        </div>
      </div>


      <div class='col-sm-4'>  
        <div class='form-group row'>
                 
             <label style ='padding-top: 20px;font-size: 12px;'> </label>

       </div> 
      </div>

&nbsp&nbsp
&nbsp&nbsp
&nbsp&nbsp

      <div class='col-sm-1'>  
        <div class='form-group row'>
                 
             

        </div>
   </div>
      
      <div class='col-sm'>  
       <div class='form-group row'>
                 
            <label style ='padding-top: 20px; font-size: 12px; '> </label>

        </div>
      </div>
    </div>



    <div class='row'>


    <div class='col-sm-2'>  
    <div class='form-group row'>
             
         <label style ='padding-top: 5px;font-weight:bold;'>Counter No</label>

    </div>
  </div>



  <div class='col-sm-1' >  
   <div class='form-group row' >
             
         <input type='number'  class='form-control' id='ctr1' name='ctr1'  style ='width: 80%; font-size: 15px;' autocomplete='off'  onInput='checkUsername()'>

    </div>
  </div>


  &nbsp&nbsp
&nbsp&nbsp
&nbsp&nbsp
      
      <div class='col-sm'> 
        <div class='form-group row'>

            <label style ='padding-top: 5px;font-weight:bold;'> Inv No </label>

        </div>
      </div>


      <div class='col-sm-4'>  
        <div class='form-group row'>
              
                
             <input type='text' class='form-control' id='orno1' name='orno1'  style ='width: 100%; font-size: 15px;' autocomplete='off'  onInput='checkUsername()' onkeypress='return onlyNumberKey(event)' disabled >

       </div> 
      </div>

&nbsp&nbsp
&nbsp&nbsp
&nbsp&nbsp

      <div class='col-sm-1'>  
        <div class='form-group row'>
                 
             <label style ='padding-top: 5px;font-weight:bold;'>Amount </label>

        </div>
   </div>
      
      <div class='col-sm-2'>  
       <div class='form-group row'>
                 
             <input type='text' class='form-control' id='amount1' name='amount1'  style ='width: 100%; font-size: 15px;' autocomplete='off' onkeypress='return onlyNumberKey(event)' disabled>

        </div>
      </div>




     
    </div>


    <br>
   

  

   <div class='row' style='margin-bottom:-21px;'>
      
      <div class='col-sm-2'> 
        <div class='form-group row'>

            

        </div>
      </div>


      <div class='col-sm-4'>  
       
      </div>

&nbsp&nbsp
&nbsp&nbsp
&nbsp&nbsp

 <div class='col-sm-2'>  
        <div class='form-group row'>
                 
             

        </div>
   </div>
      
      <div class='col-sm'>  
       <div class='form-group row'>
                 
             

        </div>
      </div>

</div>   

<span id='check-username'></span> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<span id='check-username2'></span>
    
     <div class='row' style='margin-bottom:-30px; margin-top:10px;'>
      <div class='col-sm' style='display: flex; justify-content: flex-end'>
        <div class='form-group row'> 
           
                <button type='submit'  class='btn btn-primary' name='btn_submit' id='btn_submit' onclick='return confirm_save()' onclick='sendSMS()' tabindex='3'hidden> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Save &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </button>

                <button type='submit'  class='btn btn-primary' name='btn_submit' id='submit' onclick='return confirm_save()'  tabindex='3' disabled> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Save &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>

                
              
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
 </form>"; 
           


 /***************************************************************
**                                                            **
**                        END TICKET 1                        **
**                                                            **
***************************************************************/




/***************************************************************
**                                                            **
**                START CONFIRM SUBMIT MESSAGE                **
**                                                            **
***************************************************************/

echo" <script>

function confirm_save() {
  return confirm('Are you sure you want to Save this Ticket?');
}
</script>";

/***************************************************************
**                                                            **
**                END CONFIRM SUBMIT MESSAGE                  **
**                                                            **
***************************************************************/



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

  if (xxx == '' || xxx == null) {
    alert('Cell No Must be filled out');
    return false;
    }





  if (ct1=='' || ct1 == null){
    return true;
  }
  else if
    (xxxx=='' || xxxx == null) {
    alert('Inv No Must be filled out ');
    return false;
    }
  else if
    (amt1=='' || amt1 == null) {
    alert('Amount Must be filled out ');
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



echo" <script> 



</script>";

?>
<!DOCTYPE html>
<html lang="en">
<head>

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
    background-color: red;
    opacity:0.5;   
}

  #orno1:disabled{
    background-color: red;
    opacity:0.5;   
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
    background-color: red;
    opacity:0.5;   
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
</head>
<body>
  <script src="bootstrap/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>

