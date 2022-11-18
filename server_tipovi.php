<?php
require 'Konekcija.php';
require 'models/tip.php';

$tipovi = Tip::vratiSve($konekcija);

foreach ($tipovi as $tip){
    ?>
    <option value="<?= $tip->tipID?>"><?= $tip->nazivTipa?></option>
<?php
}