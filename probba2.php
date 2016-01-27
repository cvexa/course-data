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
$a=rand(0,100);

if ($a % 2 ==0){
	echo '$a ='.$a." even";
	if ($a === 0){
		echo "$a = 0";
	}
}elseif ($a % 2 != 0) {
	echo '$a ='.$a." Odd";
}else{
	echo '$a=' .$a. ' $a = 0';
}



?>
</body>
</html>