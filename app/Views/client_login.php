<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>UVS - Client Login</title>
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

    </head>

    <body class="loading auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!-- Auth fluid right content -->
            <div class="auth-fluid-right">
                <div class="auth-user-testimonial">
                    <h3 class="mb-3 text-white">United Visa Services , </h3>
                    <p class="lead font-weight-normal"><i class="mdi mdi-format-quote-open"></i> We provide you with best travel solutions for your visa. Our team is specially trained and dedicated to help you even from the planning stage of your trip. As a pioneer in this field we have expertise in providing perfect travel solutions, connect with proper people in your destinations, assure safety throughout the trip and take care of immigration procedures. <i class="mdi mdi-format-quote-close"></i>
                    </p>
                    <!-- <h5 class="text-white">
                        - Admin User
                    </h5> -->
                </div> <!-- end auth-user-testimonial-->
            </div>
            <!-- end Auth fluid right content -->

            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-left">
                            <div class="auth-logo">
                                <a href="index.html" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="<?= base_url()."public"; ?>/assets/images/login-logo.png" alt="" height="22" style="width: 200px;height: 85px;">
                                    </span>
                                </a>
            
                                <a href="index.html" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="<?= base_url()."public"; ?>/assets/images/login-logo.png" alt="" height="22" style="width: 200px;height: 85px;">
                                    </span>
                                </a>
                            </div>
                        </div>

                     

                        <!-- form -->
                        <form action="<?= base_url(); ?>" method="post">

                                <?php if(session()->getTempdata('error')):?>
                                   <div class="alert alert-danger" >
                                   <?= session()->getTempdata('error'); ?>
                                   </div>
                                <?php endif;?>

                            <div class="form-group">
                               <label for="user_name">User Name</label>
                                <input class="form-control" type="text" id="user_name" name="user_name" required="" placeholder="Enter your user name">
                            </div>
                            <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password">
                                        <div class="input-group-append" data-password="false">
                                            <div class="input-group-text">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            
                            <div class="form-group mb-3">
                                <!-- <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                    <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                </div> -->
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit">Log In </button>
                            </div>
                          
                          
                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                        <!-- <footer class="footer footer-alt">
                            <p class="text-muted">Don't have an account? <a href="auth-register-2.html" class="text-primary ml-1"><b>Sign Up</b></a></p>
                        </footer> -->

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->
        </div>
        <!-- end auth-fluid-->

        <!-- Vendor js -->
        <script src="<?= base_url()."public"; ?>/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url()."public"; ?>/assets/js/app.min.js"></script>
        
    </body>
</html>