<!-- Main Sidebar -->
<div id="sidebar">
    <!-- Wrapper for scrolling functionality -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Brand -->
            <a href="index.html" class="sidebar-brand">
                <i class="gi gi-dashboard"></i>
                <span class="sidebar-nav-mini-hide"><strong>SRI</strong>CE</span>
            </a>
            <!-- END Brand -->

            <!-- User Info -->
            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                <div class="sidebar-user-avatar">
                    <a href="">
                        <img src="<?= ROOT,ASSETS,IMG; ?>placeholders/avatars/avatar2.jpg" alt="avatar">
                    </a>
                </div>
                <div class="sidebar-user-name"><?= $info['login']; ?></div>
                <div class="sidebar-user-links">

                </div>
            </div>
            <!-- END User Info -->

            <!-- Theme Colors -->

            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
                <li>
                    <a href="index.php?view=index"><i class="gi gi-stopwatch sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Accueil</span></a>
                    <a href="index.php?view=index&sub=parametrage"><i class="fa fa-wrench sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Paramétrage</span></a>
                </li>
                <li class="sidebar-header">
                    <span class="sidebar-header-title">Gestion des ASC</span>
                </li>
                <li>
                    <a href="index.php?view=asc"><i class="gi gi-dashboard sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Accueil</span></a>
                </li>
                <li>
                    <a href="index.php?view=asc&sub=salaries"><i class="gi gi-user sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Salariés</span></a>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu">
                        <i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i>
                        <i class="gi gi-shop sidebar-nav-icon"></i>
                        <span class="sidebar-nav-mini-hide">Prestations</span>
                    </a>
                    <ul>
                        <li>
                            <a href="index.php?view=asc&sub=prestation">Liste des Prestations</a>
                        </li>
                        <li>
                            <a href="index.php?view=asc&sub=achat">Mes Achats</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="index.php?view=asc&sub=billetterie"><i class="gi gi-tag sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Ma billetteries</span></a>
                </li>
                <li>
                    <a href="index.php?view=asc&sub=remboursement"><i class="gi gi-euro sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Mes Remboursements</span></a>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu">
                        <i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i>
                        <i class="gi gi-transfer sidebar-nav-icon"></i>
                        <span class="sidebar-nav-mini-hide">Gestion</span>
                    </a>
                    <ul>
                        <li>
                            <a href="index.php?view=asc&sub=fixes">Produits & Charges Fixes</a>
                        </li>
                        <li>
                            <a href="index.php?view=asc&sub=remise">Remise en banque</a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-submenu">
                                <i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i>
                                <i class="gi gi-file sidebar-nav-icon"></i>
                                <span class="sidebar-nav-mini-hide">Etats</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="index.php?view=asc&sub=caisse">Solde de Caisse</a>
                                </li>
                                <li>
                                    <a href="index.php?view=asc&sub=resultat">Compte de Résultat</a>
                                </li>
                                <li>
                                    <a href="index.php?view=asc&sub=bilan">Bilan</a>
                                </li>
                                <li>
                                    <a href="index.php?view=asc&sub=stock">Etat des Stocks</a>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-submenu">
                                        <i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i>
                                        <span class="sidebar-nav-mini-hide">Journal des ventes</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="index.php?view=asc&sub=j_general">Général</a>
                                        </li>
                                        <li>
                                            <a href="index.php?view=asc&sub=j_salarie">Par salarié</a>
                                        </li>
                                        <li>
                                            <a href="index.php?view=asc&sub=j_ad">Ayant Droit</a>
                                        </li>
                                        <li>
                                            <a href="index.php?view=asc&sub=j_presta">Prestation</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-header">
                    <span class="sidebar-header-title">Budget de Fonctionnement</span>
                </li>
                <li>
                    <a href="index.php?view=fct"><i class="gi gi-stopwatch sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Accueil</span></a>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu">
                        <i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i>
                        <i class="gi gi-pen sidebar-nav-icon"></i>
                        <span class="sidebar-nav-mini-hide">Journaux</span>
                    </a>
                    <ul>
                        <li>
                            <a href="index.php?view=fct&sub=mouvement">Mouvement</a>
                        </li>
                        <li>
                            <a href="index.php?view=fct&sub=banque">Banque</a>
                        </li>
                        <li>
                            <a href="index.php?view=fct&sub=caisse">Caisse</a>
                        </li>
                        <li>
                            <a href="index.php?view=fct&sub=livret">Livret</a>
                        </li>
                        <li>
                            <a href="index.php?view=fct&sub=pret">Pret</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu">
                        <i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i>
                        <i class="gi gi-file sidebar-nav-icon"></i>
                        <span class="sidebar-nav-mini-hide">Etats</span>
                    </a>
                    <ul>
                        <li>
                            <a href="index.php?view=fct&sub=bilan">Bilan</a>
                        </li>
                        <li>
                            <a href="index.php?view=fct&sub=resultat">Compte de resultat</a>
                        </li>
                        <li>
                            <a href="index.php?view=fct&sub=balance">Balance</a>
                        </li>
                        <li>
                            <a href="index.php?view=fct&sub=compte">Compte par Compte</a>
                        </li>

                    </ul>
                </li>
            </ul>
            <!-- END Sidebar Navigation -->
        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->
</div>
<!-- END Main Sidebar -->