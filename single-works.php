<?php
/**
 * Description: Custom Post Type Template.
 *
 * @package Yanse
 * @since Yanse 0.1
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template/cpt/cpt', 'works-single' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
