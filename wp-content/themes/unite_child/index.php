<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package unite
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8">
		<main id="main" class="site-main" role="main">
			<?php 		
				$args = array('post_type'=>'realty');
				$query = new WP_Query( $args );
				set_transient( 'special_query_results',  $query,  12 * HOUR_IN_SECONDS );
				$special_query_results = get_transient( 'special_query_results' );
				if ( $special_query_results ) :		
					while ( $special_query_results->have_posts() ) {
						$special_query_results->the_post();
						get_template_part( 'content', get_post_format() );					
					}
					wp_reset_postdata();
					unite_paging_nav();
			    else : 
				   get_template_part( 'content', 'none' );
			    endif;
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
