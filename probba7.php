<?php header('content-type:text/html; charset=utf-8');?>
<!html>
<head>
	<title>Probba7 php</title>
	<style type="text/css">
	body{
		text-align: ;
	}
	</style>
</head>

<?php

$arr = array('7','9','0','1','3','5','2','3','4','0',);
$chek=1;
$count=count($arr);
for ($i=0; $i < ($count-1) ; $i++) { 
	if ($arr[$i] > ($arr[$i]+1)) {
		$chek++;
	}
}
echo $chek;


$n = 7;
$n1 = $n;
$x = 1;
$y = 1;
echo "<table border = 1>";
while ( $y <= $n1) {
	echo "<tr>";
	while ($x <= $n) {
		echo '<td>'.$x.' ';
		$x++;
		echo '</td>';
	}
	echo "</tr>";
	$y++;
	$x = $y;
	$n++;	
}
echo "</table>";


$n = "a";
$x = 1;
$c = 1;
  
while ( $x <= 29) {
	while ( $c<= $x) {
		echo $n;
		$c++;
	}
	echo "<br>";
	$c = 1;
	$x++;
}

$a="*";
$n=20;
$form=($n-1)/2;
for ($i=1; $i<=$n ; $i+=2) {
 for ($k=($n-$i)/2; $k >=0 ; $k--) { 
			echo "*";
		} 
	echo "<p>";
	for ($j=1; $j<=$i ; $j++) { 
		
		echo $a;
		
		
	}
	echo "</p>";
}


?>
</body>
</html>