<!html>
<head>
	<title>Probba php</title>
	<style type="text/css">
	#a{
		color: red;
	}
	#b{
		color: blue;
	}
	#c{
		color: green;
	}
	body{
		background-color: grey;
	}
	</style>
</head>
<body>


<?php

header('content-type:text/html; charset=utf-8');
$first = "Hello";
$second="1st";
$third="World";

echo "<p id='a'>".$first."</p><p id='b'>".$second."</p><p id='c'>".$third."</p>";


?>
</body>
</html>