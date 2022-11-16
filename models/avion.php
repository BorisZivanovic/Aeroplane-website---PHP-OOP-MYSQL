<?php


class Avion{

   public $id;
   public $model;
   public $opis;
   public $proizvodjacID;
   public $tipID;


    public function __construct($id=null, $model=null, $opis=null, $proizvodjacID=null, $tipID=null)
    {
        $this->id = $id;
        $this->model=$model;
        $this->opis=$opis;
        $this->proizvodjacID=$proizvodjacID;
        $this->tipID=$tipID;
    }

    public static function vratiSve(mysqli $konekcija)
    {
        $upit = 'SELECT * FROM avion a join proizvodjac p on a.proizvodjacID = p.proizvodjacID join tip t on a.tipID = t.tipID ';

        $rezultati = [];

        $rezultujucaTabela = $konekcija->query($upit);

        while ($red = $rezultujucaTabela->fetch_object()){
            $rezultati[] = $red;
        }

        return $rezultati;
    }

    public static function pretrazi($proizvodjac, $sortiranje, mysqli $konekcija)
    {
        $upit = 'SELECT * FROM avion a join proizvodjac p on a.proizvodjacID = p.proizvodjacID join tip t on a.tipID = t.tipID ';

        if($proizvodjac != 'SVI_TIPOVI'){
            $upit .= ' WHERE a.proizvodjacID = ' . $proizvodjac;
        }

        $upit .= ' ORDER BY a.model ' . $sortiranje;

        $rezultati = [];

        $rezultujucaTabela = $konekcija->query($upit);

        while ($red = $rezultujucaTabela->fetch_object()){
            $rezultati[] = $red;
        }

        return $rezultati;
    }

    public static function unesiAvion($model, $opis, $proizvodjacID, $tipID, mysqli $konekcija)
    {
        $upit = "INSERT INTO avion VALUES (null, '$model', '$opis',  $proizvodjacID, $tipID)";

        return $konekcija->query($upit);
    }

    public static function izmeniModel($avionID, $model, mysqli $konekcija)
    {
        $upit = "UPDATE avion SET model = '$model' WHERE id = $avionID";

        return $konekcija->query($upit);
    }

    public static function obrisiAvion($avionID, mysqli $konekcija)
    {
        $upit = "DELETE FROM avion WHERE id = $avionID";

        return $konekcija->query($upit);
    }
}