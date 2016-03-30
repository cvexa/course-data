<?php

include_once('includes/header.php');
	session_start();
	?>
<?php

$user=$_SESSION['user'];


$conn = mysqli_connect('localhost', 'root', '', 'math');
$number_1 = $_POST['number_1'];
	$symbol = $_POST['symbol'];
	$number_2 = $_POST['number_2'];
	$result = $_POST['result'];
	$added_by=$user;
		
	$insert_query = 	"INSERT INTO lvl3 (number_1,symbol,number_2,result,added_by) 
						VALUES ('$number_1','$symbol','$number_2','$result','$added_by')";
		
			$insert_result= mysqli_query($conn, $insert_query);
			if ($insert_result) {
				echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
				echo "$user Успешно добавихте $number_1 $symbol $number_2   = $result в базата данни!";
				echo "<p><a href='read.php'>Реши качена от друг ? </a></p>";
				echo "</div></div>";
			}else{
				echo "Неуспешно добавяне на запис в базата данни! Моля опитайте по-късно!";
			}

?>
<?php
	include_once('includes/footer.php');
	?>	