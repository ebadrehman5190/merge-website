<?php
    if(!empty($_POST['date'] || $_POST['member'] || $_POST['mpaid'])) {
                    
                $servername = "localhost";
                $username = "root";
                $password = "mysql";
                $dbname = "mysql";

                        // Create connection
                        $conn = new mysqli($servername, $costumer_username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                                                         
                    $query = "SELECT costumer_balance FROM costumer WHERE costumer_user LIKE '%".$_POST['member']."%'";
            
                    $result = mysqli_query($conn,$query);
                    $balance = mysqli_fetch_array($result);
                    
                    if(!empty($balance['costumer_balance'])){
                            $payment = $balance['costumer_balance'];
                            $sub = $balance['costumer_balance'] - $_POST['mpaid'] ;                       
                        }                
                                
                    $insert = "INSERT INTO payment_table(date, member_name, payment, paid, balance)
                              VALUES ('".$_POST['date']."','".$_POST['member']."','".$payment."','".$_POST['mpaid']."','".$sub."')"; 
                    $fetch = "UPDATE costumer SET costumer_balance = '".$sub."'
                              WHERE costumer_user = '".$_POST['member']."' ";
                        
             if ($conn->query($insert) === TRUE) {    
                    echo "New record created";  
             } else {
		        echo "Error: " . $fetch . "<br>" . $conn->error;
		     }
             echo "<br>";
             if ($conn->query($fetch) === TRUE) {    
                    echo "New record updated in member's account";  
             } else {
		        echo "Error: " . $fetch . "<br>" . $conn->error;
		     }       
        $conn->close();
    }
?>