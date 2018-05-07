<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package phantom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="site">

	<!-- Header -->
		<header id="header">
			<div class="inner">


				<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				?>

				<!-- Logo -->
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
						<span class="symbol">
							<img src="<?php echo $image[0]; ?>">
						</span>
						<span class="title">
							<?php bloginfo( 'name' ); ?>		
						</span>

					</a> 


				<!-- Nav -->
					<nav>
						<ul>
							<li><a href="#menu">Menu</a></li>
						</ul>
					</nav>

				<!-- Menu -->
					<nav id="menu">
						<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'phantom' ); ?></button> -->
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => '',
							'container'      => FALSE,
							'menu_class'     => 'menu-list-wrapper',
						) );

						?>

					</nav><!-- #site-navigation -->

			</div>
		</header>
