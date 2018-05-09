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
			body{background-color: lightblue;}
			h1{border-bottom: solid 3px}
			h2{border-bottom: solid 2px}
		</style>
		
		<div class="container">
			<?php
				class prsn{ //Defining class Person
				
					var $name,$admnno,$dob,$email;	//Defining person's attributes
					var $gender,$caddress,$skypeid,$paddress;
					var $mobno,$category,$nationality;
					var $boarduniv,$year,$percgpa;
					var $insti,$strdate,$stpdate;
					
					function stdtls(){	//Function for fetching attributes' value 
						$this->name = test_input($_POST["name"]);
						$this->admnno = test_input($_POST["admnno"]);
						$this->dob = test_input($_POST["dob"]);
						$this->nationality = test_input($_POST["nationality"]);
						$this->gender = test_input($_POST["gender"]);
						$this->email = test_input($_POST["email"]);
						$this->skypeid = test_input($_POST["skypeid"]);
						$this->mobno = test_input($_POST["mobno"]);
						$this->category = test_input($_POST["category"]);
						$this->caddress = test_input($_POST["caddress"]);
						$this->paddress = test_input($_POST["paddress"]);
						$this->paddress = test_input($_POST["paddress"]);
						$this->boarduniv = test_input($_POST["boarduniv"]);
						$this->year = test_input($_POST["year"]);
						$this->percgpa= test_input($_POST["percgpa"]);
						$this->insti = test_input($_POST["insti"]);
						$this->strdate = test_input($_POST["strdate"]);
						$this->stpdate = test_input($_POST["stpdate"]);
					}
					
					function shwdtls(){	//Function for showing details
						echo "<h1>Curriculum Vitae</h1>";
						echo "<h2>Personal Details</h2>";
						echo "Name: ".$this->name."<br><br>";
						echo "Admn No: ".$this->admnno."<br><br>";
						echo "Date of Birth: ".$this->dob."<br><br>";
						echo "Nationality: ".$this->nationality."<br><br>";
						echo "Gender: ".$this->gender."<br><br>";
						echo "E-mail: ".$this->email."<br><br>";
						echo "Skype ID: ".$this->skypeid."<br><br>";
						echo "Mobile No: ".$this->mobno."<br><br>";
						echo "Category: ".$this->category."<br><br>";
						echo "Contact Address: ".$this->caddress."<br><br>";
						echo "Permanent Address: ".$this->paddress."<br><br>";
						echo "<h2>Academic Details</h2>";
						echo "Examination Passed: X<br><br>";
						echo "Board/University: ".$this->boarduniv."<br>";
						echo "Year of Passing: ".$this->year."<br>";
						echo "Percentage/CGPA: ".$this->percgpa."<br><br>";
						echo "Examination Passed: XII<br><br>";
						echo "Board/University: ".$this->boarduniv."<br>";
						echo "Year of Passing: ".$this->year."<br>";
						echo "Percentage/CGPA: ".$this->percgpa."<br><br>";
						echo "Examination Passed: Graduation<br><br>";
						echo "Board/University: ".$this->boarduniv."<br>";
						echo "Year of Passing: ".$this->year."<br>";
						echo "Percentage/CGPA: ".$this->percgpa."<br><br>";
						echo "<h2>Experience</h2>";
						echo "Organisation/Institute: ".$this->insti."<br>";
						echo "Start Date: ".$this->strdate."<br>";
						echo "End Date: ".$this->stpdate."<br><br>";
						
					}
				}	
				
				$man= new prsn; // Declaring an object of person class
		
				if($_SERVER["REQUEST_METHOD"]=="POST"){	//Function for testing fetching method
					$man->stdtls();
				}

				function test_input($data) {	//Function for ensuring security
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}
				$man->shwdtls();
			?>
		</div>	
			
	</body>
</html>
		<!--	Previous Code
		$name = $admnno = $dob= $email = $gender = $address = $skypeid = $mobno = $category = $nationality = "";
			
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  $name = test_input($_POST["name"]);
			  $admnno = test_input($_POST["admnno"]);
			  $dob = test_input($_POST["dob"]);
			  $nationality = test_input($_POST["nationality"]);
			  $gender = test_input($_POST["gender"]);
			  $email = test_input($_POST["email"]);
			  $skypeid = test_input($_POST["skypeid"]);
			  $mobno = test_input($_POST["mobno"]);
			  $category = test_input($_POST["category"]);
			  $address = test_input($_POST["address"]);
			  
			}
		
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<h1> Curriculum Vitae</h1>

		Name: <input type="text" name="name">
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		Admn No: <input type="text" name="admnno"><br><br>

		Date of Birth: <input type="text" name="dob">&nbsp&nbsp&nbsp&nbsp&nbsp

		Nationality: <input type="text" name="nationality"><br><br>

		Gender:
		<input type="radio" name="gender" value="male" checked> Male 
		<input type="radio" name="gender" value="female"> Female
		<input type="radio" name="gender" value="other">Other<br><br>

		E-mail: <input type="text" name="email">
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		Skype Id: <input type="text" name="skypeid"><br><br>

		Mobile No: <input type="text" name="mobno">
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		Category: <input type="text" name="category"><br><br>

		Contact Address: <textarea name="address" rows="5" cols="40"></textarea><br><br>

		<input type="submit" name="submit" value="Submit">

		</form>
		

		echo "<h2>Curriculum Vitae:</h2>";
		echo "Name:".$name."<br><br>";
		echo "Admn No:".$admnno."<br><br>";
		echo "Date of Birth:".$dob."<br><br>";
		echo "Nationality:".$nationality."<br><br>";
		echo "Gender:".$gender."<br><br>";
		echo "E-mail::".$email."<br><br>";
		echo "Skype:".$skypeid."<br><br>";
		echo "Mobile No:".$mobno."<br><br>";
		echo "Category:".$category."<br><br>";
		echo "Address:".$address."<br><br>";
		-->
		
