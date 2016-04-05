<?php

include_once('includes/header.php');
	session_start();
	?>
<?php
	echo "<div class='row'>
	<div class='alert alert-success col-xs-6 col-md-6
		col-xs-offset-3 text-center'>";
$conn=mysqli_connect('localhost','root','','math');




$read_query = 	"SELECT * FROM lvl3 
				WHERE 1 ";
$read_result = mysqli_query($conn, $read_query);

echo "<table border='1'>";

	echo "<tr><td>
			<div class='alert alert-danger col-xs-10 col-md-10 col-xs-offset-1 col-md-offset-1'><a href='admin_logout.php'>ADMIN LOGOUT</a>
			</div></td></tr>";

echo "<tr><td>
<div class='alert alert-success col-xs-10 col-md-10 col-xs-offset-1 col-md-offset-1'>
			<a href='admin_create.php'>Добави в  DB</a>
			</div></td><tr>";

	echo "</div></div>";
	echo "<tr>
	<td><b>Всички записи в DB с задачите качени от потребител</b></td>
	</tr>";
	if (mysqli_num_rows($read_result) > 0) {
		while($row = mysqli_fetch_assoc($read_result)){ 
		echo '<tr><td><div class="alert alert-warning col-md-2 col-xs-1">НОМЕР 1= ['.$row['number_1']."] </div>"
		.'<div class="alert alert-warning col-md-2 col-xs-1">СИМВОЛ= ['.$row['symbol']."] </div>"
		.'<div class="alert alert-warning col-md-2 col-xs-1">НОМЕР 2= ['.$row['number_2']."] </div>"
		.'<div class="alert alert-warning col-md-2 col-xs-1">РЕЗУЛТАТ= ['.$row['result']."] </div>"
		.'<div class="alert alert-warning col-md-2 col-xs-1">ДОБАВЕНА ОТ= ['.$row['added_by']."] </div>"
		.'<div class="alert alert-warning col-md-2 col-xs-1">ОДОБРЕНИЕ= ['.$row['approve']."]</div>";
		

		
		echo ' '.'<div class="alert alert-info col-xs-10 col-md-10 col-xs-offset-1 col-md-offset-1">
		       <p><a href="update.php?id='.$row['id_math'].'">Edit номер 1/</a>';
		echo ' '.'<a href="update.php?id='.$row['id_math'].'">Edit символ/</a>';
		echo ' '.'<a href="update.php?id='.$row['id_math'].'">Еdit номер 2/</a>';
		echo ' '.'<a href="update.php?id='.$row['id_math'].'">Edit резултат/</a>';
		echo ' '.'<a href="update.php?id='.$row['id_math'].'">Edit добавена от/</a></p>';
		echo ' '.'<p><a href="update.php?id='.$row['id_math'].'">Edit одобрение</a></p></div>';

		echo ' '.'<div class="alert alert-danger col-xs-10 col-md-10 col-xs-offset-1 col-md-offset-1">
		<p><a href="admin_delete.php?id='.$row['id_math'].'">Delete</a></p></div>';
	echo "</td></tr>";
		
		}

	}

echo "</table>";


			
			
	?>
