<?php
// Support for localization
load_theme_textdomain('travelogue', get_template_directory() . '/languages');

// The New Dynamic Sidebar
if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Main Sidebar (Left)',
        'before_widget' => '<div class="boxhead_cont">',
    	'after_widget' => '</div></div>',
 		'before_title' => '<div class="boxhead"><h3>',
        'after_title' => '</h3></div>
			</div>
			<div class="boxbody_cont">
				<div class="boxbody">',
    ));

if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Mini Sidebar (Right)',
        'before_widget' => '<div class="mini_sidebar_widget_cont">',
    	'after_widget' => '</div>',
 		'before_title' => '<div><span class="mini_title">',
        'after_title' => '</span></div>',
    ));
	
/* Test to determine if a particular sidebar has widgets or not, to output the layer container. */

function is_sidebar_active( $index = 1){
	$sidebars	= wp_get_sidebars_widgets();
	$key		= (string) 'sidebar-'.$index;

	return (isset($sidebars[$key]));
}

?>