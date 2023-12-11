<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Slough_Music_Service
 */

$footerText = get_field('copyright_text', 'option');
$logo_one = get_field('logo_one', 'option');
$logo_two = get_field('logo_two', 'option');

?>

	<footer id="colophon" class="site-footer bg-darkpurple w-full p-4">
		<div class="site-info max-w-[80rem] mx-auto text-white flex xl:flex-row sm:flex-col flex-col justify-between my-4">
			<div class="flex flex-col mb-4 sm:mb-0">		
				<nav class="list text-lightpurple mb-4 flex sm:justify-start justify-center">
				<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-2',
										'menu_id'        => 'Secondary',
									)
								);
								?>
				</nav>
				<div class="flex sm:flex-row sm:justify-normal gap-2 flex-col justify-center text-center">
					<p><?php echo $footerText ?> </p>
						<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Website: %1$s by %2$s', 'slough-music-service' ), 'Slough Music Services', '<a href="https://ishmaelbennett.co.uk/">Mercury ink</a>' );
						?>
				</div>
			</div>
			<div class="flex flex-row gap-2 md:justify-end md:pt-4 justify-center sm:justify-end">
				<img src="<?php echo $logo_one ?>" class="h-[3.125rem]">
				<img src="<?php echo $logo_two ?>" class="h-[3.125rem]">
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
