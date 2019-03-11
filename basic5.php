<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic 5</title>
</head>
<body>
	
	<?php 
		$arr = array(12434, 89234, 9123, 989387, 843, 128442, 3465478, 345524, 123467, 8923);
		$number = 1;
		foreach($arr as $value){
			echo "Number $number is	". $value. "<br>";
			$number++;
		}
	?>

</body>
</html>