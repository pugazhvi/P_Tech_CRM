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
    <style>
        .mt100 {
            margin-top: 100px;
        }
        input[type=text], input[type=password]{
            width: 100% !important;
        }
        .required{
            color: red;
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
    <script type="text/javascript" src="<?php echo base_url(); ?>public/web_assets/js/modernizr.custom.86080.js"></script>

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

    <!--    <div>-->
    <!--    <div class="site-section">-->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="col-md-12 mx-auto text-center">
                    <h2 class="heading-29190">Contact Us</h2>
                </div>
                <div class="row">
                    <div class="col-md-5">

                        <!--Section heading-->
                        <h4 class="h1-responsive font-weight-bold ">Reach Us</h4>
                        <div class="row" style="margin-bottom:30px;">

                            <!--Grid column-->
                            <div class="col-md-12 ">
                                <form id="contact-form" name="contact-form" method="POST">

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-5">
                                            <div class="md-form mb-0">
                                                <input required type="text" id="name" name="name" class="form-control">
                                                <label for="name" class="">Your name<span class="required">*</span></label>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-md-7">
                                            <div class="md-form mb-0">
                                                <input required type="email" id="email" name="email" class="form-control">
                                                <label for="email" class="">Your email<span class="required">*</span></label>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <input required type="text" id="subject" name="subject" class="form-control">
                                                <label for="subject" class="">Subject<span class="required">*</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-12">

                                            <div class="md-form">
                                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                                <label for="message">Your message</label><br/>
                                                <label id="successmsg" style="display:none">
                                                    <span style="color:#18a99d">Information sent successfully</span>
                                                </label>
                                            </div>

                                            <div class="md-form">
                                                
                                            </div>

                                        </div>
                                    </div>
                                    <!--Grid row-->

                                    <div class="row text-center text-md-left col-md-4">
                                        <button type="submit" class="btn btn-primary" id="sendbtn">Send</button>
                                    </div>
                                    <div class="status"></div>
                                </form>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Head Office</h4>
                                <p>
                                    Red Cross Building,<br />
                                    1st Floor,<br />
                                    32/50, Redcross Road (Montieth Road),<br />
                                    Egmore, Chennai - 600008.<br />
                                    Tamil Nadu, India.<br />
                                    Tel : +91 44 2852 6176 <br /> 
                                     +91 44 2852 6173<br />
                                    +91 44 4214 6676 <br />
                                    E-Mail : unitedvisa@uvs.co.in
                                </p>

                            </div>

                            <div class="col-md-6">
                                <h4>Branch Office</h4>
                                #614 6th Floor B Wing Mittal Tower,<br />
                                M.G. Road,<br />
                                Bangalore - 560001.<br />
                                Karnataka, India.<br /><br />
                                Tel : +91 80 2559 5535 <br/>+91 80 2559 0384 <br /> +91 80 4152 8736<br />
                                Mob : +91 984 112 1503 <br />
                                
                                E-Mail : opsblr@uvs.co.in

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    </div>-->


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
        $('#contact-form').submit(function(e) {
            $('#sendbtn').prop('disabled',true);
            $('#sendbtn').html('Sending...');
            e.preventDefault();
            $.ajax({
                url: '<?php echo base_url('contact_request') ?>',
                type: 'POST',
                data: $('#contact-form').serialize(),
                success: function(data) {
                    $('#sendbtn').prop('disabled',false);
                    $('#sendbtn').html('Send');
                    $('#successmsg').show();
                    $('#contact-form').trigger('reset');
//                    alert('success');
                },
                error: function() {
                    alert('Request failed.');
                }
            });
        });
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
