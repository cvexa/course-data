<?php header('content-type:text/html; charset=utf-8');?>
<!html>
<head>
	<title>Probba8 php</title>
	<style type="text/css">
	body{
		text-align: ;
	}
	</style>
</head>

<?php
$cars=array(array('brand' =>'vw' ,'model' =>'polo','color'=>'grey','price'=>'25.000','sold'=>'100' ),
            array('brand' =>'skoda' ,'model' =>'yeti','color'=>'white','price'=>'33.000','sold'=>'150' ),
            array('brand' =>'mazda' ,'model' =>'rx8','color'=>'green','price'=>'55.000','sold'=>'200' ),
            array('brand' =>'opel' ,'model' =>'kadet','color'=>'blue','price'=>'100.000','sold'=>'250' ),
            );

$count=count($cars);
$sum=0;
for ($j=0; $j <$count ; $j++) { 
	$cars[$j]['profit']=$cars[$j]['price']*$cars[$j]['sold'];
	$sum +=$cars[$j]['profit'];
}
echo '<table border="1">';
echo "<tr>";
echo "
<td>brand</td>
<td>model</td>
<td>color</td>
<td>price</td>
<td>sold</td>
<td>profit</td>
";
echo "</tr>";
for ($i=0; $i < $count; $i++) { 
	$n=$i+1;
	echo "<tr>";
	foreach ($cars[$i] as $value) {
		echo "<td>".$value."</td>";
	}
	echo "</tr>";
}
echo '</table>';
echo "<p>$sum profit from all</p>";

$m=4;
$n=4;
$num1=1;
$num2=$m*$n;

$arr=array(array());
for ($i=0; $i <$m ; $i++) { 
	for ($j=0; $j <$n ; $j++) { 
		$arr[$i][$j]=$num2;
		$num2--;
	}
}
echo "<table border='1'>";
for ($l=0; $l < $m ; $l++) { 
	echo "<tr>";
	for ($p=0; $p < $n ; $p++) { 
		echo "<td>".$arr[$l][$p]."</td>";
	}
	echo "</tr>";
}
echo "</table>";


?>
</body>
</html>