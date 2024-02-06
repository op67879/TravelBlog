<?php
	$hide="";
	session_start();
	if(!isset($_SESSION['username'])){
	  header("location:activitylog.php");
	}else{
		if($_SESSION["role"] == "admin"){
	    	 $hide = "";
	    }else{
	    $hide = "hide";
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../styles/Profile.css">
    <link rel="icon" href="../images/logo.png" type="image/png">
    <title>TravelBlog | Products</title>
    <style>
        .hide{
            display:none;
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
 
<!-- INSERT PLACE FORM -->
<main class='profile <?php echo $hide ?>'>
            
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

        <h2>Insert Place:</h2>
        <center>
        <h3 class="profileText">Place Name:</h3> 
        <input class="data" type="text" id="productName" name="productName" class="profileText"> <br>
        <h3 class="profileText">Displayed Text:</h3> 
        <input class="data" type="text" id="productText" name="productText" class="profileText"> <br>
        <h3 class="profileText">Price:</h3>
        <input class="data" type="text" min="1" id="price" name="price" class="profileText"> <br> <br>
            
        <input class="profileButton" type="submit" name="insertProductButton" value="INSERT"></center>
    
        </form>
        <?php include_once '../controllers/productController.php';?>

    </div>
</main>

</body>
</html>
