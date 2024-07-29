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
    <style>
        .mt100 {
            margin-top: 100px;
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


<!--
        <div class="home_slide_content">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 text-center" style="margin-top:130px; margin-bottom:40px;" ;>
                        <h1 class="mb-4 text-white site-section">Track Visa</h1>
                        <p class="mb-4 text-white">UNITED VISA SERVICES is one of the first passport and visa companies operating in Chennai. We are located in the heart of Chennai and only a short distance from the National Passport Agency.<br />
                        </p>

                    </div>
                </div>
            </div>
        </div>
-->


    </div>
    <div class="clearfix"></div>

<!--    <div class="site-section">-->
                        <div class="container">
                            <div class="row mb-12">
                                <div class="col-md-12 mx-auto text-center">
                                    <h2 class="heading-29190">Track Visa</h2>
                                </div>
                            </div>
                            <form id="sform">
                                <div class="form-row">
                                <div class="form-group fg-date col-md-3">
                                    <input type="text" title="Passport No" name="passport" class="form-control" id="passport" Placeholder="Passport No">
                                </div>
                                <div class="form-group fg-date col-md-3"> <input title="Reference ID" type="text" name="refid" class="form-control" id="Ref" Placeholder="Reference ID">

                                </div>
                                <div class='form-group fg-date col-md-3'>
                                    <input type='date' name="dob" class="form-control" title="Date of Birth" id='datetimepicker4' Placeholder="Date of Birth" />
                                </div>

                                <div class="form-group col-md-3">

                                    <p class="text-center">
                                        <button type="submit" class="btn btn-primary col-md-8">Submit</button>
                                    </p>
                                    <!--
							 <h5>Mail To</h5>
							 <label class="checkbox-inline"><input type="checkbox" value=""> UVS</label>
							<label class="checkbox-inline"><input type="checkbox" value=""> Agent</label>
							<label class="checkbox-inline"><input type="checkbox" value=""> Applicant</label>
-->
                                </div>
                            </div>
                            </form>
                        </div>

<!--                    </div>-->

        <?php include 'includes/how_it_works.php'; ?>

    <div class="site-section bg-white">

        <?php include 'includes/ads.php'; ?>

        <?php include 'includes/affiliation.php'; ?>

        <?php include 'includes/testimonials.php'; ?>
    </div>
    <?php include 'includes/footer.php'; ?>


    <script src="<?php echo base_url(); ?>public/web_assets/js/jquery-3.3.1.min.js"></script>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <?php include('logo_script.php'); ?>
    <script>
        $('#sform').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: '<?php echo base_url('uvs/request_info') ?>',
                type:"POST",
                data:$('#sform').serialize(),
                success:function(data){
                    alert('data');
                },
                error:function(){
                    alert('Request failed');
                }
            })
        })
        var navbar = document.querySelector('.site-navbar')

        window.onscroll = function() {

            // pageYOffset or scrollY
            if (window.pageYOffset > 0) {
                navbar.classList.add('scrolled')
            } else {
                navbar.classList.remove('scrolled')
            }
        }

    </script>
    <script type="text/javascript">
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
