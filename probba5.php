<?php header('content-type:text/html; charset=utf-8');?>
<!html>
<head>
	<title>Probba5 php</title>
	<style type="text/css">
	body{
		text-align: ;
	}
	</style>
</head>

<?php

$sum = 0;


for ($a=1; $a <=100 ; $a++) { 
	echo $a.' ';
	$sum+=$a;

}
echo "<p> $sum е сумата.</p>";








?>
</body>
</html>