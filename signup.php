<!doctype html>
<html>
<head>
<title>Sign up form</title>
<link rel="stylesheet" href="signup.css">
</head>
<body>
    <script src="http://localhost/merging/signup_validation.js"></script>
<?php 
$user=$name=$email=$password=$cpassword=$gender="";   
?>
<?php include('signup2.php'); //php validation ?>
<!--------------- header bar -------------------->
<div class="header-bar">
	<div class="header-option">
		<div class="home">
			<a href="Entry.php">Back</a>    	
		</div>	
	</div>
</div>
<!------------------------ sign up form ------------------------>
    <form name="Registration" class="form_title" action="" method="POST" onSubmit="return validation()">
	<fieldset class="field_set">
	<h1>Sign up form</h1>
		<table>
			<tr>
                <td>Username:</td>
                <td><input type="text" name="user" id="user"></td>
				<td><span id="var_user" style="color:red;"><?php echo $userErr;?></span></td>
            </tr>
            <tr>
                <td>FullName:</td>
                <td><input type="text" name="name" id="name"></td>
				<td><span id="var_name" style="color:red;"><?php echo $nameErr;?></span></td>
            </tr>
             <tr>
                <td>Email:</td>
                <td><input type="email" name="email" id="email"></td>
				<td><span id="var_email" style="color:red;"><?php echo $emailErr;?></span></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" id="password"></td>
				<td><span id="var_password" style="color:red;"><?php echo $passwordErr;?></span></td>
            </tr>
            <tr>
                <td>ConfirmPassword:</td>
                <td><input type="password" name="cpassword" id="cpassword"></td>
				<td><span id="var_cpassword" style="color:red;"><?php echo $cpasswordErr;?></span></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" id="gender" value="Male">Male
                    <input type="radio" name="gender" id="gender1" value="Female">Female</td>
				<td><span id="var_gender" style="color:red;"><?php echo $genderErr;?></span></td>	
            </tr>
            <tr style="height:15px;"></tr>
            <tr>
                <td></td>
				<td><input class="submit" type="submit" value="submit" onsubmit="return validation()"></td>
			</tr>
        </table>         	        
<?php include('signup1.php'); //php query to insert data ?>	
    </fieldset>
</form>                       
</body> 
</html>   