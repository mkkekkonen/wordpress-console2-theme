<?php

function console2_widgets_init() {
	register_sidebar(array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
  ));
  
  register_sidebar(array(
		'name'          => 'Footer',
		'id'            => 'footer_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	));
};

wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
wp_enqueue_style('bootstrap-reboot', get_template_directory_uri().'/assets/css/bootstrap-reboot.min.css');
wp_enqueue_style('bootstrap-grid', get_template_directory_uri().'/assets/css/bootstrap-grid.min.css');
wp_enqueue_style('style', get_stylesheet_uri());

add_action('widgets_init', 'console2_widgets_init');

?>
