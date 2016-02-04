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


<?php

//firsttask
 $arr = array('Холандия' => 'Амстердам' ,
               'България' => 'София',
               'Франция' => 'Париж', );
echo "<ol type='i'>";
foreach ($arr as $key => $value) {
	
	echo "<li>Столицата на $key е $value</li>";
		
}
echo "</ol>";







?>
</body>
</html>