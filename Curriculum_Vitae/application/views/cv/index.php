<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Curriculum Vitae Maintainer</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		
		<style>
		
		h1{
				background-color:  #337ab7;
				color: white;
				align: center
		}
			
		button{
			background-color: white; 
			border: 2px solid lightblue;
			padding: 15px 32px;
			text-align: center;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			border-radius: 4px;
			width:100%;
			-webkit-transition-duration: 0.4s;
			transition-duration: 0.4s;
			align: center
		}
		
		button:hover{	background-color: lightblue;	}
		
		.jumbotron{	background-color: white;}
		
		</style>
		
		<div class="jumbotron">
			<div class="container" vertical-align= 'middle'>
						<div class="row">
							<div class="col-sm-4 col-sm-push-4">
								<button>
									<a href="http://localhost:8888/cv/index.php/cv/create">Create CV</a>
								</button>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-sm-push-2">
								<button>
									<a href="http://localhost:8888/cv/index.php/cv/viewall">View CV</a>
								</button>
							</div>
							<div class="col-sm-4 col-sm-push-2">
								<button>
									<a href="http://localhost:8888/cv/index.php/cv/select">Edit CV</a>
								</button>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-sm-push-4">
								<button>
									<a href="http://localhost:8888/cv/index.php/cv/delete">Delete CV</a>
								</button>
							</div>
						</div>		
			</div>
		</div>
		
	</body>
</html>
