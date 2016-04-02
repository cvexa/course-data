<?php
	include_once('includes/header.php');
	session_start();
	?>
<?php

$user=$_SESSION['user'];
$score_lvl2=$_SESSION['score2'];

$corners="prav";
$gradus=90;


if ($_GET['corners'] == $corners & $_GET['gradus'] == $gradus) {
	$score_lvl2+=10;
	$_SESSION['score2']=$score_lvl2;
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Браво <b>$user</b> , позна правилно ,това е нова задачка:</p>
		<p>Признаци за подобие на триъгълници, колко са признаците ? :
		<form action='page6_2.php' method='get'>
		<input type='number' name='how_many' placeholder='?'>
		<input type='submit' name='submit' value='избери'>
		</form>
		 
		</p>
		 <p><i>ако не попълниш нищо отговора се счита за грешен </i></p>
		</div>
		</div>";
		
}else{
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Съжалявам <b>$user</b> , НЕ позна правилно ,това е нова задачка:</p>
		<p>Признаци за подобие на триъгълници, колко са признаците ? :
		<form action='page6_2.php' method='get'>
		<input type='number' name='how_many' placeholder='?'>
		<input type='submit' name='submit' value='избери'>
		</form>
		
		</p>
		 <p><i>ако не попълниш нищо отговора се счита за грешен </i></p>
		</div>
		</div>"; 
	
}





?>
<?php
	include_once('includes/footer.php');
	?>	