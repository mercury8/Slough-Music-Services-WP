<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Slough_Music_Service
 */

$facebook_url = get_field('facebook_url');
$x_url = get_field('x_url');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'slough-music-service' ); ?></a>

	<header id="masthead" class="site-header bg-darkpurple">
		<div class="container mx-auto px-4">
			<div class="flex md:items-center sm:justify-between sm:flex-row flex-col">
				<div class="sm:w-32 site-header__logo sm:justify-start justify-center flex animate-fade-up animate-ease-out w-full">
					<?php the_custom_logo(); ?>
				</div>

				<nav id="site-navigation" class="animate-fade animate-ease-out main-navigation lg:justify-end lg:flex md:justify-end flex md:flex sm:flex-row flex-col flex-nowrap space-x-4 p-6 gap-x-2 text-white items-center justify-center z-50">

					<div class="flex columns-1">
						<button class="menu-toggle border-0 w-8 h-8" aria-controls="primary-menu" aria-expanded="false">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-2 h-2">
							<path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
							</svg>
						<?php esc_html_e( '', 'slough-music-service' ); ?></button>
					</div>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
					<div class="w-12 hidden gap-2 sm:flex">
						<a href="<?php echo $facebook_url ?>" class="text-smyellow">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook text-smyellow" viewBox="0 0 16 16">
							<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
							</svg>
						</a>
						<a href="<?php echo $x_url ?>" class="text-smblue">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x text-smblue" viewBox="0 0 16 16">
							<path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
							</svg>
						</a>
					</div>
				</nav>

				
			</div>
		</div>
		<!-- .site-branding -->

		<!-- #site-navigation -->
	</header><!-- #masthead -->
