<?php
/* Template Name: Author List */

get_header();
$fullSection = '<section class="authors_outer">';
$fullSection .= '<div class="container">';
$fullSection .= '<div class="row">';
$fullSection .= '<div class="col-md-8">';
$fullSection .= '<div class="cmn_heading">';
$fullSection .= '<a href="javascript:void(0)"><h2>Authors</h2></a>';
$fullSection .= '</div>';
$fullSection .= '<div class="authors_cnt">';
echo $fullSection;
$users = get_users(array(
    "role__in" => array("author"),
    "orderby" => "id",
    "order" => "desc",
));
echo $componentObj->authorList($users);
$fullSection = '</div>';
$fullSection .= '</div>';
echo $fullSection;
get_sidebar();
$fullSection .= '</div>';
$fullSection .= '</div>';
$fullSection = '</section>';
echo $fullSection;
get_footer();
