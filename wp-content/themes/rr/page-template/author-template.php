<?php
/* Template Name: Author List */

get_header();
?>
<?php
$post_query = new WP_Query(array(
    "post_type" => "post",
    "posts_per_page" => 1,
    "orderby" => "id",
    "order" => "desc",
));
if ($post_query->have_posts()) {
    while ($post_query->have_posts()) {
        $post_query->the_post();
        $thumbnail = get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/images/GettyImages.jpg";
        $title = get_the_title();
        $excerpt = wp_trim_words(get_the_content(), 7, "...");
        $author = get_the_author();
        $permalink = get_the_permalink();
        $timeAgo = $adminObj->time_ago();
        echo $componentObj->topBannerStructure($thumbnail, $title, $excerpt, $author, $permalink, $timeAgo);

    }
}
?>

      <section class="celebrity_outer">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="cmn_heading">
                     <a href="#"><h2>Celebrity</h2></a>
                  </div>
                  <?php
$post_query = new WP_Query(array(
    "post_type" => "post",
    "posts_per_page" => 1,
    "orderby" => "id",
    "order" => "desc",
));
if ($post_query->have_posts()) {
    while ($post_query->have_posts()) {
        $post_query->the_post();
        $thumbnail = get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/images/GettyImages.jpg";
        $title = get_the_title();
        $excerpt = wp_trim_words(get_the_content(), 7, "...");
        $author = get_the_author();
        $permalink = get_the_permalink();
        $timeAgo = $adminObj->time_ago();
        echo $componentObj->topPostStructure($thumbnail, $title, $excerpt, $author, $permalink, $timeAgo);

    }
}
$paged = get_query_var('paged');

$post_test_query = new WP_Query(array(
    "post_type" => "post",
    "posts_per_page" => 8,
    'paged' => $paged,
));
if ($post_test_query->have_posts()) {
    while ($post_test_query->have_posts()) {
        $post_test_query->the_post();
        $thumbnail = get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/images/GettyImages.jpg";
        $title = get_the_title();
        $excerpt = wp_trim_words(get_the_content(), 7, "...");
        $author = get_the_author();
        $permalink = get_the_permalink();
        $timeAgo = $adminObj->time_ago();
        echo $componentObj->postGrid($thumbnail, $title, $excerpt, $author, $permalink, $timeAgo);
    }
    $total_pages = $post_test_query->max_num_pages;

    $big = 999999999; // need an unlikely integer

    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $post_test_query->max_num_pages,
    ));

}
wp_reset_postdata();
?>

                  <div class="pagination_box">
                     <ul>
                        <li><a href="#" class="current">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#" class="cmn_dot">...</a></li>
                        <li><a href="#">255</a></li>
                        <li><a href="#">Next</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="side_bar_celebrity_post">
                     <!-- <div class="add_box">
                        <div class="add_inner">Add Section</div>
                     </div> -->
                     <div class="box_post_top">
                        <div class="img_top_post">
                           <img src="<?php echo get_template_directory_uri() ?>/images/GettyImages.jpg" alt="">
                        </div>
                        <div class="txt_top_post">
                           <a href=""><h3>What does ‘rubber room stuff’ mean? Greg Jacob’s testimony explained</h3></a>
                           <a href="#" class="top_post_tag">BRUNO COOKE</a>
                           <!-- <div class="foot_post">
                              <p>4 hours ago</p>
                              <a href="#"><span class="cmnt_count"style="background-image: url(images/msg.png);">1</span>Comments</a>
                           </div> -->
                        </div>
                     </div>
                     <div class="box_post_top">
                        <div class="img_top_post">
                           <img src="<?php echo get_template_directory_uri() ?>/images/GettyImages.jpg" alt="">
                        </div>
                        <div class="txt_top_post">
                           <a href=""><h3>What does ‘rubber room stuff’ mean? Greg Jacob’s testimony explained</h3></a>
                           <a href="#" class="top_post_tag">BRUNO COOKE</a>
                        </div>
                     </div>
                     <div class="box_post_top">
                        <div class="img_top_post">
                           <img src="<?php echo get_template_directory_uri() ?>/images/GettyImages.jpg" alt="">
                        </div>
                        <div class="txt_top_post">
                           <a href=""><h3>What does ‘rubber room stuff’ mean? Greg Jacob’s testimony explained</h3></a>
                        </div>
                     </div>
                     <div class="box_post_top">
                        <div class="img_top_post">
                           <img src="<?php echo get_template_directory_uri() ?>/images/GettyImages.jpg" alt="">
                        </div>
                        <div class="txt_top_post">
                           <a href=""><h3>What does ‘rubber room stuff’ mean? Greg Jacob’s testimony explained</h3></a>
                           <a href="#" class="top_post_tag">BRUNO COOKE</a>
                        </div>
                     </div>
                     <div class="box_post_top">
                        <div class="img_top_post">
                           <img src="<?php echo get_template_directory_uri() ?>/images/GettyImages.jpg" alt="">
                        </div>
                        <div class="txt_top_post">
                           <a href=""><h3>What does ‘rubber room stuff’ mean? Greg Jacob’s testimony explained</h3></a>
                           <a href="#" class="top_post_tag">BRUNO COOKE</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Body End -->

      <?php
get_footer();
?>