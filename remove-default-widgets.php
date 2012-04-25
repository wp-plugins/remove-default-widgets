<?php
/*
Plugin Name: Remove Default Widgets
Plugin URI: http://wordpress.org/extend/plugins/remove-default-widgets/
Description: Prevents WordPress from registering its default widgets.
Author: Konstantin Kovshenin
Author URL: http://kovshenin.com
Version: 1.0
*/

/* Yes, a three liner! */
remove_action( 'init', 'wp_widgets_init', 1 );
add_action( 'init', 'rdw_do_widgets_init', 1 );
function rdw_do_widgets_init() { do_action( 'widgets_init' ); }