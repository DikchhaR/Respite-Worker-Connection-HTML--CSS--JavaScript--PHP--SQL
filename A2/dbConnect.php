<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "A2";

// Create connection
$conn = new mysqli($servername, $username, $password);
// check the error
if ($conn->connect_error) {
	die("fail to connect " . $conn->connect_error);
}
echo "";


//Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->select_db($dbname);

// $conn->close();

$sql = "CREATE TABLE IF NOT EXISTS RespiteCenters (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Name_of_center VARCHAR(50) NOT NULL,
	location VARCHAR(30) NOT NULL,
	contact_information VARCHAR(50)
	)";
		
	if ($conn->query($sql) === TRUE) {
		echo "Table RespiteCenters created successfully \r\n";
	} else {
		echo "Error creating table: " . $conn->error;
	}

$sql = "CREATE TABLE IF NOT EXISTS Directory_Respite_Workers (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(50) NOT NULL,
	password VARCHAR(50) NOT NULL,
    retypepassword VARCHAR(50) NOT NULL,
	emailaddress VARCHAR(50) NOT NULL,
	gender VARCHAR(10) NOT NULL,
	language VARCHAR(20) NOT NULL,
	age INT NOT NULL,
	related_experience VARCHAR(200) NOT NULL
	)";
			
	if ($conn->query($sql) === TRUE) {
		echo "Table directory_Respite_Workers created successfully \r\n";
	} else {
		echo "Error creating table: " . $conn->error;
	}	


// $sql1 = "INSERT INTO RespiteCenters (Name_of_center, location, contact_information)
// VALUES ('RespiteOttawa', 'Ottawa', 'respiteottawa@respite.com')";

// $sql2 = "INSERT INTO RespiteCenters (Name_of_center, location, contact_information)
// VALUES ('TogetherUs', 'Ottawa', 'togetherus@inall.com')";

// $sql3 = "INSERT INTO RespiteCenters (Name_of_center, location, contact_information)
// VALUES ('LetsHaveFun', 'Toronto', 'letshavefun@raha.com')";

// $sql4 = "INSERT INTO RespiteCenters (Name_of_center, location, contact_information)
// VALUES ('RainbowConnection', 'Toronto', 'rainbowconn@rainbow.com')";

// $sql5 = "INSERT INTO RespiteCenters (Name_of_center, location, contact_information)
// VALUES ('HandInHand', 'London', 'handinhand@gmail.com')";

// $sql6 = "INSERT INTO RespiteCenters (Name_of_center, location, contact_information)
// VALUES ('MyRespiteHome', 'Ottawa', 'myrespitehome@myhome.com')";

// $sql7 = "INSERT INTO RespiteCenters (Name_of_center, location, contact_information)
// VALUES ('InclusionHome', 'Ottawa', 'inclusion@home.com')";

// $conn->query($sql1);
// $conn->query($sql2);
// $conn->query($sql3);
// $conn->query($sql4);
// $conn->query($sql5);
// $conn->query($sql6);
// $conn->query($sql7);


// $sql1 = "INSERT INTO directory_respite_workers (username, emailaddress, gender, language, age, related_experience)
// VALUES ('Seema Gurung', 'seema@gmail.com', 'Female', 'English', 30,'Experience working with autistic kids')";

// $sql2 = "INSERT INTO directory_respite_workers (username, emailaddress, gender, language, age, related_experience)
// VALUES ('Kumar Gurung', 'kumarg@gmail.com', 'Male', 'French', 25,'More than 4 years of experience working with children with special needs')";

// $sql1 = "INSERT INTO directory_respite_workers (username, emailaddress, gender, language, age, related_experience)
// VALUES ('Seema Gurung', 'seema@gmail.com', 'Female', 'English', 30,'Experience working with autistic kids')";

// $sql2 = "INSERT INTO directory_respite_workers (username, emailaddress, gender, language, age, related_experience)
// VALUES ('Kumar Gurung', 'kumarg@gmail.com', 'Male', 'French', 25,'More than 4 years of experience working with children with special needs')";
// $sql1 = "INSERT INTO directory_respite_workers (username, emailaddress, gender, language, age, related_experience)
// VALUES ('Seema Gurung', 'seema@gmail.com', 'Female', 'English', 30,'Experience working with autistic kids')";

// $sql2 = "INSERT INTO directory_respite_workers (username, emailaddress, gender, language, age, related_experience)
// VALUES ('Kumar Gurung', 'kumarg@gmail.com', 'Male', 'French', 25,'More than 4 years of experience working with children with special needs')";
// $sql1 = "INSERT INTO directory_respite_workers (username, emailaddress, gender, language, age, related_experience)
// VALUES ('Seema Gurung', 'seema@gmail.com', 'Female', 'English', 30,'Experience working with autistic kids')";

// $sql2 = "INSERT INTO directory_respite_workers (username, emailaddress, gender, language, age, related_experience)
// VALUES ('Kumar Gurung', 'kumarg@gmail.com', 'Male', 'French', 25,'More than 4 years of experience working with children with special needs')";
// $sql1 = "INSERT INTO directory_respite_workers (username, emailaddress, gender, language, age, related_experience)
// VALUES ('Seema Gurung', 'seema@gmail.com', 'Female', 'English', 30,'Experience working with autistic kids')";

// $sql2 = "INSERT INTO directory_respite_workers (username, emailaddress, gender, language, age, related_experience)
// VALUES ('Kumar Gurung', 'kumarg@gmail.com', 'Male', 'French', 25,'More than 4 years of experience working with children with special needs')";
// $sql1 = "INSERT INTO directory_respite_workers (username, emailaddress, gender, language, age, related_experience)
// VALUES ('Seema Gurung', 'seema@gmail.com', 'Female', 'English', 30,'Experience working with autistic kids')";

// $sql2 = "INSERT INTO directory_respite_workers (username, emailaddress, gender, language, age, related_experience)
// VALUES ('Kumar Gurung', 'kumarg@gmail.com', 'Male', 'French', 25,'More than 4 years of experience working with children with special needs')";
// $sql1 = "INSERT INTO directory_respite_workers (username, emailaddress, gender, language, age, related_experience)
// VALUES ('Seema Gurung', 'seema@gmail.com', 'Female', 'English', 30,'Experience working with autistic kids')";

// $sql2 = "INSERT INTO directory_respite_workers (username, emailaddress, gender, language, age, related_experience)
// VALUES ('Kumar Gurung', 'kumarg@gmail.com', 'Male', 'French', 25,'More than 4 years of experience working with children with special needs')";

//  $conn->query($sql1);
//  $conn->query($sql2);

// ?>