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

$a =rand(10,100);
$b =rand(100,200);


for ($x=$a; $x <=$b ; $x++) { 
	    if ($x%3 == 0) {
	    	echo "<p>$x се дели на 3</p>".'' ;
	    }elseif($x%7 == 0)
		echo "<p>$x се дели на 7</p>";
	    }

	    echo "$a - $b";








?>
</body>
</html>