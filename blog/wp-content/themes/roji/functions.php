<?php
/*
Author: Jairus Aragon
URL: http://www.wearemanic.com/

*/


function my_theme_enqueue_styles() {
  $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( $parent_style ),
    wp_get_theme()->get('Version')
  );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );



/************* INCLUDE NEEDED FILES ***************/


define('THEMEROOT', get_stylesheet_directory_uri());
define('DEBUG', true);
// define('DEBUG', false);

define('PREFIX', '_monogram_');



// upload larger images
ini_set( 'upload_max_size' , '64M' );
ini_set( 'post_max_size', '64M');
ini_set( 'max_execution_time', '300' );

// removes the default limit of 5 from the search results and archives/tags
function search_results_per_page( $query ) {
  if( $query->is_search )
    $query->set( 'posts_per_page' , -1 );
  return $query;
}
add_filter( 'pre_get_posts' , 'search_results_per_page' );


function limit_posts_per_archive_page() {
  if ( is_category() )
    set_query_var('posts_per_archive_page', -1); // or use variable key: posts_per_page
}
add_filter('pre_get_posts', 'limit_posts_per_archive_page');


// function add_custom_admin_css(){
//   wp_register_style( 'manic-custom-admin-stylesheet', THEMEROOT . '/assets/css/admin.css', array(), '');
//   wp_enqueue_style( 'manic-custom-admin-stylesheet' );
// }
// add_action ('admin_head', 'add_custom_admin_css');



function manic_script_and_styles(){
  global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  if (!is_admin()) {

    wp_deregister_script('jquery');         // add jquery manually (compressed)
    wp_deregister_script( 'wp-embed' );

  }
}






// cleaning up head
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );




//    ___ __  __    _    ____ _____
//   |_ _|  \/  |  / \  / ___| ____|
//    | || |\/| | / _ \| |  _|  _|
//    | || |  | |/ ___ \ |_| | |___
//   |___|_|  |_/_/   \_\____|_____|
//

// 640 width = 2X for mobile devices
// 1152 width = 768 x 1.5 for tablet

add_image_size( 'manic-mobile', 640, 9999, false );
add_image_size( 'manic-tablet', 1152, 9999, false );

add_filter( 'image_size_names_choose', 'bones_custom_image_sizes' );

function bones_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'manic-mobile' => __('640px by ___ px'),
        'manic-tablet' => __('1152px by ___ px'),
    ) );
}




//    __  __ _____ _   _ _   _
//   |  \/  | ____| \ | | | | |
//   | |\/| |  _| |  \| | | | |
//   | |  | | |___| |\  | |_| |
//   |_|  |_|_____|_| \_|\___/
//

// registering wp3+ menus
register_nav_menus(
  array(
    'desktop-menu' => 'Desktop Menu',
    'mobile-menu' => 'Mobile Menu',
    'footer-menu' => 'Footer Menu'
  )
);



// http://wordpress.stackexchange.com/questions/226884/wordpress-add-javascriptvoid0-to-menu-link-item

// add_filter('walker_nav_menu_start_el', 'wpse_226884_replace_hash', 999);
/**
 * Replace # with js
 * @param string $menu_item item HTML
 * @return string item HTML
 */
// function wpse_226884_replace_hash($menu_item) {
//   if (strpos($menu_item, 'href="#"') !== false) {
//     $menu_item = str_replace('href="#"', 'href="javascript:void(0);"', $menu_item);
//   }
//   return $menu_item;
// }


//    _____  _    ____ ____
//   |_   _|/ \  / ___/ ___|
//     | | / _ \| |  _\___ \
//     | |/ ___ \ |_| |___) |
//     |_/_/   \_\____|____/
//

// https://wordpress.org/support/topic/custom-post-type-tagscategories-archive-page

// function query_post_type($query) {
//   if(is_category() || is_tag()) {
//     $post_type = get_query_var('post_type');
//   if($post_type)
//       $post_type = $post_type;
//   else
//       $post_type = array('post','case-study'); // replace cpt to your custom post type
//     $query->set('post_type',$post_type);
//   return $query;
//     }
// }
// add_filter('pre_get_posts', 'query_post_type');




// http://wordpress.stackexchange.com/questions/179585/remove-category-tag-author-from-the-archive-title

// function custom_get_archive_title($title) {

//   if ( is_category() ) {

//     $title = single_cat_title( '', false );

//   } elseif ( is_tag() ) {

//     $title = single_tag_title( '', false );

//   } elseif ( is_author() ) {

//     $title = '<span class="vcard">' . get_the_author() . '</span>' ;

//   }

//   return $title;
// }
// add_filter('get_the_archive_title', 'custom_get_archive_title');




// add except to pages
// http://www.wpbeginner.com/plugins/add-excerpts-to-your-pages-in-wordpress/

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
  add_post_type_support( 'page', 'excerpt' );
}











//    ____ ___ ____  _____ ____    _    ____
//   / ___|_ _|  _ \| ____| __ )  / \  |  _ \
//   \___ \| || | | |  _| |  _ \ / _ \ | |_) |
//    ___) | || |_| | |___| |_) / ___ \|  _ <
//   |____/___|____/|_____|____/_/   \_\_| \_\
//

if (function_exists("register_sidebar")) {
  register_sidebar(array(
    'name'          => 'Site Sidebar',
    'id'            => "site-sidebar",
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => "</li>\n",
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => "</h2>\n",
  ));
}




//    ____  _   _  ___  ____ _____ ____ ___  ____  _____
//   / ___|| | | |/ _ \|  _ \_   _/ ___/ _ \|  _ \| ____|
//   \___ \| |_| | | | | |_) || || |  | | | | | | |  _|
//    ___) |  _  | |_| |  _ < | || |__| |_| | |_| | |___
//   |____/|_| |_|\___/|_| \_\|_| \____\___/|____/|_____|
//






//     ___  ____ _____ ___ ___  _   _ ____
//    / _ \|  _ \_   _|_ _/ _ \| \ | / ___|
//   | | | | |_) || |  | | | | |  \| \___ \
//   | |_| |  __/ | |  | | |_| | |\  |___) |
//    \___/|_|    |_| |___\___/|_| \_|____/
//

// require_once( '_theme_options_cmb.php' );





// remove auto br
// https://premium.wpmudev.org/forums/topic/how-to-remove-auto-br-tag-in-posts?utm_expid=3606929-90.6a_uo883STWy99lnGf8x1g.0&utm_referrer=https%3A%2F%2Fwww.google.com.sg%2F
// remove_filter( 'the_content', 'wpautop' );
// remove_filter ('the_excerpt', 'wpautop');
// remove_filter('the_excerpt', 'wptexturize');


// http://stackoverflow.com/questions/2544870/remove-main-editor-from-wordpress-edit-page-screen
function remove_editor() {
  remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor');


// https://developer.wordpress.org/reference/functions/add_editor_style/
function wpdocs_theme_add_editor_styles() {
  add_editor_style( 'https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i,900' );
  add_editor_style( THEMEROOT . '/assets/css/wysiwyg.css' );

}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );




// function fix_nav_menu( $query ) {
//     if ( $query->get( 'post_type' ) === 'nav_menu_item' ) {
//         $query->set( 'tax_query', '' );
//         $query->set( 'meta_key', '' );
//         $query->set( 'orderby', '' );
//     }
// }

// add_action( 'pre_get_posts', 'fix_nav_menu' );

// remove_filter( 'the_content', 'wpautop' );


//     ____  ____  ___________   ________  ____  ____  _______  _   _____    ______
//    / __ \/ __ \/ ___/_  __/  /_  __/ / / / / / /  |/  / __ )/ | / /   |  /  _/ /
//   / /_/ / / / /\__ \ / /      / / / /_/ / / / / /|_/ / __  /  |/ / /| |  / // /
//  / ____/ /_/ /___/ // /      / / / __  / /_/ / /  / / /_/ / /|  / ___ |_/ // /___
// /_/    \____//____//_/      /_/ /_/ /_/\____/_/  /_/_____/_/ |_/_/  |_/___/_____/
//

if(function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(940, 346);
}

//     ___    ____  ____     _____ _______________________   ________   __________________    ____
//    /   |  / __ \/ __ \   / ___// ____/_  __/_  __/  _/ | / / ____/  / ____/  _/ ____/ /   / __ \
//   / /| | / / / / / / /   \__ \/ __/   / /   / /  / //  |/ / / __   / /_   / // __/ / /   / / / /
//  / ___ |/ /_/ / /_/ /   ___/ / /___  / /   / / _/ // /|  / /_/ /  / __/ _/ // /___/ /___/ /_/ /
// /_/  |_/_____/_____/   /____/_____/ /_/   /_/ /___/_/ |_/\____/  /_/   /___/_____/_____/_____/
//

add_filter('admin_init', 'my_general_settings_register_fields');
 
function my_general_settings_register_fields()
{
    register_setting('general', 'about_title', 'esc_attr');
    add_settings_field('about_title', '<label for="about_title">'.__('About Title' , 'about_title' ).'</label>' , 'my_general_settings_fields_html', 'general');
}
 
function my_general_settings_fields_html()
{
    $value = get_option( 'about_title', '' );
    echo '<input type="text" id="about_title" name="about_title" value="' . $value . '" />';
}

add_filter('admin_init', 'my_general_settings_register_fields_2');
 
function my_general_settings_register_fields_2()
{
    register_setting('general', 'about_desc', 'esc_attr');
    add_settings_field('about_desc', '<label for="about_desc">'.__('About Desc' , 'about_desc' ).'</label>' , 'my_general_settings_fields_html_2', 'general');
}
 
function my_general_settings_fields_html_2()
{
    $value = get_option( 'about_desc', '' );
    echo '<textarea id="about_desc" name="about_desc" rows="10" cols="50">' . $value . '</textarea>';
}
?>