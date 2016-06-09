<?php

class Tv{
	var $size;
	private $price;

	function __construct($siz,$pr){
		$this->size =$siz;
		$this->price =$pr;
	}
	public function __get($price){
		echo "getting $price -";
		return $this->$price;
	}
	public function __set($name, $value){
		echo "set $name to $value";
		if (property_exists($this, $name)) {
			$this->$name = $value;
		}
	}
	function coupon(){
		return $this->price -= 10;
		// echo $this->price;
	}
	 private function two(){
		return $this->size -= 2;
	}
	 function print_info(){
	 	echo '<p>size '.$this->size.' inc.</p>';
	 	echo 'price '.$this->price.' $';
	 	echo $Samsung->two();

	 }
}

$Samsung = new Tv(42,500);
// echo $Samsung ->size;
//  echo "<pre>";
// echo $Samsung ->price;
//  echo "</pre>";

// $Samsung->print_info();
// echo "<p>coupon - ".$Samsung->coupon()."</p>";

echo $Samsung->price;

echo "<p>".$Samsung ->price."</p>";
$Samsung->price = 1;

// $philips = new Tv(50,9000);
// // var_dump($philips);
// // $philips->print_info();
// $philips->coupon();





?>