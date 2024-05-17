<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>UVS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url()."public"; ?>/assets/images/uvs-favicon.png">

		<!-- App css -->
		<link href="<?= base_url()."public"; ?>/assets/css/bootstrap-creative.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="<?= base_url()."public"; ?>/assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="<?= base_url()."public"; ?>/assets/css/bootstrap-creative-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="<?= base_url()."public"; ?>/assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="<?= base_url()."public"; ?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

         <!-- third party css -->
        <link href="<?= base_url()."public"; ?>/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url()."public"; ?>/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url()."public"; ?>/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url()."public"; ?>/assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- Plugins css -->
        <link href="<?= base_url()."public"; ?>/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />

         <!-- toster alert -->
         <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">


        <style>
            .dropdown-item:focus, .dropdown-item:hover{
                background-color: #7ce4dd;
            }
            @media (min-width: 992px) {
             .topnav { height: 56px; }
            .logo-lg img{ height:50px; }
            .navbar-custom{ height:60px; }
            .logo-box .logo{ line-height: 60px; }
            .navbar-custom .topnav-menu .nav-link{ line-height: 60px; height: 60px; color:#ffffff; }
            .topnav{ margin-top:55px; height:50px; }
            }
            @media (max-width: 991px){
                .logo-sm img{ height:50px; }
            }
            footer{
                padding:10px 15px 10px!important;
            }
            .page-title-box-alt {
                background-color: transparent;
                padding: 15px 27px;
                box-shadow: none;
                margin-bottom: 0;
            }
            .navbar-custom{
                background-color: #256bb1;
            }



        </style>


    </head>

    <body class="loading" data-layout-mode="horizontal" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
    
                    <ul class="list-unstyled topnav-menu float-right mb-0">

    
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                              
                                <span class="pro-user-name ml-1">
                                <?php  if(isset($_SESSION['is_staff_logged_in']) && $_SESSION['is_staff_logged_in']) { ?>
                                    <?=   $Data->name; ?>
                                <?php }else if(isset($_SESSION['is_client_logged_in']) && $_SESSION['is_client_logged_in']){ ?>
                                    <?=   $Data->org_name; ?>
                                <?php } ?>
                                <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
    
                                <!-- item-->
                                <?php  if(isset($_SESSION['is_staff_logged_in']) && $_SESSION['is_staff_logged_in']) { ?>
                                    <a href="<?= base_url('staff_profile'); ?>" class="dropdown-item notify-item">
                                    <i class="ri-account-circle-line"></i>
                                    <span>My Profile</span>
                                    </a>
                                <?php }else if(isset($_SESSION['is_client_logged_in']) && $_SESSION['is_client_logged_in']){ ?>
                                    <a href="<?= base_url('client_profile'); ?>" class="dropdown-item notify-item">
                                    <i class="ri-account-circle-line"></i>
                                    <span>My Profile</span>
                                    </a>
                                <?php } ?>
                               

                              

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <?php  if(isset($_SESSION['is_staff_logged_in']) && $_SESSION['is_staff_logged_in']) { ?>
                                    <a href="<?= base_url()."staff_logout"; ?>" class="dropdown-item notify-item">
                                        <i class="ri-logout-box-line"></i>
                                        <span>Logout</span>
                                    </a>
                               <?php }else if(isset($_SESSION['is_client_logged_in']) && $_SESSION['is_client_logged_in']){ ?>
                                    <a href="<?= base_url()."client_logout"; ?>" class="dropdown-item notify-item">
                                        <i class="ri-logout-box-line"></i>
                                        <span>Logout</span>
                                    </a>
                               <?php } ?>
                            </div>
                        </li>
    
                     
    
                    </ul>



                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="<?= base_url()."public"; ?>/assets/images/logo_white_sm.png" alt="" height="24">
                                <!-- <span class="logo-lg-text-light">Minton</span> -->
                            </span>
                            <span class="logo-lg">
                                <img src="<?= base_url()."public"; ?>/assets/images/logo_white.png" alt="" height="20">
                                <!-- <span class="logo-lg-text-light">M</span> -->
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="<?= base_url()."public"; ?>/assets/images/logo_white_sm.png" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= base_url()."public"; ?>/assets/images/logo_white.png" alt="" height="20">
                            </span>
                        </a>
                    </div>


                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>   
            
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                            <?php  if(isset($_SESSION['is_staff_logged_in']) && $_SESSION['is_staff_logged_in']) { ?>

                                <?php  if($_SESSION['logged_in_staff_role'] == 'Admin'  || $_SESSION['logged_in_staff_role'] == 'Staff') { ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-visa" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-pages-line mr-1"></i> Visa Request  <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-visa">
                                        <a href="<?= base_url()."visa_request_list"; ?>" class="dropdown-item">Visa Request List</a>
                                        <a href="<?= base_url()."create_visa_request"; ?>" class="dropdown-item">Create Visa Request</a>
                                    </div>
                                </li>
                                <?php  } ?>

                                <?php  if($_SESSION['logged_in_staff_role'] == 'Admin' ) { ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-client" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-shield-user-line mr-1"></i> Client  <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-client">
                                        <a href="<?= base_url()."client_list"; ?>" class="dropdown-item">Client List</a>
                                        <a href="<?= base_url()."client_create"; ?>" class="dropdown-item">Create Client</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-staff" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-user-line mr-1"></i> Staff  <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-staff">
                                        <a href="<?= base_url()."staff_list"; ?>" class="dropdown-item">Staff List</a>
                                        <a href="<?= base_url()."staff_create"; ?>" class="dropdown-item">Create Staff</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-master" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-database-2-line mr-1"></i> Master  <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-master">
                                        <a href="<?= base_url()."visa_type"; ?>" class="dropdown-item">Visa Type</a>
                                        <a href="<?= base_url()."countries"; ?>" class="dropdown-item">countries</a>
                                    </div>
                                </li>
                                <?php  } ?>
                            <?php }else if(isset($_SESSION['is_client_logged_in']) && $_SESSION['is_client_logged_in']) { ?>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="<?= base_url()."client_home"; ?>" id="topnav-my-visa" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-pages-line mr-1"></i> My Visa Request  <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-my-visa">
                                        <a href="<?= base_url()."client_home"; ?>" class="dropdown-item">Visa Request List</a>
                                    </div>
                                </li>


                            <?php } ?>
                               

                           


                            </ul> <!-- end navbar-->
                        </div> <!-- end .collapsed-->
                    </nav>
                </div> <!-- end container-fluid -->
            </div> <!-- end topnav-->