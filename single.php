<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cookbook
 */

get_header();
?>
	<div class="single-recipe-wrapper">
		<?php
			$url =  wp_upload_dir();
			global $wpdb;
			$recipes = $wpdb->get_results("SELECT * FROM recipes"); ?>
			<div class="recipe-wrap">
				<div class="info-wrap">
					<div class="title">
						<h3><?php echo $recipe->title;?></h3>
					</div>
				<div class="description">
					<p><?php echo $recipe->comment;?></p>
				</div>
				</div>
				<div class="image-wrap">
					<div class="image"  style="background-image: url('<?php echo $url["baseurl"] . "/recipesimages/". $recipe->pic;?>');"></div>
				</div>
			</div>	
	</div>
<?php
get_footer();
