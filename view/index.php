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
                    <?php if(!isset($_GET['sub'])){ ?>
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
                                                <strong><?= $salarie_cls->count_salarie(); ?></strong><br>
                                                <small>Salariés</small><br>
                                                <strong><?= $salarie_cls->count_ad(); ?></strong><br>
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
                                                <strong><?= number_format($remise_cls->compar(), 2, ',', ' '); ?></strong> €<br>
                                                <small>A remettre en Banque</small>
                                            </h3>
                                        </div>
                                    </a>
                                    <div class="block">
                                        <table style="width: 100%;">
                                            <tr>
                                                <td style="width: 50%;">Rapprochement du compte de résultat & du bilan</td>
                                                <td style="width: 50%; text-align: right">
                                                    <?php
                                                    if($asc_bilan->sum_bilan() != $asc_resultat->sum_resultat()){echo "<i class='fa fa-times-circle text-danger'></i> Erreur";}else{echo "<i class='fa fa-check-circle text-success'></i> OK";}
                                                    ?>
                                                </td>
                                            </tr>
                                        </table>
                                        <br>
                                        <i class="h6">Si erreur, contacter le support technique SRICE au 0899 49 26 48.</i>
                                        <br>
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
                                                <strong><?= number_format($banque_cls->sum_banque(), 2, ',',' '); ?></strong> €<br>
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
                                                <strong><?= number_format($caisse_cls->sum_caisse(), 2, ',',' '); ?></strong> €<br>
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
                                                <strong><?= number_format($livret_cls->sum_livret(), 2, ',',' '); ?></strong> €<br>
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
                                                <strong><?= number_format($pret_cls->sum_pret(), 2, ',',' '); ?></strong> €<br>
                                                <small>En pret</small><br>
                                            </h3>
                                        </div>
                                    </a>
                                    <div class="block">
                                        <table style="width: 100%;">
                                            <tr>
                                                <td style="width: 50%;">Etat du Bilan Final</td>
                                                <td style="width: 50%; text-align: right"><i class="fa fa-check-circle text-success"></i> OK</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50%;">Etat de la Balance</td>
                                                <td style="width: 50%; text-align: right"><i class="fa fa-check-circle text-success"></i> OK</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50%;">Etat des équivalences d'écriture</td>
                                                <td style="width: 50%; text-align: right"><i class="fa fa-times-circle text-danger"></i> <strong>1 Erreur</strong></td>
                                            </tr>
                                        </table>
                                        <br>
                                        <i class="h6">Si erreur, contacter le support technique SRICE au 0899 49 26 48.</i>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if(isset($_GET['sub']) && $_GET['sub'] == 'parametrage'){ ?>
                        <?php if(!isset($_GET['data'])){ ?>
                            <?php
                            $nom_secteur = "Paramétrage";
                            $nom_page = "Accueil";
                            ?>
                            <div id="page-content">
                                <div class="content-header">
                                    <div class="header-section">
                                        <h1>
                                            <i class="gi gi-brush"></i><?= $nom_page; ?><br><small><?= $nom_secteur; ?></small>
                                        </h1>
                                    </div>
                                </div>
                                <ul class="breadcrumb breadcrumb-top">
                                    <li><?= NOM_LOGICIEL; ?></li>
                                    <?php if(!empty($nom_secteur)){echo "<li>".$nom_secteur."</li>";} ?>
                                    <?php if(!empty($nom_page)){echo "<li>".$nom_page."</li>";} ?>
                                </ul>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="block">
                                            <div class="block-title">
                                                <h2>Paramétrage du Logiciel</h2>
                                            </div>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#database"><i class="fa fa-database"></i> Base de données</button>
                                                <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#users"><i class="fa fa-users"></i> Utilisateurs</button>
                                                <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#etablissement"><i class="fa fa-building"></i> Etablissement</button>
                                                <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#configuration"><i class="fa fa-cogs"></i> Configuration du Programme</button>
                                                <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#maj"><i class="fa fa-download"></i> Note de Mise à jour</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="spacing"></div>
                                <div id="database" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg bg-info">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h3 class="modal-title"><i class="fa fa-database"></i> Base de données</h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="block">
                                                            <div class="block-title">
                                                                <h2>Base de donnée de votre comité</h2>
                                                            </div>
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Table</th>
                                                                            <th>Nb Entrées</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="width: 90%;">Achat</td>
                                                                            <td style="font-style: italic; text-align: center; width: 10%;"><?= $params_cls->count_achat(); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 90%;">Ventes Salariés</td>
                                                                            <td style="font-style: italic; text-align: center; width: 10%;"><?= $params_cls->count_billet_salarie(); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 90%;">Ventes Ayants Droits</td>
                                                                            <td style="font-style: italic; text-align: center; width: 10%;"><?= $params_cls->count_billet_ad(); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 90%;">Charges Fixes</td>
                                                                            <td style="font-style: italic; text-align: center; width: 10%;"><?= $params_cls->count_charge_fixe(); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 90%;">Famille de Prestation</td>
                                                                            <td style="font-style: italic; text-align: center; width: 10%;"><?= $params_cls->count_famille_presta(); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 90%;">Prestation</td>
                                                                            <td style="font-style: italic; text-align: center; width: 10%;"><?= $params_cls->count_prestation(); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 90%;">Produit Fixe</td>
                                                                            <td style="font-style: italic; text-align: center; width: 10%;"><?= $params_cls->count_produit_fixe(); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 90%;">Réglement de Vente Salarié</td>
                                                                            <td style="font-style: italic; text-align: center; width: 10%;"><?= $params_cls->count_reg_bs(); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 90%;">Réglement de Vente Ayant Droit</td>
                                                                            <td style="font-style: italic; text-align: center; width: 10%;"><?= $params_cls->count_reg_ad(); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 90%;">Réglement de Remboursement salarié</td>
                                                                            <td style="font-style: italic; text-align: center; width: 10%;"><?= $params_cls->count_reg_remb_s(); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 90%;">Réglement de Remboursement Ayants Droits</td>
                                                                            <td style="font-style: italic; text-align: center; width: 10%;"><?= $params_cls->count_reg_remb_ad(); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 90%;">Remboursement salarié</td>
                                                                            <td style="font-style: italic; text-align: center; width: 10%;"><?= $params_cls->count_remb_s(); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 90%;">Remboursement Ayant Droit</td>
                                                                            <td style="font-style: italic; text-align: center; width: 10%;"><?= $params_cls->count_remb_ad(); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 90%;">Remise en banque</td>
                                                                            <td style="font-style: italic; text-align: center; width: 10%;"><?= $params_cls->count_remise(); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 90%;">Salariés</td>
                                                                            <td style="font-style: italic; text-align: center; width: 10%;"><?= $params_cls->count_salarie(); ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="block">
                                                            <div class="block-title">
                                                                <div class="block-options pull-right">
                                                                    <a title="" data-toggle="tooltip" class="btn btn-sm btn-success" href="<?= ROOT,CORE,CONTROL; ?>parametrage.php?action=new-save-bdd" data-original-title="Nouvelle Sauvegarde"><i class="fa fa-save"></i></a>
                                                                </div>
                                                                <h2>Sauvegarde base de données</h2>
                                                            </div>
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Taille</th>
                                                                        <th></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php
                                                                    $sql_sauvegarde = mysql_query("SELECT * FROM sauvegarde ORDER BY date_sauvegarde ASC LIMIT 5")or die(mysql_error());
                                                                    while($save = mysql_fetch_array($sql_sauvegarde))
                                                                    {
                                                                    ?>
                                                                        <tr>
                                                                            <td><?= date("d/m/Y", $save['date_sauvegarde']); ?></td>
                                                                            <td><?= round($save['taille_sauvegarde'], 2); ?></td>
                                                                            <td>
                                                                                <button type="button" data-toggle="tooltip" data-placement="top" data-original-title="Restaurer" class="btn btn-xs btn-primary" onclick="window.location.href='<?= ROOT,CORE,CONTROL; ?>parametrage.php?action=rest-save-bdd&idsaauvegarde=<?= $save['id']; ?>'"><i class="fa fa-refresh fa-spin"></i></button>
                                                                                <button type="button" data-toggle="tooltip" data-placement="top" data-original-title="Supprimer" class="btn btn-xs btn-danger" onclick="window.location.href='<?= ROOT,CORE,CONTROL; ?>parametrage.php?action=del-save-bdd&idsaauvegarde=<?= $save['id']; ?>'"><i class="fa fa-remove"></i></button>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-sm btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                    <?php } ?>
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
        <?php if(isset($_GET['success']) && $_GET['success'] == 'new-save-bdd'){ ?>
            <script type="text/javascript">
                $.bootstrapGrowl("<i class='fa fa-database'></i>Base de donnée Sauvegardé", {
                    type: 'success',
                    offset: {from: 'top', amount: 20},
                    align: 'center',
                    width: 'auto',
                    allow_dismiss: true
                });
            </script>
        <?php } ?>
    </body>
</html>