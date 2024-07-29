<section id="topbar" class="d-lg-block">
         <div class=".col-xs-12 .col-sm-12">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icon-envelope"></i><a href="mailto:mail@uvs.co.in.com">mail@uvs.co.in</a>
        <i class="icon-phone"></i> 080 25595535
      </div>
      <div class="social-links">
<!--                 <a href="track_visa" style="font-family:Muli !important"><i class="icon-info-circle"></i> Track Visa</a>-->
                 
<!--                 <a href="track_visa"class="icon-art_track">Track Visa</a>-->
<!--
				<button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:84px; margin-top:0px; margin-left:4px;">
Login</button>
				<button onclick="document.getElementById('modal-wrapper1').style.display='block'" style="width:84px; margin-top:0px; margin-left:4px;">
Register</button>
-->
	              <a href="https://facebook.com/UVSBLR" target="_blank"><span class="icon-facebook"></span></a>
<!--                  <a href="#"><span class="icon-instagram"></span></a>  -->
<!--                  <a href="#"><span class="icon-twitter"></span></a>-->
				  <a href="https://www.linkedin.com/company/united-visa-services/" target="_blank"><span class="icon-linkedin"></span></a>
<!--				  <a href="#"><span class="icon-skype"></span></a>       -->
      </div>

       <div id="modal-wrapper" class="modal">

  <form class="modal-content animate" action="/action_page.php">

    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close1" title="Close1 PopUp">&times;</span>
      <h2 style="text-align:center">Login</h2>
    </div>

    <div class="container">
      <input type="text" style="margin:8px 26px"; placeholder="Enter Username" name="uname">
      <input type="password" style="margin:8px 26px"; placeholder="Enter Password" name="psw">
      <button type="submit" style="margin:8px 26px; padding:8px 26px";>Login</button>
      <span style="margin:26px 30px; color:#000;"><input type="checkbox"> Remember me</span>
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
    </div>

  </form>

</div>


<div id="modal-wrapper1" class="modal">

  <form class="modal-content animate" action="/action_page1.php">

    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper1').style.display='none'" class="close1" title="Close1 PopUp">&times;</span>
      <h2 style="text-align:center">Register New User</h2>
    </div>

    <div class="container">
      <input type="text" style="margin:8px 26px"; placeholder="Enter Username" name="uname">
	  <input type="text" style="margin:8px 26px"; placeholder="Email" name="email">
	  <input type="text" style="margin:8px 26px"; placeholder="Mobile No" name="phone">
      <input type="password" style="margin:8px 26px"; placeholder="Enter Password" name="psw">
      <input type="password" style="margin:8px 26px"; placeholder="Company Name" name="cn">
      <button type="submit" style="margin:8px 26px; padding:8px 26px";>Register</button>

    </div>

  </form>

</div>



    </div>
    </div>
  </section>


      <header class="site-navbar site-navbar-target " role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="<?php echo base_url(); ?>" class="font-weight-bold"><img class="chimg" width="170" src="<?php echo base_url(); ?>public/web_assets/images/logo_white.png"></a>
              </div>
            </div>

            <div class="col-9  text-right">


              <span class="d-inline-block d-lg-block"><a href="#" class="site-menu-toggle js-menu-toggle py-5"><span  id="toggleid" class="icon-menu h3 text-white"></span></a></span>

<!--<span class="d-inline-block d-lg-block"><a href="#" class="text-white site-menu-toggle js-menu-toggle  text-white"><span class="icon-menu h3 text-white"></span></a></span>-->


              <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="site-logo"><a href="<?php echo  base_url(); ?>" class="font-weight-bold"><img src="<?php echo base_url(); ?>public/web_assets/images/logo.png"></a></li>
                  <?php
                    $home= '';$choose='';$apply='';$track='';$contact='';
                   

                    // Get the current URI instance
                    $uri = service('uri');

                    // Get the first segment of the URI
                    $seg = $uri->getSegment(1);
                    if($seg == 'why_choose_us')
                        $choose = 'active';
                    else if($seg == 'apply_visa')
                        $apply = 'active';
                    else if($seg == 'track_visa')
                        $track = 'active';
                    else if($seg == 'contact')
                        $contact = 'active';
                    else
                        $home = 'active';
                  ?>
                   <li class="<?php echo $home; ?>"><a href="<?php echo  base_url(); ?>" class="nav-link"><span class="icon-home"></span> Home</a></li>
                  <li class="<?php echo $choose; ?>"><a href="<?php echo  base_url('why_choose_us'); ?>" class="nav-link"><span class="icon-question"></span> Why Choose Us</a></li>
                  <li class="<?php echo $apply; ?>"><a href="<?php echo  base_url('apply_visa'); ?>" class="nav-link"><span class="icon-wpforms"></span> Apply Visa</a></li>
				   
<!--                  <li class="<?php echo $track; ?>"><a href="<?php echo  base_url('track_visa'); ?>" class="nav-link"><span class="icon-art_track"></span> Track Visa</a></li>-->
<!--				  <li><a href="javascript:void(0)" class="nav-link"><span class="icon-payment"></span> Payment</a></li>-->
				  <li class="<?php echo $contact; ?>"><a href="<?php echo  base_url('contact'); ?>" class="nav-link"><span class="icon-contacts"></span> Contact</a></li>
				  <li class="<?php echo $apply; ?>"><a href="<?php echo  base_url('client'); ?>" class="nav-link"><span class="icon-wpforms"></span> Track Visa</a></li>
                  </ul>
              </nav>
            </div>

          </div>
        </div>

      </header>
