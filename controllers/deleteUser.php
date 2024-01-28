<?php

session_start();
$userId = $_GET['id'];
include_once '../repository/usersRepo.php';

$userRepository = new usersRepo();
$user = $userRepository->getUserById($userId);
$username = $user['Username'];

$userRepository->deleteUser($userId);

include_once '../repository/activityRepo.php';
$admin = $_SESSION['username'];
$activity = "DELETED";

$activityRepository = new activityRepo();
$activityRepository->saveActivityOnUser($admin,$activity,$username);


 
header("location:../views/manageUsers.php");


?>