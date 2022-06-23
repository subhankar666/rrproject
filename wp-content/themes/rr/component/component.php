<?php
class rrComponent
{
    public function postGrid($thumbnail, $title, $excerpt, $author, $authorLink, $permalink, $timeAgo)
    {
        $postReturn = '<div class="box_post_top">';
        $postReturn .= '<div class="img_top_post">';
        $postReturn .= '<img src="' . $thumbnail . '" alt="">';
        $postReturn .= '</div>';
        $postReturn .= '<div class="txt_top_post">';
        $postReturn .= '<a href="' . $permalink . '"><h3>' . $title . '</h3></a>';
        $postReturn .= '<p>' . $excerpt . '</p>';
        $postReturn .= '<a href="' . $authorLink . '" class="top_post_tag">' . $author . '</a>';
        $postReturn .= '<div class="foot_post">';
        $postReturn .= '<p>' . $timeAgo . '</p>';
        // $postReturn .= '<a href="javascript:void(0)"><span class="cmnt_count"style="background-image: url(images/msg.png);">1</span>Comments</a>';
        $postReturn .= '</div>';
        $postReturn .= '</div>';
        $postReturn .= '</div>';
        return $postReturn;

    }
    public function getThumbnail($thumbnail)
    {
        $relThumbmail = !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/images/GettyImages.jpg";
        return $relThumbmail;
    }
    public function topBannerStructure($thumbnail, $title, $excerpt, $author, $authorLink, $permalink, $timeAgo)
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
        $postReturn .= '<a href="' . $authorLink . '" class="top_post_tag">' . $author . '</a>';
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
    public function topPostStructure($thumbnail, $title, $excerpt, $author, $authorLink, $permalink, $timeAgo)
    {
        $postReturn = '<div class="box_post_top img_full">';
        $postReturn .= '<div class="img_top_post">';
        $postReturn .= '<img src="' . $thumbnail . '" alt="">';
        $postReturn .= '</div>';
        $postReturn .= '<div class="txt_top_post">';
        $postReturn .= '<a href="' . $permalink . '"><h3>' . $title . '</h3></a>';
        $postReturn .= '<p>' . $excerpt . '</p>';
        $postReturn .= '<a href="' . $authorLink . '" class="top_post_tag">' . $author . '</a>';
        $postReturn .= '<div class="foot_post">';
        $postReturn .= '<p>' . $timeAgo . '</p>';
        // $postReturn .= '<a href="#"><span class="cmnt_count"style="background-image: url(images/msg.png);">1</span>Comments</a>';
        $postReturn .= '</div>';
        $postReturn .= '</div>';
        $postReturn .= '</div>';

        return $postReturn;

    }
    public function authorList($users)
    {
        $usersReturn = "";
        foreach ($users as $user) {
            $userBio = wp_trim_words(get_the_author_meta('description', $user->ID), 30, "...");
            $userAvatar = get_avatar_url($user->ID, array("size" => 178));
            $userUrl = get_author_posts_url($user->ID);
            $usersReturn .= '<div class="authors_box">';
            $usersReturn .= '<a href="' . $userUrl . '" class="author_img">';
            $usersReturn .= '<img src="' . $userAvatar . '">';
            $usersReturn .= '</a>';
            $usersReturn .= '<div class="author_cnt">';
            $usersReturn .= '<a href="' . $userUrl . '"><h3>' . $user->display_name . '</h3></a>';
            $usersReturn .= '<div class="author_social_hndl">';
            $usersReturn .= '<a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a>';
            $usersReturn .= '<a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a>';
            $usersReturn .= '<a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a>';
            $usersReturn .= '<a href="javascript:void(0)"><i class="fab fa-instagram-square"></i></a>';
            $usersReturn .= '</div>';
            $usersReturn .= '<p>' . $userBio . '</p>';
            $usersReturn .= '</div>';
            $usersReturn .= '</div>';
        }

        return $usersReturn;

    }
    public function authorPostList($thumbnail, $title, $excerpt, $author, $authorLink, $permalink, $date, $month)
    {
        $authorPostReturn = '<div class="box_post_top">';
        $authorPostReturn .= '<div class="date">';
        $authorPostReturn .= '<span>' . $month . '</span>';
        $authorPostReturn .= '<span>' . $date . '</span>';
        $authorPostReturn .= '</div>';
        $authorPostReturn .= '<div class="img_top_post">';
        $authorPostReturn .= '<img src="' . $thumbnail . '" alt="">';
        $authorPostReturn .= '</div>';
        $authorPostReturn .= '<div class="txt_top_post">';
        $authorPostReturn .= '<a href="' . $permalink . '"><h3>' . $title . '</h3></a>';
        $authorPostReturn .= '<div class="foot_post">';
        $authorPostReturn .= '</div>';
        $authorPostReturn .= '</div>';
        $authorPostReturn .= '</div>';
        return $authorPostReturn;
    }
    public static function logoFetch($customLogoId, $headerClass)
    {
        $logo = wp_get_attachment_image_src($customLogoId, "full");
        $logoUrl = $logo[0];
        $logoReturn = '<a href="' . site_url('/') . '" class="' . $headerClass . '">';
        $logoReturn .= '<img src="' . $logoUrl . '" alt="Logo">';
        $logoReturn .= '</a>';
        return $logoReturn;

    }
}

$componentObj = new rrComponent();
