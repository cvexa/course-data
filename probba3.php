<!html>
<head>
	<title>Probba3 php</title>
	<style type="text/css">
	body{
		text-align: ;
	}
	</style>
</head>
<body>


<?php

//firsttask

header('content-type:text/html; charset=utf-8');

echo "<p>Check for valid triangle:</p>";
echo "<form action='probba3.php' method='get'>";
echo "<input type='text' name='angleA' placeholder='First Angle'>";
echo "<p><input type='text' name='angleB' placeholder='Second Angle'></p>";
echo "<p><input type='text' name='angleC' placeholder='Third Angle'></p>";
echo "<input type='submit' name='submit' value='check'>";
echo "</form>";

if (!empty($_GET['submit'])) {
	$angleA = $_GET['angleA'];
	$angleB = $_GET['angleB'];
	$angleC = $_GET['angleC'];

	$sum = $angleA + $angleB + $angleC;
	if ($sum == 180) {
		echo "Valid";
	}else{
		echo "Not Valid";
	}
}	


?>
</body>
</html>