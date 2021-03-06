<?php
/**
 * Default Page
 * @package Yanse
 * @since Yanse 0.1
 */

get_header(); ?>

	<div id="content" role="main">
		<div class="row">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template/page/page', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- row end -->
	</div><!-- #content -->
<?php get_footer(); ?>
