<?php
function get_thumbnail($post=null)
{
    $thumbnail = get_the_post_thumbnail_url($post);
    if ($thumbnail) {
        return $thumbnail;
    } else {
        return "/wp-content/themes/turistik/img/post_thumb/thumb_1.jpg";
    }
}

//добавляем меню
add_theme_support('menus');




