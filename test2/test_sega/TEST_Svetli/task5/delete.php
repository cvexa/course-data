<?php 
$conn = mysqli_connect('localhost', 'root', '', 'hospitals');

// if (!$conn) {
// 	die("Connection failed: " .mysqli_connect_error());
// 	} else {
// 	echo "Connected successfully !";
// 	}

$hospitals_id = $_GET['id'];
$date = date('Y-m-d');


$delete_query = "UPDATE hospitals SET date_deleted ='$date' WHERE hospitals_id=$hospitals_id";
$delete_result = mysqli_query($conn, $delete_query);



if ($delete_result) {
 				
		echo "Успешно изтрихте запис в базата данни!";
		echo "<p><a href='task05.php'>Виж</a></p>";
	}else{
		echo "Неуспешно изтриване на запис в базата данни! Моля опитайте по-късно!";
		echo "<p><a href='#'>link to somewhere ... </a></p>";
	}


