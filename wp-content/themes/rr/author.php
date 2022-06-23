<?php
/* Template Name: Author List */

get_header();
global $user;
$fullSection = '<section class="authors_details_outer">';
$fullSection .= '<div class="container">';
$fullSection .= '<div class="row">';
$fullSection .= '<div class="col-md-8">';
echo $fullSection;
$userBio = wp_trim_words(get_the_author_meta('description'), 30, "...");
$userAvatar = get_avatar_url(array("size" => 178));

$authorDetails = '<div class="authors_box">';
$authorDetails .= '<a href="#" class="author_img">';
$authorDetails .= '<img src="' . $userAvatar . '">';
$authorDetails .= '</a>';
$authorDetails .= '<div class="author_cnt">';
$authorDetails .= '<a href="#"><h3>' . get_the_author_meta('display_name') . '</h3></a>';
$authorDetails .= '<div class="author_social_hndl">';
$authorDetails .= '<a href="#"><i class="fab fa-twitter-square"></i></a>';
$authorDetails .= '<a href="#"><i class="fab fa-facebook-square"></i></a>';
$authorDetails .= '<a href="#"><i class="fab fa-linkedin"></i></a>';
$authorDetails .= '<a href="#"><i class="fab fa-instagram-square"></i></a>';
$authorDetails .= '</div>';
$authorDetails .= '<p>' . get_the_author_meta('description') . '</p>';
$authorDetails .= '</div>';
$authorDetails .= '</div>';
echo $authorDetails;
$fullSection = '<div class="cmn_heading">';
$fullSection .= '<a href="javascript:void(0)"><h2>Author: ' . get_the_author_meta('display_name') . '</h2></a>';
$fullSection .= '</div>';
$fullSection .= '<div class="author_post_all">';
echo $fullSection;
$paged = (get_query_var('page_val')) ? absint(get_query_var('page_val')) : 1;
$post_query = new WP_Query(array(
    "post_type" => "post",
    "orderby" => "id",
    "order" => "desc",
    "paged" => $paged,
    "author" => get_the_author_meta('id'),
    "posts_per_page" => 10,
));
if ($post_query->have_posts()) {
    while ($post_query->have_posts()) {
        $post_query->the_post();
        global $post;
        $authorId = $post->post_author;
        $authorLink = get_author_posts_url($authorId);
        $thumbnail = get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/images/GettyImages.jpg";
        $title = get_the_title();
        $excerpt = wp_trim_words(get_the_content(), 7, "...");
        $author = get_the_author();
        $permalink = get_the_permalink();
        $date = get_the_date('j');
        $month = get_the_date('F');
        echo $componentObj->authorPostList($thumbnail, $title, $excerpt, $author, $authorLink, $permalink, $date, $month);

    }
    $big = 999999999; // need an unlikely integer

    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, $paged),
        'total' => $post_query->max_num_pages,
    ));
}

$fullSection = '</div>';
$fullSection .= '</div>';
echo $fullSection;
get_sidebar();
$fullSection .= '</div>';
$fullSection .= '</div>';
$fullSection = '</section>';
echo $fullSection;
get_footer();
