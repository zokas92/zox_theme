<?php
/**
 * Theme Functions.
 * 
 * @package Zox
 */

if ( ! defined('ZOX_DIR_PATH') ) {
    define('ZOX_DIR_PATH', untrailingslashit(get_template_directory() ) );
}
if ( ! defined('ZOX_DIR_URI')) {
    define('ZOX_DIR_URI', untrailingslashit(get_template_directory_uri() ) );
}
require_once ZOX_DIR_PATH . '/inc/helpers/autoloaders.php';

function zox_get_theme_instance() {
    \ZOX_THEME\Inc\ZOX_THEME::get_instance();
}
zox_get_theme_instance();

 function zox_enqueue_scripts() {

    
   
    
  
}
 
?>