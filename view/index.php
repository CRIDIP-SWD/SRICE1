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
                                                                            <td><?= date("d/m/Y à H:i", $save['date_sauvegarde']); ?></td>
                                                                            <td><?= round($save['taille_sauvegarde'], 2); ?> Mo</td>
                                                                            <td>
                                                                                <button type="button" data-toggle="tooltip" data-placement="top" data-original-title="Restaurer" class="btn btn-xs btn-primary" onclick="window.location.href='<?= ROOT,CORE,CONTROL; ?>parametrage.php?action=rest-save-bdd&idsauvegarde=<?= $save['id']; ?>'"><i class="fa fa-refresh fa-spin"></i></button>
                                                                                <button type="button" data-toggle="tooltip" data-placement="top" data-original-title="Supprimer" class="btn btn-xs btn-danger" onclick="window.location.href='<?= ROOT,CORE,CONTROL; ?>parametrage.php?action=del-save-bdd&idsauvegarde=<?= $save['id']; ?>'"><i class="fa fa-remove"></i></button>
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
                                        </div>
                                    </div>
                                </div>
                                <div id="users" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg bg-info">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h3 class="modal-title"><i class="fa fa-users"></i> Utilisateurs</h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="block">
                                                            <div class="block-title">
                                                                <div class="block-options pull-right">
                                                                    <a title="" data-dismiss="users" data-toggle="modal" class="btn btn-sm btn-success" data-target="add-user"><i class="fa fa-plus"></i></a>
                                                                </div>
                                                                <h2>Liste des Utilisateurs</h2>
                                                            </div>

                                                            <div class="table-responsive">
                                                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th class="text-center">ID</th>
                                                                        <th class="text-center"><i class="gi gi-user"></i></th>
                                                                        <th>Client</th>
                                                                        <th>Email</th>
                                                                        <th>Subscription</th>
                                                                        <th class="text-center">Actions</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client1</a></td>
                                                                        <td>client1@company.com</td>
                                                                        <td><span class="label label-primary">Personal</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">2</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client2</a></td>
                                                                        <td>client2@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">3</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client3</a></td>
                                                                        <td>client3@company.com</td>
                                                                        <td><span class="label label-warning">Trial</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">4</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client4</a></td>
                                                                        <td>client4@company.com</td>
                                                                        <td><span class="label label-primary">Personal</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">5</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client5</a></td>
                                                                        <td>client5@company.com</td>
                                                                        <td><span class="label label-primary">Personal</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">6</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client6</a></td>
                                                                        <td>client6@company.com</td>
                                                                        <td><span class="label label-warning">Trial</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">7</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client7</a></td>
                                                                        <td>client7@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">8</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client8</a></td>
                                                                        <td>client8@company.com</td>
                                                                        <td><span class="label label-warning">Trial</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">9</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar8.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client9</a></td>
                                                                        <td>client9@company.com</td>
                                                                        <td><span class="label label-warning">Trial</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">10</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar16.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client10</a></td>
                                                                        <td>client10@company.com</td>
                                                                        <td><span class="label label-primary">Personal</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">11</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar10.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client11</a></td>
                                                                        <td>client11@company.com</td>
                                                                        <td><span class="label label-primary">Personal</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">12</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar7.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client12</a></td>
                                                                        <td>client12@company.com</td>
                                                                        <td><span class="label label-success">VIP</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">13</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar10.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client13</a></td>
                                                                        <td>client13@company.com</td>
                                                                        <td><span class="label label-warning">Trial</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">14</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client14</a></td>
                                                                        <td>client14@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">15</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client15</a></td>
                                                                        <td>client15@company.com</td>
                                                                        <td><span class="label label-warning">Trial</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">16</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client16</a></td>
                                                                        <td>client16@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">17</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client17</a></td>
                                                                        <td>client17@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">18</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client18</a></td>
                                                                        <td>client18@company.com</td>
                                                                        <td><span class="label label-success">VIP</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">19</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client19</a></td>
                                                                        <td>client19@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">20</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client20</a></td>
                                                                        <td>client20@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">21</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client21</a></td>
                                                                        <td>client21@company.com</td>
                                                                        <td><span class="label label-primary">Personal</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">22</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client22</a></td>
                                                                        <td>client22@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">23</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar3.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client23</a></td>
                                                                        <td>client23@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">24</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar10.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client24</a></td>
                                                                        <td>client24@company.com</td>
                                                                        <td><span class="label label-warning">Trial</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">25</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client25</a></td>
                                                                        <td>client25@company.com</td>
                                                                        <td><span class="label label-primary">Personal</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">26</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar8.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client26</a></td>
                                                                        <td>client26@company.com</td>
                                                                        <td><span class="label label-warning">Trial</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">27</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client27</a></td>
                                                                        <td>client27@company.com</td>
                                                                        <td><span class="label label-success">VIP</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">28</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client28</a></td>
                                                                        <td>client28@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">29</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client29</a></td>
                                                                        <td>client29@company.com</td>
                                                                        <td><span class="label label-primary">Personal</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">30</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client30</a></td>
                                                                        <td>client30@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">31</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client31</a></td>
                                                                        <td>client31@company.com</td>
                                                                        <td><span class="label label-primary">Personal</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">32</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client32</a></td>
                                                                        <td>client32@company.com</td>
                                                                        <td><span class="label label-warning">Trial</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">33</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client33</a></td>
                                                                        <td>client33@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">34</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client34</a></td>
                                                                        <td>client34@company.com</td>
                                                                        <td><span class="label label-primary">Personal</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">35</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar10.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client35</a></td>
                                                                        <td>client35@company.com</td>
                                                                        <td><span class="label label-warning">Trial</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">36</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar3.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client36</a></td>
                                                                        <td>client36@company.com</td>
                                                                        <td><span class="label label-success">VIP</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">37</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client37</a></td>
                                                                        <td>client37@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">38</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar16.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client38</a></td>
                                                                        <td>client38@company.com</td>
                                                                        <td><span class="label label-primary">Personal</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">39</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client39</a></td>
                                                                        <td>client39@company.com</td>
                                                                        <td><span class="label label-success">VIP</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">40</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client40</a></td>
                                                                        <td>client40@company.com</td>
                                                                        <td><span class="label label-primary">Personal</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">41</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client41</a></td>
                                                                        <td>client41@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">42</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client42</a></td>
                                                                        <td>client42@company.com</td>
                                                                        <td><span class="label label-warning">Trial</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">43</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client43</a></td>
                                                                        <td>client43@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">44</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client44</a></td>
                                                                        <td>client44@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">45</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client45</a></td>
                                                                        <td>client45@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">46</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client46</a></td>
                                                                        <td>client46@company.com</td>
                                                                        <td><span class="label label-success">VIP</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">47</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar3.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client47</a></td>
                                                                        <td>client47@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">48</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client48</a></td>
                                                                        <td>client48@company.com</td>
                                                                        <td><span class="label label-success">VIP</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">49</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client49</a></td>
                                                                        <td>client49@company.com</td>
                                                                        <td><span class="label label-warning">Trial</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">50</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar8.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client50</a></td>
                                                                        <td>client50@company.com</td>
                                                                        <td><span class="label label-success">VIP</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">51</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client51</a></td>
                                                                        <td>client51@company.com</td>
                                                                        <td><span class="label label-success">VIP</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">52</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client52</a></td>
                                                                        <td>client52@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">53</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client53</a></td>
                                                                        <td>client53@company.com</td>
                                                                        <td><span class="label label-warning">Trial</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">54</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client54</a></td>
                                                                        <td>client54@company.com</td>
                                                                        <td><span class="label label-warning">Trial</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">55</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client55</a></td>
                                                                        <td>client55@company.com</td>
                                                                        <td><span class="label label-warning">Trial</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">56</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar7.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client56</a></td>
                                                                        <td>client56@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">57</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client57</a></td>
                                                                        <td>client57@company.com</td>
                                                                        <td><span class="label label-warning">Trial</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">58</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar10.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client58</a></td>
                                                                        <td>client58@company.com</td>
                                                                        <td><span class="label label-primary">Personal</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">59</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client59</a></td>
                                                                        <td>client59@company.com</td>
                                                                        <td><span class="label label-primary">Personal</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">60</td>
                                                                        <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                                                                        <td><a href="javascript:void(0)">client60</a></td>
                                                                        <td>client60@company.com</td>
                                                                        <td><span class="label label-info">Business</span></td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
        <script src="<?= ROOT,ASSETS,JS; ?>pages/tablesDatatables.js"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>
        <script>$(function(){ Index2.init(); });</script>



        <?php if(isset($_GET['success']) && $_GET['success'] == 'new-save-bdd'){ ?>
            <script type="text/javascript">
                $.bootstrapGrowl("<i class='fa fa-check fa-2x'></i> &nbsp; Base de donnée Sauvegardé", {
                    type: 'success',
                    offset: {from: 'bottom', amount: 35},
                    align: 'right',
                    width: 'auto',
                    allow_dismiss: true
                });
            </script>
        <?php } ?>
        <?php if(isset($_GET['success']) && $_GET['success'] == 'rest-save-bdd'){ ?>
            <script type="text/javascript">
                $.bootstrapGrowl("<i class='fa fa-check fa-2x'></i> &nbsp; La base de donnée à été restauré", {
                            type: 'success',
                            offset: {from: 'bottom', amount: 35},
                            align: 'right',
                            width: 'auto',
                            allow_dismiss: true
                        }); 
            </script>
        <?php } ?>
        <?php if(isset($_GET['success']) && $_GET['success'] == 'del-save-bdd'){ ?>
            <script type="text/javascript">
                $.bootstrapGrowl("<i class='fa fa-check fa-2x'></i> &nbsp; La sauvegarde de la base de donnée à été supprimer", {
                            type: 'success',
                            offset: {from: 'bottom', amount: 35},
                            align: 'right',
                            width: 'auto',
                            allow_dismiss: true
                        }); 
            </script>
        <?php } ?>
        
        
        
        <?php if(isset($_GET['error']) && $_GET['error'] == 'new-save-bdd'){ ?>
            <script type="text/javascript">
                $.bootstrapGrowl("<i class='fa fa-remove fa-2x'></i> &nbsp; Erreur lors de la sauvegarde ", {
                            type: 'danger',
                            offset: {from: 'bottom', amount: 35},
                            align: 'right',
                            width: 'auto',
                            allow_dismiss: true
                        });
            </script>
        <?php } ?>
        <?php if(isset($_GET['error']) && $_GET['error'] == 'del-save-bdd'){ ?>
            <script type="text/javascript">
                $.bootstrapGrowl("<i class='fa fa-remove fa-2x'></i> &nbsp; Erreur lors de la suppression de la sauvegarde de la base de donnée.", {
                            type: 'danger',
                            offset: {from: 'bottom', amount: 35},
                            align: 'right',
                            width: 'auto',
                            allow_dismiss: true
                        }); 
            </script>
        <?php } ?>
        
    
        <?php if(isset($_GET['warning']) && $_GET['warning'] == 'file-not-found'){ ?>
            <script type="text/javascript">
                $.bootstrapGrowl("<i class='fa fa-warning fa-2x'></i> &nbsp; Le fichier de sauvegarde est introuvable", {
                            type: 'warning',
                            offset: {from: 'bottom', amount: 35},
                            align: 'right',
                            width: 'auto',
                            allow_dismiss: true
                        }); 
            </script>
        <?php } ?>
        

    </body>
</html>