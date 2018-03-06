<?php
	get_header();
	get_template_part('inc/page-header');
?>
<div class="container-fluid container-padding">
	<div class="container">
		<div class="row">
			<div id="accordion">
	<?php

	// WP_Query arguments
	$args = array(
		'post_type'              => array( 'meetings' ),
		'post_status'            => array( 'publish' ),
		'order'                  => 'DESC',
		'orderby'                => 'date',
	);

	// The Query
	$query = new WP_Query( $args );

	// The Loop
	if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
			<div class="card">
				<div class="card-header" id="headingOne">
				  <h5 class="mb-0">
					<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne">
					  YEAR
					</button>
				  </h5>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				  <div class="card-body">
					<ul>
						<li><?php the_content(); ?></li>
						<li><?php the_title(); ?></li>
						<li><?php the_title(); ?></li>
						<li><?php the_title(); ?></li>
					</ul>
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
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php
	get_footer();
?>
