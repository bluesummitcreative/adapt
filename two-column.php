<?php
  /*Template Name: Two Columns*/
	get_header();
	get_template_part('inc/page-header');
?>
<div class="container-fluid container-padding">
	<div class="container">
		<div class="row">
    <div class="col-sm-9 order-sm-2">
      <div class="row">
        <div class="col-md-6">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
        </div>
        <div class="col-md-6">
          <h2 style="color:#5b78a9;">Member News</h2>
		NEWS GOES HERE
		
        </div>
      </div>
  </div>
		<?php
			
			get_sidebar();
			?>
		</div>
	</div>
</div>

<?php
    get_template_part('inc/logo-slider');
	get_footer();
?>
