<?php  
 //load_data.php  
 include('connect.php');

 $output = '';  
 if(isset($_POST["supplier_id"]))  
 {   
      if($_POST["supplier_id"] != '')  
      {  
           $sql = "SELECT * FROM tbl_supplier WHERE id = '".$_POST["supplier_id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM tbl_supplier WHERE id = '".$_POST["supplier_id"]."'"; 
           echo '<textarea rows="1" class="form-control" disabled>Pag-select ug SUPPLIER ui! Patul ug nawng ay..</textarea><br>'; 
      }

      $result = odbc_exec($connect, $sql);  
      while($row = odbc_fetch_array($result))  
      { 
        $output .= '<div class="row"><div class="col-md-6">
                    <div class="form-group">
                      <label for="cntct_person">Contact Person</label>
                      <input type="text" class="form-control" name="cntct_person" id="cntct_person" value="'.$row["cntct_person"].'" required disabled>
                    </div>
                  </div>
                </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="cp_no">CP Number</label>
                      <input type="text" class="form-control" name="cp_no" id="cp_no" value="'.$row["cp_no"].'" required disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="tel_no">Tel. Number</label>
                      <input type="text" class="form-control" name="tel_no" id="tel_no" value="'.$row["tel_no"].'" required disabled>
                    </div>'; 
      }  
        echo $output;
 }  
 ?>