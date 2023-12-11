<?php
/**
 * Template part for displaying posts type events
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Slough_Music_Service
 */

$position = get_field('position');
$header_image = get_field('header_image');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<img src="<?php echo $header_image ?>" alt="slough music services header" class="z-0 w-full">
		<div class="bg-white z-10 mt-0 sm:mt-[-3.8rem] pt-16 relative px-12 rounded-t-[3rem]">
			
		</div>
		
	</header><!-- .entry-header -->

	

	<div class="entry-content container mx-auto mt-0 bg-white min-h-[45rem] px-4 xl:px-4">
	<div class="text-4xl mb-4 sm:justify-start px-4"><?php the_title( '<h1 class="entry-title justify-center sm:justify-start flex">', '</h1>' ); ?></div>
	<div class="text-smblue mb-4 justify-center sm:justify-start flex px-4"><?php echo $position ?></div>
	<div class="object-fill w-[21rem] sm:max-w-[21rem] [clip-path:circle(10.25rem_at_center)] sm:float-right sm:mx-0 mx-auto"><?php slough_music_service_post_thumbnail(); ?></div>
	<div class="grid grid-cols-1 px-4 xl:px-4">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'slough-music-service' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'slough-music-service' ),
				'after'  => '</div>',
			)
		);
		?>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php slough_music_service_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
