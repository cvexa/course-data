<?php

include_once('includes/header.php');
	session_start();
	?>
<?php

$result=$_SESSION['result'];
$user=$_SESSION['user'];
$added_by=$_SESSION['added_by'];


if (empty($_GET['submit'])) {
	echo "<a href='read.php'>Опитай пак !</a>";
}else{
	if ($_GET['one'] == $result) {

        	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
		echo "Браво <b>$user</b> реши правилно задачата качена от <b>$added_by</b>";
		echo "<p><a href='read.php'>Реши друга ?</a></p>";
		echo "<p><a href='index.php'>Изход</a></p>";
		echo "</div></div>";
	}else{
		echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
		echo "Съжалявам <b>$user</b> не реши правилно задачата качена от <b>$added_by</b>";
		echo "<p><a href='read.php'>Реши друга ?</a></p>";
		echo "<p><a href='index.php'>Изход</a></p>";
		echo "</div></div>";
	}
}



?>
<?php
	include_once('includes/footer.php');
	?>	