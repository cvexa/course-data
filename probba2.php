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
$a=rand(1,80);
$b="school";
$c="retire";

echo $a.' ';
if($a < 18 ){
	echo "$b";
}else{
	echo "$c";
}




?>
</body>
</html>