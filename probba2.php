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
$var = 'sun';

switch ($var) {
	case 'mon':
		
		
	case 'tue':
		
		
	case 'wed':
		
		
	case 'thu':
		
	case 'fri':
		echo "Work day";	
		break;	
	case 'sat':
	case 'sun':
	    echo "Holiday";	
	    break;	
	default : 
		echo "Wrong value";
}

?>
</body>
</html>