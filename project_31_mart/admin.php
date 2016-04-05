<?php

include_once('includes/header.php');
	
	?>

<form action='admin2.php' method='post'>
	<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
	<?php
	echo "<p><label for='admin'> Enter user name </label></p>";
	input('admin','text','admin','enter username...');
	echo "<p><label for='pass'>Enter password</label></p>";
	input('pass','password','password','enter password...');
	echo "<p>";
    submit('submit','submit','Go');
    echo "</p>";
	?>
	<p><a href='check.php'>Проверка за наличност на всички  .php файлове ?</a></p> 
</div></div>
</form>


<?php
	include_once('includes/footer.php');
	?>	