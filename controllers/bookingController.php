<?php
include_once '../repository/bookingRepo.php';
include_once '../models/booking.php';

if (isset($_POST['bookingButton'])) {
    if (
        !(empty($_POST['bname'])) && !(empty($_POST['bemail'])) && !(empty($_POST['bphone'])) &&
        !(empty($_POST['street'])) && !(empty($_POST['city'])) && !(empty($_POST['state'])) && !(empty($_POST['zip'])) &&
        !(empty($_POST['visit'])) && !(empty($_POST['day'])) && !(empty($_POST['req']))
    ) {
        $bname = $_POST['bname'];
        $bemail = $_POST['bemail'];
        $bphone = $_POST['bphone'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $visit = $_POST['visit'];
        $day = $_POST['day'];
        $req = $_POST['req'];

        $booking = new Booking($bname, $bemail, $bphone, $street, $city, $state, $zip, $visit, $day, $req);
        $bookingRepository = new bookingRepo();

        $bookingRepository->insertBooking($booking);
    }
}
?>