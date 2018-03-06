<div class="page-header"> 
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>
				<?php
					if ( is_home() ) { 
                        echo 'News';
                    } elseif ( is_404() ) { 
						echo '404 Not Found';
					 } elseif ( is_post_type_archive('tribe_events') ) { 
						echo 'Events';
					} elseif ( is_post_type_archive('meetings') ) { 
						echo 'Meetings';
					/*} elseif ( is_page('account') ) { 
						echo 'Account';*/
					} elseif ( is_search() ) { 
						echo $wp_query->found_posts . ' results found for "' . esc_html( get_search_query( false ) ) .'"';
					} else { 
						if( get_field('field_name')) {
							the_field('page_header_title');
						} else {
							the_title();
						}
					} 
				?>
				</h1>
			</div>
		</div>
	</div>
</div>

