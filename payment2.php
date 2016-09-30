<?php
    $conn = mysqli_connect('localhost','root','mysql','mysql');
            mysqli_select_db($conn,"mysql");
            
    if(!empty($_POST['select_member'])){
            
            $query1 = "SELECT costumer_balance FROM costumer WHERE costumer_user LIKE '%".$_POST['select_member']."%'";
            
            $result1 = mysqli_query($conn,$query1);
            $balance1 = mysqli_fetch_array($result1);
              
        } else {
            $balance1['costumer_balance'] = "";
        }
?>    
