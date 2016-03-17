<?php

//you can include the db connection code in separate file
//and include this file
$conn = mysqli_connect('localhost', 'root', '', 'probba');
// if (!$conn) {
//  	die("Connection failed: " .mysqli_connect_error());
//  	} else {
//  	echo "Connected successfully !";
//  	}
if(empty($_POST['submit'])){
//it is better the get param to be id_city - not just id
	$id_type = $_GET['id'];
//echo $id_city;
	$q = "SELECT * FROM type WHERE id_type=$id_type";
	$res = mysqli_query($conn, $q);
//we expect as a result only one row
//so we do not need the while cycle
	$row = mysqli_fetch_assoc($res);
//var_dump($row);
//form is exactly the same as in create.php
//MIND THE VALUES!!! AND HIDDEN INPUT TYPE
	echo "<p>Edit the city name</p>";
	echo "<form action='probba14.php' method='post'>";
	//! we need it to transfer the id of the updated row
	echo "<input type='hidden' name='id_type' value=".$row['id_type'].">";
//city_name!!! same as in the DB!!!
	echo "<input type='text' name='type_name' value='".$row['type_name']."'>";
	echo "<input type='submit' name='submit' value='update'>";
	echo "</form>";
}else {
	//UPDATE QUERY CODE AS FOLLOWS
//var_dump($_POST);
	$id_type = $_POST['id_type'];
	$type_name = $_POST['type_name'];
	$update_query = "UPDATE type 
					SET type_name ='$type_name' 
					WHERE id_type=$id_type";
					
	$update_result= mysqli_query($conn, $update_query);
	if ($update_result) {
 				//success code can be read db query - 
 				//you can print the entire info + your newly update db query 
		
 				//it depends on you and UI you have designed ...
 				//the same is with unseccess code
 				//IT IS A GOOD PRACTICE YOU AND USER TO KNOW EXACTLY WHAT THE RESULT IS - SUCCESS OR NOT
		echo "Успешно променихте $type_name в базата данни!";
		echo "<p><a href='probba13.php'>Read DB</a></p>";
	}else{
		echo "Неуспешна промяна на запис в базата данни! Моля опитайте по-късно!";
		echo "<p><a href='#'>link to somewhere ... </a></p>";
	}
}
?>