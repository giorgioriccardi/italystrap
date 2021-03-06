<?php
/**
 * The template for displaying all single posts and attachments
 *
 * This is the template that displays all single posts and attachments by default.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ItalyStrap
 * @since 1.0.0
 */

namespace ItalyStrap;

if ( ! defined( 'ABSPATH' ) or ! ABSPATH ) {
	die();
}

get_header();
do_action( 'italystrap_before_main' );
?> 
<!-- Main Content -->
	<main id="single">
		<div class="container">
			<div class="row">
				<?php do_action( 'italystrap_before_content' ); ?>
				<div <?php Core\get_attr( 'content', array( 'class' => 'col-md-8', 'itemscope' => true, 'itemtype' => 'https://schema.org/Article' ), true ); ?>>
					<?php
					do_action( 'italystrap_before_loop' );

					if ( have_posts() ) :

						while ( have_posts() ) :

							the_post();

							get_template_part( 'loops/content', 'single' );

						endwhile;



					else :

						get_template_part( 'loops/content', 'none' );

					endif;

					comments_template();
					do_action( 'italystrap_after_loop' ); ?>
				</div><!-- / .col-md-8 -->
				<?php do_action( 'italystrap_after_content' ); ?>
				<?php get_sidebar(); ?> 
			</div><!-- / .row -->
		</div><!-- / .container -->
	</main><!-- / #single -->
   
<?php
do_action( 'italystrap_after_main' );
get_footer();
