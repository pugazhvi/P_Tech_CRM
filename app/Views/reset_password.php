<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Reset Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url()."/public"; ?>/assets/images/uvs-favicon.png">

		<!-- App css -->
		<link href="<?= base_url()."/public"; ?>/assets/css/bootstrap-corporate.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="<?= base_url()."/public"; ?>/assets/css/app-corporate.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="<?= base_url()."/public"; ?>/assets/css/bootstrap-corporate-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="<?= base_url()."/public"; ?>/assets/css/app-corporate-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="<?= base_url()."/public"; ?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<style>
.text-danger {
    color: red !important;
}
.parsley-errors-list>li {
    color: red !important;
}
.field-icon {
    float: right;
    margin-left: -35px;
    margin-top: 12px;
    margin-right: 12px;
    position: relative;
    z-index: 3;
}


</style>

    </head>

    <body class="loading">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-6">
                        <div class="card">

                               

                            <div class="card-body">

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
                                   
                                </div>

                               
                                <div class="text-center w-75 m-auto">
                                    <h3>Reset Password</h3>
                                </div>
                                <p class="sub-header">
                                </p>

                                <form method="post" action="<?= base_url()."change_password"; ?>" role="form" class="parsley-examples">
                                <input id="id" type="hidden" value="<?= session()->getTempdata('staff_id'); ?>" name="staff_id">
                                

                                <?php if(session()->getTempdata('mail_success')):?>
                                   <div class="alert alert-success" >
                                   <?= session()->getTempdata('mail_success'); ?>
                                   </div>
                                   <?php endif;?>
                                   
                                   
                                   <?php if(session()->getTempdata('error')):?>
                                   <div class="alert alert-danger" >
                                   <?= session()->getTempdata('error'); ?>
                                   </div>
                                   <?php endif;?>

                                   <div class="form-group row">
                                        <label for="hori-pass1" class="col-3 col-form-label">Email<span class="text-danger">*</span></label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" value="<?= session()->getTempdata('email'); ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hori-pass1" class="col-3 col-form-label">Password<span class="text-danger">*</span></label>
                                        <div class="col-9">
                                            <input id="hori-pass1" type="password" placeholder="Password"  
                                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,}" 
                                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
                                            required class="form-control" name="password">
                                        </div>
                                        <span toggle="#hori-pass1" id="toggle-password"  class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hori-pass2" class="col-3 col-form-label">Confirm Password
                                            <span class="text-danger">*</span></label>
                                        <div class="col-9">
                                            <input data-parsley-equalto="#hori-pass1" type="password" required
                                                placeholder="Password" class="form-control" id="hori-pass2">
                                        </div>
                                    </div>
                                  

                                    
                                
                                        <div class="form-group mb-0 text-center">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1"  style="background-color: #1aa79c; border-color: #1aa79c;">
                                                Submit
                                            </button>
                                           
                                        </div>
                                  
                                </form>
                            </div>
                        </div> <!-- end card-box -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="<?= base_url('forgot_password'); ?>" class="text-primary font-weight-medium ml-1">Want to change Mail id ?</a></p>
                               
                            </div> 
                        </div>


                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

 <!-- Right bar overlay-->
 <div class="rightbar-overlay"></div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <script>
    $("#toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } 
    else {
        input.attr("type", "password");
    }
    });
</script>
 <!-- Vendor js -->
 <script src="<?= base_url()."/public"; ?>/assets/js/vendor.min.js"></script>

 <!-- Plugin js-->
 <script src="<?= base_url()."/public"; ?>/assets/libs/parsleyjs/parsley.min.js"></script>

 <!-- Validation init js-->
 <script src="<?= base_url()."/public"; ?>/assets/js/pages/form-validation.init.js"></script>

 <!-- App js -->
 <script src="<?= base_url()."/public"; ?>/assets/js/app.min.js"></script>
        
    </body>
</html>