<?php include "core/header.php"; ?>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- END Preloader -->

            <!-- Page Container -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available #page-container classes:

                '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

                'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
                'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
                'sidebar-mini sidebar-visible-lg-mini'          for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
                'sidebar-mini sidebar-visible-lg'               for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)

                'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
                'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

                'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

                'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

                'style-alt'                                     for an alternative main style (without it: the default style)
                'footer-fixed'                                  for a fixed footer (without it: a static footer)

                'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

                'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
                'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar
            -->
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                <?php include "core/sidebar-right.php"; ?>

                <?php include "core/sidebar.php"; ?>

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <!-- In the PHP version you can set the following options from inc/config file -->
                    <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->
                    <?php include "core/headerbar.php"; ?>

                    <!-- Page content -->
                    <div id="page-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>GESTION DES ASC</h1>
                                <a href="index.php?view=asc&sub=salarie" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                                            <i class="gi gi-user"></i>
                                        </div>
                                        <h3 class="widget-content text-right animation-pullDown">
                                            <strong>3</strong><br>
                                            <small>Salariés</small><br>
                                            <strong>3</strong><br>
                                            <small>Ayants Droits</small>
                                        </h3>
                                    </div>
                                </a>
                                <a href="page_comp_charts.html" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background-danger animation-fadeIn">
                                            <i class="gi gi-usd"></i>
                                        </div>
                                        <h3 class="widget-content text-right animation-pullDown">
                                            <strong>300</strong> €<br>
                                            <small>A remettre en Banque</small>
                                        </h3>
                                    </div>
                                </a>
                                <div class="block">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td style="width: 50%;">Rapprochement du compte de résultat & du bilan</td>
                                            <td style="width: 50%; text-align: right"><i class="fa fa-check-circle text-success"></i> OK</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%;">Rapprochement du Solde de caisse & des remise</td>
                                            <td style="width: 50%; text-align: right"><i class="fa fa-times-circle text-danger"></i> <strong>1 Erreur</strong></td>
                                        </tr>
                                    </table>
                                    <br>
                                    <i class="h6">Si erreur, contacter le support technique SRICE au 0899 49 26 48.</i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h1 style="text-align: right;">Budget de Fonctionnement</h1>
                                <a href="index.php?view=fct&sub=banque" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                                            <i class="gi gi-bank"></i>
                                        </div>
                                        <h3 class="widget-content text-right animation-pullDown">
                                            <strong>12 000,00</strong> €<br>
                                            <small>En banque</small><br>
                                        </h3>
                                    </div>
                                </a>
                                <a href="index.php?view=fct&sub=caisse" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                                            <i class="gi gi-euro"></i>
                                        </div>
                                        <h3 class="widget-content text-right animation-pullDown">
                                            <strong>0,00</strong> €<br>
                                            <small>En caisse</small><br>
                                        </h3>
                                    </div>
                                </a>
                                <a href="index.php?view=fct&sub=livret" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                                            <i class="gi gi-book_open"></i>
                                        </div>
                                        <h3 class="widget-content text-right animation-pullDown">
                                            <strong>1 000,00</strong> €<br>
                                            <small>Dans le Livret</small><br>
                                        </h3>
                                    </div>
                                </a>
                                <a href="index.php?view=fct&sub=pret" class="widget widget-hover-effect1">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                                            <i class="fa fa-exchange"></i>
                                        </div>
                                        <h3 class="widget-content text-right animation-pullDown">
                                            <strong>0,00</strong> €<br>
                                            <small>En pret</small><br>
                                        </h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <footer class="clearfix">
                        <div class="pull-left">
                            <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank"><?= NOM_LOGICIEL; ?> V.<?= VERSION_LOGICIEL.":".BUILD_LOGICIEL; ?></a>
                        </div>
                    </footer>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- Remember to include excanvas for IE8 chart support -->
        <!--[if IE 8]><script src="<?= ROOT,ASSETS,JS; ?>helpers/excanvas.min.js"></script><![endif]-->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="<?= ROOT,ASSETS,JS; ?>vendor/bootstrap.min.js"></script>
        <script src="<?= ROOT,ASSETS,JS; ?>plugins.js"></script>
        <script src="<?= ROOT,ASSETS,JS; ?>app.js"></script>

        <!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?= ROOT,ASSETS,JS; ?>helpers/gmaps.min.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?= ROOT,ASSETS,JS; ?>pages/index2.js"></script>
        <script>$(function(){ Index2.init(); });</script>
    </body>
</html>