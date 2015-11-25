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
                <div class="sidebar-user-name">John Doe</div>
                <div class="sidebar-user-links">

                </div>
            </div>
            <!-- END User Info -->

            <!-- Theme Colors -->

            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
                <li>
                    <a href="index.php?view=index"><i class="gi gi-stopwatch sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Accueil</span></a>
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
                    <a href="#" class="sidebar-nav-menu">
                        <i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i>
                        <i class="gi gi-certificate sidebar-nav-icon"></i>
                        <span class="sidebar-nav-mini-hide">User Interface</span>
                    </a>
                    <ul>
                        <li>
                            <a href="page_ui_grid_blocks.html">Grid &amp; Blocks</a>
                        </li>
                        <li>
                            <a href="page_ui_draggable_blocks.html">Draggable Blocks</a>
                        </li>
                        <li>
                            <a href="page_ui_typography.html">Typography</a>
                        </li>
                        <li>
                            <a href="page_ui_buttons_dropdowns.html">Buttons &amp; Dropdowns</a>
                        </li>
                        <li>
                            <a href="page_ui_navigation_more.html">Navigation &amp; More</a>
                        </li>
                        <li>
                            <a href="page_ui_horizontal_menu.html">Horizontal Menu</a>
                        </li>
                        <li>
                            <a href="page_ui_progress_loading.html">Progress &amp; Loading</a>
                        </li>
                        <li>
                            <a href="page_ui_preloader.html">Page Preloader</a>
                        </li>
                        <li>
                            <a href="page_ui_color_themes.html">Color Themes</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-notes_2 sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Forms</span></a>
                    <ul>
                        <li>
                            <a href="page_forms_general.html">General</a>
                        </li>
                        <li>
                            <a href="page_forms_components.html">Components</a>
                        </li>
                        <li>
                            <a href="page_forms_validation.html">Validation</a>
                        </li>
                        <li>
                            <a href="page_forms_wizard.html">Wizard</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-table sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Tables</span></a>
                    <ul>
                        <li>
                            <a href="page_tables_general.html">General</a>
                        </li>
                        <li>
                            <a href="page_tables_responsive.html">Responsive</a>
                        </li>
                        <li>
                            <a href="page_tables_datatables.html">Datatables</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-cup sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Icon Sets</span></a>
                    <ul>
                        <li>
                            <a href="page_icons_fontawesome.html">Font Awesome</a>
                        </li>
                        <li>
                            <a href="page_icons_glyphicons_pro.html">Glyphicons Pro</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-show_big_thumbnails sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Page Layouts</span></a>
                    <ul>
                        <li>
                            <a href="page_layout_static.html">Static</a>
                        </li>
                        <li>
                            <a href="page_layout_static_fixed_footer.html">Static + Fixed Footer</a>
                        </li>
                        <li>
                            <a href="page_layout_fixed_top.html">Fixed Top Header</a>
                        </li>
                        <li>
                            <a href="page_layout_fixed_top_footer.html">Fixed Top Header + Footer</a>
                        </li>
                        <li>
                            <a href="page_layout_fixed_bottom.html">Fixed Bottom Header</a>
                        </li>
                        <li>
                            <a href="page_layout_fixed_bottom_footer.html">Fixed Bottom Header + Footer</a>
                        </li>
                        <li>
                            <a href="page_layout_static_main_sidebar_mini.html">Mini Main Sidebar</a>
                        </li>
                        <li>
                            <a href="page_layout_static_main_sidebar_partial.html">Partial Main Sidebar</a>
                        </li>
                        <li>
                            <a href="page_layout_static_main_sidebar_visible.html">Visible Main Sidebar</a>
                        </li>
                        <li>
                            <a href="page_layout_static_alternative_sidebar_partial.html">Partial Alternative Sidebar</a>
                        </li>
                        <li>
                            <a href="page_layout_static_alternative_sidebar_visible.html">Visible Alternative Sidebar</a>
                        </li>
                        <li>
                            <a href="page_layout_static_no_sidebars.html">No Sidebars</a>
                        </li>
                        <li>
                            <a href="page_layout_static_both_partial.html">Both Sidebars Partial</a>
                        </li>
                        <li>
                            <a href="page_layout_static_animated.html">Animated Sidebar Transitions</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-header">
                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a></span>
                    <span class="sidebar-header-title">Develop Kit</span>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-brush sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Ready Pages</span></a>
                    <ul>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Errors</a>
                            <ul>
                                <li>
                                    <a href="page_ready_400.html">400</a>
                                </li>
                                <li>
                                    <a href="page_ready_401.html">401</a>
                                </li>
                                <li>
                                    <a href="page_ready_403.html">403</a>
                                </li>
                                <li>
                                    <a href="page_ready_404.html">404</a>
                                </li>
                                <li>
                                    <a href="page_ready_500.html">500</a>
                                </li>
                                <li>
                                    <a href="page_ready_503.html">503</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Get Started</a>
                            <ul>
                                <li>
                                    <a href="page_ready_blank.html">Blank</a>
                                </li>
                                <li>
                                    <a href="page_ready_blank_alt.html">Blank Alternative</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="page_ready_search_results.html">Search Results (4)</a>
                        </li>
                        <li>
                            <a href="page_ready_article.html">Article</a>
                        </li>
                        <li>
                            <a href="page_ready_user_profile.html">User Profile</a>
                        </li>
                        <li>
                            <a href="page_ready_contacts.html">Contacts</a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>e-Learning</a>
                            <ul>
                                <li>
                                    <a href="page_ready_elearning_courses.html">Courses</a>
                                </li>
                                <li>
                                    <a href="page_ready_elearning_course_lessons.html">Course - Lessons</a>
                                </li>
                                <li>
                                    <a href="page_ready_elearning_course_lesson.html">Course - Lesson Page</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Message Center</a>
                            <ul>
                                <li>
                                    <a href="page_ready_inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="page_ready_inbox_compose.html">Compose Message</a>
                                </li>
                                <li>
                                    <a href="page_ready_inbox_message.html">View Message</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="page_ready_chat.html">Chat</a>
                        </li>
                        <li>
                            <a href="page_ready_timeline.html">Timeline</a>
                        </li>
                        <li>
                            <a href="page_ready_files.html">Files</a>
                        </li>
                        <li>
                            <a href="page_ready_tickets.html">Tickets</a>
                        </li>
                        <li>
                            <a href="page_ready_tasks.html">Tasks</a>
                        </li>
                        <li>
                            <a href="page_ready_faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="page_ready_pricing_tables.html">Pricing Tables</a>
                        </li>
                        <li>
                            <a href="page_ready_invoice.html">Invoice</a>
                        </li>
                        <li>
                            <a href="page_ready_forum.html">Forum (3)</a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Login, Register &amp; Lock</a>
                            <ul>
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="login_full.html">Login (Full Background)</a>
                                </li>
                                <li>
                                    <a href="login_alt.html">Login 2</a>
                                </li>
                                <li>
                                    <a href="login.html#reminder">Password Reminder</a>
                                </li>
                                <li>
                                    <a href="login_alt.html#reminder">Password Reminder 2</a>
                                </li>
                                <li>
                                    <a href="login.html#register">Register</a>
                                </li>
                                <li>
                                    <a href="login_alt.html#register">Register 2</a>
                                </li>
                                <li>
                                    <a href="page_ready_lock_screen.html">Lock Screen</a>
                                </li>
                                <li>
                                    <a href="page_ready_lock_screen_alt.html">Lock Screen 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-wrench sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Components</span></a>
                    <ul>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>3 Level Menu</a>
                            <ul>
                                <li>
                                    <a href="#">Link 1</a>
                                </li>
                                <li>
                                    <a href="#">Link 2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="page_comp_maps.html">Maps</a>
                        </li>
                        <li>
                            <a href="page_comp_charts.html">Charts</a>
                        </li>
                        <li>
                            <a href="page_comp_gallery.html">Gallery</a>
                        </li>
                        <li>
                            <a href="page_comp_carousel.html">Carousel</a>
                        </li>
                        <li>
                            <a href="page_comp_calendar.html">Calendar</a>
                        </li>
                        <li>
                            <a href="page_comp_animations.html">CSS3 Animations</a>
                        </li>
                        <li>
                            <a href="page_comp_syntax_highlighting.html">Syntax Highlighting</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END Sidebar Navigation -->

            <!-- Sidebar Notifications -->
            <div class="sidebar-header sidebar-nav-mini-hide">
                                <span class="sidebar-header-options clearfix">
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Refresh"><i class="gi gi-refresh"></i></a>
                                </span>
                <span class="sidebar-header-title">Activity</span>
            </div>
            <div class="sidebar-section sidebar-nav-mini-hide">
                <div class="alert alert-success alert-alt">
                    <small>5 min ago</small><br>
                    <i class="fa fa-thumbs-up fa-fw"></i> You had a new sale ($10)
                </div>
                <div class="alert alert-info alert-alt">
                    <small>10 min ago</small><br>
                    <i class="fa fa-arrow-up fa-fw"></i> Upgraded to Pro plan
                </div>
                <div class="alert alert-warning alert-alt">
                    <small>3 hours ago</small><br>
                    <i class="fa fa-exclamation fa-fw"></i> Running low on space<br><strong>18GB in use</strong> 2GB left
                </div>
                <div class="alert alert-danger alert-alt">
                    <small>Yesterday</small><br>
                    <i class="fa fa-bug fa-fw"></i> <a href="javascript:void(0)"><strong>New bug submitted</strong></a>
                </div>
            </div>
            <!-- END Sidebar Notifications -->
        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->
</div>
<!-- END Main Sidebar -->