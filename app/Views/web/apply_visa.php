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
        
        .select:invalid {
          height: 55px !important;
          margin-left: 40px !important;
          opacity: 0 !important;
          position: absolute !important;
          display: flex !important;
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
        
        <div class="site-section top-mar">
            <div class="visa-header-row">
                <div class="container mt100">
                    <h3 class="text-center text-white">Welcome To United Visa Services</h3>
                    <p class="mb-4 text-white text-center">UNITED VISA SERVICES is one of the first passport and visa companies operating in Chennai. We are located in the heart of Chennai and only a short distance from the National Passport Agency.<br />
                    </p>
                </div>
            </div>
        </div>


    </div>
    <div class="clearfix"></div>
    
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 text-center hsc-row" >
                        <div class="row mb-12">
                          <div class="col-md-12 mx-auto text-center">
                            <h2 class="heading-29190">Apply Visa</h2>
                          </div>
                        </div>
                        
                        <form method="get" action="<?php echo base_url('visa_info'); ?>">
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
                                  
                                <select required data-placeholder="Select Country" name="countryID" title="Country" id="inputCountry" class="select" Placeholder="Country">
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
                                <div class="form-group col-md-3">
                                    <select name="categoryID" required id="inputCategory" class="form-control" Placeholder="Country">
                                        <option value="" selected>Select Visa Type</option>
                                        <option value="2">Business</option>
                                        <option value="20">Tourist</option>
                                    </select>
                                    <span><img src="<?php echo base_url(); ?>public/web_assets/images/img/passport-dark.svg"></span>
                                </div>
                                <div class="form-group col-md-3">
                                    <select name="branchid" required id="inputState" class="form-control z" Placeholder="Branch">
                                        <option value="" selected>Select City</option>
                                        <option value="1">Bangalore</option>
                                        <option value="2">Chennai</option>
                                        <option value="3">Delhi</option>
                                        <option value="4">Mumbai</option>
                                        <option value="5">Hyderabad</option>
                                    </select>
                                    <span><img src="<?php echo base_url(); ?>public/web_assets/images/img/city-dark.svg"></span>
                                </div>
                            </div>
                            <p class="text-center">
							 <button type="submit" class="btn btn-primary col-md-2">Find</button></p>
                        </form>
                    </div>
                </div>
            </div>

<!--
    <div class="site-section">
      <div class="container">
        <div class="row align-items-top">
           <div class="col-md-12">
		   <div class="site-section">
      





          </div>

        </div>
      </div>
    </div>
-->

	<?php include 'includes/how_it_works.php'; ?>
<!--    </div>-->

<div class="site-section bg-white">

<?php include 'includes/ads.php' ?>

<?php include 'includes/testimonials.php' ?>

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
        
//        if ($(window).width() <= 700) {
//            $('#countryID').prop('required',false);
//            $('#countryID').trigger('change').val('189');
//        }
//        else{
//            $("#countryID").prepend("<option value='' selected='selected'></option>");
//            $("#countryID").trigger('change');
//        }
        
        $(".select").chosen();
        
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

    </script>

</body>

</html>
