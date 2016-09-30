<?php
include('session1.php');
?>

<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />

	<title>member data</title>
	<link rel="stylesheet" href="history.css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	
</head>
<body>
	<div id="header">
		<div>
			<div class="logo">
				<a href="Entry.php"></a>
			</div>
			<ul id="navigation">
				<li class="active">
					<a href="Entry.php">Home</a>
				</li>
				<li>
					<a href="data.php">Record</a>
				</li>
				<li>
					<a href="member_data.php">Costumer record</a>
				</li>
				<li>
					<a href="search_by_date.php">Search record by date</a>
				</li>
				<li>
					<a href="Payment.php">Payment</a>
				</li>
                <li>
                    <input name="logout" type="button" id="logout" value="logout" onclick="window.location='logout1.php'" >
                </li>
			</ul>
		</div>
	</div>
<br>  

	<form action='#' method="post">
		
		<?php				
				$conn = mysqli_connect('localhost','root','mysql','mysql');
				mysqli_select_db($conn,"mysql");


				$query = "SELECT date,members,items,paid,amount,per_head,unselected_member,unselected_amount FROM lunch_system 
						  WHERE members LIKE '%".$_SESSION['login_user']."%' 
						  OR unselected_member LIKE '%".$_SESSION['login_user']."%' ";
					
				$result = mysqli_query($conn,$query);  
				
		echo '<table border="2">';
			echo '<tr>';
				echo '<th>Date</th>';
				echo '<th>Members</th>';
				echo '<th>Items</th>';
				echo '<th>Paid</th>';
				echo '<th>Amount</th>';
				echo '<th>Per_head</th>';
				echo '<th>Unselected_member</th>';
				echo '<th>Unselected_amount</th>';
			echo '</tr>';
				while($row = mysqli_fetch_array($result)){
			echo '<tr>';
				echo '<td>' . $row['date'] . '</td>';
				echo '<td>' . $row['members'] . '</td>';
				echo '<td>' . $row['items'] . '</td>';
				echo '<td>' . $row['paid'] . '</td>';
				echo '<td>' . $row['amount'] . '</td>';
				echo '<td>' . $row['per_head'] . '</td>';
				echo '<td>' . $row['unselected_member'] . '</td>';
				echo '<td>' . $row['unselected_amount'] . '</td>';
			echo '</tr>';
				}
		echo '</table>';
				?>			
	</form>			
</body>
</html>        