<?php
	session_start(); ?>
<!DOCTYPE html>
<html lang="en"> 
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../styles/Profile.css">
    <link rel="icon" href="../images/logo.png" type="image/png">
    <title>TravelBlog | Users</title>
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

<!-- INSERT USER FORM -->
<main class='profile'>
    <div class="signupcontainer">
        <form class="signupform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

          <h2>INSERT USER: </h2>
          <center>
          <h3>First Name:</h3>
          <input class="data" type="text" id="fname" name="fname"> <br>
          <label id="fnameMsg" for="fname"></label><br>
          <h3>Last Name:</h3>
          <input class="data" type="text" id="lname" name="lname"><br>
          <label id="lnameMsg" for="lname"></label><br>
          <h3>Username:</h3>
          <input class="data" type="text" id="username" name="username"><br>
          <label id="usernameMsg" for="username"></label><br>
          <h3>E-mail:</h3>
          <input class="data" type="text" id="email" name="email"><br>
          <label id="emailMsg" for="email"></label><br>
          <h3>Password:</h3>
          <input class="data" type="password" id="password" name="password"><br>
          <label id="passwordMsg" for="password"></label><br>

          <input type="submit" class="profileButton" id="register" name="registerButton" value="INSERT"></center>

        </form>
        <?php include_once '../controllers/userController.php';?>

    </div>

</main>

</body> 
</html>