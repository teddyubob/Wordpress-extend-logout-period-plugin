<?php
/*
Plugin Name: LOGOUT EXPIRE EXTEND
Description: Extend logout expiration period
Wordpress Version: 5.7.2
Version: 0.1
Author: Teddy
*/
add_filter( 'auth_cookie_expiration', 'custom_cookie_expiration' );
function custom_cookie_expiration() {
    return 15780000; // 6 months
}
