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
}

$adminObj = new AdminClass();
