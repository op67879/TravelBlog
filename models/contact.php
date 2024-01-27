<?php
class Contact
{
	private $name;
	private $email;
	private $phone;
	private $subject;
	private $message;

	function __construct($name, $email, $phone, $subject, $message)
	{
		$this->message = $message;
		$this->email = $email;
		$this->phone = $phone;
		$this->subject = $subject;
		$this->name = $name;
	}

	function getMessage()
	{
		return $this->message;
	}

	function getEmail()
	{
		return $this->email;
	}

	function getName()
	{
		return $this->name;
	}

	function getSubject()
	{
		return $this->subject;
	}

	function getPhone()
	{
		return $this->phone;
	}
}
?>