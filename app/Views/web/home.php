<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

//error_reporting(0);
$pageTitle = "Visa Information";
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
        .pointers {
            color: #0d79b9;
            font-weight: bold;
            font-size: 22px;
        }
        .mbr15px{
            margin-top: -15px;
        }
        .select:invalid {
          height: 55px !important;
          margin-left: 40px !important;
          opacity: 0 !important;
          position: absolute !important;
          display: flex !important;
        }
        .z{
            z-index: 100 !important;
        }
        @media screen and (min-width: 700px) {
            .carousel-control-prev,.carousel-control-next{
                z-index: -100;
            }
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
        <?php include 'includes/banner.php'; ?>


        <div class="home_slide_content">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 text-center hsc-row" style="margin-top:130px; margin-bottom:40px;">
                        <h1 class="mb-4 text-white site-section">BOOK WITH US</h1>
                        <!--
              <p class="mb-4 text-white"><br/>
              <p class="mb-4 text-white">UNITED VISA SERVICES is one of the first passport and visa companies operating in Chennai. We are located in the heart of Chennai and only a short distance from the National Passport Agency.<br/>
			 </p>
-->
                        <form method="get" action="<?php echo  base_url('visa_info'); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                
                                <select required id="inputCountrym" placeholder="Select Country" class="form-control">
                                   <option value="">Select Country</option>
                                    <?php
                                foreach ($countryinfo as $ci) {
                                  echo "<option value='".$ci->cid."'>".$ci->country."</option>";
                                }
                            ?>
                                  </select> 
                                <select required data-placeholder="Select Country" class="select" name="countryID" id="inputCountry" data-rule-chosen-required="true" placeholder="Select Country">
                                   <option value=""></option>
                                    <?php
                                foreach ($countryinfo as $ci) {
                                  echo "<option value='".$ci->cid."'>".$ci->country."</option>";
                                }
                            ?>
                                  </select>
                                    <span><img src="<?php echo base_url(); ?>public/web_assets/images/img/earth-dark.svg"></span>
                                </div>
                                <div class='form-group fg-date col-md-3'>
                                    <input type='date' required name="travel_date" class="form-control" id='datetimepicker4' Placeholder="Date" />
                                    <span><img src="<?php echo base_url(); ?>public/web_assets/images/img/suitcases-dark.svg"></span>
                                </div>

<!--
                                <div class="form-group col-md-2">
                                    <select name="passengers" title="Passengers" id="inputState" class="form-control" Placeholder="Passenger">
                                        <option>Passengers</option>
                                        <option selected>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    <span><img src="images/img/passenger-dark.svg"></span>
                                </div>
-->
                                <div class="form-group col-md-3">
                                    <select name="categoryID" required id="inputCategory" class="form-control" Placeholder="Country">
                                        <option value="" selected>Select Visa Type</option>
                                        <option value="2">Business</option>
                                        <option value="20">Tourist</option>
                                        <?php /*
                    foreach ($categoryinfo->result() as $cati) {
                      echo "<option value='".$cati->id."'>".$cati->category."</option>";
                    } */
              ?>
                                    </select>
                                    <span><img src="<?php echo base_url(); ?>public/web_assets/images/img/passport-dark.svg"></span>
                                </div>
                                <div class="form-group col-md-3">
                                    <select name="branchid" required id="inputState" class="form-control z" Placeholder="Branch">
                                        <option value="" selected>Location</option>
                                      <option value="1">Tamil Nadu</option>
                                        <option value="2">Karnataka</option>
                                        <!-- <option value="3">Delhi</option>
                        <option value="4">Mumbai</option> -->
                        <option value="5">Andhra Pradesh and Telengana</option>
                        <option value="5">Kerala</option>
                        <option value="5">Puduchery</option>

                                    </select>
                                    <span><img src="<?php echo base_url(); ?>public/web_assets/images/img/city-dark.svg"></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-submt btn-outline-white py-3 px-5 col-md-2">Find</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <!--   <div class="ftco-blocks-cover-1 site-section">
       <ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span></li>
            <li><span>Image 04</span></li>
            <li><span>Image 05</span></li>
            <li><span>Image 06</span></li>
        </ul>
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-12 text-center" style="margin-top:160px; margin-bottom:40px;";>
              <h1 class="mb-4 text-white site-section">About UVS</h1>
              <p class="mb-4 text-white">UNITED VISA SERVICES is one of the first passport and visa companies operating in Chennai. We are located in the heart of Chennai and only a short distance from the National Passport Agency.<br/>
			 </p>
						  <div class="form-row">
						  <div class="form-group col-md-3">
						  <select id="inputState" class="form-control" Placeholder="Country">
							<option selected>Country</option>
							<option>...</option>
							</select>
							</div>
						    <div class='form-group col-md-3'>
							<input type='text' class="form-control" id='datetimepicker4' Placeholder="Date" />
							</div>

							<div class="form-group col-md-3">
							<select id="inputState" class="form-control" Placeholder="Country">
							<option selected>Passenger</option>
							<option>...</option>
							</select>
							</div>
							<div class="form-group col-md-3">
							<select id="inputState" class="form-control" Placeholder="Country">
							<option selected>Select Visa Type</option>
							<option>...</option>
							</select>
							</div>
				  </div>
			 <p><a href="#" class="btn btn-primary btn-outline-white py-3 px-5">Find</a></p>
            </div>
            </div>
        </div>
      </div>
    </div>
-->

    <div class="site-section">
        <div class="container">

            <div class="row mb-12">
                <div class="col-md-12 mx-auto">
                    <h2 class="heading-29190 text-center">UVS Visa Services</h2>
                    <p>
                        We provide you with best travel solutions for your visa. Our team is specially trained and dedicated to help you even from the planning stage of your trip. As a pioneer in this field we have expertise in providing perfect travel solutions, connect with proper people in your destinations, assure safety throughout the trip and take care of immigration procedures.
                    </p>
                    <p>All we require is your documents, passport details and relevant fields of information and they rest is assured by us.</p>
                </div>
            </div>

        </div>
    </div>

    <?php include 'includes/how_it_works.php'; ?>

    <div class="site-section">
        <div class="container">
            <div class="row align-items-top">
                <div class="col-md-4">

                    <div class="fot-top col-md-12">
                        <div class="fact-39281 d-flex align-items-center">
                            <div class="wrap-icon mr-3 mbr15px">
                                <img src="<?php echo base_url(); ?>public/web_assets/images/globe.png" width="75" alt="">
                            </div>
                            <div class="text counter">
                                <p class="pointers">Leading visa services for all countries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="fact-39281 d-flex align-items-center">
                            <div class="wrap-icon mr-3 mbr15px">
                                <div><img src="<?php echo base_url(); ?>public/web_assets/images/profile.png" width="75" alt=""></div>
                            </div>
                            <div class="text counter">
                                <p class="pointers">Authorized Agent for Singapore &amp; Japan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="fact-39281 d-flex align-items-center">
                            <div class="wrap-icon mr-3 mbr15px">
                                <div><img src="<?php echo base_url(); ?>public/web_assets/images/india.png" width="75" alt=""></div>
                            </div>
                            <div class="text counter">
                                <p class="pointers">Enabling pan-India submission</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="fact-39281 d-flex align-items-center">
                            <div class="wrap-icon mr-3 mbr15px">
                                <div><img src="<?php echo base_url(); ?>public/web_assets/images/thumbsup.png" width="75" alt=""></div>
                            </div>
                            <div class="text counter">
                                <p class="pointers">Preferred across South India</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="site-section">
                        <div class="container">

                            <div class="row mb-12">
                                <div class="col-md-12 mx-auto text-center">
                                    <h2 class="heading-29190">UVS Visa Destinations</h2>
                                    <h5>Authorized Agent for Singapore &amp; Japan</h5>
                                    <h6>Leading Visa Services for all countries</h6>
                                    <p>Preferred across South India</p>
                                </div>
                            </div>

                            <div class="row manscrll-sm">
                                <div class="col-md-6 col-lg-6 mb-6">
                                    <div class="flip-box">
                                        <div class="flip-box-inner">
                                            <div class="flip-box-front">
                                                <img src="<?php echo base_url(); ?>public/web_assets/images/singapore-img.jpg" alt="Paris" style="width:100%;height:200px" class="responsive">
                                            </div>
                                            <div class="flip-box-back">
                                                <h2>Singapore</h2>
                                                <p>Singapore, an island city-state off southern Malaysia</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-6">
                                    <div class="flip-box">
                                        <div class="flip-box-inner">
                                            <div class="flip-box-front">
                                                <img src="<?php echo base_url(); ?>public/web_assets/images/Japan.jpg" alt="Paris" style="width:100%;height:200px" class="responsive">
                                            </div>
                                            <div class="flip-box-back">
                                                <h2>Japan</h2>
                                                <p>Japan is an island country located in East Asia.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-6 fot1-top">
                                    <div class="flip-box">
                                        <div class="flip-box-inner">
                                            <div class="flip-box-front">
                                                <img src="<?php echo base_url(); ?>public/web_assets/images/america-img.jpg" alt="Paris" style="width:100%;height:200px" class="responsive">
                                            </div>
                                            <div class="flip-box-back">
                                                <h2>America</h2>
                                                <p>The Americas comprise the totality of the continents of North and South America.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-6 fot1-top">
                                    <div class="flip-box">
                                        <div class="flip-box-inner">
                                            <div class="flip-box-front">
                                                <img src="<?php echo base_url(); ?>public/web_assets/images/UK-img.jpg" alt="Paris" style="width:100%;height:200px" class="responsive">
                                            </div>
                                            <div class="flip-box-back">
                                                <h2>United Kingdom</h2>
                                                <p>The United Kingdom, made up of England, Scotland, Wales and Northern Ireland, is an island nation in northwestern Europe.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!--
               <br/>
         <p><a href="#" class="btn btn-primary col-md-4 col-lg-4 mb-4 align-items-center">Click More</a></p>
-->
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="site-section  bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 mx-auto">
                    <h2 class="heading-29190 text-center">Other Services</h2>
                    <p>We offer all travel related services other than Visa Services. Our other services includes - Passport Services, Domestic Air Ticketing Services, International Air Ticketing Services, Package Tours, Hotel Reservation Services, Travel Insurance Services, Car Rental Services, Bus Rental Services &amp; Passport Assistance.</p>
                </div>
            </div>
            <div class="row manscrll-sm">
                <div class="col-md-6 col-lg-3">
                    <div class="service-29128 text-center">
                        <span class="d-block wrap-icon">
                            <div><img src="<?php echo base_url(); ?>public/web_assets/images/ticketing.png" alt="ticketing"></div>
                        </span>
                        <h3>Ticketing</h3>
                        <!--              <p>Lorem ipsum dolor sit amet. Consectetur adipisicing elit Eaque commodi.</p>-->
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-29128 text-center">
                        <span class="d-block wrap-icon">
                            <div><img src="<?php echo base_url(); ?>public/web_assets/images/insurance.png" alt="insurance"></div>
                        </span>
                        <h3>Insurance</h3>
                        <!--              <p>Lorem ipsum dolor sit amet. Consectetur adipisicing elit Eaque commodi.</p>-->
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-29128 text-center">
                        <span class="d-block wrap-icon">
                            <div><img src="<?php echo base_url(); ?>public/web_assets/images/passport.png" alt="passport"></div>
                        </span>
                        <h3>Passport</h3>
                        <!--              <p>Lorem ipsum dolor sit amet. Consectetur adipisicing elit Eaque commodi.</p>-->
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-29128 text-center">
                        <span class="d-block wrap-icon">
                            <div><img src="<?php echo base_url(); ?>public/web_assets/images/hotel.png" alt="hotel"></div>
                        </span>
                        <h3>Hotel Reservation</h3>
                        <!--              <p>Lorem ipsum dolor sit amet. Consectetur adipisicing elit Eaque commodi.</p>-->
                    </div>
                </div>
            </div>
        </div>


        <?php include 'includes/ads.php'; ?>

        <?php include 'includes/affiliation.php'; ?>

        <?php include 'includes/testimonials.php'; ?>
    </div>

    <?php include 'includes/footer.php'; ?>


    
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



    <?php include('logo_script.php'); ?>
    <script type="text/javascript">
        
        if ($(window).width() <= 700) {
            $('#countryID').prop('required',false);
            $('#countryID').trigger('change').val('189');
        }
        else{
            $("#countryID").prepend("<option value='' selected='selected'></option>");
            $("#countryID").trigger('change');
        }
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

       $(".select").chosen();
        
        $.validator.setDefaults({ ignore: ":hidden:not(select)" },{
  allow_single_deselect: true
}) 
        
    </script>

</body>

</html>