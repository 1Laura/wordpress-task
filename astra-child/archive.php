<?php
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish'
	);
	$loop = new WP_Query( $args );
?>
<div class="task-blog--block">
	<div class="row">
	  <?php if ( $loop -> have_posts() ):
		  while ( $loop -> have_posts() ):
			  $loop -> the_post(); ?>
						<div class="col-md-4">
				<?php the_post_thumbnail() ?>
							<h4><span><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
  <path d="M11 5.5V11H15.125M19.25 11C19.25 15.5563 15.5563 19.25 11 19.25C6.44365 19.25 2.75 15.5563 2.75 11C2.75 6.44365 6.44365 2.75 11 2.75C15.5563 2.75 19.25 6.44365 19.25 11Z" stroke="#979797" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></span><?php echo get_the_date( get_option( 'date_format' ) ); ?></h4>
							<h3>Title <?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
							<a class="read-more" href="<?php the_permalink(); ?>">Read more!</a>
						</div>
		  <?php endwhile;
	  endif;
		  //		  wp_reset_query();
		  wp_reset_postdata(); ?>
	</div>
</div>