<?php
header('content-type:text/html; charset=utf-8');
session_start();
?>
<!html>
<head>
	<title>Task1 Form</title>
	<style type="text/css">
	
	</style>
</head>
<body>
	<p>Здравейте попълнете вашите години за да продължим :</p>
	<form action="task01_code.php" method="get">
		<input type="number" name="age" placeholder="Въведете години...">
		<input type="submit" name="submit" value="Изпрати">
	<p>Закупуването и консумацията на алкохолни напитки е забранено
		на лица ненавършили 18 години!!!</p>
	</form>
	</body>
	</html>