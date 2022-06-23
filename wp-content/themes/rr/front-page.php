<?php
get_header();

$post_query = new WP_Query(array(
    "post_type" => "post",
    "orderby" => "id",
    "order" => "desc",
    "posts_per_page" => 1,
    'meta_key' => '_is_ns_featured_post',
    'meta_value' => 'yes',
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
        $timeAgo = $adminObj->time_ago();
        echo $componentObj->topBannerStructure($thumbnail, $title, $excerpt, $author, $authorLink, $permalink, $timeAgo);

    }
}
$fullSection = '<section class="celebrity_outer">';
$fullSection .= '<div class="container">';
$fullSection .= '<div class="row">';
$fullSection .= '<div class="col-md-8">';

echo $fullSection;
$post_query = new WP_Query(array(
    "post_type" => "post",
    "posts_per_page" => 1,
    "orderby" => "id",
    "order" => "desc",
));
if ($post_query->have_posts()) {
    while ($post_query->have_posts()) {

        $post_query->the_post();
        global $post;
        $category = get_the_category()[0];
        $authorId = $post->post_author;
        $authorLink = get_author_posts_url($authorId);
        $thumbnail = get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/images/GettyImages.jpg";
        $title = get_the_title();
        $excerpt = wp_trim_words(get_the_content(), 7, "...");
        $author = get_the_author();
        $permalink = get_the_permalink();
        $timeAgo = $adminObj->time_ago();
        $categoryHeadSection = '<div class="cmn_heading">';
        $categoryHeadSection .= '<a href="#"><h2>' . $category->name . '</h2></a>';
        $categoryHeadSection .= '</div>';
        echo $categoryHeadSection;
        echo $componentObj->topPostStructure($thumbnail, $title, $excerpt, $author, $authorLink, $permalink, $timeAgo);

    }
}
$paged = (get_query_var('page')) ? absint(get_query_var('page')) : 1;

$post_test_query = new WP_Query(array(
    "post_type" => "post",
    "posts_per_page" => 10,
    'offset' => 1,
    'paged' => $paged,
));
if ($post_test_query->have_posts()) {
    while ($post_test_query->have_posts()) {

        $post_test_query->the_post();
        global $post;
        $authorId = $post->post_author;
        $authorLink = get_author_posts_url($authorId);
        $thumbnail = get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/images/GettyImages.jpg";
        $title = get_the_title();
        $excerpt = wp_trim_words(get_the_content(), 7, "...");
        $author = get_the_author();
        $permalink = get_the_permalink();
        $timeAgo = $adminObj->time_ago();
        echo $componentObj->postGrid($thumbnail, $title, $excerpt, $author, $authorLink, $permalink, $timeAgo);
    }
    $total_pages = $post_test_query->max_num_pages;

    $big = 999999999; // need an unlikely integer

    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, $paged),
        'total' => $post_test_query->max_num_pages,
    ));

}
wp_reset_postdata();
$fullSection = '</div>';
echo $fullSection;
get_sidebar();
$fullSection .= '</div>';
$fullSection .= '</div>';
$fullSection = '</section>';
echo $fullSection;

get_footer();
