        
        
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; VIT
                            </div>
                            <div class="col-md-6">
                                <!-- <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

        </div>
        <!-- END wrapper -->

        
        <script>

            function right_slide_nav(){
                var menu = $('.right-side-menu')[0];
                console.log(menu);
                if ($(menu).css('display') === 'none') {
                    $(menu).css('display', 'block');
                } else {
                    $(menu).css('display', 'none');
                }
            }

            </script>


        <!-- Right bar overlay-->
        <!-- <div class="rightbar-overlay"></div> -->

        <!-- Vendor js -->
        <script src="<?= base_url()."public"; ?>/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url()."public"; ?>/assets/js/app.min.js"></script>

         <!-- third party js -->
         <script src="<?= base_url()."public"; ?>/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url()."public"; ?>/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url()."public"; ?>/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url()."public"; ?>/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="<?= base_url()."public"; ?>/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url()."public"; ?>/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="<?= base_url()."public"; ?>/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= base_url()."public"; ?>/assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="<?= base_url()."public"; ?>/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?= base_url()."public"; ?>/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="<?= base_url()."public"; ?>/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
        <script src="<?= base_url()."public"; ?>/assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?= base_url()."public"; ?>/assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="<?= base_url()."public"; ?>/assets/js/pages/datatables.init.js"></script>

        <!-- Plugin js-->
        <script src="<?= base_url()."public"; ?>/assets/libs/parsleyjs/parsley.min.js"></script>

        <!-- Validation init js-->
        <script src="<?= base_url()."public"; ?>/assets/js/pages/form-validation.init.js"></script>

         <!-- Plugins Js -->
      
        <script src="<?= base_url()."public"; ?>/assets/libs/select2/js/select2.min.js"></script>
       


        <!-- init js -->
        <script src="<?= base_url()."public"; ?>/assets/js/pages/form-advanced.init.js"></script>

          <!-- Toster  -->
          <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">


        <script>
            var count =0;
            function mobile_view_menu() {
                $('.right-side-menu').css('display','none');
            }
            // Function to check if the viewport is in mobile view
            function isMobileView() {
                return window.matchMedia("(max-width: 770px)").matches;
            }
            setInterval(() => {
                if (isMobileView()) {
                    if (count == 1) {
                        count =0;
                    }
                }else{
                    if(count == 0){
                        mobile_view_menu();
                        count =1;
                    }
                }
            }, 300);
        </script>
        
    </body>
</html>