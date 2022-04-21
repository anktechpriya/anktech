<?php
//count the length of excerpt
function custom_excerpt_length($length){
    $length = 20;
    return $length;
}
add_filter('excerpt_length', 'custom_excerpt_length');

//replace '...' from excerpt
function nd_dosth_custom_excerpt_more() {
    return '#####';
}
add_filter( 'excerpt_more', 'nd_dosth_custom_excerpt_more' );