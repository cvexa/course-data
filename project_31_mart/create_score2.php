<?php

include_once('includes/header.php');
	session_start();
	?>
<?php

$user=$_SESSION['user'];
$final_score=$_SESSION['score'];

$conn = mysqli_connect('localhost', 'root', '', 'math');

		
	$insert_query = 	"INSERT INTO scoreboard (user_name,lvl,score) 
						VALUES ('$user','2','$final_score')";
		
			$insert_result= mysqli_query($conn, $insert_query);
			if ($insert_result) {
				echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
				echo "Успешно добавихте <b>$user</b> на ниво - 2  с резултат - $final_score в базата данни!";
				echo "<p><a href='read_score2.php'>виж резултатите</a></p>";
				echo "</div></div>";
			}else{
				echo "Неуспешно добавяне на запис в базата данни! Моля опитайте по-късно!";
			}

?>
<?php
	include_once('includes/footer.php');
	?>	