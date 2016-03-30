	<?php
	include_once('includes/header.php');
	session_start();
	?>
	<div  class="container text-center">
		
		<div  id='hello' class="col-lg-6 col-lg-offset-3 text-center">
		<label for='login'>Здравейте, Моля попълнете полетo за да продължим : </label>
		<?php
		echo "<p><form action='page2.php' method='post'>";
		input('login','text','user_name','Enter user name...');
		echo "</p>";
		echo "<p>";
		submit('Continue','btn btn-info');
		echo "</p></form>";
		
		?>
	
        </div>
	</div>

	<?php
	$conn = mysqli_connect('localhost', 'root', '', 'math');

$read_query = 	"SELECT user_name, lvl, score FROM scoreboard where date_deleted is null ORDER BY id_score DESC LIMIT 5";
$read_result = mysqli_query($conn, $read_query);
echo "<p><div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
echo "<p>Последните 5 записани в Резултатите:";
echo "</div></div></p>";

	if (mysqli_num_rows($read_result) > 0) {
	
		while($row = mysqli_fetch_assoc($read_result)){
		
        echo "<div class='row'>
	<div class='alert alert-success col-xs-4 
		col-xs-offset-4 text-center'>";
		
			
		
        echo "<p>Име - Ниво - Точки</p>";
		
		echo $row['user_name']." ----- ".$row['lvl']." ----- ".$row['score'];
		echo "</div></div>";
		}
}

?>

	
	<?php
	include_once('includes/footer.php');
	?>
