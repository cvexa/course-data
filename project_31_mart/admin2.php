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
	<div class='alert alert-success col-xs-6 
		col-xs-offset-3 text-center'>";
$conn=mysqli_connect('localhost','root','','math');

if (!$conn) {
	die("connection faill:".mysqli_connect_error());

}
else{


				$read_query = 	"SELECT * FROM lvl3 
				WHERE 1 ";
$read_result = mysqli_query($conn, $read_query);

echo "<table border='1'>";
echo "<tr><td>Всички записи в DB с задачите качени от потребител</td></tr>";
	if (mysqli_num_rows($read_result) > 0) {
		while($row = mysqli_fetch_assoc($read_result)){ 
		echo '<tr><td>НОМЕР 1- ['.$row['number_1']."] ||".'СИМВОЛ- ['.$row['symbol']."] ||".'НОМЕР 2- ['.$row['number_2']."] ||".'РЕЗУЛТАТ- ['.$row['result']."] ||".'ДОБАВЕНА ОТ- ['.$row['added_by']."] ||".'ОДОБРЕНИЕ- ['.$row['approve']."]";
		

		
		echo ' '.'<p><a href="update.php?id='.$row['id_math'].'">Edit номер 1</a>';
		echo ' '.'<a href="update.php?id='.$row['id_math'].'">Edit символ</a>';
		echo ' '.'<a href="update.php?id='.$row['id_math'].'">Еdit номер 2</a>';
		echo ' '.'<a href="update.php?id='.$row['id_math'].'">Edit резултат</a>';
		echo ' '.'<a href="update.php?id='.$row['id_math'].'">Edit добавена от</a>';
		echo ' '.'<a href="update.php?id='.$row['id_math'].'">Edit одобрение</a></p>';

		echo ' '.'<a href="admin_delete.php?id='.$row['id_math'].'">Delete</a>';
	echo "</td></tr>";
		
		}

	}

echo "</table>";


			}
			echo "<a href='admin_create.php'>Добави в  DB</a>";
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
