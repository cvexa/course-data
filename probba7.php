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
$chek=1;
$count=count($arr);
$arr = array('7','9','0','1','3','5','2','3','4','0',);

for ($i=0; $i < ($count-1) ; $i++) { 
	if ($arr > ($arr+1)) {
		$chek++;
	}
}
echo $chek;

?>
</body>
</html>