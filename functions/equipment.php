<?php
	/*Template Name: Capabilities*/
	get_header(); 
    get_template_part('inc/page-header');
?>
	<section class="container-fluid container-padding">
		<div class="container">
			<div class="row">
				<?php get_sidebar(); ?>
				<div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
					<div class="row">
						<div class="col-sm-12">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
								endwhile; endif; 
							?>
						</div>
					</div>
					<?php if( have_rows('equipment') ): ?>
					<?php $c=0;?>
					<div class="row">
						<?php while ( have_rows('equipment') ) : the_row(); ?>
						<?php $c++; ?>
						<div class="col-sm-4">
							<div class="equipment">
								<a href="<?php the_sub_field('link');?>"><img src="<?php the_sub_field('image');?>" alt="" class="img-fluid" /></a>

								<h4 style="color:#d2492a;"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('text');?></a></h4>

							</div>
						</div>
						<?php 
							if($c%3==0){?>
							</div>
							<div class="row">
							<?php }
							else{
							//make new col
							} ?>
						<?php endwhile; ?>
						
					</div>
					<?php endif; ?>
					
					
				</div>
			</div>
		</div>
	</section>
<?php 
	get_footer(); 
?>