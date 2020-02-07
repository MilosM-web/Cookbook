
<?php

add_action( 'admin_init', 'ease_add_options_1' );
function ease_add_options_1() {
    // Register new options
    register_setting( 'ease_options', 'ease_options', 'ease_options_validate' );
}
add_action( 'admin_menu', 'ease_add_page_1' );
function ease_add_page_1() {

    $ease_options_page = add_menu_page( 'New Recipe', 'New recipe', 'manage_options', 'New Recipe', 'yout_code_here' );

}


function yout_code_here(){ ?>
	<h1>New Recipes</h1>
<?php
	$args = array(
	'post_type' => 'recipe',
	'order' => 'ASC',	
	'posts_per_page' => -1,	

	);
	$the_query = new WP_Query( $args );
	 if( $the_query->have_posts() ): ?> 	
	 <form action=""  method="post">
	 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	 	<h2>
	 		<a  style="text-decoration: none;" href="<?php the_permalink() ?>"><?php the_title(); ?></a>	
	 		<div style="display: inline-block; padding-left: 40px;">
	 		  <input type="checkbox" name="show" value="show">
	 		</div>
	 	</h2> 
	
	 <div class="line" style="width: 98%; height: 1px; background-color: #000;"></div>
		               
	<?php endwhile; ?>	
	 	<input style="margin-top: 30px; padding: 10px 15px; background-color: green; border-radius: 10%; border: none; color: white;" type="submit" name="BtnSubmit" value="Show">
	 </form> 
	<?php endif; 
	 wp_reset_query();

}



 
   
