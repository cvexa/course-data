<?php header('content-type:text/html; charset=utf-8');?>
<!html>
<head>
	<title>Probba4 php</title>
	<style type="text/css">
	body{
		text-align: ;
	}
	</style>
</head>

<?php

$a=1;
$max=100;

echo "<ul><li>";
while ($a <= $max) {
	echo $a." ";
	
	if (($a+1) % 10 == 0) {
		echo "</li><li>";
	}
	$a+=2;
}
echo "</li></ul>";








?>
</body>
</html>