<?php
header('content-type:text/html; charset=utf-8');

echo '<link href="css/style.css" rel="stylesheet">';



$c1="<img src='img/cup.png' height='200' weight='200'>";
$c2="<img src='img/win_cup.png' height='200' weight='200'>";



echo "<div id='gamecode'>";

$win=rand(1,3);
echo "<b>Монетата <img src='img/win.png' height='100' weight='100'> скрих тук:</b>";
echo "<p>";
if ($win < 2) {
			echo $c2.$c1.$c1;
		}elseif ($win > 2) {
			echo $c1.$c1.$c2;
		}elseif ($win == 2) {
			echo $c1.$c2.$c1;
		}
echo "</p>";		




if (empty($_POST['cup'])) {
	echo "<p><span id='please'>Моля, Избери Кутия !</span></p>";
	echo "<p><a href='Game_start.html'><img src='img/try_again.gif'><p></a>";
	 echo "<audio src='sound/deny.mp3' autoplay></audio>";
}else{
	
	if ($_POST['cup'] == $win) {
		echo "<p><span id='victory'>ПОЗНА!!!</span></p>";
		echo "<p><img src='img/victory.gif' height='100'></p>";
		echo "<p><a href='Game_start.html'><img src='img/try_again.gif'><p></a>";
        echo "<audio src='sound/victoryy.mp3' autoplay></audio>";
   
	}else{
		
		echo "<p><span id='no'>НЕ ПОЗНА!!!</span></p>";
		echo "<p><a href='Game_start.html'><img src='img/try_again.gif'><p></a>";
		echo "<audio src='sound/faill.mp3' autoplay></audio>";

	}
	

}


echo "</div>";
	



?>
