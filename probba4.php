<?php header('content-type:text/html; charset=utf-8');?>
<!html>
<head>
	<title>Probba4 php</title>
	<style type="text/css">
	body{
		text-align: ;
	}
	</style>
</head>
<body>


<?php

//firsttask
 $phone = array('Ivan' => '+0892346789' ,
                'Petur' => '+0872346755',
                'Maks' => '+0872333755' );

foreach ($phone as $key => $value) {
	echo '<p>'.$key.'- '.$value.'</p>';
}





?>
</body>
</html>