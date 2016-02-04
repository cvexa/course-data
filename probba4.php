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
$max=99;

echo "<ul><li>";
while ($a <= $max) {
	echo $a." ";
	$a++;
	if ($a % 5 == 0) {
		echo "</li><li>";
	}
	$a++;
}
echo "</li></ul>";








?>
</body>
</html>