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
                <h3 class="text-center text-white">Trip Details</h3>
            </div>
        </div>
    </div>
    
    <div class="visa-info-wrapper">
      <div class="container">
        <div class="pi-row pi-overview-row flex">
                
                <div class="pi-col">

                  <div class='input-group'>
                    <p>Name as in passport</p>
                    <h4 id="input_name"><?php echo $this->session->userdata['in']['name']; ?></h4>
                  </div>

                  <div class='input-group'>
                    <p>Your eMail </p>
                    <h4 id="input_email"><?php echo $this->session->userdata['in']['email']; ?></h4>
                  </div>

                  <div class='input-group'>
                    <p>Travel Date</p>
                    <h4 id="input_traveldate"><?php echo date('d-m-Y',strtotime($this->session->userdata['in']['traveldate'])); ?></h4>
                  </div>

                  <div class='input-group'>
                    <p>Visiting Country</p>
                    <h4 id="input_visitcountry"><?php echo $this->session->userdata['in']['visitcountry']; ?></h4>
                  </div>

                  <div class='input-group'>
                    <p>VFS Appointment Date</p>
                    <h4 id="input_vfsaptdate"><?php echo (($this->session->userdata['in']['vfsaptdate']!=""?date('d-m-Y',strtotime($this->session->userdata['in']['vfsaptdate'])):"")); ?></h4>
                  </div>

                  <div class='input-group'>
                    <p>Appointment Date</p>
                    <h4 id="input_appointmentdate"><?php echo date('d-m-Y',strtotime($this->session->userdata['in']['appointmentdate'])); ?></h4>
                  </div>

                </div>
                <!-- left -->

                <div class="pi-col">

                  <div class='input-group'>
                    <p>Phone Number</p>
                    <h4 id="input_mobile"><?php echo $this->session->userdata['in']['mobile']; ?></h4>
                  </div>

                  <div class='input-group'>
                    <p>City </p>
                    <h4 id="input_city"><?php echo $this->session->userdata['in']['city']; ?></h4>
                  </div>

                  <div class='input-group'>
                    <p>Return Date</p>
                    <h4 id="input_returndate"><?php echo date('d-m-Y',strtotime($this->session->userdata['in']['returndate'])); ?></h4>
                  </div>
                  
                  <?php $catary = array(2=>'Business',20=>'Tourist'); ?>

                  <div class='input-group'>
                    <p>Visit Category</p>
                    <h4 id="input_appointmenttime"><?php echo $catary[$this->session->userdata['in']['visitcategory']]; ?></h4>
                  </div>

                  <div class='input-group'>
                    <p>Appoinment Time</p>
                    <h4 id="input_appointmenttime"><?php echo $this->session->userdata['in']['appointmenttime']; ?></h4>
                  </div>

                  <div class='input-group'>
                    <p>No. of Applicants</p>
                    <h4>Adults : <span id="input_adults"><?php echo $this->session->userdata['in']['adults']; ?></span> / Children : <span id="input_children"><?php echo $this->session->userdata['in']['children']; ?></span></h4>
                  </div>

                </div>
                <!-- mid -->
                
                <?php
            
                    $vfsfee = 0;
                    foreach($vfeeinfo->result() as $vfeei){
                      $childfee = $vfeei->vs_fee;
                          if(!isset($session_data['in']['children'])){
                              if($vfeei->vs_fee_child != '')
                                  $childfee = $vfeei->vs_fee_child;
                          }
                          $adultfee = $vfeei->vs_fee;
                          if($vfeei->vs_vfs_fee != '')
                              $vfsfee = $vfeei->vs_vfs_fee;
                        
                          $uvsfee = $vfeei->vs_uvs_fee;
                          $sgst = $vfeei->vs_sgst;
                          $cgst = $vfeei->vs_cgst;
                    }
            ?>
                
                <div class="pi-col" style="width:28% !important">
<!--                <div class="viw-rht">-->
                                <div class="viw-rht-col">
                                    <div class="visa-fees-wrpa">
                                        <h3><?php echo $this->session->userdata['in']['visitcountry']; ?> - <?php echo $catary[$this->session->userdata['in']['visitcategory']]; ?></h3>
                                        
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h4 class="flex"> Fee</h4>
                                            </div>
                                            <div class="col-md-5">
                                                <h4 class="flex"> Amount</h4>
                                            </div>
<!--
                                            <div class="col-md-3">
                                                <h4 class="flex"> Applicant</h4>
                                            </div>
-->
                                            <div class="col-md-4">
                                                <h4 class="flex"> <span></span></h4>
                                            </div>
                                            
                                            <div class="col-md-3">
                                                <h4 class="flex"> VFS</h4>
                                            </div>
                                            <div class="col-md-5">
                                                <h4 class="flex"> <?php echo $adultfee; ?> * <?php echo $this->session->userdata['in']['adults'].' (A)'; ?></h4>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="flex"> &#8377;<span><?php echo $vfsat = $adultfee * $this->session->userdata['in']['adults']; ?></span></h4>
                                            </div>
                                            
                                            <?php if($this->session->userdata['in']['children'] != 0){ ?>
                                            <div class="col-md-3">
                                                <h4 class="flex"> </h4>
                                            </div>
                                            <div class="col-md-5">
                                                <h4 class="flex"> <?php echo $childfee; ?> * <?php echo $this->session->userdata['in']['children'].' (C)'; ?></h4>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="flex"> &#8377;<span><?php echo $vfsct = $childfee * $this->session->userdata['in']['children']; ?></span></h4>
                                            </div>
                                            <?php } else $vfsct = 0; ?>
                                            
                                            <div class="col-md-12">
                                                <div style="border-bottom:solid 1px white;margin:5px 0px 10px 0px;"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="flex"> UVS</h4>
                                            </div>
                                            <div class="col-md-5">
                                                <h4 class="flex"> <?php echo $uvsfee; ?> * <?php echo $this->session->userdata['in']['adults'] + $this->session->userdata['in']['children']; ?></h4>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="flex"> &#8377;<span><?php echo $uvsft = $uvsfee * ($this->session->userdata['in']['adults'] + $this->session->userdata['in']['children']); ?></span></h4>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="flex"> SGST</h4>
                                            </div>
                                            <div class="col-md-5">
                                                <h4 class="flex"> 9% </h4>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="flex"> &#8377;<span><?php echo $uvsst = $uvsft * .09; ?></span></h4>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="flex"> CGST</h4>
                                            </div>
                                            <div class="col-md-5">
                                                <h4 class="flex"> 9%</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="flex"> &#8377;<span><?php echo $uvsct = $uvsft * .09; ?></span></h4>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div style="border-bottom:solid 1px white;margin:5px 0px 10px 0px;"></div>
                                            </div>
                                            
                                            <div class="col-md-3">
                                                <h4 class="flex"> Total</h4>
                                            </div>
                                            <div class="col-md-5">
                                                <h4 class="flex"> </h4>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="flex"> &#8377;<span><?php echo $vfsat + $vfsct + $uvsft + $uvsct + $uvsst; ?></span></h4>
                                            </div>
                                            
<!--
                                        <h4 class="flex"> Visa Fee <span>2100.00</span><span>2100.00</span> </h4>
                                        <h4 class="flex"> SGST - CGST <span>18%</span><span>18%</span> </h4>
                                        <hr>
                                        <h4 class="flex vf-tot"> Total <span>2690.00</span> </h4>
-->
                                        </div>
                                        
                                        <?php
                                            date_default_timezone_set('Asia/Kolkata'); 
                                            $orderid = time();
                                            $this->session->userdata['in']['order_id'] = $orderid;
                                            $trackingid = 'new';
                                        ?>
                                        <form action="<?php echo base_url('NON_SEAMLESS_KIT/ccavRequestHandler.php'); ?>" id="formsub" method="post" onsubmit="updatevalues()">
                                            
                                            <input type="hidden" id="merchant_param4" name="merchant_param4" value="<?php echo $this->session->userdata['in']['vtype']; ?>" />
                                            <input type="hidden" id="order_id" name="order_id" value="<?php echo $orderid; ?>" />
                                            <input type="hidden" id="tracking_id" name="tracking_id" value="<?php echo $orderid; ?>" />
                                            <input type="hidden" id="trans_date" name="trans_date" value="<?php echo date('Y-m-d H:i:s',time()); ?>" />
                                            
                                            <input type="hidden" id="merchant_param13" name="merchant_param13" value="<?php echo $vfsat; ?>" />
                                            <input type="hidden" id="merchant_param14" name="merchant_param14" value="<?php echo $vfsct; ?>" />
                                            <input type="hidden" id="merchant_param15" name="merchant_param15" value="<?php echo $uvsft; ?>" />
                                            <input type="hidden" id="merchant_param16" name="merchant_param16" value="<?php echo $uvsct; ?>" />
                                            <input type="hidden" id="merchant_param17" name="merchant_param17" value="<?php echo $uvsst; ?>" />
                                            
                                            <input type="hidden" id="merchant_param2" name="merchant_param2" value="<?php echo $this->session->userdata['in']['vfsaptdate']; ?>" />
                                            
                                            <input type="hidden" id="currency" name="currency" value="INR"/>
                                            <input type="hidden" name="redirect_url" value="https://uvs.co.in/uvs_user_new/NON_SEAMLESS_KIT/ccavResponseHandler.php"/>
                                            <input type="hidden" name="cancel_url" value="https://uvs.co.in/uvs_user_new/NON_SEAMLESS_KIT/ccavResponseHandler.php"/>
                                            
                                            <input type="hidden" id="amount" name="amount" value="<?php echo $vfsat + $vfsct + $uvsft + $uvsct + $uvsst; ?>" />
                                            
                                            <input type="hidden" id="billing_name" name="billing_name" value="<?php echo $this->session->userdata['in']['name']; ?>" />
                                            <input type="hidden" id="billing_email" name="billing_email" value="<?php echo $this->session->userdata['in']['email']; ?>" />
                                            <input type="hidden" id="billing_tel" name="billing_tel" value="<?php echo $this->session->userdata['in']['mobile']; ?>" />
                                            <input type="hidden" id="merchant_param1" name="merchant_param1" value="<?php echo $this->session->userdata['in']['traveldate']; ?>" id="" />
                                            <input type="hidden" id="merchant_param3" name="merchant_param3" value="<?php echo $this->session->userdata['in']['appointmentdate']; ?>" />
                                            <input type="hidden" id="merchant_param5" name="merchant_param5" value="<?php echo $this->session->userdata['in']['adults']; ?>" />
                                            <input type="hidden" id="merchant_param6" name="merchant_param6" value="<?php echo $this->session->userdata['in']['children']; ?>" />
                                            
                                            <input type="hidden" id="merchant_param7" name="merchant_param7" value="<?php echo $this->session->userdata['in']['city']; ?>" />
                                            <input type="hidden" id="merchant_param8" name="merchant_param8" value="<?php echo $this->session->userdata['in']['returndate']; ?>" />
                                            <input type="hidden" id="merchant_param9" name="merchant_param9" value="<?php echo $this->session->userdata['in']['visitcountry']; ?>" />
                                            <input type="hidden" id="merchant_param10" name="merchant_param10" value="<?php echo $this->session->userdata['in']['visitcountrycode']; ?>" />
                                            <input type="hidden" id="merchant_param11" name="merchant_param11" value="<?php echo $catary[$this->session->userdata['in']['visitcategory']]; ?>" />
                                            <input type="hidden" id="merchant_param12" name="merchant_param12" value="<?php echo $this->session->userdata['in']['appointmenttime']; ?>" />
                                        
                                        
                                        <button type="submit">Apply For Visa</button>
                                        </form>
<!--                                        <button data-toggle="modal" data-target="#exampleModal">Apply For Visa</button>-->
                                    </div>
                                </div>
<!--                            </div>-->
                <!-- right -->
                </div>

                </div>
        </div>
      </div>

    <!-- Modal -->
<!--
    <div class="modal fade apply-visa-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apply Visa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="text" placeholder="Name">
                        <select>
                            <option>Gender</option>
                            <option>Female</option>
                            <option>Male</option>
                        </select>
                        <input type="text" placeholder="Country">
                        <div class="flex avm-rad">
                            <input type="radio">
                            <label>Text</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
-->

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
    <script type="text/javascript">
        
        function updatevalues(){
            $('#merchant_param4').val(<?php echo $this->session->userdata['in']['vtype']; ?>);
            $('#order_id').val(<?php echo $orderid; ?>);
            $('#tracking_id').val(<?php echo $orderid; ?>);
            $('#trans_date').val(<?php echo date('Y-m-d H:i:s',time()); ?>);
            $('#merchant_param13').val(<?php echo $vfsat; ?>);
            $('#merchant_param14').val(<?php echo $vfsct; ?>);
            $('#merchant_param15').val(<?php echo $uvsft; ?>);
            $('#merchant_param16').val(<?php echo $uvsct; ?>);
            $('#merchant_param17').val(<?php echo $uvsst; ?>);
            $('#merchant_param2').val(<?php echo $this->session->userdata['in']['vfsaptdate']; ?>);
            $('#currency').val('INR');
            $('#amount').val(<?php echo $vfsat + $vfsct + $uvsft + $uvsct + $uvsst; ?>);
            $('#billing_name').val(<?php echo $this->session->userdata['in']['name']; ?>);
            $('#billing_email').val(<?php echo $this->session->userdata['in']['email']; ?>);
            $('#billing_tel').val(<?php echo $this->session->userdata['in']['mobile']; ?>);
            $('#merchant_param1').val(<?php echo $this->session->userdata['in']['traveldate']; ?>);
            $('#merchant_param3').val(<?php echo $this->session->userdata['in']['appointmentdate']; ?>);
            $('#merchant_param5').val(<?php echo $this->session->userdata['in']['adults']; ?>);
            $('#merchant_param6').val(<?php echo $this->session->userdata['in']['children']; ?>);
            $('#merchant_param7').val(<?php echo $this->session->userdata['in']['city']; ?>);
            $('#merchant_param8').val(<?php echo $this->session->userdata['in']['returndate']; ?>);
            $('#merchant_param9').val(<?php echo $this->session->userdata['in']['visitcountry']; ?>);
            $('#merchant_param10').val(<?php echo $this->session->userdata['in']['visitcountrycode']; ?>);
            $('#merchant_param11').val(<?php echo $catary[$this->session->userdata['in']['visitcategory']]; ?>);
            $('#merchant_param12').val(<?php echo $this->session->userdata['in']['appointmenttime']; ?>);
            return true;
        }
        
        $('.s_step2').on('click',function(){
            if($('#name').val() == "" || $('#email').val() == "" || $('#traveldate').val() == "" || $('#city').val() == "" || $('#mobile').val() == "" || $('#returndate').val() == "" || $('#visitcountry').val() == ""){
                $('#visa_info_submit').trigger('click');
            }
            else{
                $('.step2').show();
                $('.step1').hide();
                $('.step3').hide();
            }
        })
        
        $('.s_step2p').on('click',function(){
            $('.step2').show();
            $('.step1').hide();
            $('.step3').hide();
        })
        
        $('.s_step1p').on('click',function(){
            $('.step1').show();
            $('.step2').hide();
            $('.step3').hide();
        })
        
        $('.s_step3').on('click',function(){
            if($('#appointmentdate').val() == ""){
                $('#visa_info_submit').trigger('click');
            }
            else{
                $('#input_name').html($('#name').val());
                $('#input_email').html($('#email').val());
                
                var tddate = $('#traveldate').val();
                var tdref = tddate.split('-');
                $('#input_traveldate').html(tdref[2]+'/'+tdref[1]+'/'+tdref[0]);
                
                var vfsdate = $('#vfsaptdate').val();
                if(vfsdate != ''){
                    var vfsref = vfsdate.split('-');
                    $('#input_vfsaptdate').html(tdref[2]+'/'+tdref[1]+'/'+tdref[0]);
                }
                else{
                    $('#input_vfsaptdate').html('NA');
                }
                $('#input_city').html($('#city').val());
                $('#input_applicants').html($('#applicants').val());
                $('#input_mobile').html($('#mobile').val());
                
                var rddate = $('#returndate').val();
                var rdref = rddate.split('-');
                $('#input_returndate').html(rdref[2]+'/'+rdref[1]+'/'+rdref[0]);
                
                $('#input_visitcountry').html($('#visitcountry').val());
                $('#p_visitcountry').html($('#visitcountry').val());
                $('#input_adults').html($('#adults').val());
                $('#input_children').html($('#children').val());
                
                var addate = $('#appointmentdate').val();
                var adref = addate.split('-');
                $('#input_appointmentdate').html(adref[2]+'/'+adref[1]+'/'+adref[0]);
                
                var appointmenttime = $("input[name='appointmenttime']:checked").val();
                $('#input_appointmenttime').html(appointmenttime);
                
                
                $('#in_name').val($('#name').val());
                $('#in_email').val($('#email').val());
                $('#in_traveldate').val($('#traveldate').val());
                $('#in_vfsaptdate').val($('#vfsaptdate').val());
                $('#in_city').val($('#city').val());
                $('#in_applicants').val($('#applicants').val());
                $('#in_mobile').val($('#mobile').val());
                $('#in_returndate').val($('#returndate').val());
                $('#in_visitcountry').val($('#visitcountry').val());
                $('#in_adults').val($('#adults').val());
                $('#in_children').val($('#children').val());
                $('#in_appointmentdate').val($('#appointmentdate').val());
                $('#in_appointmenttime').html(appointmenttime);
                
                $('.step3').show();
                $('.step1').hide();
                $('.step2').hide();
            }
        })
        
        $('#show_search').on('click',function(){
            $('.modify-search').show();
            $('.searchinfo').hide();
        })
        
        $('#inputCountry').on('change', function() {
            $.ajax({
                url: '<?php echo base_url('get_cat'); ?>',
                data: {
                    cid: this.value
                },
                type: 'POST',
                success: function(data) {
                    var pdata = JSON.parse(data);
                    var html = '<option value="">Select Visa Type</option>';
                    $.each(pdata, function(k, v) {
                        html += '<option value="' + v.id + '">' + v.category + '</option>';
                    });
                    $('#inputCategory').html(html);
                },
                error: function() {
                    alert('Something went wrong. Request failed.');
                }
            })
        })
        
        (function($) {
            $.fn.countTo = function(options) {
                options = options || {};

                return $(this).each(function() {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof(settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof(settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0, // the number the element should start at
                to: 0, // the number the element should end at
                speed: 1000, // how long it should take to count between the target numbers
                refreshInterval: 100, // how often the element should be updated
                decimals: 0, // the number of decimal places to show
                formatter: formatter, // handler for formatting the value before rendering
                onUpdate: null, // callback method for every time the element is updated
                onComplete: null // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function(value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });

    </script>

    <script type="text/javascript">
        
        $('#traveldate').on('change',function(){
            var tr = $('#traveldate').val();
            var trref = tr.split('-');
            var dref = parseInt(trref[2])+1;
            dref = dref+"";
            if(dref.length == 1)
                dref = "0"+dref;
            var aptmax = trref[0]+'-'+trref[1]+'-'+dref;
            $('#appointmentdate').attr('max',aptmax);
        })
        
        $(document).ready(function() {
            
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });

    </script>

    <script>
        // If user clicks anywhere outside of the modal, Modal will close

        var modal = document.getElementById('modal-wrapper,modal-wrapper1');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

    </script>

    <script>
        // tabbed content
        // http://www.entheosweb.com/tutorials/css/tabs.asp
        $(".tab_content").hide();
        $(".tab_content:first").show();

        /* if in tab mode */
        $("ul.tabs li").click(function() {

            $(".tab_content").hide();
            var activeTab = $(this).attr("rel");
            $("#" + activeTab).fadeIn();

            $("ul.tabs li").removeClass("active");
            $(this).addClass("active");

            $(".tab_drawer_heading").removeClass("d_active");
            $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");

        });
        /* if in drawer mode */
        $(".tab_drawer_heading").click(function() {

            $(".tab_content").hide();
            var d_activeTab = $(this).attr("rel");
            $("#" + d_activeTab).fadeIn();

            $(".tab_drawer_heading").removeClass("d_active");
            $(this).addClass("d_active");

            $("ul.tabs li").removeClass("active");
            $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
        });


        /* Extra class "tab_last" 
           to add border to right side
           of last tab */
        $('ul.tabs li').last().addClass("tab_last");
        $(".select").chosen();
    </script>

</body>

</html>
