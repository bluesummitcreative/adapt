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
				</div>				
			</div>
		
		</div>
	</div>
</div>
<?php
	get_template_part('inc/logo-slider');
	get_footer(); 
?>
