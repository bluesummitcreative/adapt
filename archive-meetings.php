<?php
	get_header();
	get_template_part('inc/page-header');
?>
<div class="container-fluid container-padding">
	<div class="container">
		<div class="row">
			<div id="accordion">
			  <div class="card">
			    <div class="card-header" id="headingOne">
			      <h5 class="mb-0">
				<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne">
				  Month
				</button>
			      </h5>
			    </div>

			    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
			      <div class="card-body">
				<ul>
						<li><?php the_title(); ?></li>
						<li><?php the_title(); ?></li>
						<li><?php the_title(); ?></li>
						<li><?php the_title(); ?></li>
					</ul>
			      </div>
			    </div>
			  </div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php
	get_footer();
?>
