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

?>
</body>
</html>