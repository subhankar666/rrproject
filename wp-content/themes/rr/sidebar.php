<?php
$sidebarSection = '<div class="col-md-4">';
$sidebarSection .= '<div class="side_bar_celebrity_post">';
echo $sidebarSection;
$wp_sidebar_query = new WP_Query(array(
    "post_type" => "post",
    "posts_per_page" => 5,
    "orderby" => "id",
    "order" => "desc",
));
$wpSidebarSingle = '';
if ($wp_sidebar_query->have_posts()) {
    while ($wp_sidebar_query->have_posts()) {
        $wp_sidebar_query->the_post();
        global $post;
        $authorId = $post->post_author;
        $authorLink = get_author_posts_url($authorId);
        $thumbnail = get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/images/GettyImages.jpg";
        $wpSidebarSingle .= '<div class="box_post_top">';
        $wpSidebarSingle .= '<div class="img_top_post">';
        $wpSidebarSingle .= '<img src="' . $thumbnail . '" alt="">';
        $wpSidebarSingle .= '</div>';
        $wpSidebarSingle .= '<div class="txt_top_post">';
        $wpSidebarSingle .= '<a href=""><h3>' . get_the_title() . '</h3></a>';
        $wpSidebarSingle .= '<a href="' . $authorLink . '" class="top_post_tag">' . get_the_author() . '</a>';
        $wpSidebarSingle .= '</div>';
        $wpSidebarSingle .= '</div>';

    }
}
echo $wpSidebarSingle;
dynamic_sidebar('sidebar-1');
$sidebarSection = '</div>';
$sidebarSection .= '</div>';
echo $sidebarSection;
