<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>UVS - Login</title>
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

    <body class="loading">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
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
                                    <!-- <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p> -->
                                </div>


                        

                               

                                <form action="<?= base_url()."staff"; ?>" method="post">

                                <?php if(session()->getTempdata('error')):?>
                                   <div class="alert alert-danger" >
                                   <?= session()->getTempdata('error'); ?>
                                   </div>
                                <?php endif;?>

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email</label>
                                        <input class="form-control" type="email" id="emailaddress" name="email" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="form-group mb-3">
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

                                    <!-- <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div> -->

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                    </div>

                                </form>

                               

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="<?= base_url('forgot_password'); ?>" class="text-primary font-weight-medium ml-1">Forgot your password?</a></p>
                               
                            </div> 
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            <script>document.write(new Date().getFullYear())</script> &copy;  <a href="" class="text-dark">UVS</a> 
        </footer>

        <!-- Vendor js -->
        <script src="<?= base_url()."public"; ?>/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url()."public"; ?>/assets/js/app.min.js"></script>
        
    </body>
</html>