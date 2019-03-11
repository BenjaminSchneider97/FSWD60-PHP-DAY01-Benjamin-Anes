<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic6</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<style>
	.myrow{
		display: flex;
		justify-content: space-around;
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		text-align: center;
	}
	.thumbnail{
		background-color: lightgray;
		border-radius: 50px;
		border: 2px solid black;
	}
	.row{
		display: flex;
		justify-content: space-around;
	}
	.value{
		color: #000;
		float: right;
		margin-right: 10px;
		font-size: 1.6em;
		font-weight: bold;
	}
	.thumbnail img{
		width: 500px;
		height: 300px;
	}
	</style>
</head>
<body>
	<?php 
		$heroes= array(
			"Captain America"=>array(
				"name"=> "<i class='fas fa-shield-alt'></i> Captain America",
				"img"=> "img/america.jpg",
				"height"=> 86,
				"intelligence"=>40,
				"strength"=>29,
				"speed"=>40,
				"fighting skills"=>86
			),
			"Iron Man"=>array(
				"name"=> "<i class='fas fa-rocket'></i>Iron Man",
				"img"=> "img/iron.jpeg",
				"height"=> 83,
				"intelligence"=>70,
				"strength"=>48,
				"speed"=>80,
				"fighting skills"=>85
			),
			"Thor"=>array(
				"name"=> "<i class='fas fa-gavel'></i>Thor",
				"img"=> "img/thor.jpg",
				"height"=> 95,
				"intelligence"=>60,
				"strength"=>49,
				"speed"=>90,
				"fighting skills"=>85
			),
		);

		echo "<div class='row myrow' id='myrow'>";

		foreach($heroes as $value){
			echo ' <div class="col-sm-6 col-md-3">
  					  <div class="thumbnail">
  					  <h1>'. $value["name"]. '</h1>
   					   <img src="'.$value["img"]. '">
     					 <div class="caption">
       					 <h3>Stats</h3>
       					 <div class="row">
       					  <p class="col-md-4">HEIGHT</p>
       					  <div class="col-md-8">
       						 <div class="progress">
 								 <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: '. $value["height"]. '%">
    								 <p class="value">'. $value["height"]. '</p>
  								 </div>
							</div>
							</div>
							</div>
							<div class="row">
       					  <p class="col-md-4">INTELLIGENCE</p>
       					  <div class="col-md-8">
       						 <div class="progress">
 								 <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" style="width:'. $value["intelligence"]. '%">
    								 <p class="value">'. $value["intelligence"]. '</p>
  								 </div>
							</div>
							</div>
							</div>
							<div class="row">
       					  <p class="col-md-4">STRENGTH</p>
       					  <div class="col-md-8">
       						 <div class="progress">
 								 <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:'. $value["strength"]. '%">
    								 <p class="value">'. $value["strength"]. '</p>
  								 </div>
							</div>
							</div>
							</div>
							<div class="row">
       					  <p class="col-md-4">SPEED</p>
       					  <div class="col-md-8">
       						 <div class="progress">
 								 <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: '. $value["speed"]. '%">
    								 <p class="value">'. $value["speed"]. '</p>
  								 </div>
							</div>
							</div>
							</div>
						 <div class="row">
       					  <p class="col-md-4">FIGHTINGSKILLS</p>
       					  <div class="col-md-8">
       						 <div class="progress">
 								 <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: '. $value["fighting skills"]. '%">
    								 <p class="value">'. $value["fighting skills"]. '</p>
  								 </div>
							</div>
							</div>
							</div>
   					  	</div>
  					 </div>
				  </div> ';
		}
		echo "</div>";
	?>
</body>
</html>