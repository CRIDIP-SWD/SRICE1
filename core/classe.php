<?php
require dirname(__DIR__)."/core/classe/autoloader.php";
autoloader::register();

$user_cls = new user();
$salarie_cls = new salarie();
$remise_cls = new remise();
$asc_bilan = new asc_bilan();
$asc_resultat = new asc_resultat();
$banque_cls = new fct_banque();
$caisse_cls = new fct_caisse();
$livret_cls = new fct_livret();
$pret_cls = new fct_pret();

$params_cls = new parametrage();

require dirname(__DIR__)."/vendor/autoload.php";




