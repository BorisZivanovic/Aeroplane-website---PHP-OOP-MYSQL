<?php

class Proizvodjac {

    public $proizvodjacID;
    public $proizvodjac;


    public function __construct($proizvodjacID=null,$proizvodjac=null)
    {
        $this->proizvodjacID = $proizvodjacID;
        $this->proizvodjac=$proizvodjac;
    }

    public static function vratiSve(mysqli $konekcija)
    {
        $upit = 'SELECT * FROM proizvodjac';

        $rezultati = [];

        $rez = $konekcija->query($upit);

        while ($red = $rez->fetch_object()){
            $rezultati[] = $red;
        }

        return $rezultati;
    }
}