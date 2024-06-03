<?php 
require_once("./dbConnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add authorship metadata and link CSS and JS files -->
    <link rel="stylesheet" href="./CSS/respitecenter.css">
    <title>Directory of Respite Workers</title>
</head>
<body>
<main>   
    <h1>Lists of Respite workers with their unique skills and experience</h1>
    <div class="line"></div>
    <br><br>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div id="wrapper7">
            <p> Please select the search button to see the directory</p>
            <div id="genderFilter">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender">
                    <option value="All" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'All') echo 'selected'; ?>>All</option>
                    <option value="Male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                    <option value="Female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                    <option value="Other" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Other') echo 'selected'; ?>>Other</option>
                </select>
            </div>

            <div id="ageFilter">&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="age">Age:</label>
                <select id="age" name="age">
                    <option value="All" <?php if(isset($_POST['age']) && $_POST['age'] == 'All') echo 'selected'; ?>>All</option>
                    <option value="18-25" <?php if(isset($_POST['age']) && $_POST['age'] == '18-25') echo 'selected'; ?>>18-25</option>
                    <option value="26-35" <?php if(isset($_POST['age']) && $_POST['age'] == '26-35') echo 'selected'; ?>>26-35</option>
                    <option value="36-45" <?php if(isset($_POST['age']) && $_POST['age'] == '36-45') echo 'selected'; ?>>36-45</option>
                    <option value="46-55" <?php if(isset($_POST['age']) && $_POST['age'] == '46-55') echo 'selected'; ?>>46-55</option>
                    <option value="56-65" <?php if(isset($_POST['age']) && $_POST['age'] == '56-65') echo 'selected'; ?>>56-65</option>
                </select>
            </div>
            <div id="languageFilter">&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="language">Language:</label>
                <select id="language" name="language">
                    <option value="All" <?php if(isset($_POST['language']) && $_POST['language'] == 'All') echo 'selected'; ?>>All</option>
                    <option value="English" <?php if(isset($_POST['language']) && $_POST['language'] == 'English') echo 'selected'; ?>>English</option>
                    <option value="French" <?php if(isset($_POST['language']) && $_POST['language'] == 'French') echo 'selected'; ?>>French</option>
                    <option value="Other" <?php if(isset($_POST['language']) && $_POST['language'] == 'Other') echo 'selected'; ?>>Other</option>
                </select>
            </div>
            <div>
                &nbsp;&nbsp;&nbsp;&nbsp;  
                <button type="submit" name="searchButton">Search!</button>
            </div>
        </div>
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['searchButton'])) {
        $selectedGender = $_POST["gender"];
        $selectedAge = $_POST["age"];
        $selectedLanguage = $_POST["language"];
        
        $sqlQuery = "SELECT * FROM directory_respite_workers WHERE 1=1";

        if ($selectedGender !== "All") {
            $sqlQuery .= " AND gender = '" . $selectedGender . "'";
        }
        if ($selectedAge !== "All") {
            $sqlQuery .= " AND age = '" . $selectedAge . "'";
        }
        if ($selectedLanguage !== "All") {
            $sqlQuery .= " AND language = '" . $selectedLanguage . "'";
        }

        $result = mysqli_query($conn,$sqlQuery);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                // Output wrapped in HTML elements with classes
                echo '<div class="container">';
                echo '<div class="data-row">';
                echo '<span class="data-label">Respite Worker Full name:</span>'. $row['username'] . '<br>';
                echo '<span class="data-label">E-mail:</span>' . $row['emailaddress'] . '<br>';
                echo '<span class="data-label">Gender:</span>' . $row['gender'] . '<br>';
                echo '<span class="data-label">Language spoken:</span>' . $row['language'] . '<br>';
                echo '<span class="data-label">Age:</span>' . $row['age'] . '<br>';
                echo '<span class="data-label">Related Experience:</span>' . $row['related_experience'];
                echo '</div>';
                echo '</div>';
            }
        }
    }
    ?>
</main>
</body>
</html>
