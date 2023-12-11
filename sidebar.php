<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Slough_Music_Service
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area h-full p-4 bg-[url('/wp-content/uploads/2023/11/Bg-purple-note-001.jpg')] bg-repeat object-cover rounded-[3rem] mx-auto">
	<div class="lg:max-w-[18.75rem] md:max-w-[23.75rem] mx-auto text-2xl text-white">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</aside><!-- #secondary -->
