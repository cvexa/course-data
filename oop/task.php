<?php
/*
РНР ООП, преговор
Да се направи ООП дизайн на софтуер
управление на верига
от кинозали. Трябва да използвате:
•
капсулация (private св-ва)
•
поне по 1 връзка тип has_a и is_a. 
•
поне 1 статичен метод и поне 1 статично свойство
•
поне една реализация на 
late static binding
•
поне 1 интерфейс, който след  това се имплементира
Да има клас, за който имате поне 3 обекта. И тези обекти да
си взаимодействат по някакъв начин (например, ако са филми
- да се сравнява броя на продадените билети и да се прави
класация за 1-во, 2-ро, 3-то място).
Мислете за конкретен контекст!!!
*/

class Cinema{
	
	public $name;
	private $employee;
	public $adress;
	public $tickets;
	public $show_movies;

	function sale($tick){
        echo "Current ".$this->tickets." - ".$tick." sold = ";
		return $this->tickets -=$tick;
		
	}
   function print_info(){
   	echo "Name - ".$this->name."<br>";
   	echo "workers - ".$this->employee."<br>";
   	echo "adress - ".$this->adress."<br>";
   	echo "tickets - ".$this->tickets."<br>";
   	echo "shown movies - ".$this->show_movies."<br>";
   }
	function __construct($name,$em,$ad,$tick,$show){
		$this->name=$name;
		$this->employee =$em;
		$this->adress =$ad;
		$this->tickets =$tick;
		$this->show_movies=$show;
	}
}
class Hot_movies extends Cinema{
	public static $premiere = "Warcraft";
}
$Imax = new Cinema('Cinema city',2,'Blabla #55',200,5);



$Imax->print_info();
echo "Premiere movies in all cinemas :<br>".Hot_movies::$premiere."<br>";
echo "<pre>";
echo $Imax->sale(5);
echo "<br>";
echo $Imax->sale(10);
echo "</pre>";

$d2 = new Cinema('Burgas Cinema',5,'Lalala #21',100,2);

$d2->print_info(); 
echo "<pre>";
echo $d2->sale(1);
echo "<br>";
echo $d2->sale(2);
echo "</pre>";













?>