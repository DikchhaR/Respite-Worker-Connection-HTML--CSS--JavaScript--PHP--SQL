<!DOCTYPE html>
<html>
<body>

<?php 

require_once("./loginConnection.php");

$user=$_POST["user"]; 
$password=$_POST["pass"]; 
$password2=$_POST["retype"]; 
$emailaddress=$_POST["email"]; 
$gender=$_POST["gender"]; 
$language=$_POST["language"]; 
$age=$_POST["age"];
$related_experience=$_POST["experience"];


$query = "UPDATE directory_respite_workers SET password = '$password', retypepassword = '$password2', emailaddress = '$emailaddress', gender = '$gender', language = '$language', age = '$age', related_experience = '$related_experience' WHERE username = '$user'";

$result = $conn->query($query);

if ($result === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?>

</body>
</html>
  
