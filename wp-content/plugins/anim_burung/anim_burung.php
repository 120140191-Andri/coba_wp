<?php
/*
Plugin Name: Animasi Burung
Plugin URI: wa.me/6285366367457
Description: Animasi Burung.
Author: Andri Setiawan
Author URI: wa.me/6285366367457
Version: 0.1
*/

function anim_burung(){
  wp_enqueue_style('style', plugins_url('/css/anim_burung.css',__FILE__));
}
    
add_action('wp_enqueue_scripts', 'anim_burung');

?>
