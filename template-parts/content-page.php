<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Slough_Music_Service
 */

$header_image = get_field('header_image');
$sidebar = get_field('sidebar');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header mx-auto">
		<img src="<?php echo $header_image ?>" alt="slough music services header" class="z-0 w-full">
		<div class="bg-white z-10 mt-0 sm:mt-[-3.8rem] pt-16 relative px-12 rounded-t-[3rem]">

		</div>
	</header><!-- .entry-header -->

	<div class="entry-content container mt-0 bg-white mx-auto px-4 xl:px-4">


		<?php if ( 'yes' == get_field('sidebar') ): ?> 

		<div class="grid lg:grid-cols-3 md:grid-cols-1 px-4 xl:px-4">
			<div class="col-span-2">
			<div class="text-4xl mb-4 sm:justify-start"><?php the_title( '<h1 class="entry-title justify-center sm:justify-start flex">', '</h1>' ); ?></div>
				<?php
				the_content();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'slough-music-service' ),
						'after'  => '</div>',
					)
				);
				?>
			</div>
			<div class="grid md:grid-cols-1">
				<?php
				get_sidebar();
				?>
			</div>
		</div><!-- .entry-content -->


		<?php else: ?>

		<div class="grid grid-cols-1 px-4 xl:px-4">
		<div class="text-4xl mb-4 sm:justify-start"><?php the_title( '<h1 class="entry-title justify-center sm:justify-start flex">', '</h1>' ); ?></div>
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'slough-music-service' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<?php endif; ?>

	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'slough-music-service' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
