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
if(empty($_POST['submit'])){

	$id = $_GET['id'];

	$q = "SELECT * FROM lvl3 WHERE id_math = $id";
	$res = mysqli_query($conn, $q);

	$row = mysqli_fetch_assoc($res);
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";	

	echo "<p>Edit </p>";
	echo "<form action='update.php' method='post'>";
	
	echo "<input type='hidden' name='id_math' 
	value=".$row['id_math'].">";
echo "Edit/Update - НОМЕР 1 : ";
	echo "<input type='number' name='number_1' value='".$row['number_1']."'>";
echo "<p>Edit/Update - СИМВОЛ : ";
	echo "<input type='text' name='symbol' value='".$row['symbol']."'></p>";	
echo "<p>Edit/Update - НОМЕР 2 : ";
	echo "<input type='number' name='number_2' value='".$row['number_2']."'></p>";	
echo "<p>Edit/Update - РЕЗУЛТАТ : ";
	echo "<input type='text' name='result' value='".$row['result']."'></p>";
echo "<p>Edit/Update - ДОБАВЕНА ОТ: ";
	echo "<input type='text' name='added_by' value='".$row['added_by']."'></p>";	
echo "<p>Edit/Update - ОДОБРЕНИЕ : ";
	echo "<input type='text' name='approve' value='".$row['approve']."'></p>";					
	echo "<input type='submit' name='submit' value='update'>";
	echo "</form>";
	echo "<a href='read.php'>PREVIEW DB</a>";
	echo "</div></div>";
}else {

	$id = $_POST['id_math'];
	$number_1 = $_POST['number_1'];
	$symbol=$_POST['symbol'];
	$number_2=$_POST['number_2'];
	$result=$_POST['result'];
	$added_by=$_POST['added_by'];
	$approve=$_POST['approve'];
	$update_query = "UPDATE lvl3 
					SET number_1 ='$number_1', symbol = '$symbol', number_2 = '$number_2', result = '$result',added_by = '$added_by', approve = '$approve'
					WHERE id_math=$id";
					
	$update_result= mysqli_query($conn, $update_query);
	if ($update_result) {
 		echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";	
		echo "Успешно направихте промени по базата данни!";
		echo "<p><a href='admin_logged_in.php'>Read DB</a></p>";
		echo "</div></div>";
	}else{
		echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";	
		echo "Неуспешна промяна на запис в базата данни! Моля опитайте по-късно!";
		echo "<p><a href='admin_logged_in.php>PREVIEW DB</a></p>";
		echo "</div></div>";
	}
}

?>