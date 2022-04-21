<?php
if (function_exists('register_sidebar')) {

register_sidebar(array(

'name' => 'Custom Widgets',
'id'   => 'custom-widgets',
'description'   => '',
'before_widget' => '<div id="one">',
'after_widget'  => '</div>',
'before_title'  => '<h2>',
'after_title'   => '</h2>'
));
}