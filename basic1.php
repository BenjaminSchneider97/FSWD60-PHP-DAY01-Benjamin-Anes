<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic 1</title>
	<style>
		.text{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
	</style>
</head>
<body>
	<?php 
	$ben = "Benjamin Schneider";
	$anes = "Anes Smajic";
		echo "<div class='text'>
				<h1>My Name is $ben</h1>
				<br>
				<h1>My Name is $anes</h1>
				<br>
			</div>";
	?>
</body>
</html>