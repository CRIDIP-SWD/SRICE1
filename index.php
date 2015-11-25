<?php
if(isset($_GET['view']))
{
    switch($_GET['view'])
    {
        case 'index':
            include "view/index.php";
            break;

        case 'login':
            include "view/login.php";
            break;

        case 'asc':
            include "view/asc.php";
            break;

        default:
            include "view/erreur.php";
            break;
    }
}else{
    include "view/index.php";
}