<?php
    require_once("loginconnection.php");
    
    if(isset($_POST['user']) && isset($_POST['pass'])){
        $username =$_POST['user'];
        $password =$_POST['pass'];

        $sql = "SELECT * FROM directory_respite_workers where username = '$username' and password = '$password'";
        $result = $conn->query($sql);
        
        $userCount = $result->num_rows;

        if($userCount > 0 ) {
            $row = $result->fetch_assoc();
            $username = $row['username'];
            $password = $row['password'];
            $retypepass= $password;
            $email = $row['emailaddress'];
            $gender = $row['gender'];
            $language = $row['language'];
            $age = $row['age'];
            $related_experience = $row['related_experience'];
            
        } else {
            echo '<script>
              
            alert("Login failed. Invalid username or password!!!");
                window.location.href = "respite.php";
                </script>';
        }

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add authorship metadata and link CSS and JS files -->
    <link rel="stylesheet" href="CSS/stylesheet.css">
    <script src="script1.js" defer></script>
    <title>User Registration Form</title>
</head>
<body>
    <main>
    <div id="wrapper6">
    <div class="formcontainer">
       
        <h1>User Registration Form</h1>
        <hr>
        <form action="./updateProfile.php" method="POST">
            <!-- You will need to write the validate function for this form. -->
            <p>Please enter the following information. Fields marked with an asterisk (<span class="required">*</span>) are required.</p>
           

            <div class="textfield">
                <label for="username" span class="required">* User Name</label><br>
                <input type="text" name="user" id="username" placeholder="User name" size="70" value="<?php echo $username; ?>">
            </div>

            <div class="textfield">
                <label for="pass" span class="required">* Password</label><br>
                <input type="password" name="pass" id="pass" placeholder="Password" size="70" value="<?php echo $password; ?>">
            </div>


        
            <div class="textfield">
                <label for="pass2" span class="required">* Re-type Password</label><br>
                <input type="password" name="retype" id="pass2" placeholder="Password" size="70" value="<?php echo $retypepass; ?>">
            </div>

            <div class="textfield">
                <label for="email" span class="required">* Email Address</label><br>
                <input type="text" name="email" id="email" placeholder="Email" size="70" value="<?php echo $email; ?>">
            </div>
            <label for="gender" span class="required">* Gender</label><br>
                <input type="radio" id="gender1" name="gender" value="Male" <?php if ($gender === 'Male') echo 'checked'; ?>>
                <label for="gender1"> Male</label>
                <input type="radio" id="gender2" name="gender" value="Female" <?php if ($gender === 'Female') echo 'checked'; ?>>
                <label for="gender2"> Female</label>
                <input type="radio" id="gender3" name="gender" value="Other" <?php if ($gender === 'Other') echo 'checked'; ?>>
                <label for="gender3"> Other</label><br>

            <label for="language" span class="required">* Language</label><br>
            <select id="language" name="language">
                <option value ="english"  <?php if ($language === 'english') echo 'selected'; ?>> English</option>
                <option value ="french"  <?php if ($language === 'french') echo 'selected'; ?>> French</option>
                <option value ="other"  <?php if ($language === 'other') echo 'selected'; ?>> Other</option>
              </select>
              <div class="textfield">
                        <label for="age">Age Range:</label>
                        <select id="age" name="age">
                            <option value="18-25" <?php if ($age >= 18 && $age <=25) echo 'selected'; ?>>18-25</option>
                            <option value="26-35" <?php if ($age >= 26 && $age <=35) echo 'selected'; ?>>26-35</option>
                            <option value="36-45" <?php if ($age >= 36 && $age <=45) echo 'selected'; ?>>36-45</option>
                            <option value="46-55" <?php if ($age >= 46 && $age <=55) echo 'selected'; ?>>46-55</option>
                            <option value="56-65" <?php if ($age >= 56 && $age <=65) echo 'selected'; ?>>56-65</option>
                        </select>
                    </div>
                    <div class="textfield">
                        <label for="experience">Related Experience</label><br>
                        <textarea id="experience" name="experience"
                            placeholder="Your experience with special needs kids" rows="7" cols="100"><?php echo $related_experience; ?></textarea>

                    </div>
<br>
            <div class="checkbox">
                <input type="checkbox" name="terms" id="terms">
                <label for="terms">I agree to the website's terms of service and privacy policy</label>
            </div>
        
    
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                      <button type="submit" id="update">Update Information</button>
    
        </form>
    </div>
    <form action="./deleteProfile.php" method="POST">
    <input type="hidden" name="user" value="<?php echo $username; ?>">
    <button type="submit" id="delete">Delete Profile</button>

</form>
    </div>
    </main>
    <br> <br><br>
    <footer>
        <nav>
            <ul>
                <li><a href="Index.html">Return to Homepage</a></li>
                
            </ul>
        </nav>
        <p>&copy; 2024 Holistic Way. All rights reserved.</p>
    </footer>
</body>
</html>