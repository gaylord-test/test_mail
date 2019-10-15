<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
        <title>Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="/images/favicon.ico">

        <!-- inline style to handle loading of various element-->
        <style>body.loading {visibility: hidden;}</style>

        <!-- SimpleMDE css -->
        <link href="{{ asset('/css/simplemde.min.css') }}" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="{{ asset('/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/app.min.css') }}" rel="stylesheet" type="text/css" id="main-style-container">
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  </head>
  <body>
     <div id="detached-topbar-placeholder"></div>
        <!-- Begin page -->
        <div class="wrapper">

            <div id="vertical-sidebar-placeholder"><!-- ========== Left Sidebar Start ========== -->
<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu" id="left-side-bar">

    <div class="slimscroll-menu" id="left-side-menu-container">

        <!-- LOGO -->
        <a href="dashboard-projects.html" class="logo text-center">
            <span class="logo-lg">
                <img src="./public/images/logo.png" alt="" height="16" id="side-main-logo">
            </span>
            <span class="logo-sm">
                <img src="./public/images/logo_sm.png" alt="" height="16">
            </span>
        </a>

        <!--- Sidemenu -->
        <ul class="metismenu side-nav" id="left-bar-menu">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a class="side-nav-link mm-active" href="dashboard-projects.html">
                    <i class="dripicons-meter"></i>
                    <span> Tableau de bord </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a class="side-nav-link mm-active" href="dashboard-projects.html">
                    <i class=" mdi mdi-account-card-details"></i>
                    <span> Contacts </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a class="side-nav-link mm-active" href="dashboard-projects.html">
                    <i class="mdi mdi-calendar-range"></i>
                    <span> Agenda </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a class="side-nav-link mm-active" href="dashboard-projects.html">
                    <i class="mdi mdi-email-outline"></i>
                    <span> Mails </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="mdi mdi-star"></i>
                    <span> Favoris </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="apps-calendar.html">
                            <span>Projet de muret</span>
                             <i class="mdi mdi-star" style="margin-left: 20px;"></i>
                        </a>
                    </li>
                    
                </ul>
            </li>
          
            <li class="side-nav-title side-nav-item mt-1">Entreprise</li>

            <li class="side-nav-item">
                <a class="side-nav-link mm-active" href="dashboard-projects.html">
                    <i class="mdi mdi-briefcase"></i>
                    <span> Projets </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a class="side-nav-link mm-active" href="dashboard-projects.html">
                    <i class="mdi mdi-comment-arrow-right"></i>
                    <span> Suivi commercial </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class=" mdi mdi-signature-text"></i>
                    <span> Contractualisation </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <!-- <li>
                        <a href="ui-cards.html">Proposition commerciale</a>
                    </li>
                    <li>
                        <a href="tables-basic.html">Contrats</a>
                    </li>
                    <li>
                        <a href="ui-modals.html">Factures</a>
                    </li> -->
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="mdi mdi-shopping"></i>
                    <span> Achats </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <!-- <li>
                        <a href="ui-cards.html">Commandes</a>
                    </li>
                    <li>
                        <a href="ui-buttons.html">Factures</a>
                    </li>
                    <li>
                        <a href="ui-modals.html">Notes de frais</a>
                    </li> -->
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="mdi mdi-google-street-view"></i>
                    <span> Intervenants </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                  <!--   <li>
                        <a href="ui-cards.html">Intervenants</a>
                    </li>
                    <li>
                        <a href="ui-buttons.html">Marchés & avenant</a>
                    </li>
                    <li>
                        <a href="ui-modals.html">Factures entreprises</a>
                    </li> -->
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="mdi mdi-chart-line"></i>
                    <span> Statistiques </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                 <!--    <li>
                        <a href="charts-chartjs.html">Facturation</a>
                    </li>
                    <li>
                        <a href="charts-brite.html">Plannification</a>
                    </li>
                    <li>
                        <a href="charts-sparkline.html">Ressources</a>
                    </li> -->
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="widgets.html" class="side-nav-link">
                    <i class="mdi mdi-note-multiple"></i>
                    <span> Pense-bête </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="mdi mdi-lifebuoy"></i>
                    <span> Support </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                   <!--  <li>
                        <a href="charts-chartjs.html">Accèder à la formation</a>
                    </li>
                    <li>
                        <a href="charts-brite.html">Consulter la FAQ</a>
                    </li>
                    <li>
                        <a href="charts-sparkline.html">Demander de l'aide</a>
                    </li> -->
                </ul>
            </li>
                </ul>
            </li>
            
        </ul>

        
        <!-- end Help Box -->
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End --></div>
            <div id="detached-sidebar-placeholder"></div>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <div id="vertical-topbar-placeholder"><!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topbar-right-menu float-right mb-0">
    <li class="notification-list topbar-dropdown d-lg-block">
            <button class="nav-link dropdown-toggle arrow-none btn btn-link right-bar-toggle">
                <i class="dripicons-gear noti-icon"></i>
            </button>
        </li>

        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="/images/flags/us.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">English</span> <i class="mdi mdi-chevron-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu">

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                </a>
                
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                </a>

            </div>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="dripicons-bell noti-icon"></i>
                <span class="noti-icon-badge"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="m-0">
                        <span class="float-right">
                            <a href="javascript: void(0);" class="text-dark">
                                <small>Clear All</small>
                            </a>
                        </span>Notification
                    </h5>
                </div>

                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 456px;"><div class="slimscroll" style="max-height: 230px; overflow: hidden; width: auto; height: 456px;">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-primary">
                            <i class="mdi mdi-comment-account-outline"></i>
                        </div>
                        <p class="notify-details">Caleb Flakelar commented on Admin
                            <small class="text-muted">1 min ago</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-info">
                            <i class="mdi mdi-account-plus"></i>
                        </div>
                        <p class="notify-details">New user registered.
                            <small class="text-muted">5 hours ago</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon">
                            <img src="/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt=""> </div>
                        <p class="notify-details">Cristina Pride</p>
                        <p class="text-muted mb-0 user-msg">
                            <small>Hi, How are you? What about our next meeting</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-primary">
                            <i class="mdi mdi-comment-account-outline"></i>
                        </div>
                        <p class="notify-details">Caleb Flakelar commented on Admin
                            <small class="text-muted">4 days ago</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon">
                            <img src="/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt=""> </div>
                        <p class="notify-details">Karen Robinson</p>
                        <p class="text-muted mb-0 user-msg">
                            <small>Wow ! this admin looks good and awesome design</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-info">
                            <i class="mdi mdi-heart"></i>
                        </div>
                        <p class="notify-details">Carlos Crouch liked
                            <b>Admin</b>
                            <small class="text-muted">13 days ago</small>
                        </p>
                    </a>
                </div><div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 138.482px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>

                <!-- All-->
                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                    View All
                </a>

            </div>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <span class="account-user-avatar"> 
                    <img src="/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                </span>
                <span>
                    <span class="account-user-name">Dominic Keller</span>
                    <span class="account-position">Founder</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-circle mr-1"></i>
                    <span>My Account</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-edit mr-1"></i>
                    <span>Settings</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-lifebuoy mr-1"></i>
                    <span>Support</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-lock-outline mr-1"></i>
                    <span>Lock Screen</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout mr-1"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>

    </ul>
    <button class="button-menu-mobile open-left disable-btn">
        <i class="mdi mdi-menu"></i>
    </button>
    <div class="app-search">
        <form>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="mdi mdi-magnify"></span>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- end Topbar --></div>
                    <div id="horizontal-topbar-placeholder"></div>

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page email-title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                                            <li class="breadcrumb-item active">Inbox</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Inbox</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page email-title --> 

                        <div class="row">

                            <!-- Right Sidebar -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
      @yield('content')
    </div>
                                    <!-- end card-body -->
                                    <div class="clearfix"></div>
                                </div> <!-- end card-box -->

                            </div> <!-- end Col -->
                        </div><!-- End row -->
                        




                    </div> <!-- container -->

                </div> <!-- content -->


                <!-- Compose Modal -->
                <div id="compose-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="compose-header-modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header modal-colored-header bg-primary">
                                <h4 class="modal-title" id="compose-header-modalLabel">Nouveau mail</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body p-3">
                                <form class="p-1" id="frm_new">
                                    <div class="form-group mb-2">
                                        <label for="msgto">Destinataire</label>
                                        <input type="text" id="mailto" class="form-control" placeholder="example@email.com" name="to">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="mailsubject">Sujet</label>
                                        <input type="text" id="mailsubject" class="form-control" placeholder="your subject" name="subject">
                                    </div>
                                    <div class="form-group write-mdg-box mb-3">
                                        <label>Message</label>
                                        <div id="summernote-basic-tt"></div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-fileinput">Fichier</label>
                                        <input type="file" id="file" class="form-control-file" name="logo">
                                            <input type="hidden" id="file_name"/>
                                        <div id="files_list"></div>
                                    </div>
                                    <button type="button" class="btn btn-primary send_mail" data-dismiss="modal"><i class="mdi mdi-send mr-1"></i> Send Message</button>
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->


                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2018 - 2019 © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right Sidebar -->
        <div class="right-bar">

          <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
              <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
          </div>

          <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 1287px;"><div class="slimscroll-menu rightbar-content" style="overflow: hidden; width: auto; height: 1287px;">

            <div class="p-1">
              <div class="alert alert-primary" role="alert">
                <strong>Customize </strong> the overall color scheme, layout, sidebar menu, etc. Note that, Hyper stores the preferences in local storage.
              </div>
            </div>

            <!-- Settings -->
            <h5 class="pl-2">Color Scheme</h5>
            <hr class="mb-0">

            <div class="p-2">
              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light" id="light-mode-check" checked="">
                <label class="custom-control-label" for="light-mode-check">Light Mode</label>
              </div>

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark" id="dark-mode-check">
                <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
              </div>
            </div>

            <h5 class="pl-2">Layout</h5>
            <hr class="mb-0">

            <div class="p-2">
              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="layout" value="vertical" id="vertical-check" checked="">
                <label class="custom-control-label" for="vertical-check">Vertical Layout (Default)</label>
              </div>

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="layout" value="horizontal" id="horizontal-check">
                <label class="custom-control-label" for="horizontal-check">Horizontal Layout</label>
              </div>

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="layout" value="detached" id="detached-check">
                <label class="custom-control-label" for="detached-check">Detached Layout</label>
              </div>
            </div>

            <h5 class="pl-2">Width</h5>
            <hr class="mb-0">
            <div class="p-2">
              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="width" value="fluid" id="fluid-check" checked="">
                <label class="custom-control-label" for="fluid-check">Fluid</label>
              </div>
              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="width" value="boxed" id="boxed-check">
                <label class="custom-control-label" for="boxed-check">Boxed</label>
              </div>
            </div>

            <h5 class="pl-2">Left Sidebar</h5>
            <hr class="mb-0">

            <div class="p-2">
              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="theme" value="default" id="default-check" checked="">
                <label class="custom-control-label" for="default-check">Default</label>
              </div>

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="theme" value="light" id="light-check">
                <label class="custom-control-label" for="light-check">Light</label>
              </div>

              <div class="custom-control custom-switch mb-3">
                <input type="radio" class="custom-control-input" name="theme" value="dark" id="dark-check">
                <label class="custom-control-label" for="dark-check">Dark</label>
              </div>

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="compact" value="fixed" id="fixed-check" checked="">
                <label class="custom-control-label" for="fixed-check">Fixed</label>
              </div>

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="compact" value="condensed" id="condensed-check">
                <label class="custom-control-label" for="condensed-check">Condensed</label>
              </div>

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="compact" value="scrollable" id="scrollable-check">
                <label class="custom-control-label" for="scrollable-check">Scrollable</label>
              </div>
            </div>

            <div class="p-2 text-center">
              <button class="btn btn-primary btn-block" id="resetBtn">Reset to Default</button>
            </div>
          </div><div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 8px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 1287px;"></div><div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
        </div>

        <div class="rightbar-overlay"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>


<script type="text/javascript">
function jqSelector(str)
{ 
  return str.replace(/([;&,\.\+\*\~':"\!\^#$%@\[\]\(\)=>\|])/g, '\\$1'); 
}

  $( function() {

// setInterval(function(){
//   id_boite = $(".email-menu-list a:first-child").attr('id');
// $.ajax({
//             url: "delta/"+id_boite,
//             type: 'GET',
//             contentType: false,
//             processData: false,
//             success: function (data) {
//               // console.log(data);
//                 $.each(data, function(index,v) {
//                   str = v.id;
//                   str = jqSelector(str);
//                   console.log(str);
//                   if(v.isRead == false){
//                     $("#"+str).addClass("unread");
//                   }else{
//                    $("#"+str).removeClass("unread");
//                   }
//                 });
//             },
//             error: function (xhr, status, error) {
//                 // alert(xhr.responseText);
//             }
//         });
// }, 10000)


    $( ".draggable" ).draggable({ 
      revert: true,
      placeholder: "ui-state-highlight",
      helper: "clone"
       });
    $( ".droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" );
          var draggableId = ui.draggable.attr("id");
  var droppableId = $(this).attr("id");
           $.ajax({
            url: "ajax_drag",
            data: "draggableId="+draggableId+"&droppableId="+droppableId,
            type: 'GET',
            success: function (data) {
                if(data=="oui"){
                  ui.draggable.css('display','none');
                }
            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
            }
          });
      }
    });
  } );

$('#file').change(function () {
        if ($(this).val() != '') {
            upload(this);
        }
    });

function upload(img) {
        var form_data = new FormData();
        form_data.append('file', img.files[0]);
                form_data.append('_token', '{{csrf_token()}}');
        $.ajax({
            url: "ajax-image-upload",
            data: form_data,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.fail) {
                    // $('#preview_image').attr('src', '{{asset('images/noimage.jpg')}}');
                    alert(data.errors['file']);
                }
                else {
                    $('#file_name').val(data);
                    $('#preview_image').attr('src', "{{asset('uploads')}}/" + data);
                }
                $('#loading').css('display', 'none');
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
                $('#preview_image').attr('src', "{{asset('images/noimage.jpg')}}");
            }
        });
    }

$("#nee").on('click',function(){
  $('#summernote-basic-tt').summernote({
    height: 200
  });

})

  $(".send_mail").on('click', function(){
   $.ajax({
            method: "GET",
            url: "send_mail",
            data: "to="+$("#mailto").val()+"&subject="+$("#mailsubject").val()+"&mess="+$('#summernote-basic-tt').summernote('code')+"&att="+$('#file_name').val()
        })
        .done(function(data) {
            alert(data);
        }).fail(function( jqXHR, textStatus ) {
  alert( "Request failed: " + textStatus );
});
  })
</script>
  </body>
</html>