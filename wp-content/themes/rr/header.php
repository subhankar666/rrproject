
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
      <meta name="author" content="">

      <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" type="image/x-icon">
      <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" type="image/x-icon">
      <!-- Default links -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

      <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&display=swap" rel="stylesheet">
      <link href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo get_template_directory_uri() ?>/css/slick.css" rel="stylesheet" type="text/css"/>
      <link href="<?php echo get_template_directory_uri() ?>/css/slick-theme.css" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <!-- custom links -->
      <link href="<?php echo get_template_directory_uri() ?>/css/custom.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo get_template_directory_uri() ?>/css/developer.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo get_template_directory_uri() ?>/css/responsive.css" rel="stylesheet" type="text/css" />
      <?php wp_head();?>
    </head>
   <body>
      <header class="header_outer">
         <div class="header_inner">
            <nav class="nav_outer">
               <div class="container">
                  <div class="burger_menu">
                     <button class="burger_tgl">
                        <span></span>
                     </button>
                     <div class="menu_main">
                        <button class="menu_close"></button>
                        <ul>
                           <li><a href="#">Movies</a></li>
                           <li><a href="#">TV</a></li>
                           <li><a href="#">Celebrity</a></li>
                           <li><a href="#">Sports</a></li>
                           <li><a href="#">Music</a></li>
                           <li><a href="#">Lifestyle</a></li>
                           <li><a href="#">Food & Drink</a></li>
                        </ul>
                     </div>
                  </div>
                  <?php
$customLogoId = get_theme_mod("custom_logo");
echo rrComponent::logoFetch($customLogoId, $headerClass = "logo_header");
?>

                  <a href="#" class="log_in"><i class="fas fa-user"></i></a>
               </div>
               <div class="container other_menu">
                  <ul>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                     <li><a href="#">Test</a></li>
                  </ul>
               </div>
            </nav>
         </div>
      </header>
      <!-- Body Start -->