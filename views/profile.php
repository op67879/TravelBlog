<?php
	$hide="";
	session_start();
	if(!isset($_SESSION['username'])){
	  header("location:log-in.php");
	}else{
		if($_SESSION["role"] == "admin"){
	    	 $hide = "";
	    }else{
	    $hide = "hide";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head> 
	<title>TravelBlog | Profile</title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
	<link rel="stylesheet" type="text/css" href="../styles/Profile.css">
	<link rel="icon" href="../images/logo.png" type="image/png">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

<!-- ADMIN/USER PROFILE -->
<main class="profile">
	<center>
	<img src='../images/community.png' width='400px'> 
	<h1>Welcome back, <?php echo $_SESSION['username'];?>!</h1>
	<?php 

	include_once '../repository/usersRepo.php';
	$userRepository = new usersRepo();

	$user = $userRepository->getUserByUsername($_SESSION['username']);

	echo "<h3 class='profileText'>Hi $user[Emri], you are logged in as:<h3 class='up'><i class='fa fa-user-circle-o' aria-hidden='true'></i> $user[Role]</h3></h3>";
	?>
	</center>

<!-- DASHBOARDS (ONLY ADMINS) -->
	<div>
		<div class="dashboards">
			<a href="manageProducts.php" class="<?php echo $hide ?>" style="text-decoration: none;" >
				<input class="profileButton" type="button" name="logoutButton" value="Manage Places">
			</a>
			<a href="manageUsers.php" class="<?php echo $hide ?>" style="text-decoration: none;">
				<input class="profileButton" type="button" name="logoutButton" value="Manage Users">
			</a>
			<a href="readBookings.php" class="<?php echo $hide ?>"style="text-decoration: none;" >
					<input class="profileButton" type="button" name="logoutButton" value="Read Bookings">
			</a>
			<a href="readMessages.php" class="<?php echo $hide ?>"style="text-decoration: none;" >
				<input class="profileButton" type="button" name="logoutButton" value="Read Messages">
			</a>
			<a href="activityLog.php" class="<?php echo $hide ?>"style="text-decoration: none;" >
				<input class="profileButton" type="button" name="logoutButton" value="Activity Log">
			</a>
		</div>

<!-- LOG OUT -->
		<div class="lobutton">
		<a href="logout.php" style="text-decoration: none;">
			<input class="logoutButton" type="button" name="logoutButton" value="LOG OUT">
		</a>
		</div>
	</div>
		
</main>

</body>
</html>