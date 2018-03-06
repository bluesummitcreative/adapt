<?php
	get_header();
	get_template_part('inc/page-header');
?>
<div class="container-fluid container-padding">
	<div class="container">
		<div class="row">
		<?php
/**/
$years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date)
FROM $wpdb->posts WHERE post_status = 'publish'
AND post_type = 'post' ORDER BY post_date DESC");
foreach($years as $year) :
?>
<li><a href="JavaScript:void()"><?php echo $year; ?></a>

    <ul class="archive-sub-menu">
        <?    $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date)
        FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post'
        AND YEAR(post_date) = '".$year."' ORDER BY post_date DESC");
        foreach($months as $month) :
        ?>
            <li><a href="<?php echo get_month_link($year, $month); ?>">

                <?php echo date( 'F', mktime(0, 0, 0, $month) );?></a>

            </li>

        <?php endforeach;?>

    </ul>

</li>

<?php endforeach; ?>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php
	get_footer();
?>
