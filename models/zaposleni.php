<?php

class Zaposleni{
    
    public $zaposleniID;
    public $korisnickoIme;
    public $lozinka;

    public function __construct($zaposleniID=null,$korisnickoIme=null,$lozinka=null)
    {
        $this->zaposleniID = $zaposleniID;
        $this->korisnickoIme = $korisnickoIme;
        $this->lozinka = $lozinka;
    }
    public static function login($zaposleni, mysqli $konekcija)
    {
        $upit = "SELECT * FROM zaposleni WHERE korisnickoIme='$zaposleni->korisnickoIme' and lozinka='$zaposleni->lozinka'";

        $zaposleni = $konekcija->query($upit);
        
        return $zaposleni;
    }
}


?>