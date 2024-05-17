<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>UVS - Forgetpassword</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="public/assets/images/uvs-favicon.png">

		<!-- App css -->
		<link href="<?= base_url()."public"; ?>/assets/css/bootstrap-material.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="<?= base_url()."public"; ?>/assets/css/app-material.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="<?= base_url()."public"; ?>/assets/css/bootstrap-material-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="<?= base_url()."public"; ?>/assets/css/app-material-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="<?= base_url()."public"; ?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- css -->
        <link href="<?= base_url()."/public"; ?>/assets/css/style.css" rel="stylesheet" type="text/css" />
        <!-- jquery -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->

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
                                   
                                </div>
                                
                                <div class="text-center w-75 m-auto">
                                    <h3>Account recovery</h3>
                                </div>

                                </br>
                                <form method="post" action="<?php echo base_url();?>verify_otp" method="post">
                                <input type="hidden" id="verify_otp" name="verify_otp" value="">
                              
                                   
                                


                                <?php if(session()->getTempdata('error')):?>
                                   <div class="alert alert-danger" id="alert">
                                   <?= session()->getTempdata('error'); ?>
                                   </div>
                                <?php endif;?>


                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" name="email" id="email" required="required" value="" placeholder="Enter your email">
                                    </div>
                                    <div id="alert1" style="text-align:center;"></div>

                                    <div class="form-group mb-3 disable" id="disable">
                                        <label for="otp">OTP</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="otp" name="otp" value="" required="required" class="form-control" placeholder="Enter your otp">
                                        </div>
                                    </div>

                                    </br>

                                    <div class="form-group mb-0 text-center" id="re-sub">
                                        <button class="btn btn-primary" type="submit"  id="submit1"> Get OTP </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="<?= base_url('staff'); ?>" class="text-primary font-weight-medium ml-1">Back to login</a></p>
                               
                            </div> 
                        </div>

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
        <script>document.write(new Date().getFullYear())</script> &copy;  <a href="" class="text-dark"></a> 
        </footer>

        <!-- Vendor js -->
        <script src="<?= base_url()."public"; ?>/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url()."public"; ?>/assets/js/app.min.js"></script>
        
    </body>


<script>
// jQuery autohide element after 5 seconds
$('#alert').delay(3000).fadeOut('slow');
// This will disable just the div
$(".disable").hide();

$(document).on('click','#submit1',function(){
    $('#alert1').html('Please wait...');
    var email = $("#email").val();
  
    
   var url = "<?php echo base_url();?>forgot_password";
   
    $.ajax({ 
      type: "post",
      url: url,
      data: { email : email },
      json: true,
      success: function(response) {
        response = jQuery.parseJSON(response);
        if (response.status == "success") 
        {
            $('#alert1').html('');
            $(".disable").show();
            $('#verify_otp').val(response.otp);
            $("#re-sub").html('<button class="btn btn-primary btn-block" type="submit"> Submit </button>');
            window.stop();
        } 
        else
        {
           
           
            $('#alert1').html('Invalid email , Please try again.'); 
          

        }
       
      },
      error: function(jqXHR, textStatus, err) { alert('text status '+textStatus+', err '+err) }
    });
});
</script>
</html>