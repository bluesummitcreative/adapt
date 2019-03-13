<?php 
  /*Template Name: Home Page New*/
	get_header();
?>
<div class="slider d-none d-md-block">
	 <?php echo do_shortcode('[rev_slider alias="new-home-slider"]'); ?>
</div>
<?php
  	get_template_part('inc/intro-home');
	get_template_part('inc/funnels-home');
	get_template_part('inc/logo-slider');
	get_footer(); 
?>
