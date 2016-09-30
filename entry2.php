<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["date"])){
			$dateErr="date required";
		} else {
			$date = test_input($_POST["date"]);
		}
        
		if (empty($_POST["member"])){
			$memberErr="member required";
		} else {
			$member = test_input($_POST["member"]);
		}
        
        if (empty($_POST["mytext"])){
			$mytextErr="items required";
		} else {
			$mytext = test_input($_POST["mytext"]);
		}
        
        if (empty($_POST["paid"])){
			$paidErr="select member ";
		} else {
			$paid = test_input($_POST["paid"]);
		}
        
        if (empty($_POST["amount"])){
			$amountErr="amount required";
		} else {
			$amount = test_input($_POST["amount"]);
		}
	}
function test_input($data) {	

}
?>