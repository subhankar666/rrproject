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

}

$adminObj = new AdminClass();
add_action('pre_get_posts', array($adminObj, 'custom_pre_get_posts'));
add_filter('mime_types', array($adminObj, 'my_theme_custom_upload_mimes'));
