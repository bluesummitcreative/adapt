<?php 
  /*Template Name: Home Page New*/
	get_header();
?>
<div class="slider d-none d-md-block">
	 <?php echo do_shortcode('[rev_slider alias="new-home-slider"]'); ?>
</div>
<?php
  	//get_template_part('inc/intro-home');
	//get_template_part('inc/funnels-home');
?>
<div class="container-fluid container-padding funnels-home">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="home-intro">
					<?php the_field ('home_intro');?>
				</div>
				
			</div>
			<div class="col-sm-4">
				<div class="funnel">
					<?php the_field ('funnel1'); ?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="funnel">
					<?php the_field ('funnel2');?>				
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="funnel">
					<?php the_field ('funnel3');?>				
				</div>				
			</div>
			<div class="col-sm-4">
				<div class="funnel">
					<?php the_field ('funnel4');?>				
				</div>				
			</div>
			<div class="col-sm-4">
				<div class="funnel">
					<?php the_field ('funnel5');?>
					<ul>
					<?php
						// WP_Query arguments
						$args = array(
							'post_type'              => array( '_adapt_publications' ),
							'post_status'            => array( 'publish' ),
							'posts_per_page'         => '3',
						);

						// The Query
						$query = new WP_Query( $args );

						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post(); ?>
						<li><a href="https://adapt.mines.edu/publications/"><?php echo get_the_excerpt(); ?></a></li>
							<?php }
						} else {
							// no posts found
						}

						// Restore original Post Data
						wp_reset_postdata();
					?>
					</ul>
				</div>				
			</div>
		
		</div>
	</div>
</div>
<?php
	get_template_part('inc/logo-slider');
	get_footer(); 
?>
