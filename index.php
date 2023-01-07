<?php
/** 
 * Hello admin site & user 
 * 
 * @package post update bot
 * @author mohammad bagheri
 * @copyright 2022 mohammad bagheri & t-ma.ir devloper 
 * @license GPL-2.0-or-later 
 * 
 * @mmbi18
 * Plugin Name:  post audio play
 * Plugin URI: https://t-ma.ir
 * Description: Prints "1401-05-01" in WordPress in post short code play [tmaaudiolist au='file1,file2'] [tmaaudiolistplay au='file1,file2'] [tmaaudio au='file.mp3'] 
 * Version: 0.0.1 
 * Author: mohammad bagheri
 * Author URI: https://t-ma.ir 
 * Text Domain: ir iran date in post 
 * License: GPL v2 or later 
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt */
// Add Shortcode



define('APFSURL', WP_PLUGIN_URL."/".dirname( plugin_basename( __FILE__ ) ) );
define('APFPATH', WP_PLUGIN_DIR."/".dirname( plugin_basename( __FILE__ ) ) );


if ( ! defined( 'ABSPATH' ) ) { 
    exit; // Exit if accessed directly
}


function tma_audio($atts) {
    // [datetmamj day=1 d4='-']
     $atts = shortcode_atts( array(
        'au' => 'https://imenkv.ir/wp-content/uploads/2022/05/کمترین-قیمت-حفاظ-درب-اپارتمان.mp3',
    ), $atts, 'tmaaudio' );
 
 $au=$atts['au'];

    include(plugin_dir_path( __FILE__ ) . '/au.php');
    
    return  ( $auhtml ) ;
    
}


function tma_audiolist($atts) {
    // [datetmamj day=1 d4='-']
     $atts = shortcode_atts( array(
        'au' => 'https://imenkv.ir/wp-content/uploads/2022/05/کمترین-قیمت-حفاظ-درب-اپارتمان.mp3,https://imenkv.ir/wp-content/uploads/2022/05/کمترین-قیمت-حفاظ-درب-اپارتمان.mp3',
    ), $atts, 'tmaaudio' );
 
 $aulist=explode(",",$atts['au']);
 
 
 //$au=$aulist[1];
 $au=$aulist[rand(0,count($aulist)-1)];

    include(plugin_dir_path( __FILE__ ) . '/au.php');
    
    return  ( $auhtml ) ;
    
}



function tma_audiolistplay($atts) {
    // [datetmamj day=1 d4='-']
     $atts = shortcode_atts( array(
        'au' => 'https://imenkv.ir/wp-content/uploads/2022/05/کمترین-قیمت-حفاظ-درب-اپارتمان.mp3,https://imenkv.ir/wp-content/uploads/2022/05/کمترین-قیمت-حفاظ-درب-اپارتمان.mp3',
    ), $atts, 'tmaaudio' );
 
 $aulist=explode(",",$atts['au']);
 
 
 //$au=$aulist[1];
 $au=$aulist[rand(0,count($aulist)-1)];

    include(plugin_dir_path( __FILE__ ) . '/autoplay.php');
    
    return  ( $auhtml ) ;
    
}

function register_shortcodestmaaudio(){

    
add_shortcode( 'tmaaudio', 'tma_audio' );

add_shortcode( 'tmaaudiolist', 'tma_audiolist' );


add_shortcode( 'tmaaudiolistplay', 'tma_audiolistplay' );
}
add_action( 'init', 'register_shortcodestmaaudio');