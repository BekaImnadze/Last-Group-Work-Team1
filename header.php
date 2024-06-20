<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC:wght@100..400&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header id="masthead" class="site-header mainHeader">
	<div class="navigation-box">
		<div class="navImg">
			<img src=" <?php echo get_template_directory_uri() . '/assets/Travel-Goo.svg' ?>" alt="logo">
		</div>
		<nav id="site-navigation" class="main-navigation">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class' 	 => 'header-menu',
					)
				);
			?>
		</nav><!-- #site-navigation -->
		<div class="userBox" id="user-box">
				<img src=" <?php echo get_template_directory_uri() . '/assets/star.svg' ?>" alt="">
				<img src=" <?php echo get_template_directory_uri() . '/assets/user-profile-icon.svg' ?>" alt="">
		</div>
		<div class="hamburger-menu">
			<input type="checkbox" id="menu">
			<label for="menu">
				<span class="hamburger-menu-icon">&#9776;</span>
			</label>
			<div class="sidebar-nav">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu-mobile',
							'menu_class' 	 => 'header-menu',
						)
					);
				?>
				<div class="userBox" id="user-box">
					<img src=" <?php echo get_template_directory_uri() . '/assets/user-profile-icon.svg' ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</header><!-- #masthead -->
