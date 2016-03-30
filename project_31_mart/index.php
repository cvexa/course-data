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
	include_once('includes/footer.php');
	?>
