<?php
	include_once('includes/header.php');
	session_start();
	?>
<?php
$user=$_SESSION['user'];
$final1=$_SESSION['score'];
$finaltrue=$_SESSION['true'];


if ($_GET['square'] == $finaltrue) {
	$final1++;
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Браво <b>$user</b> верен отговор, резултатът ти от  1-во ниво с верни отговори е<p><b>$final1 /4</b>!!!</p></p>
		<p>Да запиша ли резултата ти в таблицата с резултати за 1-во нива ? </p>
		<p>Виж таблицата с резултати за 1-во ниво</p>
		</div>
		</div>";
}else{
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>
		<p>Съжалявам , <b>$user</b> грешен отговор и резултатът ти  от 1-во ниво с верни отговори е <p>имаш <b>$final1 /4</b>!!!</p></p>
		<p>Да запиша ли резултата ти в таблицата с резултати за 1-во нива ? </p>
		<p>Виж таблицата с резултати за 1-во ниво</p>
		<p>Виж таблицата с всички резултати</p>
		</div>
		</div>";

}


























?>
<?php
	include_once('includes/footer.php');
	?>	