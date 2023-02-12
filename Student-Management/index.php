<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <title>Student Management System - Sign In</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar">
        <ul class="nav-links">
            <li>
                <a>Home</a>
            </li>
            <li>
                <a>About</a>
            </li>
            <li>
                <a>Projects</a>
            </li>
            <li>
                <a>Contact</a>
            </li>
        </ul>
    </nav>

    <!--Signup-->
    <div class="signupSec">
        <div class="card">
            <div class="card-body">
                <h3>Sign In</h3>
                <form id="signin-form">
                    <div class="field">
                        <input name="email" placeholder="Email" id="usernameInput" type="email">
                    </div>
                    <div class="field">
                        <input autocomplete="off" name="password" placeholder="Password" id="passwordInput" type="password">
                    </div>
                    <div class="buttons">
                        <button type="submit" class="submit">SIGN IN</button><br>
                        <button type="reset" class="reset">RESET</button>
                    </div>
                    <p>Don't have an account yet? <a href="./register.php">Register Now</a></p>
                </form>
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer class="footer">
        <div class="footer-flex">
            <p>© Student Management System 2023 All rights reserved.</p>
            <p>Made in love with India</p>
        </div>
    </footer>
</body>

</html>