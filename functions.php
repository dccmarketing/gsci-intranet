<?php

/** _________________________ Register Menus _________________________ */
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );



/** _________________________ Brand WP Login Page _________________________ */
	function customize_login_url($url) {return get_bloginfo( 'url' );}
	function customize_login_title() {return get_option('blogname');}
	function customize_login_logo() { 
		echo '<style type="text/css">
			.login h1 a { 
			background-image:url(/images/logo.png) !important; 
			background-position: center center !important;
			background-size: 311px 137px;
			width: 311px !important;
			height: 137px !important;
		} </style>'; 
	}
	add_filter('login_headerurl', 'customize_login_url');
	add_filter('login_headertitle', 'customize_login_title');
	add_action('login_head', 'customize_login_logo');	


/** _________________________ Register Widgets _________________________ */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Staff',
		'id' => 'staff',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Staff 2',
		'id' => 'staff2',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Staff 3',
		'id' => 'staff3',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Events',
		'id' => 'events',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Home Page Forum',
		'id' => 'homepage',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );



?>