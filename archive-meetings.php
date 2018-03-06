<?php
	get_header();
	get_template_part('inc/page-header');
?>
<div class="container-fluid container-padding">
	<div class="container">
		<div class="row">
		<?php
			 if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php
			 // Assign the year to a variable
			 $year = the_date('Y', '', '', FALSE);

			 // If your year hasn't been echoed earlier in the loop, echo it now
			 if ($year !== $year_check) {
			 echo "<h2 class='year'>" . $year . "</h2>";
			 }

			 // Now that your year has been printed, assign it to the $year_check variable
			 $year_check = $year;
			?>

			<div id="post-<?php the_ID(); ?>">
			<!-- post content etc goes here  -->
			</div><!-- end .post-wrap -->
			<?php endwhile; ?>
			<!-- previous next nav -->
			<?php else : ?>
			<!-- posts not found info -->
			<?php endif; ?>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php
	get_footer();
?>
