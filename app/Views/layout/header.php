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


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/min/moment.min.js"></script>
        <!-- <link href="<?php echo base_url()?>public/assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" /> -->

        <style>
            .right-side-menu{
                width: 185px;
                background: #fff;
                bottom: 0;
                padding: 20px 0;
                position: fixed;
                transition: all .1s ease-out;
                top: 0;
                right: 0; /* Changed from left to right */
                padding-top: calc(62px + 20px);
                box-shadow: 0 0 35px 0 rgba(154, 161, 171, .15);
                z-index: 1;
                height: 430px;
            }
            .button-menu-mobiles {
                border: none;
                color: #fff;
                display: inline-block;
                height: 70px;
                line-height: 70px;
                width: 60px;
                background-color: transparent;
                font-size: 24px;
                cursor: pointer;
            }
            @media (max-width: 770px){
                #hide_nav_pane{
                    display: none;
                }
            }
            @media (min-width: 770px){
                #show_nav_pane{
                    display: none;
                }
                .right-side-menu{
                    display: none;
                }
            }
            @media (max-width: 770px){
                #show_nav_pane{
                    display: block;
                }
                .right-side-menu{ 
                    display: none;
                 }
            }
            @media (min-width: 992px) {
                body[data-layout-mode=horizontal] .content-page {
                    padding: calc(15px + 55px) 12px 65px 12px;
                }
                .navbar-custom .topnav-menu li a{ display:flex; }
            }

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
                /* overflow:hidden; */
            }

            @media (max-width: 441px){
                .navbar-custom{
                    overflow:hidden;
                }            
            }



            .btn-secondary{
                color: black;
                background-color: #f4f9fb;
                border-color: #f4f9fb;
            }


            .btn-secondary:hover {
                color: #343a40;
                background-color: #d8eaf1;
                border-color: #cfe5ed;
            }
        </style>




    </head>

    <body class="loading" data-layout-mode="horizontal" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

        <div class="right-side-menu" >
            <ul style="color: #343a40 !important;margin-left:-35px;list-style-type: none;">

            <?php  if(isset($_SESSION['is_staff_logged_in']) && $_SESSION['is_staff_logged_in'] && $_SESSION['logged_in_staff_role'] == 'Staff') { ?>

                <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light">
                    <a href="<?= base_url().'create_visa_request'; ?>"  style="color:black;"> New Visa Request</a>
                <li>

                <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light">
                    <a href="<?= base_url().'visa_request_list'; ?>"  style="color:black;">  Visa Request List</a>
                <li>

            <?php }else if(isset($_SESSION['is_staff_logged_in']) && $_SESSION['is_staff_logged_in'] && $_SESSION['logged_in_staff_role'] == 'Admin'){ ?>

                <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" >
                    <a href="<?= base_url().'create_visa_request'; ?>"  class="dropdown-item notify-item" style="color:black;"> New Visa Request</a>
                <li>

                <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" >
                    <a href="<?= base_url().'visa_request_list'; ?>" class="dropdown-item notify-item"  style="color:black;"> Visa Request List </a>
                <li>
                    
                <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" >
                    <a href="<?= base_url().'client_list'; ?>" class="dropdown-item notify-item"  style="color:black;"> Client</a>
                <li>

                <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" >
                    <a href="<?= base_url().'staff_list'; ?>" class="dropdown-item notify-item" style="color:black;"> Staff</a>
                <li>
                <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" >
                    <a href="<?= base_url('country_list'); ?>" class="dropdown-item notify-item" style="color:black;">Country</a>
                </li >                
                <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" >
                    <a href="<?= base_url('category_list'); ?>" class="dropdown-item notify-item" style="color:black;">Category</a>
                </li>
                <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" > 
                    <a href="<?= base_url('visa_summary_list'); ?>" class="dropdown-item notify-item" style="color:black;">Visa Info</a>
                </li>   
                        
        
            <?php }else if(isset($_SESSION['is_client_logged_in']) && $_SESSION['is_client_logged_in']){ ?>

                <!-- <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light">
                    <a href="<?= base_url().'client_home'; ?>"  style="color:white;"> <span class="mdi mdi-format-align-justify" style="font-size: 17px;"></span>  My Visa Request </a>
                <li> -->

            <?php } ?>


                <?php  if(isset($_SESSION['is_staff_logged_in']) && $_SESSION['is_staff_logged_in']) { ?>
                    <li >
                        <a href="<?= base_url('staff_profile'); ?>" class="dropdown-item notify-item">
                        <i class="ri-account-circle-line"></i>
                        <span>My Profile</span>
                        </a>
                    </li>
                    
                <?php }else if(isset($_SESSION['is_client_logged_in']) && $_SESSION['is_client_logged_in']){ ?>
                    <!-- <a href="<?= base_url('client_profile'); ?>" class="dropdown-item notify-item">
                    <i class="ri-account-circle-line"></i>
                    <span>My Profile</span>
                    </a> -->
                <?php } ?>
                                           
                <?php  if(isset($_SESSION['is_staff_logged_in']) && $_SESSION['is_staff_logged_in']) { ?>
                    <li >
                    <a href="<?= base_url()."staff_logout"; ?>" class="dropdown-item notify-item">
                        <i class="ri-logout-box-line"></i>
                        <span>Logout</span>
                    </a>
                    </li>
                <?php }else if(isset($_SESSION['is_client_logged_in']) && $_SESSION['is_client_logged_in']){ ?>
                    <li >
                    <a href="<?= base_url()."client_logout"; ?>" class="dropdown-item notify-item">
                        <i class="ri-logout-box-line"></i>
                        <span>Logout</span>
                    </a>
                    </li>
                <?php } ?>

            </ul>
        </div>
            <!-- Topbar Start -->
            <div class="navbar-custom">

                <div class="container-fluid">
                    <div id="show_nav_pane" style="float: right !important;">
                    
                        <button class="button-menu-mobiles" id="right_slide_nav" onclick="right_slide_nav(this )"><i class="fe-menu"></i></button>
                    </div>
                    <ul class="list-unstyled topnav-menu float-right mb-0" id="hide_nav_pane">

                        <?php  if(isset($_SESSION['is_staff_logged_in']) && $_SESSION['is_staff_logged_in'] && $_SESSION['logged_in_staff_role'] == 'Staff') { ?>

                            <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light">
                                <a href="<?= base_url().'create_visa_request'; ?>"  style="color:white;"> New Visa Request</a>
                            <li>

                            <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light">
                                <a href="<?= base_url().'visa_request_list'; ?>"  style="color:white;">  Visa Request List</a>
                            <li>
                        
                        <?php }else if(isset($_SESSION['is_staff_logged_in']) && $_SESSION['is_staff_logged_in'] && $_SESSION['logged_in_staff_role'] == 'Admin'){ ?>

                            <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light">
                                <a href="<?= base_url().'create_visa_request'; ?>"  style="color:white;"> New Visa Request</a>
                            <li>

                            <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light">
                                <a href="<?= base_url().'visa_request_list'; ?>"  style="color:white;">  Visa Request List</a>
                            <li>
                                
                            <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light">
                                <a href="<?= base_url().'client_list'; ?>"  style="color:white;"> Client</a>
                            <li>

                            <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light">
                                <a href="<?= base_url().'staff_list'; ?>"  style="color:white;"> Staff</a>
                            <li>

                            <li class="dropdown notification-list topbar-dropdown">
                                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    
                                        <span class="pro-user-name ml-1">
                                          Masters
                                        <i class="mdi mdi-chevron-down"></i> 
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    
                                    
                                            <a href="<?= base_url('country_list'); ?>" class="dropdown-item notify-item">
                                            <span>Country</span>
                                            </a>

                                            <a href="<?= base_url('category_list'); ?>" class="dropdown-item notify-item">
                                            <span>Category</span>
                                            </a>

                                            <a href="<?= base_url('visa_summary_list'); ?>" class="dropdown-item notify-item">
                                            <span>Visa Info</span>
                                            </a>
                                    
                                    </div>
                            </li>

                        <?php }else if(isset($_SESSION['is_client_logged_in']) && $_SESSION['is_client_logged_in']){ ?>

                            <!-- <li class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light">
                                <a href="<?= base_url().'client_home'; ?>"  style="color:white;"> <span class="mdi mdi-format-align-justify" style="font-size: 17px;"></span>  My Visa Request </a>
                            <li> -->

                        <?php } ?>
                      
    
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
                                    <!-- <a href="<?= base_url('client_profile'); ?>" class="dropdown-item notify-item">
                                    <i class="ri-account-circle-line"></i>
                                    <span>My Profile</span>
                                    </a> -->
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



                    

                  
                </div>
            </div>


            <!-- end Topbar -->
            <?php  if(isset($_SESSION['is_staff_logged_in']) && $_SESSION['is_staff_logged_in'] && $_SESSION['logged_in_staff_role'] == 'SuperAdmin' ) { ?>
            <div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                        
                
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="<?= base_url()."client_list"; ?>" id="topnav-client" role="button" >
                                        <i class="ri-shield-user-line mr-1"></i> Client  
                                    </a>
                                   
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="<?= base_url()."staff_list"; ?>" id="topnav-staff" role="button">
                                        <i class="ri-user-line mr-1"></i> Staff  
                                    </a>
                                  
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-master" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-database-2-line mr-1"></i> Master  <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-master">
                                        <a href="<?= base_url()."country_list"; ?>" class="dropdown-item">Country</a>
                                        <a href="<?= base_url()."category_list"; ?>" class="dropdown-item">Visa Category</a>
                                        <a href="<?= base_url()."visa_summary_list"; ?>" class="dropdown-item">Visa Info</a>
                                    </div>
                                </li>
                     

                            </ul> <!-- end navbar-->
                        </div> <!-- end .collapsed-->
                    </nav>
                </div> <!-- end container-fluid -->
            </div> <!-- end topnav-->
            <?php } ?>    


