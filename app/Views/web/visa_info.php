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
    <title>UVS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include('includes/meta.php'); ?>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/web_assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/web_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/web_assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/web_assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/web_assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/web_assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/web_assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/web_assets/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/web_assets/css/style.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>public/web_assets/js/modernizr.custom.86080.js"></script>
    <script src="<?php echo base_url(); ?>public/web_assets/js/jquery-3.3.1.min.js"></script>
    <style>
        .mt100 {
            margin-top: 100px;
        }

        .vheading,
        .vheading span {
            color: #0d79b9 !important;
        }
        
        .step2,.step3{
            display: none;
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
        
        
        @media screen and (min-width: 700px) {
            #inputCountrym{
                display: none;
            }
        }
        @media screen and (max-width: 699px) {
            #inputCountry{
                display: none;
            }
            html, body {
              overflow-x: hidden;
            }
            body {
              position: relative
            }
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

    <?php
//    print_r($summaryinfo); exit;
    $vfinfo = new StdClass();
    $vfinfo->vs_processing = 'NA';
    $vfinfo->vs_processing_base = '';
    $vfinfo->vs_stay = 'NA';
    $vfinfo->vs_stay_base = '';
    $vfinfo->vs_validity = 'NA';
    $vfinfo->vs_validity_base = '';
    $vfinfo->vs_entry = 'NA';
    if(count($visa_fee_info) > 0){
    foreach($visa_fee_info as $vfinfoi){
        if($vfinfoi->vs_type == "normal")
            $vfinfo = $vfinfoi;
    }}
    foreach($countrysummary as $sinfo){
        $overview = $sinfo->ci_overview;
        $language = $sinfo->ci_language;
        $currency = $sinfo->ci_currency;
        $capital = $sinfo->ci_capital;
        $attractionsAry = explode('^',$sinfo->ci_attractions);
        $rcountrysvg = $sinfo->c_code;
        $rcountry = $sinfo->country;
//        $rcategory = $sinfo->category;
    ?>

    <div class="site-section top-mar">
        <div class="visa-header-row">
            <div class="container mt100">
                <h3 class="text-center text-white">Visa Information</h3>
                <h5 class="text-center text-white">Trip Details</h5>
                <ul class="flex searchinfo">
                    <li> <img src="<?php echo base_url(); ?>public/web_assets/images/img/earth.svg"> <?php echo $sinfo->country; ?> </li>
                    <li> <img src="<?php echo base_url(); ?>public/web_assets/images/img/suitcases.svg"> <?php echo date('d M Y',strtotime($_GET['travel_date'])) ?> </li>
                    <li> <img src="<?php echo base_url(); ?>public/web_assets/images/img/passport.svg"> <?php echo $catname; ?> </li>
                    <li> <img src="<?php echo base_url(); ?>public/web_assets/images/img/city.svg"> <?php echo $branchname; ?> </li>
                    <li> <button id="show_search">Modify Search</button> </li>
                </ul>
                <form action="<?php echo base_url('visa_info'); ?>" method="get">
                <ul class="flex modify-search" style="display:none;">
                  <li>
                    <select required name="countryID" title="Country" id="inputCountrym" class="form-control" Placeholder="Country">
<!--                      <option>Country</option> -->
                      <?php
                            foreach ($countryinfo as $ci) {
                              echo "<option value='".$ci->cid."'>".$ci->country."</option>";
                            }
                        ?>
                    </select>
                    <select required name="countryID" title="Country" id="inputCountry" class="select" Placeholder="Country">
                    <!--  <option>Country</option> -->
                      <?php
                            foreach ($countryinfo as $ci) {
                              echo "<option value='".$ci->cid."'>".$ci->country."</option>";
                            }
                        ?>
                    </select>
                    <span><img src="<?php echo base_url(); ?>public/web_assets/images/img/earth-dark.svg"></span>
                  </li>
                  <li> <input required type='date' name="travel_date" value="<?php echo $_GET['travel_date']; ?>" class="form-control" id='datetimepicker4' Placeholder="Date" />
                  <span><img src="<?php echo base_url(); ?>public/web_assets/images/img/suitcases-dark.svg"></span>
                   </li>
                  <li> 
                    <select required title="Visa Type" name="categoryID" id="inputCategory" class="form-control" Placeholder="Visa Type">
                      <option>Visa Type</option>
                      <?php
                        foreach($catlist as $catl){
                            echo '<option value="'.$catl->id.'">'.$catl->category.'</option>';
                        }
                        ?>
                    </select>
                    <span><img src="<?php echo base_url(); ?>public/web_assets/images/img/passport-dark.svg"></span>
                  </li>
                  <li>
                    <select required title="City" name="branchid" id="branchid" class="form-control" Placeholder="Location">
                      <option>Location</option>
                      <option value="1">Tamil Nadu</option>
                        <option value="2">Karnataka</option>
                       <!-- <option value="3">Delhi</option>
                        <option value="4">Mumbai</option> -->
                        <option value="5">Andhra Pradesh and Telengana</option>
                        <option value="5">Kerala</option>
                        <option value="5">Puduchery</option>
                    </select>
                    <span><img src="<?php echo base_url(); ?>public/web_assets/images/img/city-dark.svg"></span>
                  </li>
                    <script>
                        $('#inputCountry').val(<?php echo $sinfo->ci_c_id; ?>);
                        $('#inputCountrym').val(<?php echo $sinfo->ci_c_id; ?>);
                        $('#inputCategory').val(<?php echo $_GET['categoryID']; ?>);
                        $('#branchid').val(<?php echo $_GET['branchid']; ?>);
                    </script>
                 <li> <button type="submit">Submit</button> </li>
                </ul>
                </form>
            </div>
        </div>
    </div>

    <div class="process-entry">
        <div class="container">
            <div class="pe-row flex">
                <div class="pe-col">
                    <span class="pe-icon"> <img src="<?php echo base_url(); ?>public/web_assets/images/img/processing-time.svg"> </span>
                    <h3>Processing Time</h3>
                    <p>(working days)</p>
                    <h4><?php echo $vfinfo->vs_processing.' '.$vfinfo->vs_processing_base; ?></h4>
                </div>
                <!--  -->
                <div class="pe-col">
                    <span class="pe-icon"> <img src="<?php echo base_url(); ?>public/web_assets/images/img/stay-period.svg"> </span>
                    <h3>Stay Period</h3>
                    <p>(continous days)</p>
                    <h4><?php echo $vfinfo->vs_stay.' '.$vfinfo->vs_stay_base; ?></h4>
                </div>
                <!--  -->
                <div class="pe-col">
                    <span class="pe-icon"> <img src="<?php echo base_url(); ?>public/web_assets/images/img/validity.svg"> </span>
                    <h3>Validity</h3>
                    <h4><?php echo $vfinfo->vs_validity.' '.$vfinfo->vs_validity_base; ?></h4>
                </div>
                <!--  -->
                <div class="pe-col">
                    <span class="pe-icon"> <img src="<?php echo base_url(); ?>public/web_assets/images/img/entry.svg"> </span>
                    <h3>Type of Entry</h3>
                    <h4><?php echo $vfinfo->vs_entry; ?></h4>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <?php
     } ?>
    <div class="visa-info-wrapper">
      <div class="container">
        <div class="flex viw-row">
          <div class="viw-left flex">
            <ul class="tabs">
              <h3>Visa Info</h3>
              <li class="active" rel="tab1">Country Info</li>
              <li rel="tab2">Visa Info</li>
              <li rel="tab6">Visa Fees</li>
<!--              <li rel="tab3">Embassy Info</li>-->
              <li rel="tab4">Visa Forms</li>
<!--              <li rel="tab5">Understand Visa</li>-->
              
            </ul>
            <div class="tab_container">
             
            <h3 class="d_active tab_drawer_heading" rel="tab1">Country Info</h3>
              <div id="tab1" class="tab_content">
                <div class="tab-header">
                  <h2 class="vheading">Country Info</h2>
                </div>

                <h2 class="title-country flex"> <img src="<?php echo base_url('public/web_assets/flags/'.strtolower($rcountrysvg).'.svg'); ?>"> <?php echo $rcountry; ?> </h2>

                <div class="cntry-inf">

                  <div class="flex ctrifo-row">

                    <div class="ctrifo-col flex">
                      <div class="ctrifo-img"> <img src="<?php echo base_url(); ?>public/web_assets/images/img/capital.svg" /> </div>
                      <div class="ctrifo-cnt">
                        <h4>Capital</h4>
                        <p><?php echo $capital; ?></p>
                      </div>
                    </div>
                    <!-- col -->

                    <div class="ctrifo-col flex">
                      <div class="ctrifo-img"> <img src="<?php echo base_url(); ?>public/web_assets/images/img/bank.svg" /> </div>
                      <div class="ctrifo-cnt">
                        <h4>Currency</h4>
                        <p><?php echo $currency; ?></p>
                      </div>
                    </div>
                    <!-- col -->

                  </div>

                  <div class="ctrifo-col flex">
                    <div class="ctrifo-img"> <img src="<?php echo base_url(); ?>public/web_assets/images/img/list-searching-variant.svg" /> </div>
                    <div class="ctrifo-cnt">
                      <h4>Overview</h4>
                      <p><?php echo $overview; ?></p>
                    </div>
                  </div>
                  <!-- col -->

                </div>

                <div class="attractions">

                  <h3>Top Attractions</h3>

                  <div class="vic-row">
                   <?php
                      foreach($attractionsAry as $attrA){
                        echo '<p>'.$attrA.'</p>';
                      }
                      ?>
                  </div>

                </div>

              </div>
              <!-- #tab1 -->
              
              <h3 class="tab_drawer_heading" rel="tab2">Visa Info</h3>
                <div id="tab2" class="tab_content">
<!--                            <div class="viw-col-l">-->
                    <div class="tab-header">
                       <div class="row">
                           <div class="col-md-6 col-sm-12">
                                <h2 class="vheading"><?php echo $catname.' Requirement';  ?></h2>
                           </div>
                           <div class="col-md-6">
                               <a target="_blank" title="Download Checklist" href="<?php echo base_url('public/web_assets/downloads/requirements/'.strtolower(str_replace(' ','-',$rcountry)).'-'.strtolower($catname).'-requirement.pdf'); ?>" class="pdfdownload"><i class="icon-file-pdf-o"></i>&nbsp; <span>Download Checklist</span></a>
                           </div>
                        </div>
                        <!--                  <p>They also provide insights about the profession’s most colorful personalities and powerful institutions, as well as original commentary on breaking legal developments.The resources managed in logistics can include physical items such as food, materials, animals, equipment, and liquids.</p>-->
                    </div>
                    <div class="vi-content">
                                    <?php
                  $h_ary = array();
                  foreach($visainfo as $vinfo){
                     if(!in_array(trim($vinfo->vhm_header),$h_ary))
                     {
                         if(!empty($h_ary)){
                             echo '</div>';
                         }
                        $h_ary[] = trim($vinfo->vhm_header);
                    ?>

                                    <h3 class="flex">
                                        <span class="vi-ico">
                                            <img src="<?php echo base_url('public/web_assets/images/vicons_n/'.$vinfo->vhm_icon); ?>" />
                                        </span>
                                        <span class="vinfo-tit"><?php echo $vinfo->vhm_header; ?></span>
                                    </h3>
                                    <div class="vic-row">
                                       <p><?php echo $vinfo->vc_requirement; ?></p>
                                        <?php }
                      else { 
                    echo '<p>'.$vinfo->vc_requirement.'</p>';
                    } ?>

                                        <?php } ?>
                                    </div>
                                </div>
<!--                            </div>-->
                            <!-- left -->

<!--
                            <div class="viw-rht">
                                <div class="viw-rht-col">
                                    <h2>Visa Fees</h2>
                                    <div class="visa-fees-wrpa">
                                        <h3>Russia</h3>
                                        <h4 class="flex"> Visa Fee <span>2100.00</span> </h4>
                                        <h4 class="flex"> SGST - CGST <span>18%</span> </h4>
                                        <hr>
                                        <h4 class="flex vf-tot"> Total <span>2690.00</span> </h4>
                                        <button data-toggle="modal" data-target="#exampleModal">Apply For Visa</button>
                                    </div>
                                </div>
                            </div>
-->
                            <!-- rht -->
                        </div>
              <!-- #tab2 -->
              
              <?php if(count($vf_info) > 0){ ?>
              <h3 class="tab_drawer_heading" rel="tab4">Visa Forms</h3>
              <div id="tab4" class="tab_content">
                   <div class="tab-header">
                        <h2 class="vheading">Visa Forms</h2>
                  </div>
                  <div>
                     <?php
                      foreach($vf_info as $vfi){ ?>
                        <a target="_blank" title="<?php echo $vfi->vf_label; ?>" href="<?php echo base_url('public/web_assets/downloads/forms/'.$vfi->vf_name); ?>" class="forms"><i class="icon-file-pdf-o"></i>&nbsp; <span><?php echo $vfi->vf_label; ?></span></a><br/>
                    <?php      
                      }
                      ?>
                  </div>
              </div>
              <?php } ?>
              <!-- #tab4 --> 
              
              <?php /*
              <h3 class="tab_drawer_heading" rel="tab3">Embassy Info</h3>
              <div id="tab3" class="tab_content">
                <h2>Embassy Info</h2>
              </div>
              <!-- #tab3 -->
              
              <h3 class="tab_drawer_heading" rel="tab5">Understand Visa</h3>
              <div id="tab5" class="tab_content">
                <h2>Understand Visa</h2>
              </div>
              <!-- #tab5 --> 
              */ ?>
              <h3 class="tab_drawer_heading" rel="tab6">Visa Fees</h3>
              
              <div id="tab6" class="tab_content">
                
                

                <div class="tab-header">
                  <h2 class="vheading">Visa Fees</h2>
                </div>
                  <div class="col-md-12" style="margin-top:5px;">
                              <?php
                              $vs_user_text = '';
                              foreach($visa_fee_info as $vstype_user){
                                  if($vstype_user->vs_type == "normal")
                                      $vs_user_text .= ' / Normal - INR Equivalent of <b>' .$vstype_user->vs_fee_currency.' '.$vstype_user->vs_fee.'</b>';
                                  if($vstype_user->vs_type == "urgent")
                                      $vs_user_text .= ' / Urgent - INR Equivalent of <b>'.$vstype_user->vs_fee_currencyy.' '.$vstype_user->vs_fee.'</b>';
                              }
			      echo '<p>'.substr($vs_user_text,3);
			      if ($sinfo->ci_c_id == 189) echo ' (INR 1800) </p>';
                              if ($sinfo->ci_c_id == 189) echo 'Service Fees INR 650 only';
                              ?></div>
               <!-- <div class="step1">
                <div class="rw-row flex">

                  <div class="register-step flex">
      
                    <div class="rs-col active flex">
                      <span class="flex">1</span>
                    </div>
                    <div class="rs-col flex">
                      <span class="flex">2</span>
                    </div>
                    <div class="rs-col flex">
                      <span class="flex">3</span>
                    </div>
      
                  </div>
      
                </div> -->
                <!-- row -->
                
           <!--     <form action="<?php echo base_url('visa_info_summary') ?>" return="formvalidate()" method="post" novalidate>

                <h2 class="title-country flex"> Personal Information </h2>

                <div class="flex pi-row">

                  <div class="pi-col">

                    <div class='input-group'>
                      <p>Name as in passport <sup>*</sup></p>
                      <input required type='text' value="" id="name" class="form-control" Placeholder="" />
                    </div>

                    <div class='input-group mt25'>
                      <p>Your eMail <sup>*</sup></p>
                      <input required type='text' id="email" value="" class="form-control" Placeholder="" />
                    </div>

                    <div class='input-group mt25'>
                      <p>Travel Date <sup>*</sup></p>
                      <input required type='date' value="" class="form-control" min="<?php echo date('Y-m-d',strtotime("+1 day")); ?>" id='traveldate' Placeholder="Date" />
                    </div>
                    
                    <div class='input-group mt25'>
                      <p>VSF Appointment Date (Optional : if taken)</p>
                      <input type='date' class="form-control" value="" min="<?php echo date('Y-m-d',strtotime("+1 day")); ?>" id='vfsaptdate' Placeholder="Date" />
                    </div>
                    

                  </div> -->
                  <!-- left -->

                 <!-- <div class="pi-col">

                    <div class='input-group'>
                      <p>Phone Number <sup>*</sup></p>
                      <input required type='text' id="mobile" value="" class="form-control" Placeholder="" />
                    </div>

                    <div class='input-group mt25'>
                      <p>City <sup>*</sup></p>
                      <input required type='text' id="city" value="" class="form-control" Placeholder="" />
                    </div>
                    
                    <div class='input-group mt25'>
                      <p>Return Date <sup>*</sup></p>
                      <input required type='date' class="form-control"  value="" min="<?php echo date('Y-m-d',strtotime("+1 day")); ?>" id='returndate' Placeholder="Date" />
                    </div>
                    
                    <div class='input-group mt25'>
                     <div class="col-md-12">
                      <div class="row">
                         <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                              <p>Adults</p>
                              <select id="adults" class="row form-control col-md-12">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                              </select>
                          </div>
                          <div class="col-md-6">
                              <p>Children</p>
                              <select id="children" class="row form-control col-md-12">
                                  <option>0</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                              </select>
                          </div>
                          </div>
                          </div>
                          <div class="col-md-5">
                              <p>Normal / Urgent</p>
                              <select id="vtype" class="row form-control col-md-12">
                                 <?php
                                  foreach($vs_type_info as $vstype){ ?>
                                  <option value="<?php echo ucfirst($vstype->vs_type); ?>"><?php echo ucfirst($vstype->vs_type); ?></option>
                                  <?php } ?>
                              </select>
                          </div> 
                          <div class="col-md-12" style="margin-top:5px;">
                              <?php
                              $vs_user_text = '';
                              foreach($visa_fee_info as $vstype_user){
                                  if($vstype_user->vs_type == "normal")
                                      $vs_user_text .= ' / Normal - INR Equivalent of <b>' .$vstype_user->vs_fee_currency.' '.$vstype_user->vs_fee.'</b>';
                                  if($vstype_user->vs_type == "urgent")
                                      $vs_user_text .= ' / Urgent - INR Equivalent of <b>'.$vstype_user->vs_fee_currencyy.' '.$vstype_user->vs_fee.'</b>';
                        }
			      echo '<p>'.substr($vs_user_text,3);
			     
                              if ($sinfo->ci_c_id == 189) echo 'Service Fees INR 650 only.';
                              ?></div>
                      </div>
                      </div>
                    </div>
                    <div class='input-group mt25' style="display:none">
                      <p>Visiting Country <sup>*</sup></p>
                      <input required readonly type='text' value="<?php echo $rcountry; ?>" class="form-control" id="visitcountry" Placeholder="" />
                    </div>

                  </div> -->
                    
                    
                    
                  <!-- left -->

                </div>
                
                <?php
//                    echo $vfinfo->vs_vsf_fee_currency.' '.$vfinfo->vs_fee;
                ?>
<!--
                <div class="viw-rht">
                    <div class="viw-rht-col">
                      <h2>Visa Fees</h2>
                      <div class="visa-fees-wrpa">
                        <h3 id="p_visitcountry">Russia</h3>
                        <h4 class="flex"> Visa Fee <span>2100.00</span> </h4>
                        <h4 class="flex"> SGST - CGST <span>18%</span> </h4>
                        <hr>
                        <h4 class="flex vf-tot"> Total <span>2690.00</span> </h4>
                        <button data-toggle="modal" data-target="#exampleModal">Apply For Visa</button>
                      </div>
                    </div>
                  </div>


                <div class="flex next-btn">
                  <button class="s_step2" type="button">Next</button>
                </div> -->
                </div>
                
                <div class="step2">
                <div class="rw-row flex">

                  <div class="register-step flex">
      
                    <div class="rs-col completed flex">
                      <span class="flex">1</span>
                    </div>
                    <div class="rs-col active flex">
                      <span class="flex">2</span>
                    </div>
                    <div class="rs-col flex">
                      <span class="flex">3</span>
                    </div>
      
                  </div>
      
                </div>
                <!-- row -->

                <h2 class="title-country flex"> Schedule Appointment </h2>

                <div class="flex pi-row">

                  <div class="pi-col">

                    <div class='input-group'>
                      <p>Select Date <sup>*</sup></p>
                      <input required type='date' value="" class="form-control" id='appointmentdate' Placeholder="Date" />
                    </div>

                  </div>

                  <div class='input-group aptclass'>
                    <p>Select Time <sup>*</sup></p>
                    <div class="flex sel-time">
                      <div class="sel-time-col">
                        <input type="radio" id="t1" value="09:00 AM to 10:00 AM" name="appointmenttime">
                        <label for="t1">09:00 AM to 10:00 AM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t2" value="10:00 AM to 11:00 AM" name="appointmenttime">
                        <label for="t2">10:00 AM to 11:00 AM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t3" value="11:00 AM to 12:00 PM" name="appointmenttime">
                        <label for="t3">11:00 AM to 12:00 PM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t4" value="12:00 PM to 01:00 PM" name="appointmenttime">
                        <label for="t4">12:00 PM to 01:00 PM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t5" value="01:00 PM to 02:00 PM" name="appointmenttime">
                        <label for="t5">01:00 PM to 02:00 PM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t6" value="02:00 PM to 03:00 PM" name="appointmenttime">
                        <label for="t6">02:00 PM to 03:00 PM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t7" value="03:00 PM to 04:00 PM" name="appointmenttime">
                        <label for="t7">03:00 PM to 04:00 PM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t8" value="04:00 PM to 05:00 PM" name="appointmenttime">
                        <label for="t8">04:00 PM to 05:00 PM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t9" value="05:00 PM to 06:00 PM" name="appointmenttime">
                        <label for="t9">05:00 PM to 06:00 PM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t10" value="06:00 PM to 07:00 PM" name="appointmenttime">
                        <label for="t10">06:00 PM to 07:00 PM</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="flex next-btn">
                  <button class="prev s_step1p" type="button">Previous</button>
                  <button class="s_step3" type="button">Next</button>
                </div>
                </div>
                <div class="step3">
                <div class="rw-row flex">

                  <div class="register-step flex">
      
                    <div class="rs-col flex">
                      <span class="flex">1</span>
                    </div>
                    <div class="rs-col flex">
                      <span class="flex">2</span>
                    </div>
                    <div class="rs-col flex active">
                      <span class="flex">3</span>
                    </div>
      
                  </div>
      
                </div>
                <!-- row -->
                
                <h2 class="title-country flex"> Overview </h2>

                <div class="pi-row pi-overview-row flex">
                
                <div class="pi-col">

                  <div class='input-group'>
                    <p>Name as in passport</p>
                    <h4 id="input_name"></h4>
                  </div>

                  <div class='input-group'>
                    <p>Your eMail </p>
                    <h4 id="input_email"></h4>
                  </div>

                  <div class='input-group'>
                    <p>Travel Date</p>
                    <h4 id="input_traveldate"></h4>
                  </div>

                  <div class='input-group'>
                    <p>VFS Appointment Date</p>
                    <h4 id="input_vfsaptdate"></h4>
                  </div>

                  <div class='input-group'>
                    <p>Appointment Date</p>
                    <h4 id="input_appointmentdate"></h4>
                  </div>

                  <div class='input-group'>
                    <p>No. of Applicants</p>
                    <h4>Adults : <span id="input_adults"></span> / Children : <span id="input_children"></span></h4>
                  </div>

                </div>
                <!-- left -->

                <div class="pi-col">

                  <div class='input-group'>
                    <p>Phone Number</p>
                    <h4 id="input_mobile"></h4>
                  </div>

                  <div class='input-group'>
                    <p>City </p>
                    <h4 id="input_city">Bangalore</h4>
                  </div>

                  <div class='input-group'>
                    <p>Return Date</p>
                    <h4 id="input_returndate"></h4>
                  </div>

                  <div class='input-group'>
                    <p>Visiting Country</p>
                    <h4 id="input_visitcountry"></h4>
                  </div>

                  <div class='input-group'>
                    <p>Appoinment Time</p>
                    <h4 id="input_appointmenttime"></h4>
                  </div>

                  <div class='input-group'>
                    <p>Type</p>
                    <h4 id="input_vtype"></h4>
                  </div>

                </div>
                <!-- left -->

                </div>

               
               
                <input type="hidden" name="in[name]" id="in_name" />
                <input type="hidden" name="in[email]" id="in_email" />
                <input type="hidden" name="in[traveldate]" id="in_traveldate" />
                <input type="hidden" name="in[vfsaptdate]" id="in_vfsaptdate" />
                <input type="hidden" name="in[appointmentdate]" id="in_appointmentdate" />
                <input type="hidden" name="in[vtype]" id="in_vtype" />
                <input type="hidden" name="in[adults]" id="in_adults" />
                <input type="hidden" name="in[children]" id="in_children" />
                <input type="hidden" name="in[mobile]" id="in_mobile" />
                <input type="hidden" name="in[city]" id="in_city" />
                <input type="hidden" name="in[returndate]" id="in_returndate" />
                <input type="hidden" name="in[visitcountry]" id="in_visitcountry" />
                <input type="hidden" name="in[visitcountrycode]" value="<?php echo $_GET['countryID'] ?>" />
                <input type="hidden" name="in[visitcategory]" value="<?php echo $_GET['categoryID'] ?>" />
                <input type="hidden" name="in[appointmenttime]" id="in_appointmenttime" />
<!--                <input type="submit" style="display:none" id="visa_info_summary_submit" />-->
                
                <div class="flex next-btn">
                  <button class="prev s_step2p" type="button">Previous</button>
                  <button type="submit" id="visa_info_submit">Next</button>
                </div>
                
                </form>
                
                </div>
                
            
              </div>
              
              <?php /*
              <div id="tab6" class="tab_content">
                
                

                <div class="tab-header">
                  <h2 class="vheading">Visa Fees</h2>
                </div>
                <div class="step1">
                <div class="rw-row flex">

                  <div class="register-step flex">
      
                    <div class="rs-col active flex">
                      <span class="flex">1</span>
                    </div>
                    <div class="rs-col flex">
                      <span class="flex">2</span>
                    </div>
                    <div class="rs-col flex">
                      <span class="flex">3</span>
                    </div>
      
                  </div>
      
                </div>
                <!-- row -->
                
                <form action="<?php echo base_url('uvs/visa_info_summary') ?>" method="post">

                <h2 class="title-country flex"> Personal Information </h2>

                <div class="flex pi-row">

                  <div class="pi-col">

                    <div class='input-group'>
                      <p>Name as in passport <sup>*</sup></p>
                      <input required type='text' value="" id="name" class="form-control" Placeholder="" />
                    </div>

                    <div class='input-group mt25'>
                      <p>Your eMail <sup>*</sup></p>
                      <input required type='text' id="email" value="" class="form-control" Placeholder="" />
                    </div>

                    <div class='input-group mt25'>
                      <p>Travel Date <sup>*</sup></p>
                      <input required type='date' value="<?php echo $_GET['travel_date']; ?>" class="form-control" min="<?php echo date('Y-m-d',strtotime("+1 day")); ?>" id='traveldate' Placeholder="Date" />
                    </div>
                    
                    <div class='input-group mt25'>
                      <p>VSF Appointment Date (Optional : if taken)</p>
                      <input type='date' class="form-control" min="<?php echo date('Y-m-d',strtotime("+1 day")); ?>" id='vfsaptdate' Placeholder="Date" />
                    </div>
                    

                  </div>
                  <!-- left -->

                  <div class="pi-col">

                    <div class='input-group'>
                      <p>Phone Number <sup>*</sup></p>
                      <input required type='text' id="mobile" value="" class="form-control" Placeholder="" />
                    </div>

                    <div class='input-group mt25'>
                      <p>City <sup>*</sup></p>
                      <input required type='text' id="city" value="" class="form-control" Placeholder="" />
                    </div>
                    
                    <div class='input-group mt25'>
                      <p>Return Date <sup>*</sup></p>
                      <input required type='date' class="form-control"  min="<?php echo date('Y-m-d',strtotime("+1 day")); ?>" id='returndate' Placeholder="Date" />
                    </div>
                    
                    <div class='input-group mt25'>
                     <div class="col-md-12">
                      <div class="row">
                         <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                              <p>Adults</p>
                              <select id="adults" class="row form-control col-md-12">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                              </select>
                          </div>
                          <div class="col-md-6">
                              <p>Children</p>
                              <select id="children" class="row form-control col-md-12">
                                  <option>0</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                              </select>
                          </div>
                          </div>
                          </div>
                          <div class="col-md-5">
                              <p>Normal / Urgent</p>
                              <select id="vtype" class="row form-control col-md-12">
                                  <option value="Normal">Normal</option>
                                  <option value="Urgent">Urgent</option>
                              </select>
                          </div>
                          <div class="col-md-12" style="margin-top:5px;">
                              <?php
                              $vs_user_text = '';
                              foreach($visa_fee_info as $vstype_user){
                                  if($vstype_user->vs_type == "normal")
                                      $vs_user_text .= ' / Normal - INR <b>'.$vstype_user->vs_fee.'</b>';
                                  if($vstype_user->vs_type == "urgent")
                                      $vs_user_text .= ' / Urgent - INR <b>'.$vstype_user->vs_fee.'</b>';
                              }
                              echo '<p>'.substr($vs_user_text,3).'</p>';
                              ?></div>
                      </div>
                      </div>
                    </div>
                    <div class='input-group mt25' style="display:none">
                      <p>Visiting Country <sup>*</sup></p>
                      <input required readonly type='text' value="<?php echo $rcountry; ?>" class="form-control" id="visitcountry" Placeholder="" />
                    </div>

                  </div>
                  <!-- left -->

                </div>
                
                <?php
//                    echo $vfinfo->vs_vsf_fee_currency.' '.$vfinfo->vs_fee;
                ?>
<!--
                <div class="viw-rht">
                    <div class="viw-rht-col">
                      <h2>Visa Fees</h2>
                      <div class="visa-fees-wrpa">
                        <h3 id="p_visitcountry">Russia</h3>
                        <h4 class="flex"> Visa Fee <span>2100.00</span> </h4>
                        <h4 class="flex"> SGST - CGST <span>18%</span> </h4>
                        <hr>
                        <h4 class="flex vf-tot"> Total <span>2690.00</span> </h4>
                        <button data-toggle="modal" data-target="#exampleModal">Apply For Visa</button>
                      </div>
                    </div>
                  </div>
-->

                <div class="flex next-btn">
                  <button class="s_step2" type="button">Next</button>
                </div>
                </div>
                
                <div class="step2">
                <div class="rw-row flex">

                  <div class="register-step flex">
      
                    <div class="rs-col completed flex">
                      <span class="flex">1</span>
                    </div>
                    <div class="rs-col active flex">
                      <span class="flex">2</span>
                    </div>
                    <div class="rs-col flex">
                      <span class="flex">3</span>
                    </div>
      
                  </div>
      
                </div>
                <!-- row -->

                <h2 class="title-country flex"> Schedule Appointment </h2>

                <div class="flex pi-row">

                  <div class="pi-col">

                    <div class='input-group'>
                      <p>Select Date <sup>*</sup></p>
                      <input required type='date' class="form-control" id='appointmentdate' Placeholder="Date" />
                    </div>

                  </div>

                  <div class='input-group aptclass'>
                    <p>Select Time <sup>*</sup></p>
                    <div class="flex sel-time">
                      <div class="sel-time-col">
                        <input checked type="radio" id="t1" value="09:00 AM to 10:00 AM" name="appointmenttime">
                        <label for="t1">09:00 AM to 10:00 AM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t2" value="10:00 AM to 11:00 AM" name="appointmenttime">
                        <label for="t2">10:00 AM to 11:00 AM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t3" value="11:00 AM to 12:00 PM" name="appointmenttime">
                        <label for="t3">11:00 AM to 12:00 PM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t4" value="12:00 PM to 01:00 PM" name="appointmenttime">
                        <label for="t4">12:00 PM to 01:00 PM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t5" value="01:00 PM to 02:00 PM" name="appointmenttime">
                        <label for="t5">01:00 PM to 02:00 PM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t6" value="02:00 PM to 03:00 PM" name="appointmenttime">
                        <label for="t6">02:00 PM to 03:00 PM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t7" value="03:00 PM to 04:00 PM" name="appointmenttime">
                        <label for="t7">03:00 PM to 04:00 PM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t8" value="04:00 PM to 05:00 PM" name="appointmenttime">
                        <label for="t8">04:00 PM to 05:00 PM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t9" value="05:00 PM to 06:00 PM" name="appointmenttime">
                        <label for="t9">05:00 PM to 06:00 PM</label>
                      </div>
                      <div class="sel-time-col">
                        <input type="radio" id="t10" value="06:00 PM to 07:00 PM" name="appointmenttime">
                        <label for="t10">06:00 PM to 07:00 PM</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="flex next-btn">
                  <button class="prev s_step1p" type="button">Previous</button>
                  <button class="s_step3" type="button">Next</button>
                </div>
                </div>
                <div class="step3">
                <div class="rw-row flex">

                  <div class="register-step flex">
      
                    <div class="rs-col flex">
                      <span class="flex">1</span>
                    </div>
                    <div class="rs-col flex">
                      <span class="flex">2</span>
                    </div>
                    <div class="rs-col flex active">
                      <span class="flex">3</span>
                    </div>
      
                  </div>
      
                </div>
                <!-- row -->
                
                <h2 class="title-country flex"> Overview </h2>

                <div class="pi-row pi-overview-row flex">
                
                <div class="pi-col">

                  <div class='input-group'>
                    <p>Name as in passport</p>
                    <h4 id="input_name"></h4>
                  </div>

                  <div class='input-group'>
                    <p>Your eMail </p>
                    <h4 id="input_email"></h4>
                  </div>

                  <div class='input-group'>
                    <p>Travel Date</p>
                    <h4 id="input_traveldate"></h4>
                  </div>

                  <div class='input-group'>
                    <p>VFS Appointment Date</p>
                    <h4 id="input_vfsaptdate"></h4>
                  </div>

                  <div class='input-group'>
                    <p>Appointment Date</p>
                    <h4 id="input_appointmentdate"></h4>
                  </div>

                  <div class='input-group'>
                    <p>No. of Applicants</p>
                    <h4>Adults : <span id="input_adults"></span> / Children : <span id="input_children"></span></h4>
                  </div>

                </div>
                <!-- left -->

                <div class="pi-col">

                  <div class='input-group'>
                    <p>Phone Number</p>
                    <h4 id="input_mobile"></h4>
                  </div>

                  <div class='input-group'>
                    <p>City </p>
                    <h4 id="input_city">Bangalore</h4>
                  </div>

                  <div class='input-group'>
                    <p>Return Date</p>
                    <h4 id="input_returndate"></h4>
                  </div>

                  <div class='input-group'>
                    <p>Visiting Country</p>
                    <h4 id="input_visitcountry"></h4>
                  </div>

                  <div class='input-group'>
                    <p>Appoinment Time</p>
                    <h4 id="input_appointmenttime"></h4>
                  </div>

                  <div class='input-group'>
                    <p>Type</p>
                    <h4 id="input_vtype"></h4>
                  </div>

                </div>
                <!-- left -->

                </div>

               
               
                <input type="hidden" name="in[name]" id="in_name" />
                <input type="hidden" name="in[email]" id="in_email" />
                <input type="hidden" name="in[traveldate]" id="in_traveldate" />
                <input type="hidden" name="in[vfsaptdate]" id="in_vfsaptdate" />
                <input type="hidden" name="in[appointmentdate]" id="in_appointmentdate" />
                <input type="hidden" name="in[vtype]" id="in_vtype" />
                <input type="hidden" name="in[adults]" id="in_adults" />
                <input type="hidden" name="in[children]" id="in_children" />
                <input type="hidden" name="in[mobile]" id="in_mobile" />
                <input type="hidden" name="in[city]" id="in_city" />
                <input type="hidden" name="in[returndate]" id="in_returndate" />
                <input type="hidden" name="in[visitcountry]" id="in_visitcountry" />
                <input type="hidden" name="in[visitcountrycode]" value="<?php echo $_GET['countryID'] ?>" />
                <input type="hidden" name="in[visitcategory]" value="<?php echo $_GET['categoryID'] ?>" />
                <input type="hidden" name="in[appointmenttime]" id="in_appointmenttime" />
<!--                <input type="submit" style="display:none" id="visa_info_summary_submit" />-->
                
                <div class="flex next-btn">
                  <button class="prev s_step2p" type="button">Previous</button>
                  <button type="submit" id="visa_info_submit">Next</button>
                </div>
                
                </form>
                
                </div>
                
            
              </div> 
              
              */ ?>
              
              <!-- #tab6 --> 
            </div>
            <!-- .tab_container -->
            </div>
            <!-- left -->
            
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

    <script src="<?php echo base_url(); ?>public/web_assets/js/jquery-migrate-3.0.0.js"></script>
    <script src="<?php echo base_url(); ?>public/web_assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>public/web_assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/web_assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>public/web_assets/js/jquery.sticky.js"></script>
    <script src="<?php echo base_url(); ?>public/web_assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>public/web_assets/js/jquery.animateNumber.min.js"></script>
    <script src="<?php echo base_url(); ?>public/web_assets/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo base_url(); ?>public/web_assets/js/jquery.stellar.min.js"></script>
    <script src="<?php echo base_url(); ?>public/web_assets/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>public/web_assets/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>public/web_assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>public/web_assets/js/aos.js"></script>
    <script src="<?php echo base_url(); ?>public/web_assets/js/main.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>



    <?php include('logo_script.php') ?>
    <script type="text/javascript">
        
        $('.s_step2').on('click',function(){
            if($('#name').val() == "" || $('#email').val() == "" || $('#traveldate').val() == "" || $('#city').val() == "" || $('#mobile').val() == "" || $('#returndate').val() == "" || $('#visitcountry').val() == ""){
//                $('#visa_info_submit').trigger('click');
                alert('Kindly fill in the required fields');
                return false;
            }
            else{
                var chk = 1;
                var travelDate = new Date($('#traveldate').val()).getTime();
                var returnDate = new Date($('#returndate').val()).getTime();
                if(returnDate < travelDate){
                    chk = 0;
                    alert('Travel date cannot be greater than the return date');
                }

                if($('#vfsaptdate').val() != ""){
                    var vfsaptdate = new Date($('#vfsaptdate').val()).getTime();

                    if(travelDate <= vfsaptdate){
                        chk = 0;
                        alert('Visa appointment date cannot be greater than the travel date');
                    }
                }
                if(chk == 0)
                    return false;
                else{    
                    $('.step2').show();
                    $('.step1').hide();
                    $('.step3').hide();
                }
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
        
//        $('#visa_info_submit').on('click',function(){
//            var chk = 1;
//            
//            var travelDate = new Date($('#traveldate').val()).getTime();
//            var returnDate = new Date($('#returndate').val()).getTime();
//            alert(travelDate+'-'+returnDate);
//            if(returnDate < travelDate){
//                chk = 0;
//                alert('Travel date cannot be greater than the return date');
//            }
//
//            if($('#vfsaptdate').val() == ""){
//                var vfsaptdate = new Date($('#vfsaptdate').val()).getTime();
//                
//                if(vfsaptdate < travelDate){
//                    chk = 0;
//                    alert('Visa appointment date cannot be greater than the travel date');
//                }
//            }
//            
//            
//            
//            if(chk == 1)
//                return true;
//            else
//                return false;
//            
//        });
        $('.s_step3').on('click',function(){
            if($('#appointmentdate').val() == ""){
//                $('#visa_info_submit').trigger('click');
                
                alert('Kindly fill in the required fields');
                return false;
            }
            else{
                
                var chk = 1;
                var travelDate = new Date($('#traveldate').val()).getTime();
                var appointmentDate = new Date($('#appointmentdate').val()).getTime();
                if(travelDate <= appointmentDate){
                    chk = 0;
                    alert('Appointment date cannot be greater than the travel date');
                }
                if(chk == 0)
                    return false;
                else{    
                    $('#input_name').html($('#name').val());
                    $('#input_email').html($('#email').val());

                    var tddate = $('#traveldate').val();
                    var tdref = tddate.split('-');
                    $('#input_traveldate').html(tdref[2]+'/'+tdref[1]+'/'+tdref[0]);

                    var vfsdate = $('#vfsaptdate').val();
                    if(vfsdate != ''){
                        var vfsref = vfsdate.split('-');
                        $('#input_vfsaptdate').html(vfsref[2]+'/'+vfsref[1]+'/'+vfsref[0]);
                    }
                    else{
                        $('#input_vfsaptdate').html('NA');
                    }
                    $('#input_city').html($('#city').val());
                    $('#input_applicants').html($('#applicants').val());
                    $('#input_mobile').html($('#mobile').val());
                    $('#input_vtype').html($('#vtype').val());

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
                    $('#in_vtype').val($('#vtype').val());

                    var selectedOption = $("input:radio[name=appointmenttime]:checked").val()

                    $('#in_appointmenttime').val(selectedOption);

                    $('.step3').show();
                    $('.step1').hide();
                    $('.step2').hide();
                }
            }
        })
        
        $('#show_search').on('click',function(){
            $('.modify-search').show();
            $('.searchinfo').hide();
        })
        
        $('#inputCountrym').on('change', function() {
            $('#inputCountry').val(this.value);
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
        $('#inputCountry').on('change', function() {
            $('#inputCountrym').val(this.value);
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
