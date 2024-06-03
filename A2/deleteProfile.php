<!DOCTYPE html>
<html>
<body>

<?php 

require_once("./loginConnection.php");

$user=$_POST["user"];


$query = "DELETE FROM  directory_respite_workers WHERE username = '$user'";

$result = $conn->query($query);

if ($result === TRUE) {
    echo "Record for username '$user' DELETED successfully";
} else {
    echo "Error DELETING record: " . $conn->error;
}
?>

</body>
</html>
  
