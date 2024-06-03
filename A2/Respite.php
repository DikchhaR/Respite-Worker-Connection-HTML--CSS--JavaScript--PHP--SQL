<?php 
require_once("./dbConnect.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
</head>
<body>
    <main>
    <a href="Images/painthands.jpg"></a>
    <header>
         <img src="Images/logo3.png" alt="Picture of name logo" width="100"
            height="80">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            

            <nav>
                <br>
                <ul>
                    <li><a href="Index.php" class="active">ABOUT |</a></li>
                    <li><a href="FinancialResources.html"> CONTACT</a></li>
                     
                </ul>
            </nav>
    </header>

    <div class="main-headingrespite">
        <h1> Respite Services</h1>
        
        <p>We understand the challenges and demands of caregiving a child with special needs,
            and we're here to offer the support and assistance you need. With our respite services, you
            can take the time you need to rest and recharge, knowing that your loved one is in caring
            and capable hands.
    </p>


    </div>
    <br><br><br><br><br>
    <div class="container">

        <div class="typesofrespite">
            <h2>Types of respite care</h2>
            <ul>
                <li>IN HOME</li>
                <li>RESPITE CENTER</li>
                <li>OTHER RECREATIONAL PLACES</li>
            </ul>
           
           
        </div><br><br><br><br><br>


        <div class="box respitecenter">
            <h2>Respite Centers</h2>
            <p>Children are happier when they visit new environment that are tailored to their sensory needs, gross-motor activities and many
                fun-filled activities. Visit the directory of Respite Centers and choose that best fits your needs.
            </p>
            <a href="respitecenters.php" class="main-btn">Visit Directory</a>
        </div><br><br>
        <div class="box directory">
            <h2>Directory of Respite Workers</h2>
            <p>Having a great respite worker is very important for the well being of your child and for your mental peace. Please go through the directory of
                respite workers and choose the one whose experience and skills best fits to your child's needs!
            </p>
            <a href="directory.php" class="main-btn">Visit Directory</a>
        </div><br><br>
        <div class="box registration-form">
            <div id="wrapper">
                <!--Making a class for the fourth page-->
                <h2>Login for Respite Workers</h2>
                <p>Login to your account with your username and password. </p>
                <form action="dologin.php" method="post">
                    <label for="username"> Username </label><br><input type="text" id="user" name="user" size="30">
                    <br><label for="password"> Password </label><br><input type="password" id="pass" name="pass" size="30">
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" id="btn" value="Login">login</button>
                </form>
            </div>

           
            <p>If you are new to our website and want to register as a respite worker, click on the button below</p>
            <a href="UserRegistrationForm.php" class="main-btn">Register here</a>
        </div>
    </div>
    </main>

            <!-- <footer>
                <nav>
                    <ul>
                        <li><a href="Index.html">Return to Homepage</a></li>
                        
                    </ul>
                </nav>
                <p>&copy; 2024 Holistic Way. All rights reserved.</p>
            </footer> -->
        </body>
        </html>