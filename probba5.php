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
echo "<table border='1'>";
$m = 3;
$n = 4;
for ($j=1; $j <=$m; $j++) { 
     echo "<p><tr>";	


for ($i=1; $i <=$n  ; $i++) { 
    echo "<td>$j,$i</td>";
    
}
}
echo "</p></tr>";
echo "</table>";




?>
</body>
</html>