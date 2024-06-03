
<!--Dikchha Rijal, registration.html, 2024-03-15, This page is the page for registration that shows validation of form-->
<?php 
require_once("./dbConnect.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add authorship metadata and link CSS and JS files -->
    <link rel="stylesheet" href="CSS/stylesheet.css">
    <script src="registrationValidation.js"></script>
    <title>User Registration Form</title>
</head>
<body>
    <main>
    <div id="wrapper6">
    <div class="formcontainer">
       
        <h1>User Registration Form</h1>
        <hr>
        <form  method="POST" id="registerForm">
            <!-- You will need to write the validate function for this form. -->
            <p>Please enter the following information. Fields marked with an asterisk (<span class="required">*</span>) are required.</p>
           

            <div class="textfield">
                <label for="username" span class="required">* User Name</label><br>
                <input type="text" name="user" id="username" placeholder="User name" size="70">
            </div>

            <div class="textfield">
                <label for="pass" span class="required">* Password</label><br>
                <input type="password" name="pass" id="pass" placeholder="Password" size="70">
            </div>


        
            <div class="textfield">
                <label for="pass2" span class="required">* Re-type Password</label><br>
                <input type="password" name="retype" id="pass2" placeholder="Password" size="70">
            </div>

            <div class="textfield">
                <label for="email" span class="required">* Email Address</label><br>
                <input type="text" name="email" id="email" placeholder="Email" size="70">
            </div>
            <label for="gender" span class="required" id="gender">* Gender</label><br>
                <input type="radio" id="gender1" name="gender" value="Male">
                <label for="gender1"> Male</label>
                <input type="radio" id="gender2" name="gender" value="Female">
                <label for="gender2"> Female</label>
                <input type="radio" id="gender3" name="gender" value="Other">
                <label for="gender3"> Other</label><br>

            <label for="language" span class="required">* Language</label><br>
            <select id="language" name="language">
                <option value ="english"> English</option>
                <option value ="french"> French</option>
                <option value ="other"> Other</option>
              </select>
              <div class="textfield">
                        <label for="age">Age Range:</label>
                        <select id="age" name="age">
                            <option value="18-25">18-25</option>
                            <option value="26-35">26-35</option>
                            <option value="36-45">36-45</option>
                            <option value="46-55">46-55</option>
                            <option value="56-65">56-65</option>
                        </select>
                    </div>
                    <div class="textfield">
                        <label for="experience">Related Experience</label><br>
                        <textarea id="experience" name="experience"
                            placeholder="Your experience with special needs kids" rows="7" cols="100"></textarea>

                    </div>
<br>
            <div class="checkbox">
                <input type="checkbox" name="terms" id="terms">
                <label for="terms">I agree to the website's terms of service and privacy policy</label>
            </div>
        
    
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                      <button type="submit" id="register">Register</button>
    
        </form>
    </div>
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