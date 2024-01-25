<?php 
    session_start(); 
?>
<!DOCTYPE html> 
<html>
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelBlog | About</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/about.css">
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
                        <a class='active' href='about.php'>About</a>
                        <a href='roster.php'>Explore</a>
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

    <!-- COVER SLIDESHOW -->
    <div class="container" style="width: 100%">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="../images/Paris.jpg" style="width:100%">
                <div class="text">Paris</div>
            </div>

            <div class="mySlides fade">
                <img src="../images/Rome.jpg" style="width:100%">
                <div class="text">Rome</div>
            </div>

            <div class="mySlides fade">
                <img src="../images/London.jpg" style="width:100%">
                <div class="text">London</div>
            </div>

            <div class="mySlides fade">
                <img src="../images/Zurich.jpg" style="width:100%">
                <div class="text">Zurich</div>
            </div>

            <div class="mySlides fade">
                <img src="../images/GrandCanyon.jpg" style="width:100%">
                <div class="text">Grand Canyon</div>
            </div>
        </div>
    </div>
    <br>

    <!-- ABOUT US TEXTS -->
    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title" id="borderpng">About Us</h1>
                <p>
                    TravelBlog is an organization that deals with the publication of some basic information about
                    different
                    places around the world to inform people with natural beauties.
                </p>
                <p class="importantinfo">
                    Since 2010 we accept new people in our organization who bring us new ideas and contribute with their
                    general knowledge of different places whether in geographical, political or even cultural
                    terms. With some of them we also organize weekly camping to visit a place in order to get to know
                    that place better and the things that identify it.
                    <br>
                    <script type="text/javascript">
                        var num = 2;
                        document.write("Number of Founders: " + num.toString());
                    </script>
                </p>
            </article>

            <aside id="sidebar">
                <div class="importantinfo">
                    <h3>What We Do</h3>
                    <p>We try to be in touch with the population for any new information about the best places
                        in the world in order to develop tourism there and grow the economy.</p>
                </div>
            </aside>
        </div>
    </section>

    <!-- BOOK HERE (HIDDEN)-->
    <div class="container">
        <button onclick="Hide()" class="hideBtn" style="margin-left: 50px">BOOK A TRIP HERE!</button>
    </div>

    <!-- BOOK HERE FORM (DISPLAYED) -->
    <div id="hide" style="display: none">
        <div class="container" style="color: #081C15">
            <form class="booking" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <svg width="100%" height="100">
                    <rect x="20" y="20" width="100%" height="100%" style="fill:#55314a">
                        <animate attributeType="CSS" attributeName="opacity" from="1" to="0" dur="1s"
                            repeatCount="indefinite" />
                    </rect>
                </svg>
                <div class="colums">
                    <div class="item">
                        <label for="name">Name<span>*</span></label>
                        <input id="name" type="text" name="bname" class="name" required />
                    </div>
                    <div class="item">
                        <label for="eaddress">Email Address<span>*</span></label>
                        <input id="eaddress" type="email" name="bemail" class="eaddress" required />
                    </div>
                    <div class="item">
                        <label for="phone">Phone<span>*</span></label>
                        <input id="phone" type="tel" name="bphone" class="phone" required />
                    </div>
                    <div class="item">
                        <label for="street">Street<span>*</span></label>
                        <input id="street" type="text" name="street" class="street" required />
                    </div>
                    <div class="item">
                        <label for="city">City<span>*</span></label>
                        <input id="city" type="text" name="city" class="city" required />
                    </div>
                    <div class="item">
                        <label for="state">State<span>*</span></label>
                        <input id="state" type="text" name="state" class="state" required />
                    </div>
                    <div class="item">
                        <label for="zip">Zip<span>*</span></label>
                        <input id="zip" type="text" name="zip" class="zip" required />
                        <p id="p1"></p>
                    </div>
                </div>
                <div class="item">
                    <label for="favorite">Islands you would like to visit</label>
                    <input list="favorites" name="visit" id="favorite" class="favorite">
                    <datalist id="favorites">
                        <option value="Paris">Paris</option>
                        <option value="Rome">Rome</option>
                        <option value="London">London</option>
                        <option value="Zurich">Zurich</option>
                        <option value="Grand Canyon">Grand Canyon</option>
                        <option value="The Cook Island">The Cook Island</option>
                        <option value="Bali">Bali</option>
                        <option value="The Dalmatian">The Dalmatian</option>
                    </datalist>
                </div>
                <div class="dayA">
                    <label for="day">Day attending:</label>
                    <select name="day" id="day" required>
                        <option value="">Select an option: </option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                    </select>
                </div>
                <canvas id="canvas" width="100" height="100"></canvas>
                <div class="item">
                    <label for="visit">Special Requirements</label>
                    <input id="visit" class="visit" name="req"></input>
                </div>
                <div class="btn-block">
                    <input class="book" type="submit" name="bookingButton" value="Book Now!">
                </div>
                <svg width="200px" height="200">
                    <polygon points="100,10 40,198 190,78 10,78 160,198" style="stroke: aqua; fill: transparent" />
                </svg>

                <div id="resize-box">
                    <p><b>It's such a pleasure to have you a part of our team. Thanks for joining us.</b></p>
                </div>
            </form>
            <?php include_once '../controllers/bookingController.php'; ?>
        </div>
    </div>

    <!-- OUR TEAM -->
    <h4 style="font-size: 30px;text-align: center;font-family: 'ZCOOL KuaiLe', cursive">Our &nbsp; Team</h4>
    <div class="image-container_a">
        <div class="image_a" onmouseover="fetch_info(0)"><img src="../images/bitmoji-a.png"></div>
        <div class="image_a" onmouseover="fetch_info(1)"><img src="../images/bitmoji-d.png"></div>
    </div>

    <div class="info-container_a">
        <img class="profile_a" id="profile_a" src="../images/bitmoji1-a.jpg">
        <div class="info_a">
            <h1 class="name_a" id="name_a">Olti Pozhegu</h1>
            <h3 class="status_a" id="status_a">Founder </h3>
            <p class="about_a" id="about_a">Gjakov&euml;/Kosov&euml</p>
        </div>
    </div>

    <script>
        function fetch_info(i) {
            let profiles_a = ["../images/bitmoji1-a.jpg", "../images/bitmoji1-d.jpg"];
            let name_a = ['Olti Pozhegu', 'Diart Gashi'];
            let status_a = ["Founder ", "Founder "];
            let about_a = ["Gjakov&euml;/Kosov&euml;", "Prishtin&euml;/Kosov&euml;"];

            document.getElementById("profile_a").src = profiles_a[i];
            document.getElementById("name_a").innerHTML = name_a[i];
            document.getElementById("status_a").innerHTML = status_a[i];
            document.getElementById("about_a").innerHTML = about_a[i];
        }
    </script>

    <!-- SCROLL -->
    <div id="scroll">&#9650;</div>

    <script src="../javascript/canvas.js"></script>
    <script src="../javascript/slideshow.js"></script>
    <script src="../javascript/scroll.js"></script>
    <script src="../javascript/show-hide.js"></script>

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