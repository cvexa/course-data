<?php

include_once('includes/header.php');
	session_start();
	?>
<?php


if (empty($_POST['admin'])) {
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
	echo "Enter user";
	echo "</div></div>";
}elseif (empty($_POST['password'])) {
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
	echo "Enter password";
	echo "</div></div>";
}else{

$admin="admin";
$pass="12344";
if ($_POST['admin'] == $admin && $_POST['password'] == $pass) {



echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";

	echo "<p><a href='admin_logged_in.php'>Добре Дошъл !</a></p>";
	echo "</div></div>";



}else{
	echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
	echo "Опитай пак !";
	echo "<p><a href='admin.php'>BACK</a></p>";
	echo "</div></div>";
}


}


















?>
