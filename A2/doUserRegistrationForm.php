<!DOCTYPE html>
<html>
<body>

<?php 

require_once("./dbConnect.php");

$user=$_POST["user"]; 
$password=$_POST["pass"]; 
$password2=$_POST["retype"]; 
$emailaddress=$_POST["email"]; 
$gender=$_POST["gender"]; 
$language=$_POST["language"]; 
$age=$_POST["age"];
$related_experience=$_POST["experience"];




$query= "INSERT INTO directory_respite_workers (username, password, retypepassword, emailaddress, gender, language, age, related_experience)
VALUES ('$user', '$password','$password2','$emailaddress', '$gender', '$language', '$age','$related_experience')";

$result=$conn->query($query)

?>

</body>
</html>
  
