<?php

include_once('includes/header.php');
	session_start();
	?>
<?php
$user=$_SESSION['user'];	

$conn = mysqli_connect('localhost', 'root', '', 'math');

$read_query = 	"SELECT number_1,symbol,number_2,result,added_by FROM lvl3 WHERE date_deleted is null and approve like '%ok%'ORDER BY rand() LIMIT 1 ";
$read_result = mysqli_query($conn, $read_query);


	if (mysqli_num_rows($read_result) > 0) {
		$row = mysqli_fetch_assoc($read_result);
		

		$_SESSION['result']=$row['result'];
		$_SESSION['added_by']=$row['added_by'];
        

      
        	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
		echo $user."  ето една задача качена от друг : ";
       echo $row['number_1']."".$row['symbol']."".$row['number_2'];
		/*foreach ($row as $value) {
			echo $value." "." ";

		
		}*/
	echo "<form action='last_lvl.php' method='get'>";
input('1','number','one','enter');
submit('реши','реши');
echo "</form>";
			echo "</div></div>";
	

}
























?>
<?php
	include_once('includes/footer.php');
	?>	