<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html>
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelBlog | Contact Us</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/contactus.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="../images/logo.png" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=ZCOOL+KuaiLe&display=swap');

        h3 {
            color: #55314a
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
                        <a class='active' href='contactus.php'>Contact Us</a>
                        <div class='account'>
                            <a href='profile.php'>".$_SESSION['username']."'s Profile</a>
                        </div>";
                }
                else{
                    echo "
                        <a href='index.php'>Home</a>
                        <a class='active' href='contactus.php'>Contact Us</a>
                        <div class='account'>
                            <a href='log-in.php'>LOG IN</a>
                        </div>";
                }
            ?>   
        </div>
    </div>         
</header>

 <!--CONTACT US FORM-->
<div class="contactusform">
    <div class="title">
      <h1 style="color: white">CONTACT US</h1>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="contact-form">
      <div class="input-fields">
        <input name="contactName" type="text" class="input" placeholder="Name">
        <input name="contactEmail" type="text" class="input" placeholder="Email Address">
        <input name="contactPhone" type="tel" class="input" placeholder="Phone">
        <input name="contactSubject" type="text" class="input" placeholder="Subject">
      </div>
      <div class="msg">
        <textarea name="message" placeholder="Message"></textarea>
        <input class="contactButton" type="submit" name="contactButton" value="SEND">
      </div>
    </div>
    </form>
    <?php include_once '../controllers/contactController.php';?>
</div>

<script src="../javascript/draganddrop.js"></script>
<script src="../javascript/scroll.js"></script>

    <!-- FOOTER 
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
    </footer>-->
</body>

</html>