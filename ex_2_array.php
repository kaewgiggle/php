<?php

echo '4. Array' . '<br>';
$x = array(1, 2, 3, 4, 5);
echo var_dump($x) . '<br>';
unset($x[3]);
$x = array_values($x);
echo var_dump($x);
echo '<br><br>';


echo '6. Array' . '<br>';
$jsonStr = '{"Title": "The Cuckoos Calling", "Author": "Robert Galbraith", "Detail": { "Publisher": "Little Brown" }}';
$dataStr = json_decode($jsonStr, true);
//echo var_dump($dataStr);

foreach ($dataStr as $key => $value) {
	if( $key == 'Detail'){
		echo $key . '<br>';
		$dataDetail = $dataStr[$key];
		foreach ($dataDetail as $key => $value) {
			echo '&nbsp;&nbsp;&nbsp;' . $key . ' : ' . $dataDetail[$key] . '<br>';
		}
	}else{
		
		echo $key . ' : ' . $dataStr[$key] . '<br>';
	}
}
echo '<br><br>';


echo '7. Loop' . '<br>';
echo '<table width="270" height="270" style="border-collapse: collaps;">';
for($row = 1 ; $row<=9 ; $row++){
	echo '<tr>';
	for($column = 1 ; $column <= 9 ; $column++){
		// Check odd or even row
		if ($row%2 == 1){
			// Check odd or even column
			if($column%2 == 1){
				echo '<td width = "30">&nbsp;</td>';
			}else{
				echo '<td width = "30" style="background-color:black;">&nbsp;</td>';
			}
		}else{
			if($column%2 == 1){
				echo '<td width = "30" style="background-color:black;">&nbsp;</td>';
			}else{
				echo '<td width = "30">&nbsp;</td>';
			}
		}
	}
	echo '</tr>';
}
echo '</table>';
echo '<br><br>';


echo '7. Function' . '<br>';
function Calculate_Factorial($n){

	if( $n == 0){
		// Recursive function's control
		return 1;
	}else{
		return $n * Calculate_Factorial($n-1);
	}

}
echo 'Factorial of 5 is ' . Calculate_Factorial(5) . '<br>';
echo '<br><br>';


echo '8. Function Palyndrome' . '<br>';

echo '<form action="ex_2_array.php" method="post">
Word or Sentense : <input type="text" length = "200" name="checkStr"><input type="submit">
</form>';

$str = $_POST['checkStr'];

if (!empty($str)){

	if( CheckPalyndrome($str) ){
		echo $str . ' is a Palyndrome';
	}else{
		echo $str . ' is not a Palyndrome';
	}

}

function CheckPalyndrome( $str ){

	$preparedStr 	= str_replace(' ', '', $str);
	$preparedStr 	= strtolower($preparedStr);
	$preparedStr    = preg_replace('/[^A-Za-z0-9\-]/', '', $preparedStr);

	$reversedString = strrev($preparedStr);

	if ( $preparedStr == $reversedString ){
		return true;
	}else{
		return false;
	}

}

?>