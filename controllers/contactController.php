<?php
include_once '../repository/contactRepo.php';
include_once '../models/contact.php';
 
    if(isset($_POST['contactButton'])){
        if(!(empty($_POST['contactName'])) && !(empty($_POST['contactEmail'])) && !(empty($_POST['contactPhone'])) &&
        !(empty($_POST['contactSubject'])) && !(empty($_POST['message']))){
            $name = $_POST['contactName'];
            $email = $_POST['contactEmail'];
            $phone = $_POST['contactPhone'];
            $subject = $_POST['contactSubject'];
            $message = $_POST['message'];

            $contact  = new Contact($name,$email,$phone,$subject,$message);
            $contactRepository = new contactRepo();

            $contactRepository->insertContact($contact);
        }
    }
?>