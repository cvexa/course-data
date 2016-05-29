<?php 
$conn = mysqli_connect('localhost', 'root', '', 'hospitals');

// if (!$conn) {
// 	die("Connection failed: " .mysqli_connect_error());
// 	} else {
// 	echo "Connected successfully !";
// 	}
if(empty($_POST['submit'])){
	echo "<p>Добавяне на нови лечебни заведения</p>";
	echo "<form action='create.php' method='post'>";

	echo "<input type='text' name='hospitals_name'>";
	echo "<input type='submit' name='submit' value='insert'>";
	echo "</form>";
	echo "<p><a href='task05.php'>Виж лечебните заведения</a></p>";
}
else{

	$hospitals_name = $_POST['hospitals_name'];
		
	$insert_query = 	"INSERT INTO hospitals (hospitals_name) 
						VALUES ('$hospitals_name')";
			
			$insert_result= mysqli_query($conn, $insert_query);

			if ($insert_result) {
				
				echo "Успешно добавихте $hospitals_name в базата данни!";
				echo "<p><a href='task05.php'>Виж лечебните заведения</a></p>";
			}else{
				echo "Неуспешно добавяне на запис в базата данни! Моля опитайте по-късно!";
			}
}