<?php /*
 * Template Name: Two columns, Sidebar on the Left
 *
 * @package Cryout Creations
 * @subpackage mantra
 * @since mantra 0.5
 */
get_header(); ?>

		<section id="container">
	
			<div id="content" role="main">

			<?php cryout_before_content_hook(); ?>

				<?php get_template_part( 'content', 'page'); ?>
	
			<?php cryout_after_content_hook(); ?>

			</div><!-- #content -->
			
			<?php get_sidebar(); ?>
		</section><!-- #container -->


<?php get_footer(); ?>