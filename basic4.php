<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>basic4</title>
</head>
<body>
	<?php 
	$a='Anes Smajic';

		for ($i=1; $i < 51; $i++) { 
			echo $i. $a. "<br>";
			
		}
	 	$j=51;
		while ( $j<= 100) {
			echo $j. $a."<br>";
			$j++;
		}

		$k=101;
		do
		{
			echo $k. $a. "<br>";
			$k++;
			
		}
		while ( $k<= 150);
	 ?>


</body>
</html>