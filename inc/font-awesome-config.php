<?php

/*-------------------------------------------*/
/*  Load modules
/*-------------------------------------------*/
if ( ! class_exists( 'Vk_Font_Awesome_Versions' ) ) {
	require get_parent_theme_file_path( 'inc/font-awesome/class-vk-font-awesome-versions.php' );

	global $font_awesome_directory_uri;
	$font_awesome_directory_uri = plugins_url( '', __FILE__ ) . '/font-awesome/';

	global $vk_font_awesome_version_textdomain;
	$vk_font_awesome_version_textdomain = 'vkExUnit';

	global $set_enqueue_handle_style;
	$set_enqueue_handle_style = 'vkExUnit_common_style';

}
