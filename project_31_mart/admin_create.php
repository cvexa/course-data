<?php

include_once('includes/header.php');
	session_start();
	?>
<?php


if (empty($_POST['submit'])) {
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Добре <b>Admin</b> , добави задачка:</p>";
		
	
	echo "<form action='admin_create.php' method='post'>";
    echo "<p>Въведи едно число:";
	echo "<input type='number' name='number_1'></p>";
	echo "<p>Въведи знак/или други операции:";
	echo "<input type='text' name='symbol'>/*примерно: + , - , * , / , () ,...</p>";
	echo "<p>Въведи едно число:";
	echo "<input type='number' name='number_2'><p>";
	echo "<p>Въведи решението:";
	echo "<input type='number' name='result'><p>";
    echo "<p><i>*задачата която качи админа е автоматично одобрена, и ще излиза за решаване от други</p></i>";
    echo "<p><i>*статуса за одобрение става 'ок', а админа може да променя както иска одобрението(стига да не е 'wait' или 'DELETED')</p></i>";
	echo "<p><input type='submit' name='submit' value='insert'></p>";
	echo "</form>";
	echo "<p>Още примери: <img src='img/x2.png'> <img src='img/x3.png'><p></p><img src='img/x4.png'> ....</p>";
	echo "</div>
		</div>";
}else{



$conn = mysqli_connect('localhost', 'root', '', 'math');
$number_1 = $_POST['number_1'];
	$symbol = $_POST['symbol'];
	$number_2 = $_POST['number_2'];
	$result = $_POST['result'];
	$added_by='Admin';
	$ok='ok';
	//$date = date('Y-m-d');



		
	$insert_query = 	"INSERT INTO lvl3 (number_1,symbol,number_2,result,added_by,approve) 
						VALUES ('$number_1','$symbol','$number_2','$result','$added_by','$ok')";
	$insert_query2=   	"INSERT INTO added (added_by) 
						VALUES ('$added_by')";				
		
			$insert_result= mysqli_query($conn, $insert_query);
			$insert_result2= mysqli_query($conn, $insert_query2);
			if ($insert_result) {
				echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
				echo "Admin Успешно добавихте $number_1 $symbol $number_2   = $result в базата данни!";
				
				echo "<p><a href='admin_logged_in.php'>Прегледай</a></p>";
				echo "</div></div>";
			}else{
				echo "Неуспешно добавяне на запис в базата данни! Моля опитайте по-късно!";
			}
		
		}

?>
<?php
	include_once('includes/footer.php');
	?>	