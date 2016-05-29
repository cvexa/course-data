<?php

class Tv{
	var $size;
	var $price;

	function __construct($siz,$pr){
		$this->size =$siz;
		$this->price =$pr;
	}
	function coupon(){
		return $this->price -= 10;
		// echo $this->price;
	}
	function two(){
		$this->size -= 2;
	}
	 function print_info(){
	 	echo '<p>size '.$this->size.' inc.</p>';
	 	echo 'price '.$this->price.' $';

	 }
}

$Samsung = new Tv(42,500);
// echo $Samsung ->size;
//  echo "<pre>";
// echo $Samsung ->price;
//  echo "</pre>";

// $Samsung->print_info();
echo $Samsung->coupon();
$Samsung->two();

// $philips = new Tv(50,9000);
// // var_dump($philips);
// // $philips->print_info();
// $philips->coupon();





?>