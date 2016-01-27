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
$a=rand(0,100);
$b=rand(0,100);
$c=$a+$b;

echo $a.' '.$b;

if ($c % 2 ==0){
	echo ' $a+$b ='.$c." Even";
}elseif ($c % 2 != 0) {
	echo ' $a+$b ='.$c." Odd";
}else{
	echo ' $a+$b =' .$c. ' $a = faill';
}



?>
</body>
</html>