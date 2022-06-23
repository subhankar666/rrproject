
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
   <body>
      <?php
$headSection = '<header class="header_outer">';
$headSection .= '<div class="header_inner">';
$headSection .= '<nav class="nav_outer">';
$headSection .= '<div class="container">';
$headSection .= '<div class="burger_menu">';
$headSection .= '<button class="burger_tgl">';
$headSection .= '<span></span>';
$headSection .= '</button>';
$headSection .= '<div class="menu_main">';
$headSection .= '<button class="menu_close"></button>';
echo $headSection;
wp_nav_menu(array(
    "theme_location" => "primary-menu",
));
$headSection = '</div>';
$headSection .= '</div>';
echo $headSection;
$customLogoId = get_theme_mod("custom_logo");
echo rrComponent::logoFetch($customLogoId, $headerClass = "logo_header");
$headSection = '<a href="#" class="log_in" style="visibility:hidden"><i class="fas fa-user"></i></a>';
$headSection .= '</div>';
$headSection .= '<div class="container other_menu">';
$headSection .= '<ul>';
echo $headSection;

$catLists = get_categories();
$catMenuSingle = '';
foreach ($catLists as $catlist) {
    $catMenuSingle .= '<li><a href="' . get_term_link($catlist->term_id) . '">' . $catlist->name . '</a></li>';
}
echo $catMenuSingle;
$headSection = '</ul>';
$headSection .= '</div>';
$headSection .= '</nav>';
$headSection .= '</div>';
$headSection .= '</header>';
echo $headSection;