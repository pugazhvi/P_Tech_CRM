<!doctype html>
<html lang="en">

<head>
    <title>United Visa Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">

    <!-- MAIN CSS -->
    
    <style>
        
        <?php include('pdf/bootstrap.php'); include('pdf/css.php'); ?>
        
        .mt100{
            margin-top:100px;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
 <div class="clearfix"></div>

   <?php
    foreach($summaryinfo->result() as $sinfo){
    ?>
    <?php
     } ?>
      <div class="container">
              <div id="tab1" class="">
                <div class="tab-header">
                  <h2>Visa Info</h2>
                  <p>They also provide insights about the profession’s most colorful personalities and powerful institutions, as well as original commentary on breaking legal developments.The resources managed in logistics can include physical items such as food, materials, animals, equipment, and liquids.</p>
                </div>
                <div class="vi-content">
                <?php
                  $h_ary = array();
                  foreach($visainfo->result() as $vinfo){
                     if(!in_array(trim($vinfo->vhm_header),$h_ary))
                     {
                         if(!empty($h_ary)){
                             echo '</div>';
                         }
                        $h_ary[] = trim($vinfo->vhm_header);
                    ?>
                    
                  <h3 class="flex">
                    <span class="vi-ico">
                      <img src="<?php echo base_url('assets/images/vicons_n/'.$vinfo->vhm_icon); ?>" />
                    </span> 
                    <span class="vinfo-tit"><?php echo $vinfo->vhm_header; ?></span>
                  </h3>
                  <div class="vic-row">
                  <?php }
                      else { 
                    echo '<p>'.$vinfo->vc_requirement.'</p>';
                    } ?>
                  
                <?php } ?>
                        </div>
                  </div>
              </div>
              <!-- #tab1 -->
              <h3 class="tab_drawer_heading" rel="tab3">Embassy Info</h3>
              <div id="tab3" class="tab_content">
                <h2>Embassy Info</h2>
              </div>
              <!-- #tab3 -->
              <h3 class="tab_drawer_heading" rel="tab4">Visa Forms</h3>
              <div id="tab4" class="tab_content">
                <h2>Visa Forms</h2>
              </div>
            </div>

</body>

</html>
