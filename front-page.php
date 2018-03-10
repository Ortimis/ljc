<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ljc
 */

get_header(); ?>



<section id="hero">
	<div class="menu-push"></div>
	<div class="container">
		<div  class="logo-wrapper">
			<img id="parallax-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/LJC-Logo_Weiss.svg" alt="Landesjugendchor Baden-Württemberg">
		</div>
	</div><!-- .container -->					
</section>

	

<?php get_template_part( 'fpsections/section', 'ausschreibung' ); // Wird nur angezeigt, wenn eine Phase mit "Status: Ausschreibung" vorhanden ist.?>



<?php
get_footer();
