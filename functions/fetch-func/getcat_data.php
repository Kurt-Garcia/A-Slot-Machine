<?php 

 include('connect.php');

 $output = '';  
 if(isset($_POST["category_id"]))  
 {   
      if($_POST["category_id"] != '')  
      {  
           $sql = "SELECT * FROM tbl_category WHERE id = '".$_POST["category_id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM tbl_category WHERE id = '".$_POST["category_id"]."'"; 
           echo '<textarea rows="1" class="form-control" disabled>Pag-select ug CATEGORY ui! Patul ug nawng ay..</textarea>'; 
      }

      $result = odbc_exec($connect, $sql);  
      while($row = odbc_fetch_array($result))  
      { 
          $output .= '<div class="col-md-6"><label for="brand">Brand</label><input type="text" class="form-control" name="brand" id="brand" value="'.$row["brand"].'" required disabled><label for="qty" style="padding-top:5px">Quantity</label><input type="number" class="form-control" name="qty" id="qty" required></div><div class="col-md-6"><div class="form-group"><label for="description">Description</label><textarea rows="4" class="form-control" name="description" id="description" required disabled>'.$row["description"].'</textarea></div></div>'; 
      }  
        echo $output;
 }  
 ?>