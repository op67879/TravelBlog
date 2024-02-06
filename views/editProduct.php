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
    <title>TravelBlog | Places</title>
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

<!-- EDIT PLACE -->
<main class='profile <?php echo $hide ?>'>	
        <?php
            include_once '../repository/productsRepo.php'; 
            $productId = $_GET['id'];
            $productsRepository = new productsRepo();
            $product  = $productsRepository->getProductbyId($productId);
        ?>
        <form method="post" action="">
            <center>
            <h2 class='profile'>Edit Place: </h2>
             
            <h3>Place Name:</h3> 
            <input class="data" type="text" id="productName" name="productName" value="<?=$product['ProductName']?>" readonly> <br>
            <h3>Displayed Text:</h3> 
            <input class="data" type="text" id="productText" name="productText" value="<?=$product['ProductText']?>"> <br>
            <h3>Price:</h3>
            <input class="data" type="text" min="1" id="price" name="price" value="<?=$product['Price']?>"> <br> <br>
    
            <input class="profileButton" type="submit" name="updateProductButton" value="UPDATE Place"></center>
        </form>
        <?php include_once '../controllers/productController.php';?>
    
    </main>
</body>
</html>