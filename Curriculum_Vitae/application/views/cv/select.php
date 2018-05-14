<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css"/>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="bootstrap-3.3.2/js/bootstrap.min.js"></script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="jquery-2.1.3.min.js"></script>
		
	</head>
	<body>
	<style>
	h1{
		background-color:  #337ab7;
		color: white;
		text-align: center
	}
	ul{
		list-style-type: square;
	}
	</style>
	<?php foreach ($cv as $cv_item): ?>
		<ul>
			<li><a href="http://localhost:8888/cv/index.php/cv/edit/<?php echo $cv_item['admnno']?>"><?php echo $cv_item['name'] ?></a>
		</br>
		</ul>
	<?php endforeach ?>
	
	</body>
</html>