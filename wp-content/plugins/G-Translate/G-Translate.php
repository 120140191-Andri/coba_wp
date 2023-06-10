<?php
/*
Plugin Name: G-Translate
Plugin URI: wa.me/6285366367457
Description: Plugin untuk Translate
Author: Andri Setiawan
Author URI: wa.me/6285366367457
Version: 0.1
*/
    add_action( 'wp_footer', 'tampilTranslate');
    function tampilTranslate () {
?>
    <div class="box-translate">
        <div class="isi-translate" id="google_translate_element"></div>
    </div>
<?php 
    }
    
    function G_Translate_assets(){
        wp_enqueue_style('style', plugins_url('/css/G-Translate.css',__FILE__));
        wp_enqueue_script('script', plugins_url('/js/G-Translate.js',__FILE__));
    }
    add_action('wp_enqueue_scripts', 'G_Translate_assets');
?>