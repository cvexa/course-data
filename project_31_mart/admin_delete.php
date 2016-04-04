<?php

include_once('includes/header.php');
	session_start();
	?>
<?php

$conn = mysqli_connect('localhost', 'root', '', 'math');
/*if (!$conn) {
die("Connection failed: " .mysqli_connect_error());
} else {
echo "Connected successfully !";
}
*/
$id = $_GET['id'];
$date = date('Y-m-d');


$delete_query = "UPDATE lvl3 SET date_deleted ='$date',approve = 'DELETED' WHERE id_math=$id";
$delete_result = mysqli_query($conn, $delete_query);

if ($delete_result) {
 		echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";		
		echo "Успешно изтрихте този запис от базата данни!";
		echo "<p><a href='admin_logged_in.php'>Read DB</a></p>";
		echo "</div></div>";
	}else{
		echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";	
		echo "Неуспешно изтриване на запис в базата данни! Моля опитайте по-късно!";
		echo "<p><a href='admin_logged_in.php'>Read DB</a></p>";
		echo "</div></div>";
	}

?>