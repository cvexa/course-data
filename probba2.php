<!html>
<head>
	<title>Probba2 php</title>
	<style type="text/css">
	body{
		background-color: grey;
	}
	</style>
</head>
<body>


<?php

header('content-type:text/html; charset=utf-8');




//newtask
$var = 'o';

switch ($var) {
	case 'a':
		echo "vocal";
		break;
	case 'e':
		echo "vocal";
		break;
	case 'o':
		echo "vocal";
		break;
	case 'i':
		echo "vocal";
		break;		
	
	default:
		echo "constant";
		break;
}

?>
</body>
</html>