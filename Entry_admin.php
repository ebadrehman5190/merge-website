<?php include('session1.php'); ?>

<!doctype html>
<html>
<head>    
    <title>Entry</title>    
    <link rel="stylesheet" href="styles.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://localhost/task/completed/addbutton_jquery.js"></script>
    <script src="http://localhost/task/completed/per_head.js"></script>
    <script src="http://localhost/task/completed/entry_validation.js"></script>
</head>        
<body>         

<!---------------------------------- Header bar -------------------------------->                
<div class="menu">
    <div class="header-bar-color">
        <div class="header-bar">
            <div class="history">    
                <div class="history-tab">
                    <a href="data.php" style="margin-left:5px;">History</a>
                </div>     
                <div class="member-tab"> 
                    <a href="member_data.php" style="margin-left:5px;">Member History</a> 
                </div>
                <div class="payment-detail-tab">
                    <a href="search_by_date.php" style="margin-left:5px;">Search By Date</a> 
                </div>
                <input name="logout" type="button" id="logout" value="logout" onclick="window.location='logout1.php'" >
            </div>
        </div> 
    </div>             

<?php include('entry2.php'); //php validation ?>
           
<form action="" method="POST" onSubmit="return revalidate()" >
    <fieldset class="field">

    <div class="main">
        
        Date:
        <div class="align">
            <input type="date" name="date" id="date" style="width:173px;">
            </div>
            <span id="var_date" style="color:red;"><?php echo $dateErr;?></span>
        <br>

        Members:
        <div class="align">
                    <select multiple="multiple" name="member[]" id="mSelect" size="3" style="width:173px;">
                            <?php
                        
                                $conn = mysqli_connect('localhost','root','mysql','mysql');
                                mysqli_select_db($conn,"mysql");

                                $edit = "SELECT User FROM costumer ";				
                                    
                                $result = mysqli_query($conn,$edit);
                                                                
                                while($row = mysqli_fetch_array($result)) {
                                ?>
                        <option value="<?php echo $row["User"] ;  ?>">
                            <?php echo $row["User"] ;  ?>
                        </option>
                        <?php } ?>
                    </select>
            </div>
            <span id="var_mSelect" style="color:red;"><?php echo $memberErr;?></span>
        <br>

        Items:  
            <div class="align">
                <div class="input_fields_wrap">   
                    <div>
                        <div>
                            <input type="text" name="mytext[]" id="mytext">
                            <button class="add_field_button">Add More</button>
                        </div>  
                    </div> 
                </div>
            </div>
        <span id="var_mytext" style="color:red;"><?php echo $mytextErr;?></span>
        <br>

        Paid money:
        <div class="align">
            <select name="paid" id="paid" style="width:173px;">
                <option></option>
                <?php
                        $conn = mysqli_connect('localhost','root','mysql','mysql');
                        mysqli_select_db($conn,"mysql");

                        $edit = "SELECT User FROM costumer ";				
                                
                        $result = mysqli_query($conn,$edit);
                        while($row = mysqli_fetch_array($result)) {
                    ?>
                    <option><?php echo $row["User"] ; } ?></option>  
                </select>
            </div>
        <span id="var_paid" style="color:red;"><?php echo $paidErr;?></span>
        <br>

        Total amount:
        <div class="align">
            <input type="number" name="amount" id="amount" class="countOne" onkeyup="myFunction(this.value)">
            </div>
        <span id="var_amount" style="color:red;"><?php echo $amountErr;?></span>                                
        <br>

        Perhead: 
        <div class="align">
            <input type="text" name="per_head" id="resultHere" readonly>
        </div>
                                    
        <br><br>
            <input type="submit" value="submit">    
        </div>
    </fieldset>      
                      
<?php include('entry1.php'); // sql query to insert data ?>
<br>

</form>
</div>
</body>
</html>                               