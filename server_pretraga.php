<?php
require 'Konekcija.php';
require 'models/avion.php';

$proizvodjac = trim($_GET['proizvodjac']);
$sort = trim($_GET['sort']);

$podaci = Avion::pretrazi($proizvodjac, $sort, $konekcija);

?>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Proizvodjac</th>
            <th>Model</th>
            <th>Tip</th>
            <th style="width: 60%">Opis</th>
        </tr>
    </thead>
    <tbody>
 <?php

foreach ($podaci as $avion){
    ?>
    <tr>
        <td><?= $avion->proizvodjac ?></td>
        <td><?= $avion->model ?></td>
        <td><?= $avion->nazivTipa ?></td>
        <td><?= $avion->opis ?></td>
    </tr>
<?php
}
?>
    </tbody>
</table>
