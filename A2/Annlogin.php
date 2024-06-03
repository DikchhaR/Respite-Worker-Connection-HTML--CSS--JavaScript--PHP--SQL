<?php 

require_once("./db_connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign In Form</title>
<!-- css -->
<link rel="stylesheet" href="../public/stylesheet/css/login.css">
<!-- js -->

<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Barlow+Semi+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Caveat:wght@400..700&family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Kaisei+Tokumin&family=Lora:ital,wght@0,400..700;1,400..700&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">
<!-- font awesome -->
<script src="https://kit.fontawesome.com/e3449e3eb7.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include '../public/header.php'; ?>
    <main>
        <div class="form-container sign-in">
            <h2>Sign In</h2>
            <form action="./do_login.php" method="post">
                <div class="input-group">
                    <label for="signin-email">Email*</label>
                    <input name="email" type="email" id="signin-email" required>
                </div>
                <div class="input-group">
                    <label for="signin-password">Password*</label>
                    <input name="password" type="password" id="signin-password" required>
                </div>
                <div class="options-group">
                    <label class="checkbox-container">
                        <input type="checkbox" id="remember-me">
                        Remember Me
                    </label>
                <a href="#" class="forgot-password"><u>Forgot Password</u></a>
                </div>
                <div class="button-group">
                    <a href="../private/registration.php" class="btn-create-account">Create an Account</a>
                    <button type="submit" class="btn-sign-in">Sign In</button>
                </div>
            </form>
            <?php if (isset($_SESSION["error"]["message"])) : ?>
                <div class="error_message">
                    <?= $_SESSION["error"]["message"] ?>
                    <?php
                    $_SESSION["error"]["message"] = "";
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </main>
    <?php include '../public/footer.php'; ?>


</body>
</html>