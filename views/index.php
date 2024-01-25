<?php
	session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>TravelBlog | Welcome</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/index.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" href="./images/logo.png" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=ZCOOL+KuaiLe&display=swap');
    
        h3 {
            color: #55314a
        }
    </style>
</head>


<body>
<!-- OLD HEADER
    <div class="container">
        <div id="branding">
            <img src="./images/logo.png">
            <h1><abbr title="TravelBlog Organization">TravelBlog</abbr></h1>
        </div>
        <nav>
            <ul style="list-style-type:circle;">
                <li class="current"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="roster.html">Explore</a></li>
                <button type="button" class="loginBtn"><a href="log-in.html">LOG IN</a></button>
            </ul>
        </nav>
    </div> -->

<!-- RESPONSIVE HEADER -->
<header>
    <div class='header'>
        <img src='../images/logo.png'>
        <a href='index.php' class='logo'>TravelBlog</a>
        <div class='header-right'>
            <?php if(isset($_SESSION['username'])){
                    echo "
                        <a class='active' href='index.php'>Home</a>
                        <a href='about.php'>About</a>
                        <a href='roster.php'>Explore</a>
                        <a href='gallery.php'>Gallery</a>
                        <a href='contactus.php'>Contact Us</a>
                        <div class='account'>
                            <a href='profile.php'>".$_SESSION['username']."'s Profile</a>
                        </div>";
                }
                else{
                    echo "
                        <a class='active' href='index.php'>Home</a>
                        <a href='contactus.php'>Contact Us</a>
                        <div class='account'>
                            <a href='log-in.php'>LOG IN</a>
                        </div>";
                }
            ?>   
        </div>
    </div>         
</header>

<!--HOME PAGE-->
<section id="showcase">
    <div class="container">
        <div class="background-image-text1">
           <h1>LET US TAKE YOU AWAY</h1>
            <p><strong>Here you can see some informations about some of the most famous places around the world.</strong></p>
        </div>
    </div>
</section>

<!--LOCATION, PEOPLE AND IMAGES--> 
<section id="boxes">
    <div class="container">
        <div class="box">
            <a href="maldives.php#geography"><img src="../images/Location.png"></a>
            <h3 class="lpp"><i>Location</i></h3>
            <p>The location of the place.</p>
        </div>
        <div class="box">
            <a href="maldives.php#demographics"><img src="../images/People.png"></a>
            <h3 class="lpp"><i>People</i></h3>
            <p>The population that lives on that place, what race predominates and what language is spoken there.</p>
        </div>
        <div class="box">
            <a href="roster.php"><img src="../images/Photos.png"></a>
            <h3 class="lpp"><i>Photos</i></h3>
            <p>Some beautiful photos of each place.</p>
        </div>
    </div>
</section>
<hr>

<!--DRAG AND DROP-->
<div class="container">
    <div style="display: flex; justify-content: center">
        <p>Have you ever been in an Island? <br> If yes, please drag the checkmark and drop it into the box.</p>
        <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <br>
        <img id="drag1" src="../images/checkmark.png" draggable="true" ondragstart="drag(event)" width="50" height="50">
    </div>
</div>
<hr>
<br>

<!--CLICK HERE TO WATCH THE LOCAL TIME-->
<div class="container">
     <button  class="time" onclick="Time()"><b>Click here to watch the local time in your country,so you can compare it with the place you want to visit.</b></button>
     <p id="time1"></p>
</div>

<script>
    function Time(){
        document.getElementById('time1').innerHTML = new Date();
        setInterval(Time, 1000);
    }
</script>

<!--CLICK HERE TO KNOW YOUR GEOLOCATION-->
<div class="container">
    <button  class="time" onclick="getLocation()"><b>Click here to know your geolocation</b></button>
    <p id="demo"></p>
</div>

<script>
    var x = document.getElementById("demo");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
    }
</script>

<!-- SCROLL -->
<div id="scroll">&#9650;</div>

<script src="../javascript/draganddrop.js"></script>
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
    <a href = "mailto: op67879@ubt-uni.net ">Contact us</a>
    <address>Travel Organization, Copyright &copy; 2023</address>
</footer>
</body>

</html>