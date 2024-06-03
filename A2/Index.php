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
        <section class="main">
            <header>
                <img src="Images/logo3.png" alt="Picture of name logo" width="90"
                    height="90">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p>Holistic Way</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                
                
                <nav>
                    <br>
                    <ul>
                        <li><a href="Index.html" class="active">ABOUT |</a></li>
                        <li><a href="Stories.html">SHARE YOUR STORY |</a></li>
                        <li><a href="FinancialResources.html"> CONTACT</a></li>

                    </ul>
                </nav>


            </header>


            <div class="main-heading">
                <h2> About Us</h2>
                <div class="line"></div>
                
                <br>
                <p>Welcome to our website "Holistic Way"! We are dedicated to providing comprehensive support for families raising Special Needs Children. 
                    We aim on offering services, guidance and resources that addresses the diverse needs of both children and their families, empowering them to thrive in every aspect of their lives.We aim to make a holisitic approach for the care of
                    families raising Special Needs Children.
                    Our team of professionals and Volunteers,and support staff work collaboratively to tailor our offerings to meet the specific needs of each child and family.
                    We invite you to explore our website, connect with our community, and discover ways in which we can support you and your family.
                </p>


                <br><br>
                <section>
                    <h2>Our Services</h2>
                    <div class="line"></div>
                </section>
                <section class="features">
                    <div class="feature-container">
                        <div class="feature-box">
                            <div class="f-img">
                                <img src="Images/respite.jpg" width="400" height="400">
                            </div>
                            <div class="f-text">
                                <h4> Respite Services</h4>
                                <!-- <p>we understand the challenges and demands of caregiving a child with special needs,
                            and we're here to offer the support and assistance you need. With our respite services, you
                            can take the time you need to rest and recharge, knowing that your loved one is in caring
                            and capable hands.</p> -->
                                <a href="Respite.php" class="main-btn">Visit</a>

                            </div>
                        </div>
                    </div>

                    <div class="feature-container">
                        <div class="feature-box">
                            <div class="f-img">
                                <img src="Images/upcoming events.jpg" width="400" height="400">
                            </div>
                            <div class="f-text">
                                <h4> Upcoming Events</h4>
                                <!-- <p>we understand the challenges and demands of caregiving a child with special needs,
                            and we're here to offer the support and assistance you need. With our respite services, you
                            can take the time you need to rest and recharge, knowing that your loved one is in caring
                            and capable hands.</p> -->
                                <a href="SocialEvents.html" class="main-btn">Visit</a>

                            </div>
                        </div>
                    </div>


                    <div class="feature-container">
                        <div class="feature-box">
                            <div class="f-img">
                                <img src="Images/funding.jpg" width="400" height="400">
                            </div>
                            <div class="f-text">
                                <h4> Funding Resources</h4>
                                <!-- <p>We understand the challenges and demands of caregiving a child with special needs,
                            and we're here to offer the support and assistance you need. With our respite services, you
                            can take the time you need to rest and recharge, knowing that your loved one is in caring
                            and capable hands.</p> -->
                                <a href="MentalHealth.html" class="main-btn">Visit</a>

                            </div>
                        </div>
                    </div>
            </div>

        </section>

        <br><br><br>

        </section>
    </main>
  

       
    <footer>

    <!-- <div id="wrapper">
            Making a class for the fourth page-->

            <!-- <h3> Join Us</h3>
            <form action="dologin.php" method="POST">
                <label for="firstname"> First name </label><input type="text" id="firstname" name="firstname" size="30">
                <br><label for="lastname"> Last name </label><input type="text" id="lastname" name="lastname" size="30">
                <br><label for="email"> E-mail</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<Input type="text"
                    id="email" name="email" size="30"><br>
                    
                        <input type="checkbox" name="newsletter" id="newsletter">
                        <label for="newsletter">I agree to receive monthly newsletters</label>
                    <br>
                    <input type="checkbox" name="terms" id="terms">
                        <label for="terms">I agree to the terms and conditions</label>

                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" value="submit"></button>
            </form>
        </div> -->
        <!-- <nav> -->
            <ul>
                <li><a href="AboutUs.html">About Us</a></li>
                <li><a href="ContactUs.html">Contact Us</a></li>
                <li><a href="PrivacyPolicy.html">Privacy Policy</a></li>
            </ul>
        <!-- </nav> -->
        <p>&copy; 2024 Holistic Way. All rights reserved.</p>
    </footer>

</body>


</html>