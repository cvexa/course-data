
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

	<div class="container-fluid bg-success">
		<div class="row">
			<p><div class="col-xs-4">asdasda sdasd</div>
				<div class="col-xs-4">asdasdas dasd</div></p>

				<p><div class="col-xs-3">asda sdasdasd</div>
					<div class="col-xs-3 text-danger">asdasdas dasd</div></p>

					<p><div class="col-xs-6 text-primary">asda sdasdasd</div>
						<div class="col-xs-4 text-success">asdasdas dasd</div></p>
					</div>
				</div>
				<?php

				$arr = array();
				$check = 0;
				$flag = 0;

			while ($check < 100) {	
		$flag++;	
			
					$num = rand(2,12);
					if($num % 2 == 0) {
						$arr[$check]= $num;
						echo  "<div class='col-xs-1 col-offset-2'>". $arr[$check] ." ";
						$check++;
						if ($check % 3 == 0) {
							echo "</div><div class='row'>";

						}
					}
}


echo 'flag'.$flag;

						?>
					</body>
				</body>
				</html>



















