
<?php
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $id_del             = htmlspecialchars($_POST['id_del']);

    $query_stat         = "SELECT * FROM customer WHERE id='$id_del'";
    $result_stat        = mysqli_query($conn,$query_stat);
    $fetch_stat         = mysqli_fetch_array($result_stat);

    $player_stat          = $fetch_stat['status'];


    if($player_stat==1) {
        $query_del          = "DELETE FROM customer WHERE id='$id_del'";
        $result_del         = mysqli_query($conn,$query_del);
       
        
            if ($conn->query($query_del) === TRUE) {
                echo "<div id='message' style='color: white; text-align: center; background-color: green; padding: 10px; border-radius: 5px;'>Player deleted successfully</div>";
                echo "<br>";
                echo "<script>
                        setTimeout(function() {
                            document.getElementById('message').style.display = 'none';
                            
                        }, 2000);
                      </script>";
            }
            else {
                echo "Error: " . $query_del . "<br>" . $conn->error;
            }
            $conn->close();

    }
    
    else{
    
        echo "<div id='message' style='color: white; text-align: center; background-color: red; padding: 10px; border-radius: 5px;'>You're not allowed to delete this player</div>";
        echo "<br>";
        echo "<script>
                setTimeout(function() {
                    document.getElementById('message').style.display = 'none';
                    
                }, 2000);
              </script>";
    }
    
    }
    

    
?>
