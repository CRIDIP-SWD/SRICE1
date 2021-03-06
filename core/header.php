<?php
session_start();
include "config.php";
if(!isset($_SESSION['login']))
{
    header("Location: index.php?view=login");
}else{
    $login = $_SESSION['login'];
}
include "classe.php";
$info = $user_cls->info_user($login);
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title><?= NOM_LOGICIEL; ?></title>

    <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="<?= ROOT,ASSETS,IMG; ?>favicon.png">
    <link rel="apple-touch-icon" href="<?= ROOT,ASSETS,IMG; ?>icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="<?= ROOT,ASSETS,IMG; ?>icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="<?= ROOT,ASSETS,IMG; ?>icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="<?= ROOT,ASSETS,IMG; ?>icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="<?= ROOT,ASSETS,IMG; ?>icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="<?= ROOT,ASSETS,IMG; ?>icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="<?= ROOT,ASSETS,IMG; ?>icon152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="<?= ROOT,ASSETS,IMG; ?>icon180.png" sizes="180x180">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="<?= ROOT,ASSETS,CSS; ?>bootstrap.min.css">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="<?= ROOT,ASSETS,CSS; ?>plugins.css">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="<?= ROOT,ASSETS,CSS; ?>main.css">

    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="<?= ROOT,ASSETS,CSS; ?>themes.css">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
    <script src="<?= ROOT,ASSETS,JS; ?>vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
</head>