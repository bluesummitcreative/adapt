<div class="col-sm-9">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-sm-4 post">
			<?php if(has_post_thumbnail()) { ?><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array('class' => 'img-fluid'));?></a><?php } else { } ?>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>
		</div>
		<?php endwhile; endif; ?>
	</div>
    <?php wpex_pagination(); ?>
</div>