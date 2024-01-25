<?php 
    session_start(); 
?>
<!DOCTYPE html> 
<html>
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelBlog | Gallery</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/gallery.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="../images/logo.png" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=ZCOOL+KuaiLe&display=swap');
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
                        <a class='active' href='gallery.php'>Gallery</a>
                        <a href='contactus.php'>Contact Us</a>
                        <div class='account'>
                            <a href='profile.php'>".$_SESSION['username']."'s Profile</a>
                        </div>";
                }
                else{
                    echo "
                        <a href='index.php'>Home</a>
                        <a href='contactus.php'>Contact Us</a>
                        <div class='account'>
                            <a href='log-in.php'>LOG IN</a>
                        </div>";
                }
            ?>   
        </div>
    </div>         
</header>

<!-- SLIDESHOW -->
<section id="slideshow">
    <div class="container">
        <h1 id="slideTitle">VISITED PLACES</h1>
        <div class="slides">
            <input type="radio" name="r" id="r1" checked>
            <input type="radio" name="r" id="r2">
            <input type="radio" name="r" id="r3">
            <input type="radio" name="r" id="r4">
            <input type="radio" name="r" id="r5">
            <div class="slide s1">
                <img src="../images/333.jpg">
            </div>
            <div class="slide">
                <img src="../images/222.jpg" alt="">
            </div>
            <div class="slide">
                <img src="../images/555.jpg" alt="">
            </div>
            <div class="slide">
                <img src="../images/444.jpg" alt="">
            </div>
            <div class="slide">
                <img src="../images/111.jpg" alt="">
            </div>
        </div>

        <div class="navigation">
            <label for="r1" class="bar"></label>
            <label for="r2" class="bar"></label>
            <label for="r3" class="bar"></label>
            <label for="r4" class="bar"></label>
            <label for="r5" class="bar"></label>
        </div>
    </div>
</section>

<!-- VIDEOS AND AUDIOS-->
<div class="container">
    <!-- VIDEOS -->
    <div style="display: flex; width: 100%; justify-content: center; margin: 100px auto 10px auto">
        <video src="../images/video1.mp4" type="video/mp4" autoplay loop controls
               style="width: 50%; margin-right: 5px; border-radius: 50px"></video>
        <video src="../images/video2.mp4" type="video/mp4" autoplay loop controls
               style="width: 50%;margin-left: 5px;border-radius: 50px"></video>
    </div>
    <!-- AUDIOS -->
    <div style="display: flex; width: 100%; justify-content: center">
        <audio src="../images/audio1.mp3" controls style="width: 50%;margin-right: 5px"></audio>
        <audio src="../images/audio2.mp3" controls style="width: 50%; margin-left: 5px"></audio>
    </div>
</div>

    <!-- SCROLL -->
    <div id="scroll">&#9650;</div>

<script src="../javascript/scroll.js"></script>

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