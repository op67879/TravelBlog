<?php ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>TravelBlog | Register</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/Log-in.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" href="../images/logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>

<body>
<!-- RESPONSIVE HEADER --> 
<header>
    <div class='header'>
        <img src='../images/logo.png'>
        <a href='index.php' class='logo'>TravelBlog</a>
        <div class='header-right'>
            <?php if(isset($_SESSION['username'])){
                    echo "
                        <a href='index.php'>Home</a>
                        <a href='about.php'>About</a>
                        <a href='roster.php'>Explore</a>
                        <a href='gallery.php'>Gallery</a>
                        <a href='contactus.php'>Contact Us</a>
                        <div class='account'>
                            <a class='active' href='profile.php'>".$_SESSION['username']."'s Profile</a>
                        </div>";
                }
                else{
                    echo "
                        <a href='index.php'>Home</a>
                        <a href='contactus.php'>Contact Us</a>
                        <div class='account'>
                            <a class='active' href='log-in.php'>LOG IN</a>
                        </div>";
                }
            ?>   
        </div>
    </div>         
</header>

<!-- REGISTER FORM -->
<section>
    <div class="container">
        <div class="login-block">
            <div class="form">
                <img src="../images/beach-29046.png">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <label for="name">Name</label>
                    <input class="form-input" type="text" id="name" name="fname" placeholder="First name" required>

                    <label for="name">Surname</label>
                    <input class="form-input" type="text" id="name" name="lname" placeholder="Last name" required>

                    <label for="username">Username</label>
                    <input class="form-input" type="text" id="username" name="username" placeholder="Username" required>

                    <label for="email">Email</label>
                    <input class="form-input" type="email" id="email" name="email" placeholder="Email: @" required>

                    <!-- OLD VALIDATION
                    <label id="password_error" style="color: red;display: none;">Password should be 6-20 characters long and contain at least one lowercase
                    one uppercase and a number!</label> -->

                    <span class="pwd-format">
                        Password must contain an uppercase, lowercase, number and 6-20 characters
                    </span>
                    <label for="psw">Password</label>
                    <input class="form-input" type="password" id="psw" name="password"
                           title="Must contain 6-20 characters" placeholder="Enter password" required>
                    <label for="confirm_psw">Confirm Password</label>
                    <input class="form-input" type="password" id="confirm_psw" name="confirm_psw"
                            title="Passwords should match" placeholder="Confirm your password" required>

                    <center><input type="submit" class="lbtn" id="register" name="registerButton" value="REGISTER"></center>
                </form>
                <?php include_once '../controllers/userController.php';?>
            </div>
        </div>
    </div>
</section>

<!-- OLD VALIDATION
<script src="../javascript/script.js"></script> -->
<script src="../javascript/validation.js"></script>

<!-- FOOTER -->
<footer>
    <div class="icons">
        <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a>
    </div>
    <br>
    <a href = "mailto: op67879@ubt-uni.net ">Contact us</a>
    <address>Travel Organization, Copyright &copy; 2023</address>
</footer>
</body>

</html>