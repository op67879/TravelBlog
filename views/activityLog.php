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
    <link rel="stylesheet" href="../styles/Profile.css">
    <link rel="icon" href="../images/logo.png" type="image/png">
    <title>TravelBlog | Activity Log</title>
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
                <?php if (isset($_SESSION['username'])) {
                    echo "
                        <a href='index.php'>Home</a>
                        <a href='about.php'>About</a>
                        <a href='roster.php'>Explore</a>
                        <a href='gallery.php'>Gallery</a>
                        <a href='contactus.php'>Contact Us</a>
                        <div class='account'>
                            <a class='active' href='profile.php'>" . $_SESSION['username'] . "'s Profile</a>
                        </div>";
                } else {
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

    <!-- ACTIVITY LOG TABLE -->
    <main class="<?php echo $hide ?>">
        <h2 class='profile'>Activity log</h2>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Admin</th>
                        <th>Activity</th>
                        <th>User</th>
                        <th>Product</th>
                        <th>Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once '../repository/activityRepo.php';
                    $activityRepository = new activityRepo();

                    $activities = $activityRepository->readActivities();

                    foreach ($activities as $activity) {
                        echo
                            "
                <tr>
                     <td>$activity[ID]</td>
                     <td>$activity[Admin]</td>
                     <td>$activity[Activity]</td>
                     <td>$activity[User]</td>
                     <td>$activity[Product] </td>
                     <td>$activity[Date_Time] </td>
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