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

$arr = array();

for ($i=0; $i <100 ; $i++) { 

	$arr[$i] = rand(1,1000);
	echo $arr[$i].' ';
}
$count = count($arr);

echo "Array elements count ". $count;




?>
</body>
</html>