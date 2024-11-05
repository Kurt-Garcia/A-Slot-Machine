<?php
  include('../connect.php');
  session_start();

  $add_barcode = isset($_REQUEST['add_barcode']) ? $_REQUEST['add_barcode'] : "";
       


  $query = "SELECT * FROM turnkey_inventory WHERE barcode ='$add_barcode'";
  $result = odbc_exec($conn,$query);

  $res_u = odbc_exec($conn, $query);
          
  if (odbc_num_rows($res_u) == 0) 
  {

      echo"<div class='container'>";
        echo"<div class='row'>";
            echo"<div class='col-sm'>";   

                    echo"<div class='form-group row'>";
                
                        echo"<label style ='padding-top: 5px;font-weight:bold;'> Present Count   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>";      
                        echo"<input type='text' style='width:200px; margin-left: 5;' class='form-control' readonly> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ";
                       
                        echo"<button type='button'  class='btn btn-primary' style='margin-right:40px;' > &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Submit &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>";


                     echo"</div>"; 

                    echo"<div class='form-group row'>";
                
                        echo"<label style ='padding-top: 5px;font-weight:bold;'> Addional Count   &nbsp &nbsp &nbsp &nbsp &nbsp </label>";      
                        echo"<input type='text' style='width:200px; margin-left: 5;' class='form-control' readonly>";

                                
                     echo"</div>"; 


            echo"</div>";
        echo"</div>";

echo"<br>";
echo"<br>";

  echo"<table class='table table-striped table-bordered'>";
        echo"<tr align='center' style='background-color:#007bff;color:#fff'>";
        echo"<th > BARCODE  </th>";
        echo"<th > DESCRIPTION  </th>";
        echo"<th > COUNT    </th>";
        echo"<th > DATE     </th>";
        echo"</tr>";
    
        echo "<tr>";
        echo "<td>          </td>";
        echo "<td>          </td>";
        echo "<td>          </td>";
        echo "<td>          </td>";
        echo "</tr>";
  echo"</table>";

}

else
{
 $query = "SELECT * FROM turnkey_inventory WHERE barcode ='$add_barcode'";
    $result = odbc_exec($conn,$query);
    while($row = odbc_fetch_array($result))
       { 



echo"<form onsubmit='return ajaxpost()'> ";

        echo"<div class='container'>";
        echo"<div class='row'>";
            echo"<div class='col-sm'>";   

                    echo"<div class='form-group row'>";
                
                        echo"<label style ='padding-top: 5px;font-weight:bold;'> Present Count   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>";      
                        echo"<input type='text' style='width:200px; margin-left: 5;' class='form-control' value='". $row["count"] ."' name='rec_count' id='rec_count' readonly> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ";
                       
                        echo"<button type='submit'  class='btn btn-primary' style='margin-right:40px;' name='btn_submit' id='btn_submit' value='send' > &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Submit &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>";


                         
                     echo"</div>"; 

                    echo"<div class='form-group row'>";
                
                        echo"<label style ='padding-top: 5px;font-weight:bold;'> Addional Count   &nbsp &nbsp &nbsp &nbsp &nbsp </label>";      
                        echo"<input type='text' style='width:200px; margin-left: 5;' class='form-control' name='addtional_count' id='additional_count' autocomplete='off' onkeypress='return onlyNumberKey(event)' autofocus='2' tabIndex='2' />";

                                
                     echo"</div>"; 


                    echo"<div class='form-group row'>";

                      echo"<input type='text' style='width:200px; margin-left: 5;' class='form-control' name='total_count' id='total_count' hidden>";
                      echo" <input type='hidden' name='add_sum' id='add_sum' value='Sum' onclick='calcSum()' >";


                    echo"</div>"; 


            echo"</div>";
        echo"</div>";

                    echo"<input type='text' class='form-control' value='". $row["barcode"] ."' name='barcode3' id='barcode3' hidden>";
     
      echo"</div>";
echo"</form>"; 

 

  

  echo"<table class='table table-striped table-bordered' id='adds_table'>";

  echo"<tr align='center' style='background-color:#007bff;color:#fff'>";
    echo"<th > BARCODE    </th>";
    echo"<th > DESCRIPTION    </th>";
    echo"<th > COUNT      </th>";
    echo"<th > DATE       </th>";
    echo"</tr>";
  
    
                
          echo "<tr>";
          echo "<td> ".ucwords(strtolower($row["barcode"]))." </td>";
          echo "<td> ".ucwords(strtolower($row["description"]))." </td>";
          echo "<td> ".ucwords(strtolower($row["count"]))." </td>";
          echo "<td> ".ucwords(strtolower($row["date"]))." </td>";
          echo "</tr>";

      
      }



    echo"</table>";


}



/*<!-- ---------------------------  START COPY ADD COUNT MODAL ------------------------------------->*/


 echo" <script>
    function calcSum() {
        let num1 = document.getElementsByName('rec_count')[0].value;
        let num2 = document.getElementsByName('addtional_count')[0].value;
        let sum = Number(num1) + Number(num2);
        document.getElementsByName('total_count')[0].value = sum;
    }
</script>";

/*<!-- ---------------------------  END COPY ADD COUNT MODAL ------------------------------------->*/


/*<!-- ---------------------------  START AUTO ENTER ADD SUM BUTTON  ------------------------------------->*/
echo" <script>  
    
          $(document).ready(function() {
          $('#btn_submit').click(function() {
          $('#add_sum').trigger('click');
            });
            });
      
      </script> ";

/*<!-- ---------------------------  END AUTO ENTER ADD SUM BUTTON  ------------------------------------->*/


/*<!-- ---------------------------  START SUBMIT TO ADD MODAL  ------------------------------------->*/
echo" <script>

   function ajaxpost(){

        //POPUP MESSAGE 
        var url = this.href;
        var confirmText = 'Are you sure you want to Add Count?';
        if(confirm(confirmText)) {


            // (A) GET FORM DATA
            var data = new FormData();
            data.append('barcode3', document.getElementById('barcode3').value);
            data.append('total_count', document.getElementById('total_count').value);
      
            // (B) AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'submitadd.php');
            // What to do when server responds
            xhr.onload = function(){ console.log(this.response); };
            xhr.send(data);

          
           $(document).ready(function() {
           $('#close_add_modal').trigger('click');
            });
            
 
            // (C) PREVENT HTML FORM SUBMIT
            return false;
            }

        return false;
    }  

</script>";

/*<!-- --------------------------- END SUBMIT TO ADD MODAL  ------------------------------------->*/



?>



