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
	//$date = date('Y-m-d');
if (empty($number_1)) {
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
		echo "Въведи първото число!";
		echo "</div></div>";
	}elseif (empty($symbol)) {
		echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
		echo "Въведи символа !";
		echo "</div></div>";
	}elseif (empty($number_2)) {
		echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
		echo "Въведи второто число!";
		echo "</div></div>";
	}elseif (empty($result)) {
		echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
		echo "Въведи резултат!";
		echo "</div></div>";
	}else{


		
	$insert_query = 	"INSERT INTO lvl3 (number_1,symbol,number_2,result,added_by) 
						VALUES ('$number_1','$symbol','$number_2','$result','$added_by')";
	$insert_query2=   	"INSERT INTO added (added_by) 
						VALUES ('$added_by')";				
		
			$insert_result= mysqli_query($conn, $insert_query);
			$insert_result2= mysqli_query($conn, $insert_query2);
			if ($insert_result) {
				echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
				echo "$user Успешно добавихте $number_1 $symbol $number_2   = $result в базата данни!";
				echo "<p>Сега остава да бъде одобрена от Admin и ще бъде качена заедно с другите одобрени задачки за решаване!</p>";
				echo "<p><a href='read.php'>Реши качена от друг ? </a></p>";
				echo "</div></div>";
			}else{
				echo "Неуспешно добавяне на запис в базата данни! Моля опитайте по-късно!";
			}
		}

?>
<?php
	include_once('includes/footer.php');
	?>	