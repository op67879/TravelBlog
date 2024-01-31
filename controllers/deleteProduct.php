<?php

session_start();
$productId = $_GET['id'];
include_once '../repository/productsRepo.php';

$productsRepository = new productsRepo();
$product = $productsRepository->getProductById($productId);
$productName = $product['ProductName'];

$productsRepository->deleteProduct($productId);

include_once '../repository/activityRepo.php';
$admin = $_SESSION['username'];
$activity = "DELETED";

$activityRepository = new activityRepo();
$activityRepository->saveActivityOnProduct($admin, $activity, $productName);

header("location:../views/manageProducts.php");

?>