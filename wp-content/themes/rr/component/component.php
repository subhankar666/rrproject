<?php
class rrComponent
{
    public function postGrid($thumbnail, $title, $excerpt, $author, $permalink, $timeAgo)
    {
        $postReturn = '<div class="box_post_top">';
        $postReturn .= '<div class="img_top_post">';
        $postReturn .= '<img src="' . $thumbnail . '" alt="">';
        $postReturn .= '</div>';
        $postReturn .= '<div class="txt_top_post">';
        $postReturn .= '<a href="' . $permalink . '"><h3>' . $title . '</h3></a>';
        $postReturn .= '<p>' . $excerpt . '</p>';
        $postReturn .= '<a href="#" class="top_post_tag">' . $author . '</a>';
        $postReturn .= '<div class="foot_post">';
        $postReturn .= '<p>' . $timeAgo . '</p>';
        // $postReturn .= '<a href="javascript:void(0)"><span class="cmnt_count"style="background-image: url(images/msg.png);">1</span>Comments</a>';
        $postReturn .= '</div>';
        $postReturn .= '</div>';
        $postReturn .= '</div>';
        return $postReturn;

    }
    public function topBannerStructure($thumbnail, $title, $excerpt, $author, $permalink, $timeAgo)
    {

        $postReturn = '<section class="top_post_outer">';
        $postReturn .= '<div class="container">';
        $postReturn .= '<div class="row">';
        $postReturn .= '<div class="col-12">';
        $postReturn .= '<div class="cntr_post_top">';
        $postReturn .= '<div class="box_post_top text-center">';
        $postReturn .= '<div class="img_top_post">';
        $postReturn .= '<span class="lable_tag">Featured</span>';
        $postReturn .= '<img src="' . $thumbnail . '" alt="">';
        $postReturn .= '</div>';
        $postReturn .= '<div class="txt_top_post">';
        $postReturn .= '<a href="' . $permalink . '"><h3>' . $title . '</h3></a>';
        $postReturn .= '<a href="#" class="top_post_tag">' . $author . '</a>';
        $postReturn .= '<div class="foot_post">';
        $postReturn .= ' <p>' . $timeAgo . '</p>';
        // $postReturn.='<a href="#"><span class="cmnt_count"style="background-image: url(images/msg.png);">1</span>Comments</a>';
        $postReturn .= '</div>';
        $postReturn .= '</div>';
        $postReturn .= '</div>';
        $postReturn .= '</div>';
        $postReturn .= '</div>';
        $postReturn .= '</div>';
        $postReturn .= '</div>';
        $postReturn .= '</section>';

        return $postReturn;

    }
    public function topPostStructure($thumbnail, $title, $excerpt, $author, $permalink, $timeAgo)
    {
        $postReturn = '<div class="box_post_top img_full">';
        $postReturn .= '<div class="img_top_post">';
        $postReturn .= '<img src="' . $thumbnail . '" alt="">';
        $postReturn .= '</div>';
        $postReturn .= '<div class="txt_top_post">';
        $postReturn .= '<a href="' . $permalink . '"><h3>' . $title . '</h3></a>';
        $postReturn .= '<p>' . $excerpt . '</p>';
        $postReturn .= '<a href="#" class="top_post_tag">' . $author . '</a>';
        $postReturn .= '<div class="foot_post">';
        $postReturn .= '<p>' . $timeAgo . '</p>';
        // $postReturn .= '<a href="#"><span class="cmnt_count"style="background-image: url(images/msg.png);">1</span>Comments</a>';
        $postReturn .= '</div>';
        $postReturn .= '</div>';
        $postReturn .= '</div>';

        return $postReturn;

    }
}

$componentObj = new rrComponent();
