<?php
	get_header();
	get_template_part('inc/page-header');
?>
<div class="container-fluid container-padding">
	<div class="container">
		<div class="row">
			<?php
global $wpdb;

$limit = 0;
$year_prev = null;
$months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,	YEAR( post_date ) AS year, COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY month , year ORDER BY post_date DESC");

foreach($months as $month) :

	$year_current = $month->year;
	
	if ($year_current != $year_prev)
	{
		if($year_current != date('Y'))
		{
		?>
			</ul>
		<?php
		}
		?>

		<h3>
			<a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/"><?php echo $month->year; ?></a>
		</h3>	
		<ul class='list-group'>			
	<?php 
	} 
	?>
	
	<li class='list-group-item'>
		<a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>"><span class="archive-month"><?php echo date_i18n("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?></span></a>
		&nbsp;<span class='label label-default'><?php echo $month->post_count; ?></span>
	</li>
	
	<?php 
	$year_prev = $year_current;

endforeach; 
?>
</ul>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php
	get_footer();
?>
