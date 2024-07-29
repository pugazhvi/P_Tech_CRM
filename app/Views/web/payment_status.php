<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//error_reporting(0);
$pageTitle = "Visa Information";
//$curfile = "visa_info.php";
//include_once 'include/site.Constant.php';
// include_once 'include/class.dbConnect.php';
//include_once 'include/function.formitem.php';
//include_once 'include/doctype.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title><?php echo PAGE_TITLE; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include('includes/meta.php'); ?>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.custom.86080.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <style>
        .mt100 {
            margin-top: 30px;
        }

        .vheading,
        .vheading span {
            color: #0d79b9 !important;
        }
        
        .step2,.step3{
            display: none;
        }
        
        .pi-col{
            width: 33% !important;
        }

/*
        .pdfdownload span{
            text-decoration: underline;
        }
*/

        .pdfdownload {
            float: right;
            text-transform: none;
            border-radius: 5px;
            font-weight: 200;
            padding: 2px 5px;
            margin:  15px 0 20px;
        }
        .forms {
            text-transform: none;
            border-radius: 5px;
            font-weight: 200;
            padding: 2px 5px;
            margin:  15px 0 20px;
        }
        .mt25{
            margin-top: 25px;
        }

    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <!-- ======= Top Bar ======= -->
        <?php include 'includes/topnav.php'; ?>

    </div>
    <div class="clearfix"></div>
    

    <div class="site-section top-mar">
        <div class="visa-header-row">
            <div class="container mt100">
                <h3 class="text-center text-white">Payment Status</h3>
            </div>
        </div>
    </div>
    <?php
        foreach($res->result() as $r){
            $order_id = $r->order_id;
            $tracking_id = $r->tracking_id;
            $amount = $r->mer_amount;
            $currency = $r->currency;
            $card_name = $r->card_name;
            $payment_mode = $r->payment_mode;
            $order_status = $r->order_status;
        }
    ?>
    <div class="visa-info-wrapper">
      <div class="container">
            <div class="row" style="margin-bottom:30px;">
               <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="visa-fees-wrpa">
                        <h3>Summary</h3>
                        <div class="row">
                            <div class="col-md-4"><h4 class="flex"> Status</h4></div>
                            <div class="col-md-5"><h4 class="flex"> <?php echo ucfirst($_GET['status']); ?></h4></div>
                        </div>
                        <?php if(strtolower($order_status) == 'success'){ ?>
                        <div class="row">
                            <div class="col-md-4"><h4 class="flex"> Order ID</h4></div>
                            <div class="col-md-5"><h4 class="flex"> <?php echo $order_id; ?></h4></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><h4 class="flex"> Tracking ID</h4></div>
                            <div class="col-md-5"><h4 class="flex"> <?php echo $tracking_id; ?></h4></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><h4 class="flex"> Amount</h4></div>
                            <div class="col-md-5"><h4 class="flex"> <?php echo $amount; ?></h4></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><h4 class="flex"> Currency</h4></div>
                            <div class="col-md-5"><h4 class="flex"> <?php echo $currency; ?></h4></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><h4 class="flex"> Card Name</h4></div>
                            <div class="col-md-5"><h4 class="flex"> <?php echo $card_name; ?></h4></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><h4 class="flex"> Payment Mode</h4></div>
                            <div class="col-md-5"><h4 class="flex"> <?php echo $payment_mode; ?></h4></div>
                        </div>
                        <?php } ?>
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="flex"> <span></span></h4>
                            </div>

                            <div class="col-md-12">
                                <div style="border-bottom:solid 1px white;margin:5px 0px 10px 0px;"></div>
                            </div>
                            <div class="col-md-12">
                                <a href="<?php echo site_url('home'); ?>" class="pull-right">Go To Home ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

    <!-- Modal -->

    <?php include ('includes/footer.php'); ?>

    <script src="<?php echo base_url(); ?>assets/js/jquery-migrate-3.0.0.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.sticky.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.animateNumber.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.stellar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/aos.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    
    <script>
//        function callPay(){
//            
//        }
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>



    <?php include('logo_script.php') ?>

</body>

</html>
