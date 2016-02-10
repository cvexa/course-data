
<!HTML>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



<p><ul class="nav nav-pills" action="probba6_1.php" name"="button">
  <li><button type="button" class="btn btn-success">Бутон</button></li>
  <li><button type="button" class="btn btn-success">Бутон2</button></li>
  <li><button type="button" class="btn btn-success">Бутон3</button></li>
  </ul></p>
</body>
</html>
<?php

$arr = array('Бутон' =>'Hello' ,
             'Бутон2' =>'Hello2',
             'Бутон3' =>'Hello3' );
echo '<ul class="nav nav-pills">';
foreach ($arr as $value) {
	
		echo '<li role="btn btn-success">'.$value.'</li>';
	
}
echo '</ul>'
?>












