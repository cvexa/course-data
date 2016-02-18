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
echo '<table border="1">';
echo "<tr>";
echo "
<td>brand</td>
<td>model</td>
<td>color</td>
<td>price</td>
<td>sold</td>
";
echo "</tr>";
for ($i=0; $i < $count; $i++) { 
	echo "<tr>";
	foreach ($cars[$i] as $value) {
		echo "<td>".$value."</td>";
	}
	echo "</tr>";
}
echo '</table>';
?>
</body>
</html>