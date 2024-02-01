<?php
	session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/Style.css">
    <link rel="stylesheet" type="text/css" href="../styles/Profile.css">
    <link rel="icon" href="../images/logo.png" type="image/png">
    <title>TravelBlog | Bookings</title>
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

<!-- BOOKINGS TABLE - READONLY -->
<main>
    <h2 class='profile'>Bookings</h2>
	<div class="table-wrapper"> 
	<table class="fl-table">
        <thead>
		<tr>
			<th>ID</th>
            <th>Name</th>
			<th>Email</th>
			<th>Phone</th>
            <th>Street</th>
            <th>City</th>
            <th>State</th>
			<th>Zip Code</th>
			<th>Favorite Islands</th>
            <th>Day Attending</th>
            <th>Special Requirements</th>
		</tr>
        </thead>
        <tbody>
             <?php 
             include_once '../repository/bookingRepo.php';
             $bookingRepository = new bookingRepo();

             $messages = $bookingRepository->getAllMessages();

             foreach($messages as $message){
                echo 
                "
                <tr>
                     <td>$message[ID]</td>
                     <td>$message[Bname]</td>
                     <td>$message[Bemail] </td>
                     <td>$message[Bphone]</td>
                     <td>$message[Street]</td>
                     <td>$message[City] </td>
                     <td>$message[State]</td>
                     <td>$message[Zip]</td>
                     <td>$message[Visit]</td>
                     <td>$message[Day] </td>
                     <td>$message[Req]</td>
                </tr>
                ";
             }
             
             ?>
             </tbody>
	</table>
	</div>
</main>

</body>
</html>