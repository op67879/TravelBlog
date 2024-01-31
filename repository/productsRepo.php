<?php
include_once '../database/databaseConnection.php';

class productsRepo
{
	private $connection;

	function __construct()
	{
		$connect = new DatabaseConnection;
		$this->connection = $connect->startConnection();
	}

	function checkIfExists($product)
	{
		$connect = $this->connection;

		$productName = $product->getProductName();

		$sql = "SELECT * FROM products WHERE ProductName='$productName'";

		$statement = $connect->query($sql);
		$checkProduct = $statement->fetchAll();

		if (count($checkProduct) == 0) {
			return false;
		} else {
			return true;
		}
	}

	function insertProduct($product)
	{
		$connect = $this->connection;

		$productName = $product->getProductName();
		$productText = $product->getProductText();
		$price = $product->getProductPrice();

		$sql = "INSERT INTO products (ProductName,ProductText,Price) VALUES (?,?,?)";

		$statement = $connect->prepare($sql);

		$statement->execute([$productName, $productText, $price]);

		echo "<script> alert('Product has been inserted successfuly!'); </script>";

	}

	function getAllProducts()
	{
		$connect = $this->connection;

		$sql = "SELECT * FROM products";

		$statement = $connect->query($sql);
		$allProducts = $statement->fetchAll();

		return $allProducts;
	}

	function getProductById($id)
	{
		$connect = $this->connection;

		$sql = "SELECT * FROM products WHERE ID='$id'";

		$statement = $connect->query($sql);
		$product = $statement->fetch();

		return $product;
	}


	function updateProduct($id, $productName, $productText, $price)
	{
		$connect = $this->connection;

		$sql = "UPDATE products SET ProductName=?, ProductText=?, Price=? WHERE id=?";

		$statement = $connect->prepare($sql);

		$statement->execute([$productName, $productText, $price, $id]);
	}

	function deleteProduct($id)
	{
		$connect = $this->connection;

		$sql = "DELETE FROM products WHERE ID=?";

		$statement = $connect->prepare($sql);

		$statement->execute([$id]);
	}
}
?>