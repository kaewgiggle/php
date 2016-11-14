<?php

// 11.
//header('Location: http://www.w3resource.com/');

// Exercise - http://www.w3resource.com/php-exercises/php-basic-exercises.php
// ------- 1st ------- 
//phpinfo();
// -------------------


echo '2. <br>';
echo 'Tomorrow I \'ll learn PHP global variables.';
echo 'This is a bad command : del c:\\*.*';
echo '<br>';
// -------------------


echo '3.';
$var = 'PHP Tutorial';
echo '<h3>' . $var . '</h3><br>';
echo '<br>';


echo '4. <br>';
// echo '<form action="ex_1.php" method="post">
// Name: <input type="text" name="name"><input type="submit">
// </form>';

// echo $_POST['name'] . '<br>';
echo '<br>';

echo '5. <br>';
echo 'IP address <br>' . $_SERVER['REMOTE_ADDR'];
echo '<br><br>';


echo '6. <br>';
echo 'Your User Agent is : ';
echo $_SERVER['HTTP_USER_AGENT'];
echo '<br><br>';


echo '7. <br>';
echo 'Your current file name is : ';
echo $_SERVER['PHP_SELF'];
echo '<br><br>';


echo '8. <br>';
$url = 'http://www.w3resource.com/php-exercises/php-basic-exercises.php';
$parsedUrl = parse_url($url);
echo 'Scheme is ' . $parsedUrl['scheme'] .'<br>';
echo 'Host is ' . $parsedUrl['host'] .'<br>';
echo 'Path is ' . $parsedUrl['path'] .'<br>';
echo '<br><br>';


echo '9. <br>';
$text = 'PHP Tutorial';  
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);  
echo $text;
echo '<br><br>';


echo '11. <br>';
if (!empty($_SERVER['HTTPS'])){

	echo 'HTTPS is enabled';
}else{
	echo 'HTTPS is disabled';
}
echo '<br><br>';


echo '12. <br>';
// echo '<form action="ex_1.php" method="post">
// Email: <input type="text" name="email"><input type="submit">
// </form>';

// $email = $_POST['email'];
// if (!empty($email)){

// 	if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
// 	  	echo("$email is a valid email address");
// 	} else {
// 	  	echo("$email is not a valid email address");
// 	}
// }
echo '<br><br>';


echo '13. <br>';

$staff = array(
			    "A" => 1000,
			    "B" => 1200,
			    "C" => 1400,
			);

echo '<table border="1">';
foreach ($staff as $key => $value) {
	echo '<tr><td> The salary of Mr. $key is </td><td>' . $staff[$key] . '</td></tr>'; 
}
echo '</table>';


?>