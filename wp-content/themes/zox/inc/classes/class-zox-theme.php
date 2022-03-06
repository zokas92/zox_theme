<?php
/**
 * 
 * Bootstraps the Theme. 
 * 
 * @package Zox
 */

namespace ZOX_THEME\Inc;

use ZOX_THEME\Inc\Traits\Singleton;

class ZOX_THEME {
    
    use Singleton;
    protected function __construct() {

        Assets::get_instance();
        // load class.

        $this -> setup_hooks();
    }

    protected function setup_hooks() {
      /**
       * Actions.
       */
     
    }

   

}