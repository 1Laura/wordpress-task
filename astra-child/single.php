<?php get_template_part( 'header-post' );
	$post = get_post( $post );
?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="task-post">
						<p class="task-post--author">Author: <span><?php the_field( 'author_name' ); ?></span></p>
						<h1 class="task-post--title"><?php echo $post -> post_title; ?></h1>
						<div class="task-post--content"><?php echo $post -> post_content ?></div>
						<div class="task-post--btn"><a href="/">Send me back</a></div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
