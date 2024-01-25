<?php
class DatabaseConnection
{

	function startConnection()
	{
		try {
			$connect = new PDO('mysql:host=localhost;dbname=travelblog', 'root', ''); //SERVER, DATABASE, USERNAME, PASSWORD
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $connect; //RETURNS PDO - DATABASE CONNECTION WITH OTHER PAGES
		} catch (PDOException $e) {
			echo "Database Conenction Failed" . $e->getMessage();
			return null;
		}
	}
}
?>