<?php
$conn = mysqli_connect('localhost', 'root', '', 'probba');
// if (!$conn) {
// 	die("Connection failed: " .mysqli_connect_error());
// 	} else {
// 	echo "Connected successfully !";
// 	}
if(empty($_POST['submit'])){
	echo "<p>Insert new </p>";
	echo "<form action='probba12.php' method='post'>";
//city_name!!! same as in the DB!!!
	echo "<input type='text' name='clothes'>";
	echo "<input type='submit' name='submit' value='insert'>";
	echo "</form>";
}
else{
//city_name!!! same as in the DB!!!	
	$clothes = $_POST['clothes'];
		//you can shorten var names - $insert_query - $q or smth else
	$insert_query = 	"INSERT INTO clothes (clothes_name) 
						VALUES ('$clothes')";
			//or $result
			$insert_result= mysqli_query($conn, $insert_query);
			if ($insert_result) {
				//success code can be read db query - 
				//you can print the entire info your newly inserted in the db query 
				//is appended to
				//it depends on you and UI you have designed ...
				//the same with unseccess code=
				echo "Успешно добавихте $clothes в базата данни!";
				echo "<p><a href='read.php'>Read DB</a></p>";
			}else{
				echo "Неуспешно добавяне на запис в базата данни! Моля опитайте по-късно!";
			}
}

?>