<?php
get_header();
$pageSection = '<section class="single_link_outer">';
$pageSection .= '<div class="container">';
$pageSection .= '<div class="row">';
$pageSection .= '<div class="col-md-8">';
$pageSection .= '<div class="single_link_cnt">';
echo $pageSection;
the_content();
$pageSection = '</div>';
$pageSection .= '</div>';
echo $pageSection;
get_sidebar();
?>

<?php
$pageSection = '</div>';
$pageSection .= '</div>';
$pageSection .= '</section>';
echo $pageSection;
?>
<?php
get_footer();
