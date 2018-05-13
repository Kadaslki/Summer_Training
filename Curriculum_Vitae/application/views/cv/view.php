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
			
			body{margin: 10px;}
			
			h1{
				background-color:  #337ab7;
				color: white;
				text-align: center;
			}
			
			h2{
				text-decoration:underline;
				color: green;
			}
			
			h3{
				border-bottom: solid 2px;
				text-transform: uppercase;
				color: green
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
			
			ul{
				list-style-type: square;
			}
			
			hr {
				display: block;
				margin-top: 0;
				margin-bottom: 0;
				margin-left:0;
				margin-right: auto;
				border-style: inset;
				border-width: 1px;
				text-align: left;
				width:100px
			}
			
		</style>

		<?php
			echo '<h2>'.$cv_item['name'].'</h2>';
			$array=str_split($cv_item['caddress']);
			foreach($array as $char){
				echo $char;
				if($char==',')
					echo '</br>';
			}
			echo '</br>'.$cv_item['email'].'</br>'.
				 'Mob No:'.$cv_item['mobno'].'</br>'.
			     '<h3>Personal Details</h3>'.
				 "<b>Admn No:</b> ".$cv_item['admnno'].'</br>'.
				 "<b>Date of Birth: </b>".$cv_item['dob'].'</br>'.
				 "<b>Natinality:</b> ".$cv_item['nationality'].'</br>'.
				 "<b>Gender:</b> ".$cv_item['gender'].'</br>'.
				 "<b>Category:</b> ".$cv_item['category'].'</br>'.
				 "<b>Skype- Id:</b> ".$cv_item['skypeid'].'</br>'.
				 "<b>Permanent Address:</b> ".$cv_item['paddress'].'</br>';
			
			echo '<h3>Academic details</h3>';
			echo '<ul><b><u><li>Graduation Degree:</li></u></b><br>'.$cv_item['gboard'].',&nbsp'.$cv_item['gyear'].'</br>'.
				 '<b>CGPA: </b>'.$cv_item['gpercgpa'].'</br></br>';
			echo '<b><u><li>Senior Secondary Certificate Examination:</li></u></b><br>'.$cv_item['xiiboard'].',&nbsp'.$cv_item['xiiyear'].'</br>'.
				 '<b>Percentage: </b>'.$cv_item['xiipercgpa'].'</br></br>';
			echo '<b><u><li>Secondary Certificate Examination:</li></u></b><br>'.$cv_item['xboard'].',&nbsp'.$cv_item['xyear'].'</br>'.
				 '<b>CGPA: </b>'.$cv_item['xpercgpa'].'</ul>';
				 
			echo '<h3>Experience</h3>';
			$array=str_split($cv_item['xp']);
			foreach($array as $char){
				echo $char;
				if($char=='.')
					echo '</br>';
			}
			echo '<h3>Other Details</h3><ul>';
			echo '<b><li>Achievements:</li></b>';
			$array=str_split($cv_item['achievements']);
			foreach($array as $char){
				echo $char;
				if($char=='.')
					echo '</br>';
			}
			echo '<b></br><li>Technical Skills:</li></b>'.$cv_item['skills'];
			echo '<b></br></br><li>Interest/Hobbies::</li></b>'.$cv_item['interests'];
			echo '<b></br></br><li>Any Other Information:</li></b>'.$cv_item['aoi'];
			
			echo '</ul>';
			
			echo '</br>Declaration: I, '.$cv_item['name'].', hereby declares that all the above given informations are true to the best of my knowledge and believe.</br><br>';
			echo '</br><hr>Signature';
		?>
		<br/>
	</body>