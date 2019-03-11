<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic 3</title>
</head>
<body>
	<?php
	$d=date("D");
	if($d=="Mon")
	echo "Today is Monday!";
	elseif ($d=="Tue")
	echo "Today is Tuesday";
	elseif ($d=="Wed")
	echo "Today is Wednesday";
	elseif ($d=="Thu")
	echo "Today is Thursday";
	elseif ($d=="Fri")
	echo "Today is Tuesday";
	elseif ($d=="Sat")
	echo "Today is Saturday";
	else 
	echo "Today is Sunday";
	?>
	
</body>
</html>