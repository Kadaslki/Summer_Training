<!DOCTYPE html>
<html>
<body>
<style>
body{
	background-color: lightblue;
}
h1{
	border-bottom: solid 3px
}
</style>

<?php
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

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

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

<?php
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
?>

</body>
</html>
