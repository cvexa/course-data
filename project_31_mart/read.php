<?php

include_once('includes/header.php');
	session_start();
	?>
<?php

$conn = mysqli_connect('localhost', 'root', '', 'math');

$read_query = 	"SELECT number_1,symbol,number_2 FROM lvl3 ORDER BY rand() LIMIT 1 ";
$read_result = mysqli_query($conn, $read_query);


	if (mysqli_num_rows($read_result) > 0) {
		while($row = mysqli_fetch_assoc($read_result)){
		$counter=count($row);
        

      
        	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";

		foreach ($row as $value) {
			echo $value." "." ";

		
		}
	echo "<form action='read.php' method='get'>";
input('1','number','one','enter');
submit('реши','реши');
echo "</form>";
			echo "</div></div>";
	}

}





















?>
<?php
	include_once('includes/footer.php');
	?>	