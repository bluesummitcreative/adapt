<?php
  /*Template Name: Current Members*/
	get_header();
	get_template_part('inc/page-header');
?>
<div class="container-fluid container-padding">
	<div class="container">
		<div class="row">
    <div class="col-sm-12">
      <div class="row">
        <div class="col-md-6">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
        </div>
        <div class="col-md-6">
          <h2>Member News</h2>
		<div class="member-news">
			<?php
			// WP_Query arguments
			$args = array(
				'post_type'              => array( '_member_news' ),
				'post_status'            => array( 'publish' ),
			);

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post(); ?>
				<div class="news-item" style="background:#c1d1e5;padding:20px 20px 10px 20px;margin-bottom:20px;">
					<h4><a target="_blank" href="<?php the_field('link'); ?>"><?php the_title(); ?></a></h4>
				<p><?php the_excerpt(); ?></p>
				<p><a style="margin-left:0;" target="_blank" href="<?php the_field('link'); ?>" class="btn btn-primary">Read More</a></p>
				</div>
				<?php }
			} else {
				// no posts found
			}

			// Restore original Post Data
			wp_reset_postdata();
			?>
		</div>
		
        </div>
      </div>
  </div>
		<?php
			
			//get_sidebar();
			?>
		</div>
	</div>
</div>

<?php
    get_template_part('inc/logo-slider');
	get_footer();
?>
