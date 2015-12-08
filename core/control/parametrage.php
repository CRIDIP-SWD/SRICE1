<?php
if(isset($_GET['action']) && $_GET['action'] == 'new-save-bdd')
{
    include "../config.php";
    include "../classe.php";

    $dump->start(dirname(__DIR__)."/test.sql");
}