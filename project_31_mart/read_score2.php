<?php

include_once('includes/header.php');
	session_start();
	?>
<?php

$conn = mysqli_connect('localhost', 'root', '', 'math');

$read_query = 	"SELECT user_name,lvl,score FROM scoreboard WHERE date_deleted is null and lvl = 2 ";
$read_result = mysqli_query($conn, $read_query);


	if (mysqli_num_rows($read_result) > 0) {
		while($row = mysqli_fetch_assoc($read_result)){
		$counter=count($row);
        echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
        echo "<p>Име - Ниво - Точки</p>";
		foreach ($row as $value) {
			echo $value." - "." - ";

		
		}
		echo "</div></div>";

      
        

	}


}
