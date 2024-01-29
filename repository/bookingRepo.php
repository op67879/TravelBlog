<?php
include_once '../database/databaseConnection.php';

class bookingRepo
{
	private $connection;

	function __construct()
	{
		$connect = new DatabaseConnection;
		$this->connection = $connect->startConnection();
	}

	function insertBooking($booking)
	{

		$connect = $this->connection;

		$bname = $booking->getBname();
		$bemail = $booking->getBemail();
		$bphone = $booking->getBphone();
		$street = $booking->getStreet();
		$city = $booking->getCity();
		$state = $booking->getState();
		$zip = $booking->getZip();
		$visit = $booking->getVisit();
		$day = $booking->getDay();
		$req = $booking->getReq();

		$sql = "INSERT INTO bookingForm (Bname,Bemail,Bphone,Street,City,State,Zip,Visit,Day,Req) VALUES (?,?,?,?,?,?,?,?,?,?)";

		$statement = $connect->prepare($sql);

		$statement->execute([$bname, $bemail, $bphone, $street, $city, $state, $zip, $visit, $day, $req]);

		echo "<script> alert('Thank you for choosing JETAWAY - Bookings!'); </script>";

	}

	function getAllMessages()
	{
		$connect = $this->connection;

		$sql = "SELECT * FROM bookingForm";
		$statement = $connect->query($sql);
		$allMessages = $statement->fetchAll();

		return $allMessages;
	}
}
?>