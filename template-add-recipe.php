<?php
/* Template Name: Add Recipe */

$postTitle = $_POST['title'];
$post = $_POST['comment'];
$submit = $_POST['BtnSubmit'];

if(isset($submit)){

    global $user_ID;

    $new_post = array(
        'post_title' => $postTitle,
        'post_content' => $post,
        'post_status' => 'draft',
        'post_date' => date('Y-m-d H:i:s'),
        'post_author' => $user_ID,
        'post_type' => 'recipe',
        'post_category' => array(0)
    );

    wp_insert_post($new_post);

}

get_header();
?>
	<div class="add-recipe-wrap">
		<form action=""  method="post" enctype="multipart/form-data">
		  <h3>Add New Recipe</h3>
		  Add Title:<br>
		  <input type="text" name="title">
		  <br>
		  Add Description:<br>
		  <textarea name="comment">Enter text here...</textarea>
		  <br><br>
		  <input type="submit" name="BtnSubmit" value="Submit">
		</form> 
	</div>
<?php
get_footer();