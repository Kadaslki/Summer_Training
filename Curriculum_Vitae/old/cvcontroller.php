<?php
	
	require('person.php')
	
	class candidate{ //Defining class Person
		
		private var $cndidt= new person;
		
		function wrtdb($prsn){	//Function to write in database
			
			$this->cndidt=$prsn;	//Getting values
		
			$conn=new mysqli("localhost","root",""); //Establishing Connection
			if($conn->connect_error)
			die("Connection failed: ".$conn->connect_error);
			
			if(!mysql_select_db($this->cndidt->{'admnno'},$conn)){
				
				$sql = "create database ".$this->cndidt->{'admnno'};
				
				if($conn->query($sql)===TRUE){
					
					//Creating Database
					$sql="create table Personal (
						name varchar(30) not null,
						admnno varchar(12) unique not null,
						dob date, gender varchar(7),
						nationality varchar(20), 
						email varchar(20), skypeid varchar(20),
						mobno varchar(15), category varchar(10),
						paddress varchar(75), caddress varchar(75))";
					
					//Inserting Values
					$sql = "inset into ".$this->cndidt->{'admno'}."values ();
					
				}
			}
		}		
		
		function readdb(){
			
		}
	}
?>
