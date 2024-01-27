<?php
class Booking
{
    private $bname;
    private $bemail;
    private $bphone;
    private $street;
    private $city;
    private $state;
    private $zip;
    private $visit;
    private $day;
    private $req;

    function __construct($bname, $bemail, $bphone, $street, $city, $state, $zip, $visit, $day, $req)
    {
        $this->bname = $bname;
        $this->bemail = $bemail;
        $this->bphone = $bphone;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
        $this->visit = $visit;
        $this->day = $day;
        $this->req = $req;
    }

    function getBname()
    {
        return $this->bname;
    }

    function getBemail()
    {
        return $this->bemail;
    }

    function getBphone()
    {
        return $this->bphone;
    }

    function getStreet()
    {
        return $this->street;
    }

    function getCity()
    {
        return $this->city;
    }

    function getState()
    {
        return $this->state;
    }

    function getZip()
    {
        return $this->zip;
    }

    function getVisit()
    {
        return $this->visit;
    }

    function getDay()
    {
        return $this->day;
    }

    function getReq()
    {
        return $this->req;
    }
}
?>