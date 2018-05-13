<!DOCTYPE html>
<html lang="en">
	<head>
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
				text-align: center
			}
			
			h3{
				color:white;
				text-align:center
			}
			
			th{
				color: white;
				background-color: lightblue
			}
			input[type="text"]{
				width:100%;
				box-sizing: border-box;
			}
			input[type="date"]{
				width=100%;
				box-sizing: border-box;
			}
			
			#footer {
				background: #337ab7;
				position:relative;
				width:100%;
				bottom:0
			}
			
			.row{
				background-color:#337ab7;
			}
			
		</style>
		
		<div class="container-fluid">
			<?php echo form_open('cv/create');?>
				<div class="col-sm-12">
					<div class='row'>
							<h3>Personal Information</h3>
					</div>
					<div class="col-sm-6">				
						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" class="form-control" name="name">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="admnno">Admno No:</label>
							<input type="text" class="form-control" name="admnno">
						</div>		
					</div>
					<div class="col-sm-4">
						<div class="form-group">
								<label for="dob">Date of Birth:</label>
								<input type="date" class="form-control" name="dob">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
								<label for="nationality">Nationality:</label>
								<input type="text" class="form-control" name="nationality">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
								<label for="gender">Gender:</label>
								<input type="text" class="form-control" name="gender">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
								<label for="email">E-mail:</label>
								<input type="text" class="form-control" name="email">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
								<label for="skypeid">Skype- Id:</label>
								<input type="text" class="form-control" name="skypeid">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
								<label for="mobno">Mobile No:</label>
								<input type="text" class="form-control" name="mobno">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
								<label for="category">Category:</label>
								<input type="text" class="form-control" name="category">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
								<label for="paddress">Permmanent Address:</label>
								<textarea class="form-control" rows=5 name="paddress"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
								<label for="caddress">Contact Address:</label>
								<textarea class="form-control" rows=5 name="caddress"></textarea>
						</div>
					</div>	
				</div>
				
				
				<div class="col-sm-12">
					<div class='row'>
							<h3>Academic Details</h3>
					</div>
					<div class='col-sm-2'>
						<div class="form-group">
								<label for="x">Examination Passed:</label>
								<input type="text" class="form-control" value="X"disabled>
						</div>
					</div>
					<div class='col-sm-6'>
						<div class="form-group">
								<label for="xboard">Board/University:</label>
								<input type="text" class="form-control" name="xboard">
						</div>
					</div>
					<div class='col-sm-2'>
						<div class="form-group">
								<label for="xyear">Year:</label>
								<input type="text" class="form-control" name="xyear">
						</div>
					</div>
					<div class='col-sm-2'>
						<div class="form-group">
								<label for="xpercgpa">Percentage/CGPA:</label>
								<input type="text" class="form-control" name="xpercgpa">
						</div>
					</div>
					
					<div class='col-sm-2'>
						<div class="form-group">
								<label for="xii">Examination Passed:</label>
								<input type="text" class="form-control" value="XII"disabled>
						</div>
					</div>
					<div class='col-sm-6'>
						<div class="form-group">
								<label for="xiiboard">Board/University:</label>
								<input type="text" class="form-control" name="xiiboard">
						</div>
					</div>
					<div class='col-sm-2'>
						<div class="form-group">
								<label for="xiiyear">Year:</label>
								<input type="text" class="form-control" name="xiiyear">
						</div>
					</div>
					<div class='col-sm-2'>
						<div class="form-group">
								<label for="xiipercgpa">Percentage/CGPA:</label>
								<input type="text" class="form-control" name="xiipercgpa">
						</div>
					</div>
					
					<div class='col-sm-2'>
						<div class="form-group">
								<label for="g">Examination Passed:</label>
								<input type="text" class="form-control" value="Graduation"disabled>
						</div>
					</div>
					<div class='col-sm-6'>
						<div class="form-group">
								<label for="gboard">Board/University:</label>
								<input type="text" class="form-control" name="gboard">
						</div>
					</div>
					<div class='col-sm-2'>
						<div class="form-group">
								<label for="gyear">Year:</label>
								<input type="text" class="form-control" name="gyear">
						</div>
					</div>
					<div class='col-sm-2'>
						<div class="form-group">
								<label for="gpercgpa">Percentage/CGPA:</label>
								<input type="text" class="form-control" name="gpercgpa">
						</div>
					</div>
				</div>
				
				<div class="col-sm-12">
					<div class='row'>
							<h3>Experience</h3>
					</div>
					<div class="form-group">
							<label for="xp">Write about your experiences in separate lines:</label>
							<textarea class="form-control" rows=5 name="xp"></textarea>
					</div>				
				</div>
				
				<div class="col-sm-12">
					<div class='row'>
							<h3>Other Details</h3>
					</div>
					<div class='col-sm-6'>
						<div class="form-group">
								<label for="achievements">Achievements::</label>
								<textarea class="form-control" rows=5 name="achievements"></textarea>
						</div>
					</div>
					<div class='col-sm-6'>
						<div class="form-group">
								<label for="skills">Technical Skills::</label>
								<textarea class="form-control" rows=5 name="skills"></textarea>
						</div>
					</div>
					<div class='col-sm-6'>
						<div class="form-group">
								<label for="interests">Interests/Hobbies::</label>
								<textarea class="form-control" rows=5 name="interests"></textarea>
						</div>
					</div>
					<div class='col-sm-6'>
						<div class="form-group">
								<label for="aoi">Any Other Information::</label>
								<textarea class="form-control" rows=5 name="aoi"></textarea>
						</div>
					</div>
				</div>
				
				<input type="submit" name="submit" value="Submit"></td>
			</form>
		</div>
		
	</body>
</html> 