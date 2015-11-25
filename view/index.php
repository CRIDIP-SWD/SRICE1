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

                        <!-- Dashboard 2 Content -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Web Server Block -->
                                <div class="block full">
                                    <!-- Web Server Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <span id="dash-chart-live-info" class="label label-primary">%</span>
                                            <span class="label label-danger animation-pulse">CPU Load</span>
                                        </div>
                                        <h2><strong>Web</strong> Server #1</h2>
                                    </div>
                                    <!-- END Web Server Title -->

                                    <!-- Web Server Content -->
                                    <!-- Flot Charts (initialized in js/pages/index2.js), for more examples you can check out http://www.flotcharts.org/ -->
                                    <div id="dash-chart-live" class="chart"></div>
                                    <!-- END Web Server Content -->
                                </div>
                                <!-- END Web Server Block -->

                                <!-- Mini Sales Charts Block -->
                                <!-- Jquery Sparkline (initialized in js/pages/index2.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
                                <div class="block full">
                                    <!-- Mini Sales Charts Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <div class="btn-group btn-group-sm">
                                                <a href="javascript:void(0)" class="btn btn-alt btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                                    <li>
                                                        <a href="javascript:void(0)"><i class="fa fa-check pull-right"></i> This Week</a>
                                                        <a href="javascript:void(0)">This Month</a>
                                                        <a href="javascript:void(0)">This Year</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h2><strong>Sales</strong> This Week</h2>
                                    </div>
                                    <!-- END Mini Sales Charts Title -->

                                    <!-- Mini Sales Charts Content -->
                                    <div class="row text-center">
                                        <div class="col-sm-4">
                                            <span id="mini-sales1">2,5,6,7,10,16,18</span>
                                            <h4>WP Theme</h4>
                                        </div>
                                        <div class="col-sm-4">
                                            <span id="mini-sales2">5,6,8,3,11,15,35</span>
                                            <h4>Web App</h4>
                                        </div>
                                        <div class="col-sm-4">
                                            <span id="mini-sales3">7,8,9,8,8,10,12</span>
                                            <h4>Icon Set</h4>
                                        </div>
                                    </div>
                                    <!-- END Mini Sales Charts Content -->
                                </div>
                                <!-- END Mini Sales Charts Block -->

                                <!-- Mini Earnings Charts Block -->
                                <!-- Jquery Sparkline (initialized in js/pages/index2.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
                                <div class="block full">
                                    <!-- Mini Earnings Charts Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <div class="btn-group btn-group-sm">
                                                <a href="javascript:void(0)" class="btn btn-alt btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                                    <li>
                                                        <a href="javascript:void(0)"><i class="fa fa-check pull-right"></i> This Week</a>
                                                        <a href="javascript:void(0)">This Month</a>
                                                        <a href="javascript:void(0)">This Year</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h2><strong>Earnings</strong> This Week</h2>
                                    </div>
                                    <!-- END Mini Earnings Charts Title -->

                                    <!-- Mini Earnings Charts Content -->
                                    <div class="row text-center">
                                        <div class="col-sm-4">
                                            <span id="mini-earnings1">200,500,600,700,1000,1600,1800</span>
                                            <h4>WP Theme</h4>
                                        </div>
                                        <div class="col-sm-4">
                                            <span id="mini-earnings2">500,600,800,300,1100,1500,3500</span>
                                            <h4>Web App</h4>
                                        </div>
                                        <div class="col-sm-4">
                                            <span id="mini-earnings3">700,800,900,800,800,1000,1200</span>
                                            <h4>Icon Set</h4>
                                        </div>
                                    </div>
                                    <!-- END Mini Earnings Charts Content -->
                                </div>
                                <!-- END Mini Earnings Charts Block -->

                                <!-- Quick Post Block -->
                                <div class="block">
                                    <!-- Quick Post Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Post Options"><i class="fa fa-pencil"></i></a>
                                        </div>
                                        <h2><strong>Quick</strong> Post</h2>
                                    </div>
                                    <!-- END Quick Post Title -->

                                    <!-- Quick Post Content -->
                                    <form action="index2.html" method="post" class="form-bordered" onsubmit="return false;">
                                        <div class="form-group">
                                            <input type="text" id="qpost-title" name="qpost-title" class="form-control" placeholder="Enter a title..">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="qpost-tags" name="qpost-tags" class="input-tags" value="tutorial, learn, javascript">
                                        </div>
                                        <div class="form-group">
                                            <textarea id="qpost-content" name="qpost-content" rows="11" class="form-control" placeholder="Enter content.."></textarea>
                                        </div>
                                        <div class="form-group form-actions">
                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Publish</button>
                                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                        </div>
                                    </form>
                                    <!-- END Quick Post Content -->
                                </div>
                                <!-- END Quick Post Block -->
                            </div>
                            <div class="col-md-6">
                                <!-- Timeline Block -->
                                <div class="block">
                                    <!-- Timeline Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <h2><strong>Latest</strong> News</h2>
                                    </div>
                                    <!-- END Timeline Title -->

                                    <!-- Timeline Content -->
                                    <div class="block-content-full">
                                        <div class="timeline">
                                            <ul class="timeline-list">
                                                <li class="active">
                                                    <div class="timeline-icon"><i class="gi gi-airplane"></i></div>
                                                    <div class="timeline-time"><small>just now</small></div>
                                                    <div class="timeline-content">
                                                        <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Jordan Carter</strong></a></p>
                                                        <p class="push-bit">The trip was an amazing and a life changing experience!!</p>
                                                        <p class="push-bit"><a href="page_ready_article.html" class="btn btn-xs btn-primary"><i class="fa fa-file"></i> Read the article</a></p>
                                                        <div class="row push">
                                                            <div class="col-sm-6 col-md-4">
                                                                <a href="img/placeholders/photos/photo1.jpg" data-toggle="lightbox-image">
                                                                    <img src="img/placeholders/photos/photo1.jpg" alt="image">
                                                                </a>
                                                            </div>
                                                            <div class="col-sm-6 col-md-4">
                                                                <a href="img/placeholders/photos/photo22.jpg" data-toggle="lightbox-image">
                                                                    <img src="img/placeholders/photos/photo22.jpg" alt="image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="timeline-icon"><i class="fa fa-file-text"></i></div>
                                                    <div class="timeline-time"><small>5 min ago</small></div>
                                                    <div class="timeline-content">
                                                        <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Administrator</strong></a></p>
                                                        <strong>Free courses</strong> for all our customers at A1 Conference Room - 9:00 <strong>am</strong> tomorrow!
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="timeline-icon"><i class="gi gi-drink"></i></div>
                                                    <div class="timeline-time"><small>3 hours ago</small></div>
                                                    <div class="timeline-content">
                                                        <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Ella Winter</strong></a></p>
                                                        <p class="push-bit"><strong>Happy Hour!</strong> Free drinks at <a href="javascript:void(0)">Cafe-Bar</a> all day long!</p>
                                                        <div id="gmap-timeline-dash2" class="gmap" style="height: 220px;"></div>
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="timeline-icon"><i class="fa fa-cutlery"></i></div>
                                                    <div class="timeline-time"><small>yesterday</small></div>
                                                    <div class="timeline-content">
                                                        <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Patricia Woods</strong></a></p>
                                                        <p class="push-bit">Today I had the lunch of my life! It was delicious!</p>
                                                        <div class="row push">
                                                            <div class="col-sm-6 col-md-4">
                                                                <a href="img/placeholders/photos/photo23.jpg" data-toggle="lightbox-image">
                                                                    <img src="img/placeholders/photos/photo23.jpg" alt="image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="timeline-icon"><i class="fa fa-smile-o"></i></div>
                                                    <div class="timeline-time"><small>2 days ago</small></div>
                                                    <div class="timeline-content">
                                                        <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Administrator</strong></a></p>
                                                        To thank you all for your support we would like to let you know that you will receive free feature updates for life! You are awesome!
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="timeline-icon"><i class="fa fa-pencil"></i></div>
                                                    <div class="timeline-time"><small>1 week ago</small></div>
                                                    <div class="timeline-content">
                                                        <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Nicole Ward</strong></a></p>
                                                        <p class="push-bit">Consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate.</p>
                                                        Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum.
                                                    </div>
                                                </li>
                                                <li class="text-center">
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-default">View more..</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- END Timeline Content -->
                                </div>
                                <!-- END Timeline Block -->
                            </div>
                        </div>
                        <!-- END Dashboard 2 Content -->
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <footer class="clearfix">
                        <div class="pull-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                        </div>
                        <div class="pull-left">
                            <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI 3.0</a>
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

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="index.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <fieldset>
                                <legend>Vital Info</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">Admin</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                                    <div class="col-md-8">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings -->

        <!-- Remember to include excanvas for IE8 chart support -->
        <!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

        <!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/helpers/gmaps.min.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/index2.js"></script>
        <script>$(function(){ Index2.init(); });</script>
    </body>
</html>