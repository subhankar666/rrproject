<?php
$catFetch = get_the_category();
global $post;
$authorId = $post->post_author;
$catFetch = $catFetch[0];
$timeAgo = $adminObj->time_ago();

get_header();

$singlePostSection = '<section class="single_post_outer">';
$singlePostSection .= '<div class="container">';
$singlePostSection .= '<div class="row">';
$singlePostSection .= '<div class="col-12">';
$singlePostSection .= '<div class="single_post_blk">';
$singlePostSection .= '<div class="single_post_bnr">';
$singlePostSection .= '<a href="' . get_term_link($catFetch->term_id) . '" class="tag_post">' . $catFetch->name . '</a>';
$singlePostSection .= '<h2>' . get_the_title() . '</h2>';
$singlePostSection .= '<div class="author_dtls d-flex">';
$singlePostSection .= '<div class="athr_img">';
$singlePostSection .= '<img src="' . get_avatar_url($authorId) . '" alt="">';
$singlePostSection .= '</div>';
$singlePostSection .= '<div class="athr_cnt">';
$singlePostSection .= '<a href="' . get_author_posts_url($authorId) . '">' . get_the_author_meta("display_name", $authorId) . '</a>';
$singlePostSection .= '<p>' . $timeAgo . '</p>';
$singlePostSection .= '</div>';
$singlePostSection .= '</div>';
$singlePostSection .= '<div class="img_top_post single_post_feature">';
$singlePostSection .= '<span class="lable_tag">Featured</span>';
$singlePostSection .= '<img src="' . $componentObj->getThumbnail(get_the_post_thumbnail_url()) . '" alt="">';
$singlePostSection .= '<p class="single-post-caption">' . get_the_post_thumbnail_caption() . '</p>';
$singlePostSection .= '</div>';
$singlePostSection .= '</div>';
$singlePostSection .= '</div>';
$singlePostSection .= '</div>';
$singlePostSection .= '<div class="col-md-8">';
$singlePostSection .= '<div class="social_single_post">';
$singlePostSection .= '<ul>';
$singlePostSection .= '<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>';
$singlePostSection .= '<li><a href="#"><i class="fab fa-twitter"></i></a></li>';
$singlePostSection .= '<li><a href="#"><i class="fab fa-whatsapp"></i></a></li>';
$singlePostSection .= '<li><a href="#"><i class="fab fa-reddit-alien"></i></a></li>';
$singlePostSection .= '<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>';
$singlePostSection .= '<li><a href="#"><i class="fab fa-flipboard"></i></a></li>';
$singlePostSection .= '<li>';
$singlePostSection .= '<a href="#">';
$singlePostSection .= '<svg width="28" height="24" xmlns="http://www.w3.org/2000/svg">';
$singlePostSection .= '<path  stroke-width="1.5" fill="none" d="M18.56.75c2.22 0 4.23.91 5.68 2.4a8.25 8.25 0 012.36 5.81h0v5.97c0 1.6-.45 3.09-1.22 4.36h0l1.38 3.58-3.79-1.07a7.884 7.884 0 01-4.41 1.34h0-9.77c-2.22 0-4.23-.92-5.68-2.4a8.25 8.25 0 01-2.36-5.81h0V8.96c0-2.27.9-4.33 2.36-5.81A7.891 7.891 0 018.79.75h0z"></path>';
$singlePostSection .= '</svg>';
$singlePostSection .= '</a>';
$singlePostSection .= '</li>';
$singlePostSection .= '</ul>';
$singlePostSection .= '</div>';
$singlePostSection .= '<div class="single_post_box">';
echo $singlePostSection;
the_content();
$singlePostSection = '<div class="authors_box single_page_author">';
$singlePostSection .= '<a href="' . get_author_posts_url($authorId) . '" class="author_img">';
$singlePostSection .= '<img src="' . get_avatar_url($authorId) . '">';
$singlePostSection .= '</a>';
$singlePostSection .= '<div class="author_cnt">';
$singlePostSection .= '<a href="' . get_author_posts_url($authorId) . '"><h3>' . get_the_author_meta('display_name', $authorId) . '</h3></a>';
$singlePostSection .= '<p>' . get_the_author_meta('description', $authorId) . '</p>';
$singlePostSection .= '</div>';
$singlePostSection .= '</div>';
echo $singlePostSection;
$singlePostSection = '</div>';
echo $singlePostSection;
$wp_rel_query = new WP_Query(array(
    "post_type" => "post",
    "orderby" => "id",
    "order" => "desc",
    "cat" => array($catFetch->term_id),
    "posts_per_page" => 6,

));
// print_r($wp_rel_query);
$relatedPostSection = '<div class="related_post_outer">';
$relatedPostSection .= '<h2>Related Post</h2>';
$relatedPostSection .= '<div class="row">';
echo $relatedPostSection;
$relateSinglePost = '';
if ($wp_rel_query->have_posts()) {
    while ($wp_rel_query->have_posts()) {
        $wp_rel_query->the_post();

        $relateSinglePost .= '<div class="col-lg-4 col-md-6">';
        $relateSinglePost .= '<a href="' . get_the_permalink() . '"';
        $relateSinglePost .= '<div class="relate_post_box">';
        $relateSinglePost .= '<div class="post_img_relate">';
        $relateSinglePost .= '<img src="' . $componentObj->getThumbnail(get_the_post_thumbnail_url()) . '" alt="">';
        $relateSinglePost .= '</div>';
        $relateSinglePost .= '<h3>' . get_the_title() . '</h3>';
        $relateSinglePost .= '</div>';
        $relateSinglePost .= '</a>';
        $relateSinglePost .= '</div>';
    }
}
echo $relateSinglePost;
$singlePostSection = '</div>';
$singlePostSection .= '</div>';
$singlePostSection .= '</div>';
echo $singlePostSection;
get_sidebar();
$singlePostSection = '</div>';
$singlePostSection .= '</div>';
$singlePostSection .= '</section>';
echo $singlePostSection;
get_footer();
