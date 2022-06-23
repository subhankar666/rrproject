<footer class="footer_outer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
               <?php dynamic_sidebar('footer-sidebar1')?>
               </div>
               <div class="col-md-4">
               <?php dynamic_sidebar('footer-sidebar2')?>
               </div>
               <div class="col-md-4">
               <?php dynamic_sidebar('footer-sidebar3')?>
               </div>
            </div>
            <button class="notification_bell"><i class="fas fa-bell"></i></button>
         </div>
      </footer>
      <?php wp_footer();?>
      <script src="<?php echo get_template_directory_uri() ?>/js/jquery.min.js"></script>
      <script src="<?php echo get_template_directory_uri() ?>/js/popper.min.js" ></script>
      <script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
      <script src="<?php echo get_template_directory_uri() ?>/js/slick.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
      <script src="<?php echo get_template_directory_uri() ?>/js/custom.js"></script>
   </body>
</html>
