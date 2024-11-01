<?php
/*
Plugin Name: WP Random Header
Plugin URI: http://www.callum-macdonald.com/code/wp-random-header/
Description: Randomly chooses a header image for compatible themes (like twentyten or twentyeleven). Header images are chosen from wp-content/header-images/ and are set via the theme_mod_header_image filter.
Version: 0.2.0
Author: Callum Macdonald
Author URI: http://www.callum-macdonald.com/
*/

add_filter('theme_mod_header_image', 'wprh_theme_mod_header_image');

if (!function_exists('wprh_theme_mod_header_image')):
function wprh_theme_mod_header_image($default) {
	
	if (defined('WPRH_HEADER_IMAGE'))
		return WPRH_HEADER_IMAGE;
	
	$dir_path = WP_CONTENT_DIR . '/header-images';

	// If wp-content/header-images does not exist, do nothing
	if (!is_dir($dir_path))
		return $default;
	
	$dir_handle = opendir($dir_path);
	
	while (false !== ($file_name = readdir($dir_handle))) {
		if ($file_name != '.' && $file_name != '..')
			$header_images[] = $file_name;
	}
	
	// If there are no files, return now
	if (!isset($header_images) || count($header_images) < 1)
		return $default;
	
	// Let's choose one of the files and set it as the header
	$header_url = WP_CONTENT_URL . '/header-images/' . array_rand(array_flip($header_images));
	
	// Set this as a constant so we can check for it on subsequent calls
	define('WPRH_HEADER_IMAGE', $header_url);
	
	return $header_url;
	
}
endif;

?>
