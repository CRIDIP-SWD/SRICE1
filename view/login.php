<?php include "core/config.php"; ?>
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
<body>
<!-- Login Alternative Row -->
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <div id="login-alt-container">
                <!-- Title -->
                <h1 class="push-top-bottom">
                    <i class="gi gi-flash"></i> <strong><?= NOM_LOGICIEL; ?></strong><br>
                    <small>Logiciel de Gestion et de comité pour les C.E</small>
                </h1>
                <!-- END Title -->

                <!-- Key Features -->
                <ul class="fa-ul text-muted">
                    <li><i class="fa fa-check fa-li text-success"></i> Claire et Simple d'utilisation</li>
                    <li><i class="fa fa-check fa-li text-success"></i> Entièrement responsive afin d'être lu sur touts les support</li>
                    <li><i class="fa fa-check fa-li text-success"></i> Design Epurer afin de faire resortir uniquement l'essentiel</li>
                    <li><i class="fa fa-check fa-li text-success"></i> Budget des ASC et Budget de Fonctionnement séparer</li>
                </ul>
                <!-- END Key Features -->

                <!-- Footer -->
                <footer class="text-muted push-top-bottom">
                    <small><span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank"><?= NOM_LOGICIEL; ?> V.<?= VERSION_LOGICIEL.":".BUILD_LOGICIEL; ?></a></small>
                </footer>
                <!-- END Footer -->
            </div>
        </div>
        <div class="col-md-5">
            <!-- Login Container -->
            <div id="login-container">
                <!-- Login Title -->
                <div class="login-title text-center">
                    <h1><strong>Connexion</strong></h1>
                </div>
                <!-- END Login Title -->

                <!-- Login Block -->
                <div class="block push-bit">
                    <!-- Login Form -->
                    <form action="<?= ROOT,CORE,CONTROL; ?>user.php" method="post" id="form-login" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                    <input type="text" id="login-email" name="login" class="form-control input-lg" placeholder="Adresse Mail">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                    <input type="password" id="login-password" name="password" class="form-control input-lg" placeholder="Mot de Passe">
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-actions pull-right">
                            <div class="col-xs-8 text-right">
                                <button type="submit" class="btn btn-sm btn-primary" name="action" value="connexion"><i class="fa fa-angle-right"></i> Connexion à SRICE</button>
                            </div>
                        </div>
                    </form>
                    <!-- END Login Form -->

                </div>
                <!-- END Login Block -->
            </div>
            <!-- END Login Container -->
        </div>
    </div>
</div>
<!-- END Login Alternative Row -->


<!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

<!-- Bootstrap.js, Jquery plugins and Custom JS code -->
<script src="<?= ROOT,ASSETS,JS; ?>vendor/bootstrap.min.js"></script>
<script src="<?= ROOT,ASSETS,JS; ?>plugins.js"></script>
<script src="<?= ROOT,ASSETS,JS; ?>app.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="<?= ROOT,ASSETS,JS; ?>pages/login.js"></script>
<script>$(function(){ Login.init(); });</script>
</body>
</html>