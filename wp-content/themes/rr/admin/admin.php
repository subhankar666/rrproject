<?php
class AdminClass
{
    public function rrThemeSupport()
    {
        add_theme_support("title-tag");
        add_theme_support("post-thumbnails");
        add_theme_support("widgets");
        add_theme_support("menu");
        add_theme_support("custom-logo");
    }
    public function wpb_custom_new_menu()
    {
        register_nav_menu('primary-menu', __('Primary Menu'));
    }
    public function time_ago($type = 'post')
    {
        $d = 'comment' == $type ? 'get_comment_time' : 'get_post_time';

        return human_time_diff($d('U'), current_time('timestamp')) . " " . __('ago');

    }
    public function custom_pre_get_posts($query)
    {
        if ($query->is_main_query() && !$query->is_feed() && !is_admin() && is_category()) {
            $query->set('page_val', get_query_var('paged'));
            $query->set('paged', 0);
        }
        if ($query->is_main_query() && !$query->is_feed() && !is_admin() && is_tag()) {
            $query->set('page_val', get_query_var('paged'));
            $query->set('paged', 0);
        }
        if ($query->is_main_query() && !$query->is_feed() && !is_admin() && is_author()) {
            $query->set('page_val', get_query_var('paged'));
            $query->set('paged', 0);
        }
    }
    public function my_theme_custom_upload_mimes($existing_mimes)
    {
        $existing_mimes['svg'] = 'image/svg';
        return $existing_mimes;
    }
    public function wpdocs_theme_slug_widgets_init()
    {
        register_sidebar(array(
            'name' => __('Main Sidebar', 'textdomain'),
            'id' => 'sidebar-1',
            'description' => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget' => '</li>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
        ));

        register_sidebar(array(
            'name' => __('Footer 1', 'textdomain'),
            'id' => 'footer-sidebar1',
            'description' => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
            'before_widget' => false,
            'after_widget' => false,
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => __('Footer 2', 'textdomain'),
            'id' => 'footer-sidebar2',
            'description' => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
            'before_widget' => false,
            'after_widget' => false,
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => __('Footer 3', 'textdomain'),
            'id' => 'footer-sidebar3',
            'description' => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
            'before_widget' => false,
            'after_widget' => false,
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
        ));
    }

}

$adminObj = new AdminClass();
add_action('pre_get_posts', array($adminObj, 'custom_pre_get_posts'));
add_filter('mime_types', array($adminObj, 'my_theme_custom_upload_mimes'));
add_action('init', array($adminObj, 'wpb_custom_new_menu'));
add_action('widgets_init', array($adminObj, 'wpdocs_theme_slug_widgets_init'));
