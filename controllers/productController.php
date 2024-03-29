<?php
include_once '../repository/productsRepo.php';
include_once '../models/products.php';
include_once '../repository/activityRepo.php';
$admin = $_SESSION['username'];

if (isset($_POST['insertProductButton'])) {
    if (
        empty($_POST['productName']) || empty($_POST['productText'])
        || empty($_POST['price'])
    ) {
        echo "<script> alert('Fill All Fields!'); </script>";
    } else {
        $productName = $_POST['productName'];
        $productText = $_POST['productText'];
        $price = $_POST['price'];

        $product = new Product($productName, $productText, $price);
        $productRepository = new productsRepo();

        if ($productRepository->checkIfExists($product)) {
            echo "<script> alert('Product already exists!'); </script>";
        } else {
            $productRepository->insertProduct($product);

            $activity = "INSERTED";

            $activityRepository = new activityRepo();
            $activityRepository->saveActivityOnProduct($admin, $activity, $productName);

            header("location:manageProducts.php");
        }

    }
} else if (isset($_POST['updateProductButton'])) {
    $productId = $_GET['id'];
    $productsRepository = new productsRepo();

    $productName = $_POST['productName'];
    $productText = $_POST['productText'];
    $price = $_POST['price'];

    $activity = "UPDATED";

    $activityRepository = new activityRepo();
    $activityRepository->saveActivityOnProduct($admin, $activity, $productName);

    $productsRepository->updateProduct($productId, $productName, $productText, $price);
    header("location:manageProducts.php");
}

?>