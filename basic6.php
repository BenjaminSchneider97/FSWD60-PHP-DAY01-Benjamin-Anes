<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic6</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
	<?php 
		$heroes= array(
			"Captain America"=>array(
				"height"=> 186,
				"intelligence"=>4,
				"strength"=>29,
				"speed"=>6,
				"agility"=>16,
				"fighting skills"=>86

			),
			"Iron Man"=>array(
				"height"=> 183,
				"intelligence"=>6,
				"strength"=>48,
				"speed"=>2,
				"agility"=>12,
				"fighting skills"=>85
			),
			"Thor"=>array(
				"height"=> 195,
				"intelligence"=>4,
				"strength"=>49,
				"speed"=>9,
				"agility"=>19,
				"fighting skills"=>85
			),
		);
		foreach($heroes as $value){
			echo '<div class="row">
  					<div class="col-sm-6 col-md-4">
  					  <div class="thumbnail">
   					   <img src="..." alt="...">
     					 <div class="caption">
       					 <h3>Thumbnail label</h3>
       						 <p>...</p>
   					  </div>
  					 </div>
 				 	</div>
				  </div> ';

		}
		
		

	 ?>
</body>
</html>