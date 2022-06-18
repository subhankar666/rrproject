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
    }

}

$adminObj = new AdminClass();
add_action('pre_get_posts', array($adminObj, 'custom_pre_get_posts'));
