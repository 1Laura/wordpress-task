<?php get_header();
	$posts = get_posts();
?>
	<div class="container">
		<div class="task-blog">
			<img class="task-blog--image" src="<?php get_stylesheet_directory_uri(); ?>/assets/post_archive_img.jpg" alt="">
			<h1><?php echo $post -> post_title ?></h1>
			<p><?php echo $post -> post_content ?></p>
		<?php get_template_part( 'archive' ); ?>
		</div>
	</div>

<?php get_footer();