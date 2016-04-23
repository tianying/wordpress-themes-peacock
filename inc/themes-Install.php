<?php

/**
 * Register Themes Install
 */


// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'primary' => 'mainmenu',
	'top' => 'topmenu',
	'footer' => 'footermenu',
	'secondary' => 'friendshiplink'
));
