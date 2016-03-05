<?php
header('content-type:text/html; charset=utf-8');




$c1="<img src='img/cup.png' height='200' weight='200'>";
$c2="<img src='img/win_cup.jpg' height='200' weight='200'>";



echo "<div id='gamecode'>";

$win=rand(1,3);

if ($win < 2) {
			echo $c2.$c1.$c1;
		}elseif ($win > 2) {
			echo $c1.$c1.$c2;
		}elseif ($win == 2) {
			echo $c1.$c2.$c1;
		}




if (empty($_POST['cup'])) {
	echo "Please select a cup !";
}else{
	
	if ($_POST['cup'] == $win) {
		echo "<p>ПОЗНА!!!</p>";
		echo "<p><img src='img/victory.gif'></p>";
		echo "<a href='test02_1.html'><p><img src='img/try_again.gif'><p></a>";
	}else{
		
		echo "<p>НЕ ПОЗНА!!!</p>";
		echo "<a href='test02_1.html'><p><img src='img/try_again.gif'><p></a>";
	}
	

}
echo "</div>";


?>
<!html>
<head>
<title>test</title>
<meta charset="UTF-8">
<style type="text/css">
body{
	background-image: url(img/bg.jpg);
}
#gamecode{
	text-align: center;
}
a{
	text-decoration: none;
	font-weight: bold;
	color:blue;
    
}

</style>
</head>
<body>
	</body>
	</html>