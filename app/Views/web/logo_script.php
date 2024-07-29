<script>
       jQuery(document).ready(function($) {
var navbar = document.querySelector('.site-navbar')

window.onscroll = function() {

  // pageYOffset or scrollY
  if (window.pageYOffset > 0) {
    navbar.classList.add('scrolled');
//      alert('in');
      $('.chimg').attr('src','<?php echo base_url(); ?>public/web_assets/images/logo.png');
      $('#toggleid').removeClass('text-white');
  } else {
    navbar.classList.remove('scrolled');
      $('.chimg').attr('src','<?php echo base_url(); ?>public/web_assets/images/logo_white.png');
      $('#toggleid').addClass('text-white');
//      alert('out');
  }
}
       })
</script>
