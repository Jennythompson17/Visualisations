<?php
/*
Template Name: D3 Pages
*/
?>

<?php wp_enqueue_script(‘d3-js’, ‘//d3js.org/d3.v3.min.js’); ?>

<?php get_header(); ?>
mv 
	<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					do_action( 'spacious_before_comments_template' );
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();					
	      		do_action ( 'spacious_after_comments_template' );
				?>

			<?php endwhile; ?>

			<div id="graph"> </div>


		</div><!-- #content -->
	</div><!-- #primary -->
	
	<?php spacious_sidebar_select(); ?>

	<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>