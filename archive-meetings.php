<?php
	get_header();
	get_template_part('inc/page-header');
?>
<div class="container-fluid container-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-9 order-sm-2">
			<div id="accordion">
	<?php
	// WP_Query arguments
	$args = array(
		'post_type'              => array( 'meetings' ),
		'post_status'            => array( 'publish' ),
		'order'                  => 'DESC',
		'orderby'                => 'date',
		'posts_per_page'		 => -1,
	);
	// The Query
	$query = new WP_Query( $args );
				
	$c = 0;
	// The Loop
	if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); $c++; ?>
			<div class="card">
				<div class="card-header" id="heading<?php echo $c; ?>"
				  <h5>
					<button class="btn btn-link<?php if(! $c == 1 ) echo ' collapsed'; ?>" data-toggle="collapse" data-target="#collapse<?php echo $c;?>" aria-expanded="<?php if( $c == 1 ) echo 'true'; if(! $c == 1 ) echo 'false'; ?>" aria-controls="collapse<?php echo $c;?>">
					  <?php the_title(); ?>
					</button>
				  </h5>
				</div>

				<div id="collapse<?php echo $c;?>" class="collapse<?php if( $c == 1 ) echo ' show'; ?>" aria-labelledby="heading<?php echo $c; ?>" data-parent="#accordion">
				  <div class="card-body">
					<?php the_content(); ?>
				  </div>
				</div>
			  </div>
		<?php } ?>
								 
	
	
	<?php } else {
		// no posts found
	}
	// Restore original Post Data
	wp_reset_postdata();
?>
</div>
				</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php
	get_footer();
?>
