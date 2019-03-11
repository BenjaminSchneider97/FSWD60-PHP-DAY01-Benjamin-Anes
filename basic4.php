<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>basic4</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>
<body>
	<?php 
	$a='Anes Smajic';
	$b='Benjo Schneider';

		for ($i=1; $i < 51; $i++) { 
			echo $i. " <i class='fas fa-arrow-right'></i> ". $a. " <i class='far fa-handshake'></i> ". $b. "<br>";
			
		}
	 	$j=51;
		while ( $j<= 100) {
			echo $j. " <i class='fas fa-arrow-right'></i> ". $a. " <i class='far fa-handshake'></i> ". $b. "<br>";
			$j++;
		}

		$k=101;
		do
		{
			echo $k. " <i class='fas fa-arrow-right'></i> ". $a. " <i class='far fa-handshake'></i> ". $b. "<br>";
			$k++;
			
		}
		while ( $k<= 150);
	 ?>


</body>
</html>