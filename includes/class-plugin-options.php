<?php 
/**
 * Xe Products Filter functions and definitions.
 *
 * @package Xe Plugin
 */

if (!class_exists('Xe_Plugin_Options')) :

class Xe_Plugin_Options {

    public $plugin, $path, $url, 
    $inc, $ext, $srt, $css, $js, $img;

    function __construct() {

        require 'config.php';
        
    }

}
global $xe_plugin_opt;
$xe_plugin_opt = new Xe_Plugin_Options();

endif;