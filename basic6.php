<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic6</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
	.row{
		display: flex;
		justify-content: space-around;
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
	}
	</style>
</head>
<body>
	<?php 
		$heroes= array(
			"Captain America"=>array(
				"name"=> "Captain America",
				"img"=> "img/america.jpg",
				"height"=> 186,
				"intelligence"=>4,
				"strength"=>29,
				"speed"=>6,
				"agility"=>16,
				"fighting skills"=>86

			),
			"Iron Man"=>array(
				"name"=> "Iron Man",
				"img"=> "img/iron.jpeg",
				"height"=> 183,
				"intelligence"=>6,
				"strength"=>48,
				"speed"=>2,
				"agility"=>12,
				"fighting skills"=>85
			),
			"Thor"=>array(
				"name"=> "Thor",
				"img"=> "img/thor.jpg",
				"height"=> 195,
				"intelligence"=>4,
				"strength"=>49,
				"speed"=>9,
				"agility"=>19,
				"fighting skills"=>85
			),
		);

		echo "<div class='row' id='myrow'>";

		foreach($heroes as $value){
			echo ' <div class="col-sm-6 col-md-3">
  					  <div class="thumbnail">
  					  <h1>'. $value["name"]. '</h1>
   					   <img src="'.$value["img"]. '">
     					 <div class="caption">
       					 <h3>Thumbnail label</h3>
       						 <p>...</p>
   					  </div>
  					 </div>
				  </div> ';
		}
		echo "</div>";
	?>
</body>
</html>