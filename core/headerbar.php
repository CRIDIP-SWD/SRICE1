<header class="navbar navbar-default">
    <!-- Left Header Navigation -->
    <ul class="nav navbar-nav-custom">
        <!-- Main Sidebar Toggle Button -->
        <li>
            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                <i class="fa fa-bars fa-fw"></i>
            </a>
        </li>
        <!-- END Main Sidebar Toggle Button -->
    </ul>
    <!-- END Left Header Navigation -->


    <!-- Right Header Navigation -->
    <ul class="nav navbar-nav-custom pull-right">
        <!-- Alternative Sidebar Toggle Button -->
        <!--<li>
            <!-- If you do not want the main sidebar to open when the alternative sidebar is closed, just remove the second parameter: App.sidebar('toggle-sidebar-alt'); -->
            <!--<a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');">
                <i class="gi gi-share_alt"></i>
                <span class="label label-primary label-indicator animation-floating">4</span>
            </a>
        </li>-->
        <!-- END Alternative Sidebar Toggle Button -->

        <!-- User Dropdown -->
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= ROOT,ASSETS,IMG; ?>placeholders/avatars/avatar2.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                <li class="dropdown-header text-center">Mon Compte</li>
                <li>
                    <a href="<?= ROOT,CORE,CONTROL; ?>user.php?action=logout&iduser=<?= $info['iduser']; ?>"><i class="fa fa-ban fa-fw pull-right"></i> Déconnexion</a>
                </li>
            </ul>
        </li>
        <!-- END User Dropdown -->
    </ul>
    <!-- END Right Header Navigation -->
</header>
<!-- END Header -->