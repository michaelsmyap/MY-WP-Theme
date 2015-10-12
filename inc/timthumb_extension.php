<?php


// Resize Image 
function hs_resize_image ($src, $width = 0, $height = 0, $zoom = 1, $echo_content = true) {
    if($width == 0) :
        $src = get_stylesheet_directory_uri() . "/timthumb.php?src=" . $src . "&h=" . $height. "&zc=" . $zoom;
    elseif($height == 0) :
        $src = get_stylesheet_directory_uri() . "/timthumb.php?src=" . $src. "&w=" . $width. "&zc=" . $zoom;
    else :
        $src = get_stylesheet_directory_uri() . "/timthumb.php?src=" . $src. "&w=" . $width. "&h=" . $height. "&zc=" . $zoom;
    endif;
    if($echo_content) {
        echo $src;
    } else {
        return $src;
    }
}
