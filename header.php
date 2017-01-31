<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title><?php wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300i" rel="stylesheet">
	<!-- [if IE]>
		<script src="http://html5shiv.google.ecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="icon" href="<?php echo esc_url( home_url('')); ?>/wp-content/uploads/fevicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>
<body>
	<header class="table fixed">
		<div class="table-cell">
			<div class="container">
				<div class="desktop-menu row">
					<div class="col-3">
						<nav>
							<!-- <ul>
								<li><a href="page-philosophy.php">Philosophy</a></li>
								<li><a href="page-services.php">Services</a></li>
								<li><a href="page-process.php">Process</a></li>
							</ul> -->
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu-left')); ?>
						</nav>
					</div>
					<div class="col-3">
						<a href="<?php echo esc_url( home_url('')); ?>" rel="home" class="logo">
							<img src="<?php echo esc_url( home_url('')); ?>/wp-content/uploads/logo.svg" alt="Woodbury logo">
							<img src="<?php echo esc_url( home_url('')); ?>/wp-content/uploads/w_logo.svg" alt="Woodbury logo W">
						</a>
					</div>
					<div class="col-3">
						<nav>
							<?php wp_nav_menu(array('theme_location' => 'header-menu-right')); ?>
						</nav>
					</div>
				</div>
				<div class="menu-button responsive">
						<!--Responsive menu button -->
				</div>
				<div class="responsive-menu row">
					<a href="<?php echo esc_url( home_url('')); ?>" rel="home" class="logo">
						<img src="<?php echo esc_url( home_url('')); ?>/wp-content/uploads/logo.svg" alt="Woodbury logo">
						<img src="<?php echo esc_url( home_url('')); ?>/wp-content/uploads/w_logo.svg" alt="Woodbury logo W">
					</a>
					<nav>
						<div class="table">
							<div class="table-cell">
								<div class="row">
									<?php wp_nav_menu( array( 'theme_location' => 'header-menu-left')); ?>
									<?php wp_nav_menu( array( 'theme_location' => 'header-menu-right')); ?>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>