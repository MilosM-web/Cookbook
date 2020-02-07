<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cookbook
 */

get_header(); 

$args = array(
		'post_type'=> 'recipe',
		'post_status' => 'publish',
		'posts_per_page' => -1 
		);

while ( have_posts() ) : the_post(); ?>
	<div class="single-recipe-wrapper">
		<div class="recipe-wrap">
			<div class="info-wrap">
				<div class="title">
					<h3><?php the_title(); ?></h3>
				</div>
			<div class="description">
				<p><?php the_content();?></p>
			</div>
			</div>
		</div>	
	</div>

<?php endwhile; 
get_footer(); ?>
