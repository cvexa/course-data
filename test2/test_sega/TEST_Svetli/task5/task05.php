<?php

$conn = mysqli_connect('localhost', 'root', '', 'hospitals');

// if (!$conn) {
// 	die("Connection failed: " .mysqli_connect_error());
// 	} else {
// 	echo "Connected successfully !";
// 	}

$read_query = 	"SELECT * FROM hospitals 
				WHERE date_deleted IS NULL";

$read_result = mysqli_query($conn, $read_query);


echo "<table border='1'>";

	if (mysqli_num_rows($read_result) > 0) {
		
		while($row = mysqli_fetch_assoc($read_result)){ 
		echo '<tr><td>'.$row['hospitals_name'];
		echo '<a href="update.php?id='.$row['hospitals_id'].'">Update</a>';
		echo " ".'<a href="delete.php?id='.$row['hospitals_id'].'">Delete</a></td></tr>';
	
		

		
		}
		
	}

echo "</table>";
echo '<a href="create.php">Create Hospitals</a>';
