<?php

$conn = mysqli_connect('localhost', 'root', '', 'hospitals');
// if (!$conn) {
//  	die("Connection failed: " .mysqli_connect_error());
//  	} else {
//  	echo "Connected successfully !";
//  	}

if(empty($_POST['submit'])){

	$hospitals_id = $_GET['id'];
//echo $id_city;
	$q = "SELECT * FROM hospitals WHERE hospitals_id = $hospitals_id";
	$res = mysqli_query($conn, $q);


	$row = mysqli_fetch_assoc($res);

	echo "<p>Edit</p>";
	echo "<form action='update.php' method='post'>";

	echo "<input type='hidden' name='hospitals_id' value=".$row['hospitals_id'].">";


	echo "<input type='text' name='hospitals_name' value='".$row['hospitals_name']."'>";
	echo "<input type='submit' name='submit' value='update'>";
	echo "</form>";
}else {

	$hospitals_id = $_POST['hospitals_id'];
	$hospitals_name = $_POST['hospitals_name'];


	$update_query = "UPDATE hospitals
					SET hospitals_name ='$hospitals_name' 
					WHERE hospitals_id=$hospitals_id";
					
	$update_result= mysqli_query($conn, $update_query);

	if ($update_result) {
 				
		echo "Успешно променихте $hospitals_name в базата данни!";
		echo "<p><a href='task05.php'>Read DB</a></p>";
	}else{
		echo "Неуспешна промяна на запис в базата данни! Моля опитайте по-късно!";
		echo "<p><a href='#'>link to somewhere ... </a></p>";
	}

}
