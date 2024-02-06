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

<!-- MANAGE PLACES TABLE -->
<main class="<?php echo $hide ?>">
    <h2 class='profile'>Places Dashboard</h2>
	<div class="table-wrapper"> 
	<table class="fl-table">
        <thead>
		<tr style="background-color: transparent;">
			<th>ID</th>
			<th>Place Name</th>
			<th>Displayed Text</th>
			<th>Price</th>
            <th>Edit Place</th>
            <th>Delete Place</th>
		</tr>
        </thead>
        <tbody>
             <?php 
             include_once '../repository/productsRepo.php';
             $productsRepository = new productsRepo();

             $products = $productsRepository->getAllProducts();

             foreach($products as $product){
                echo 
                "
                <tr>
                     <td>$product[ID]</td>
                     <td>$product[ProductName]</td>
                     <td>$product[ProductText]</td>
                     <td>$product[Price]</td>
                     <td> <a href='editProduct.php?id=$product[ID]'>
						<input class='editButton' type='submit' value='EDIT'>
					 </a></td>
                     <td> <a href='../controllers/deleteProduct.php?id=$product[ID]' >
						<input class='deleteButton' type='submit' value='DELETE'>
					</a></td>
                </tr>
                ";
             }
             
             ?>
             </tbody>
	</table>
	</div>
<!-- INSERT PLACES -->
    <center>
        <a href="insertProduct.php">
            <input type="button" class='profileButton' name="insertProductButton" value="Insert Place">
        </a>
    </center>
</main>

</body>
</html>
