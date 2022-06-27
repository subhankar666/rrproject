<?php
get_header();
$pageSection = '<section class="single_link_outer">';
$pageSection .= '<div class="container">';
$pageSection .= '<div class="row">';
$pageSection .= '<div class="col-md-8">';
$pageSection .= '<div class="cmn_heading">';
$pageSection .= '<a href="javascript:void(0)"><h2>' . get_the_title() . '</h2></a>';
$pageSection .= '</div>';
$pageSection .= '<div class="single_link_cnt">';
echo $pageSection;
the_content();
$pageSection = '</div>';
$pageSection .= '</div>';
echo $pageSection;
get_sidebar();

$pageSection = '</div>';
$pageSection .= '</div>';
$pageSection .= '</section>';
echo $pageSection;

get_footer();
