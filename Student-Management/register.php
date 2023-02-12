<?php
include("./connect.php");
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $uPassword = $_POST["uPassword"];
    $upasswordCon = $_POST["upasswordCon"];
    $queryemailExist = "SELECT * FROM `register` WHERE Email='$email'";
    $exe = mysqli_query($mysql, $queryemailExist);
    if ($uPassword != $upasswordCon) {
        echo '<script>alert("Password Not matching!")</script>';
    } else {
        if (mysqli_num_rows($exe) > 0) {
            echo '<script>alert("User with same email already exists!")</script>';
        } else {
            $queryRegister = "INSERT INTO register(Full_Name, Email, Mobile_Number, Age, uPassword)VALUES('$name', '$email', '$phone', '$age', '$uPassword')";
            $exe = mysqli_query($mysql, $queryRegister);
            if ($exe) {
                header('location:index.php');
            }
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <title>Student Management System - Create Account</title>
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

    <!--Register-->
    <div class="registerSec">
        <div class="card">
            <div class="card-body">
                <h3>Create Account</h3>
                <form id="signin-form" method="post">
                    <div class="field-flex">
                        <div class="field">
                            <input name="name" required placeholder="Full Name" id="nameInput" type="text">
                        </div>
                        <div class="field">
                            <input name="email" required placeholder="Email" id="usernameInput" type="email">
                        </div>
                    </div>
                    <div class="field-flex">
                        <div class="field">
                            <input name="phone" required placeholder="Mobile Number" id="phoneInput" type="number">
                        </div>
                        <div class="field">
                            <input name="age" required placeholder="Age" id="ageInput" type="number">
                        </div>
                    </div>
                    <div class="field-flex">
                        <div class="field">
                            <input autocomplete="off" required name="uPassword" placeholder="Password" id="password1Input" type="password">
                        </div>
                        <div class="field">
                            <input autocomplete="off" required name="upasswordCon" placeholder="Confirm Password" id="passwordConInput" type="password">
                        </div>
                    </div>
                    <div class="field-flex">
                        <div class="buttons">
                            <button type="submit" name="submit" class="submit">REGISTER</button><br>
                        </div>
                        <div class="buttons">
                            <button type="reset" class="reset">RESET</button>
                        </div>
                    </div>
                    <p>Already have an account? <a href="./index.php">Sign In</a></p>
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