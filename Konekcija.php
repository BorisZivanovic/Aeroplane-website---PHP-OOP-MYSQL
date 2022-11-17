<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "avioni";

$konekcija = new mysqli($host,$user,$pass,$database);
$konekcija->set_charset('utf8');


if ($konekcija->connect_errno){
    exit("Baza nije povezana!");
}
?>