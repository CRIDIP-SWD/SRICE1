<?php
if(isset($_GET['action']) && $_GET['action'] == 'new-save-bdd')
{
    include "../config.php";
    include "../classe.php";

    $dump = new \Ifsnop\Mysqldump\Mysqldump('srice', 'root', '1992maxime');
    $dump->start(dirname(__DIR__)."/test.sql");
}