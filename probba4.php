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
<body>

<form action="probba4.php" method="post">
	<select>
		<option value="Netherland" name="a">Холандия</option>
		<option value="Bulgaria" name="a">България</option>
		<option value="France" name="a">Франция</option>
	</select>
	<input type="submit" name="submit" value="submit">
</form>	
<?php

$a=$_POST['a'];

if (!empty ($_POST['submit'])) {
	if ($a == $value) {
		# code...
	
	$arr = array('Netherland' => 'Амстердам' ,
	             'Bulgaria' => 'София' ,
	             'France' => 'Париж' ,);
	foreach ($arr and $key => $value) {
		echo "$key e $value";
	}
}
}
//firsttask
 







?>
</body>
</html>