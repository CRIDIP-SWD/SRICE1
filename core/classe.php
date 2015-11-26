<?php
require dirname(__DIR__)."/core/classe/autoloader.php";
autoloader::register();

$user_cls = new user();
$salarie_cls = new salarie();
$remise_cls = new remise();
$asc_bilan = new asc_bilan();
$asc_resultat = new asc_resultat();
$banque_cls = new fct_banque();


