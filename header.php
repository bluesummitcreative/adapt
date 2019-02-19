<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	
	<header class="header fixed-top">
		<div class="container-fluid top-bar text-right bg-primary">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<ul class="list-inline contact-info">
							<li class="list-inline-item"><a href="#"><i class="fa fa-mobile"></i> (303) 273-3091</a></li>
							<li class="list-inline-item"><a href="mailto:ADAPT@mines.edu"><i class="fa fa-envelope"></i> ADAPT@mines.edu</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	  
	  	<nav class="navbar navbar-expand-md navbar-light">		 
		  <div class="container">
			  <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
				<img src="<?php the_field('logo', 'option'); ?>" alt="<?php bloginfo('name'); ?> logo">
			  </a>
			  	
			  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			  </button>

			  	<?php
					wp_nav_menu( array(
					  'container'       => 'div',
					  'container_class' => 'collapse navbar-collapse',
					  'container_id'    => 'navbarSupportedContent',
					  'menu'            => 'Header Menu',
					  'menu_class'      => 'navbar-nav ml-auto',
					  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					  'depth'           => 0,
					  'walker'          => new bootstrap_4_walker_nav_menu()
				   ) );
				?>
		  </div>
		</nav>

	</header>
