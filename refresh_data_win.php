

<?php
       include('connect.php');
       
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

        $onhand_won_2nd         = $fetch_2nd['won'];
        $onhand_won_2nd ++;
        $onhand_won_2nd_1       = $onhand_won_2nd;


                

     
        $query_jack             = "SELECT * FROM win_prizes WHERE category ='jackpot' ORDER BY RAND() LIMIT 1";
        $result_jack            = mysqli_query($conn,$query_jack);
        $fetch_jack             = mysqli_fetch_array($result_jack);

       

    }
    ?>