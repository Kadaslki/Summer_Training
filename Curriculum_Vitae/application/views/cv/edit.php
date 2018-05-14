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
			<?php echo form_open('cv/edit/'.$cv_item['admnno']);?>
				<div class="col-sm-12">
					<div class='row'>
							<h3>Personal Information</h3>
					</div>
					<div class="col-sm-6">				
						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" class="form-control" name="name" value="<?php echo $cv_item['name']?>">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="admnno">Admno No:</label>
							<input type="text" class="form-control" name="admnno" value="<?php echo $cv_item['admnno']?>">
						</div>		
					</div>
					<div class="col-sm-4">
						<div class="form-group">
								<label for="dob">Date of Birth:</label>
								<input type="date" class="form-control" name="dob" value="<?php echo $cv_item['dob']?>">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
								<label for="nationality">Nationality:</label>
								<input type="text" class="form-control" name="nationality" value="<?php echo $cv_item['nationality']?>">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
								<label for="gender">Gender:</label>
								<input type="text" class="form-control" name="gender" value="<?php echo $cv_item['gender']?>">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
								<label for="email">E-mail:</label>
								<input type="text" class="form-control" name="email" value="<?php echo $cv_item['email']?>">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
								<label for="skypeid">Skype- Id:</label>
								<input type="text" class="form-control" name="skypeid" value="<?php echo $cv_item['skypeid']?>">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
								<label for="mobno">Mobile No:</label>
								<input type="text" class="form-control" name="mobno" value="<?php echo $cv_item['mobno']?>">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
								<label for="category">Category:</label>
								<input type="text" class="form-control" name="category" value="<?php echo $cv_item['category']?>">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
								<label for="paddress">Permmanent Address:</label>
								<textarea class="form-control" rows=5 name="paddress"><?php echo $cv_item['paddress']?></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
								<label for="caddress">Contact Address:</label>
								<textarea class="form-control" rows=5 name="caddress"><?php echo $cv_item['caddress']?></textarea>
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
								<input type="text" class="form-control" name="xboard" value="<?php echo $cv_item['xboard']?>">
						</div>
					</div>
					<div class='col-sm-2'>
						<div class="form-group">
								<label for="xyear">Year:</label>
								<input type="text" class="form-control" name="xyear" value="<?php echo $cv_item['xyear']?>">
						</div>
					</div>
					<div class='col-sm-2'>
						<div class="form-group">
								<label for="xpercgpa">Percentage/CGPA:</label>
								<input type="text" class="form-control" name="xpercgpa" value="<?php echo $cv_item['xpercgpa']?>">
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
								<input type="text" class="form-control" name="xiiboard" value="<?php echo $cv_item['xiiboard']?>">
						</div>
					</div>
					<div class='col-sm-2'>
						<div class="form-group">
								<label for="xiiyear">Year:</label>
								<input type="text" class="form-control" name="xiiyear" value="<?php echo $cv_item['xiiyear']?>">
						</div>
					</div>
					<div class='col-sm-2'>
						<div class="form-group">
								<label for="xiipercgpa">Percentage/CGPA:</label>
								<input type="text" class="form-control" name="xiipercgpa" value="<?php echo $cv_item['xiipercgpa']?>">
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
								<input type="text" class="form-control" name="gboard" value="<?php echo $cv_item['gboard']?>">
						</div>
					</div>
					<div class='col-sm-2'>
						<div class="form-group">
								<label for="gyear">Year:</label>
								<input type="text" class="form-control" name="gyear" value="<?php echo $cv_item['gyear']?>">
						</div>
					</div>
					<div class='col-sm-2'>
						<div class="form-group">
								<label for="gpercgpa">Percentage/CGPA:</label>
								<input type="text" class="form-control" name="gpercgpa" value="<?php echo $cv_item['gpercgpa']?>">
						</div>
					</div>
				</div>
				
				<div class="col-sm-12">
					<div class='row'>
							<h3>Experience</h3>
					</div>
					<div class="form-group">
							<label for="xp">Write about your experiences in separate lines:</label>
							<textarea class="form-control" rows=5 name="xp"><?php echo $cv_item['xp']?></textarea>
					</div>				
				</div>
				
				<div class="col-sm-12">
					<div class='row'>
							<h3>Other Details</h3>
					</div>
					<div class='col-sm-6'>
						<div class="form-group">
								<label for="achievements">Achievements::</label>
								<textarea class="form-control" rows=5 name="achievements"><?php echo $cv_item['achievements']?></textarea>
						</div>
					</div>
					<div class='col-sm-6'>
						<div class="form-group">
								<label for="skills">Technical Skills::</label>
								<textarea class="form-control" rows=5 name="skills"><?php echo $cv_item['skills']?></textarea>
						</div>
					</div>
					<div class='col-sm-6'>
						<div class="form-group">
								<label for="interests">Interests/Hobbies::</label>
								<textarea class="form-control" rows=5 name="interests"><?php echo $cv_item['interests']?></textarea>
						</div>
					</div>
					<div class='col-sm-6'>
						<div class="form-group">
								<label for="aoi">Any Other Information::</label>
								<textarea class="form-control" rows=5 name="aoi"><?php echo $cv_item['aoi']?></textarea>
						</div>
					</div>
				</div>
				
				<input type="submit" name="submit" value="Save"></td></br>
			</form>
		</div>
		
	</body>
</html> 