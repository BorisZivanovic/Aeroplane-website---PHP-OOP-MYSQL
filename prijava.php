<?php

require "Konekcija.php";
require "models/zaposleni.php";

$poruka = "";

session_start();

if(isset($_POST['korisnickoIme']) && isset($_POST['lozinka'])){
    $korisnickoIme = $_POST['korisnickoIme'];
    $lozinka = $_POST['lozinka'];
    
    $zaposleni = new Zaposleni(1, $korisnickoIme, $lozinka);
    $rezultat = Zaposleni::login($zaposleni, $konekcija);
    
    if($rezultat->num_rows==1){
        $_SESSION['zaposleni'] = $zaposleni->korisnickoIme;
        setcookie("zaposleni", $korisnickoIme, time() + 3*60*60);
        header('Location: index.php');
        exit();
    }else{
        $poruka = "Doslo je do greske prilikom prijave";
    }
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Avioni</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
</head>

<body>
    <div class="login-form">
        <div class="main-div">
        
            <form method="post" action="">
                <br><br><br><br>
                <br>
                <div class="container" style="width: 90%; margin: auto; background-color: grey; text-align: center; padding: 5%">
                <h3><?php echo $poruka ?></h3>
                    <br>

                    <label for="korisnickoIme">Korisničko ime</label>
                    <input type="text" name="korisnickoIme" class="form-control" required>
                    <br>

                    <label for="lozinka">Lozinka</label>
                    <input type="password" name="lozinka" class="form-control" required>
                    <br>

                    <button type="submit"  class="btn btn-large btn-rounded btn-color" style="background-color: 3f48cc;  margin-top: 10px; border: 1px #333333;" name="submit">Uloguj se</button>
                    <br><br>
                </div>
            </form>
        </div>
    </div>

    <br>

</body>
</html>