<?php
include_once '../database/databaseConnection.php';

class contactRepo
{
	private $connection;

	function __construct()
	{
		$connect = new DatabaseConnection;
		$this->connection = $connect->startConnection();
	}

	function insertContact($contact)
	{

		$connect = $this->connection;

		$name = $contact->getName();
		$email = $contact->getEmail();
		$phone = $contact->getPhone();
		$subject = $contact->getSubject();
		$message = $contact->getMessage();

		$sql = "INSERT INTO contactForm (Name,Email,Phone,Subject,Message) VALUES (?,?,?,?,?)";

		$statement = $connect->prepare($sql);

		$statement->execute([$name, $email, $phone, $subject, $message]);

		echo "<script> alert('Message was sent successfully!'); </script>";

	}

	function getAllMessages()
	{
		$connect = $this->connection;

		$sql = "SELECT * FROM contactForm";
		$statement = $connect->query($sql);
		$allMessages = $statement->fetchAll();

		return $allMessages;
	}
}
?>