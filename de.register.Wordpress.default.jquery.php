<?php

// SCRIPT TO USE GOOGLE CDN (CONTENT DELIVERY NETWORK JQUERY AND REMOVE WORDPRESS VERSION OF JQUERY)

if( !is_admin()){
 
wp_deregister_script('jquery');
wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"), false, '1.3.2');
wp_enqueue_script('jquery');
}
 
 ?> 