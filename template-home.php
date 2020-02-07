<?php
/* Template Name: Home */
get_header();

$args = array(
	'post_type'=> 'recipe',
	// 'post_status' => 'publish',
	'posts_per_page' => -1 
	);
	$result = new WP_Query( $args );
	if ( $result-> have_posts() ) : ?>
		<div class="home-wrap">
			<h2>All Recipes</h2>
			<?php while ( $result->have_posts() ) : $result->the_post(); ?>
			 	<div class="recipes-wrap">
			 		<a class=title href="<?php echo get_post_permalink();?>"><?php the_title();?></a>
			 	</div>
			 	<div class="hr-line"></div>
			<?php endwhile; ?>
		</div>
	<?php endif; 
	wp_reset_postdata();
get_footer();




