<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">
		<header class="prime-header">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="row between-xs">
						<h1 class="logo"><a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
						<ul class="soc-block row middle-xs">
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-rss"></span></a></li>
						</ul>
					</div>
				</div>
				<?php
				$menuArguments = array(
					'theme_location' => 'primary',
					'container'       => 'nav',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'bs-example-navbar-collapse-1',
					'menu_class' 	=> 'nav navbar-nav top-menu',
				);
				wp_nav_menu($menuArguments); ?>
			</div>
		</header>