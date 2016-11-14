<?php

date_default_timezone_set('America/Los_Angeles');

class Avatar {

	public $greetingMessage = 'Hi, I am Avatar';

	// Class's construction
	public function __construct(){

		echo 'Avatar is Here !!!' . '<br>';
	}

	// Greeting
	public function greeting($name){

		echo $this->greetingMessage . ' ' . $name . '<br>';
	}

	// Avatar power #1
	public function calculateFactorial($n){
		if ( $n == 0){
			return 1;
		}else{
			return $n*$this->calculateFactorial($n-1);
		}
	}

	// Avatar power #2
	public function calculateDateDifference($dateFrom, $dateTo){

		$dateFrom 	= new DateTime($dateFrom);
		$dateTo 	= new DateTime($dateTo);

		$interval = $dateFrom -> diff($dateTo);
		echo $interval->y . " years, " . $interval->m." months and ".$interval->d." days ";
	}
}

$Aang = new Avatar;
$Aang -> greeting('Aang');
echo 'Avatar can calculate 4! which is ' . $Aang -> calculateFactorial(4) . '<br>';
echo 'Avatar can calculate the duration between 1981-11-03 and 2013-09-04! which is ';
$Aang -> calculateDateDifference("1981-11-03","2013-09-04");

?>