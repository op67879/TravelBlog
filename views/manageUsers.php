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
    <title>TravelBlog | Users</title>
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

<!-- MANAGE USERS TABLE -->
<main class="<?php echo $hide ?>">
    <h2 class='profile'>Users Dashboard</h2>
	<div class="table-wrapper"> 
	<table class="fl-table">
        <thead>
		<tr style="background-color: #f1f1f1;">
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
			<th>Role</th>
            <th>Edit User</th>
            <th>Delete User</th>
		</tr>
        </thead>
        <tbody>
             <?php 
             include_once '../repository/usersRepo.php';
             $userRepository = new usersRepo();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[ID]</td>
                     <td>$user[Emri]</td>
                     <td>$user[Mbiemri] </td>
                     <td>$user[Username] </td>
                     <td>$user[Email] </td>
                     <td>$user[Password] </td>
                     <td class='up'><b>$user[Role]</b></td>
                     <td> <a href='editUser.php?id=$user[ID]' style='text-decoration: none;'>
						<input class='editButton' type='submit' value='EDIT'>
					 </a></td>
                    <td> <a href='../controllers/deleteUser.php?id=$user[ID]' style='text-decoration: none;'>
						<input class='deleteButton' type='submit' value='DELETE'>
					</a></td>
                </tr>
                ";
             }
             ?>
            </tbody>
	</table>
	</div>
<!-- INSERT USERS --> 
	<center>
        <a href="insertUser.php" >
            <input type="button" class='profileButton' name="insertUser" value="Insert User">
        </a>
    </center>
</main>

</body>
</html>
