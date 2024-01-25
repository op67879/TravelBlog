<?php
  session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelBlog | Explore</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/roster.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="../images/logo.png" type="image/png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=ZCOOL+KuaiLe&display=swap');
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                        <a class='active' href='roster.php'>Explore</a>
                        <a href='gallery.php'>Gallery</a>
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

<!-- EXPLORE - (ADMIN ADDS BOOKING PLACES) -->
<section id="main">
    <div class="container">
        <h1>Our highly requested island trips are back. Book them now!</h1>
        <div class="rosterphoto">
            <div class="infobox">
                <div class="img-infobox">
                    <img src="../images/Venice_Italy.jpg">
                </div>

                <div class="textt">
                    <div class="content">
                        <h1>Venice</h1>
                        <a href="venice.php">
                            <button type="button" class="explore">Explore</button>
                        </a>
                    </div>
                </div>
            </div>

            <?php 
             include_once '../repository/productsRepo.php';
             $productsRepository = new productsRepo();

             $products = $productsRepository->getAllProducts();

             foreach($products as $product){
                echo 
                "
               
                <div class='infobox'>
                <div class='img-infobox'>
                    <img src='../images/$product[ProductName].jpg'>
                </div>

                <div class='textt'>
                    <div class='content'>
                        <h1>$product[ProductText]</h1>
                        <a href='#'>
                            <button type='button' class='explore'>$product[Price]</button>
                        </a>
                    </div>
                </div>
            </div>";
            }?>
        </div>
    </div>

<!-- SUBSCRIBE FORM -->
<section id="newsletter">
    <div class="container">
        <h1>Subscribe for more info !</h1>
        <form>
            <input type="email" placeholder="Enter Email...">
            <button type="submit" class="button_1" onclick="myFunction()">Subscribe</button>
        </form>
    </div>
</section>    

<!-- SUBSCRIBE ALERT -->
<script>
    function myFunction() {
        alert("Thank you for the subscribe!");
    }
</script>

<!-- RATE OUR WORK -->
    <div class="raw">
        <h1 id="decor">Please rate our work:</h1>
        <div class="wrapew">
            <div class="block1">
                <span>Excellent</span>
                <input data-index="0" id="Check1" type="checkbox" name="myCheckbox" value="1" onclick="selectOnlyThis(this)"  />
                <label for="Check1"></label>
            </div>
            <div class="block1">
                <span>Average</span>
                <input data-index="1" id="Check2" type="checkbox" name="myCheckbox" value="2" onclick="selectOnlyThis(this)" />
                <label for="Check2"></label>
            </div>
            <div class="block1">
                <span>Poor</span>
                <input data-index="2" id="Check3" type="checkbox" name="myCheckbox" value="3" onclick="selectOnlyThis(this)" />
                <label for="Check3"></label>
            </div>
        </div>
    </div> 
</section>

<!-- SCROLL -->
<div id="scroll">&#9650;</div>

<script src="../javascript/checkbox.js"></script>
<script src="../javascript/canvas.js"></script>
<script src="../javascript/tryandcatch.js"></script>
<script src="../javascript/slideshow.js"></script>
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