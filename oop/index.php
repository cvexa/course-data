<?php

class Tv{
	var $size;
	var $price;

	function __construct($siz,$pr){
		$this->size =$siz;
		$this->price =$pr;
	}
	function coupon(){
		$this->price -= 100;
	}
	 function print_info(){
	 	echo '<p>size '.$this->size.' inc.</p>';
	 	echo 'price '.$this->price.' $';

	 }
}

$Samsung = new Tv(42,50);
// echo $Samsung ->size;
//  echo "<pre>";
// echo $Samsung ->price;
//  echo "</pre>";
$Samsung->print_info();
$Samsung->coupon();




?>