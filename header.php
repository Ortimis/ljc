<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ljc
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<header id="masthead" class="site-header" role="banner">

			<div class="container">

				<div class="row">
					<div class="col-xs-12 col-sm-4">

						<div class="site-branding">
							<h1 class="site-title hide"> <?php bloginfo( 'name' ); ?> </h1>
							<div class="logo-wrapper-header">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/LJC-Logo_Weiss.svg" alt="Landesjugendchor Baden-Württemberg">
							</div>
							
						</div><!-- .site-branding -->

				</div><!-- .col -->

				<div class="col-xs-12 col-sm-8">
				
					<nav id="site-navigation" class="main-navigation" role="navigation">
					<button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">&#9776;</button>
						<?php
						if ( has_nav_menu( 'primary' ) ) :
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_id' => 'primary-menu',
								'walker' => new ljc\Core\WalkerNav(),
							) );
						endif;
						?>
					</nav>

				</div><!-- .col -->

			</div><!-- .row -->
		</div><!-- .container-fluid -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
