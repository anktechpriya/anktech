<?php

add_theme_support( 'post-thumbnails' );

register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );

function custom_style()
{
	 wp_enqueue_style('custom-style', get_stylesheet_uri());
	 wp_enqueue_style('style-css-style', get_stylesheet_directory_uri() . '/css/style.css');
     wp_enqueue_style('custom-css-style', get_stylesheet_directory_uri() . '/css/custom.css');
	 wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js' );
}
add_action('wp_enqueue_scripts', 'custom_style');



add_action( 'category_add_form_fields', 'add_category_image', 10, 2 );
function add_category_image ( $taxonomy ) {
?>
    <div class="form-field term-group">

        <label for="image_id"><?php _e('Image', 'taxt-domain'); ?></label>
        <input type="hidden" id="image_id" name="image_id" class="custom_media_url" value="">

        <div id="image_wrapper"></div>

        <p>
            <input type="button" class="button button-secondary taxonomy_media_button" id="taxonomy_media_button" name="taxonomy_media_button" value="<?php _e( 'Add Image', 'taxt-domain' ); ?>">
            <input type="button" class="button button-secondary taxonomy_media_remove" id="taxonomy_media_remove" name="taxonomy_media_remove" value="<?php _e( 'Remove Image', 'taxt-domain' ); ?>">
        </p>

    </div>
<?php
}

add_action( 'created_category', 'save_category_image', 10, 2 );
function save_category_image ( $term_id, $tt_id ) {
    if( isset( $_POST['image_id'] ) && '' !== $_POST['image_id'] ){
     $image = $_POST['image_id'];
     add_term_meta( $term_id, 'category_image_id', $image, true );
    }
}

add_action( 'category_edit_form_fields', 'update_category_image', 10, 2 );
function update_category_image ( $term, $taxonomy ) { ?>
    <tr class="form-field term-group-wrap">
        <th scope="row">
            <label for="image_id"><?php _e( 'Image', 'taxt-domain' ); ?></label>
        </th>
        <td>

            <?php $image_id = get_term_meta ( $term -> term_id, 'image_id', true ); ?>
            <input type="hidden" id="image_id" name="image_id" value="<?php echo $image_id; ?>">

            <div id="image_wrapper">
            <?php if ( $image_id ) { ?>
               <?php echo wp_get_attachment_image ( $image_id, 'thumbnail' ); ?>
            <?php } ?>

            </div>

            <p>
                <input type="button" class="button button-secondary taxonomy_media_button" id="taxonomy_media_button" name="taxonomy_media_button" value="<?php _e( 'Add Image', 'taxt-domain' ); ?>">
                <input type="button" class="button button-secondary taxonomy_media_remove" id="taxonomy_media_remove" name="taxonomy_media_remove" value="<?php _e( 'Remove Image', 'taxt-domain' ); ?>">
            </p>

        </div></td>
    </tr>
<?php
}

add_action( 'edited_category', 'updated_category_image', 10, 2 );
function updated_category_image ( $term_id, $tt_id ) {
    if( isset( $_POST['image_id'] ) && '' !== $_POST['image_id'] ){
        $image = $_POST['image_id'];
        update_term_meta ( $term_id, 'image_id', $image );
    } else {
        update_term_meta ( $term_id, 'image_id', '' );
    }
}

add_action( 'admin_enqueue_scripts', 'load_media' );
function load_media() {
    wp_enqueue_media();
}

add_action( 'admin_footer', 'add_custom_script' );
function add_custom_script() {
    ?> <script>jQuery(document).ready( function($) {
            function taxonomy_media_upload(button_class) {
                var custom_media = true,
                original_attachment = wp.media.editor.send.attachment;
                $('body').on('click', button_class, function(e) {
                    var button_id = '#'+$(this).attr('id');
                    var send_attachment = wp.media.editor.send.attachment;
                    var button = $(button_id);
                    custom_media = true;
                    wp.media.editor.send.attachment = function(props, attachment){
                        if ( custom_media ) {
                            $('#image_id').val(attachment.id);
                            $('#image_wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
                            $('#image_wrapper .custom_media_image').attr('src',attachment.url).css('display','block');
                        } else {
                            return original_attachment.apply( button_id, [props, attachment] );
                        }
                    }
                    wp.media.editor.open(button);
                    return false;
                });
            }
            taxonomy_media_upload('.taxonomy_media_button.button'); 
            $('body').on('click','.taxonomy_media_remove',function(){
                $('#image_id').val('');
                $('#image_wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
            });

            $(document).ajaxComplete(function(event, xhr, settings) {
                var queryStringArr = settings.data.split('&');
                if( $.inArray('action=add-tag', queryStringArr) !== -1 ){
                    var xml = xhr.responseXML;
                    $response = $(xml).find('term_id').text();
                    if($response!=""){
                        $('#image_wrapper').html('');
                    }
                }
            });
        });</script> <?php 
}

add_filter( 'manage_edit-category_columns', 'display_image_column_heading' ); 
function display_image_column_heading( $columns ) {
    $columns['category_image'] = __( 'Image', 'taxt-domain' );
    return $columns;
}

add_action( 'manage_category_custom_column', 'display_image_column_value' , 10, 3); 
function display_image_column_value( $columns, $column, $id ) {
    if ( 'category_image' == $column ) {
    	$image_id = esc_html( get_term_meta($id, 'image_id', true) );
    	
        $columns = wp_get_attachment_image ( $image_id, array('50', '50') );
    }
    return $columns;
}

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

//hide updation of plugin
remove_action( 'load-update-core.php', 'wp_update_plugins' );

add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );

//deactivation of plugin
function deactivate_plugin_conditional() {
    if ( is_plugin_active('advanced-custom-fields-pro/acf.php') ) {
    deactivate_plugins('advanced-custom-fields-pro/acf.php');    
    }
}
add_action( 'admin_init', 'deactivate_plugin_conditional' );

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

function stefan_wrap_comment_text($content) {
    return "<div class=\"comment-text\">". $content ."</div>";
}
add_filter('comment_text', 'stefan_wrap_comment_text');

//changed login url
function logo_url($url){
    return "http://priyakitchen.local/";
}
add_filter("login_headerurl","logo_url");

//changed logo title
function logo_title(){
    return "priya kitchen";
}
add_filter("login_headertitle","logo_title");

// Creating the widget
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