<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html>
 
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelBlog | Log In</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/Log-in.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="../images/logo.png" type="image/png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=ZCOOL+KuaiLe&display=swap');

        h3 {
            color: rgb(85,49,74)
        }
    </style>
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

<!-- LOG IN FORM -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" style="width: 50%; margin: 5px auto;">
    <div class="formcontainer">
        <figure>
            <img src="../images/logo.png">
            <figcaption style="font-weight: bold; font-size: 20px">LOG IN</figcaption>
        </figure>
        <hr/>
        <div class="container" style="text-align: left">
            <label for="username"><strong>Username</strong></label>
            <input type="text" id="username" placeholder="Enter Username" name="username" required>
            <label for="password"><strong>Password</strong></label>
            <input type="password" id="password" placeholder="Enter Password" name="password" required>
        </div>
        <center><input type="submit" id="loginButton" class="submit-btn" value="LOG IN" name="loginButton"/></center>
        <div class="container" style="margin-top: 30px">
            <label style="padding-left: 15px">
                <input type="checkbox" name="remember"> Remember me
            </label>
            <br>
            <p>Do you want to be notified?
                <input type="radio" id="yes" name="notifications" value="Yes">
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="notifications" value="No">
                <label for="no">No</label><br>
            </p>
            <p>Don't have an account? <span class="psw"><a href="register.php">SIGN UP here!</a></span></p>
        </div>
    </div>
    </div>
</form>
<?php include_once '../controllers/userController.php';?>

    <!-- FOOTER -->
    <footer>
        <div class="icons">
            <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a>
        </div>
        <br>
        <a href="mailto: op67879@ubt-uni.net">Contact us</a>
        <address>Travel Organization, Copyright &copy; 2023</address>
    </footer>
</body>

</html>