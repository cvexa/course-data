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

$n = 1;
for ($j=0; $j < 30; $j++) { 
	echo "<p> $j - row ";


for ($i=1; $i <=10  ; $i++) { 
    echo $n." ";
    $n++;
}
}
echo "</p>";




?>
</body>
</html>