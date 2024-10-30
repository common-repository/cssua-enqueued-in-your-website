<?php
/*
Plugin Name: CSSUA enqueued in your Website
Plugin URI:  http://www.theme-cafe.com/
Description: This plugin enqueues the cssua.js into the website which then adds all the Browser, OS and Device related classes to the HTML tag. Learn more about cssua.js at http://cssuseragent.org/. Thanks to author for building such a powerful javascript library.
Version:     1.0
Author:      ThemeCafe
Author URI:  http://www.theme-cafe.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: themecafe
*/

/**
 * This below code enqueues the
 * cssua.js into the website
 * which then do all the magic!
 * 
 * All the Credit goes to author for making
 * such a great javascript library. Visit
 * http://cssuseragent.org/ for
 * more inforamtion about the library.
 */

if( !class_exists( 'CSSUAEWS' ) ){
    /**
     * Class that enqueues the
     * the js.
     */
    class CSSUAEWS{
        /**
         * Constructor which calls the function
         * to enqueue the script.
         */
        public function __construct() {
            add_action( 'wp_enqueue_scripts', array( $this, 'cssuaews_enqueue_script' ) );
        }
        
        /**
         * The actual function which enqueues
         * the js file.
         */
        public function cssuaews_enqueue_script() {
            wp_enqueue_script( 'cssuaews-script', plugin_dir_url( __FILE__ ) . 'assets/cssua/cssua.min.js', array(), '2.1.31', true );
        }
    }
}

new CSSUAEWS();