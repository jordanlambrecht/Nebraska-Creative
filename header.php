
 <!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>" charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
    <meta name="description" content= "The Nebraska Creative is your go-to resource for discovering design, advertising, and creative agencies in Nebraska." />
    <meta name="language" content="English">
<meta name="author" content="Jordan Lambrecht">
<meta name="keywords" content="Advertising, Nebraska, Graphic Design, Creative Database, Local Designers,">
		<link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
		<link rel="icon" href="/favicon.png" type="image/x-icon">
		<link rel="profile" href="http://gmpg.org/xfn/11">

    <!--  Essential META Tags -->

<meta property="og:title" content="The Nebraska Creative">
<meta property="og:description" content="The Nebraska Creative is your go-to resource for discovering design, advertising, and creative agencies in Nebraska.">
<meta property="og:image" content="https://nebraska-creative.com/wp-content/uploads/NE-CR/2020/04/NECR_TitleCard.jpg">
<meta property="og:url" content="https://nebraska-creative.com/">
<meta name="twitter:card" content="summary_large_image">


<!--  Non-Essential, But Recommended -->

<meta property="og:site_name" content="The Nebraska Creative">
<meta name="twitter:image:alt" content="The Nebraska Creative">


<!--  Non-Essential, But Required for Analytics -->

<meta name="twitter:site" content="@pixelbakerylnk">


		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open();
		}
		?>
		<a class="skip-link button" href="#site-content"><?php _e( 'Skip to the content', 'mcluhan' ); ?></a>
		<header class="site-header group">
		<div class="d-flex">
				<a href="/" class="d-none d-md-block site-logo text-center mx-auto">	<img class="img-fluid" src="https://nebraska-creative.com/wp-content/uploads/NE-CR/2020/04/NE_creative_logo_v1.png" /></a>
			<h1 class="site-title d-md-none">	<a href="<?php echo esc_url( home_url() ); ?>" class="site-name"><?php bloginfo( 'name' ); ?></a></h1>

			<div class="nav-toggle">
				<div class="bar"></div>
				<div class="bar"></div>
			</div>

		</div>

			<?php if ( get_bloginfo( 'description' ) ) : ?>
				<p class="site-description text-center"><?php bloginfo( 'description' ); ?></p>
			<?php endif; ?>

			<div class="menu-wrapper">
				<ul class="main-menu desktop">
					<?php
					if ( has_nav_menu( 'main-menu' ) ) {
						$main_menu_args = array(
							'container' 		=> '',
							'items_wrap' 		=> '%3$s',
							'theme_location' 	=> 'main-menu',
						);
						wp_nav_menu( $main_menu_args );
					} else {
						$fallback_args = array(
							'container' => '',
							'title_li' 	=> '',
						);
						wp_list_pages( $fallback_args );
					}
					?>
				</ul>

			</div><!-- .menu-wrapper -->
			<?php if ( has_nav_menu( 'social-menu' ) || ( ! get_theme_mod( 'mcluhan_hide_social' ) || is_customize_preview() ) ) : ?>
				<div class="social-menu desktop">
					<ul class="social-menu-inner">
						<li><a href="<?php echo esc_url( home_url( '?s=' ) ); ?>"></a></li>
						<?php
						$social_args = array(
							'theme_location'	=> 'social-menu',
							'container'			=> '',
							'container_class'	=> 'menu-social group',
							'items_wrap'		=> '%3$s',
							'menu_id'			=> 'menu-social-items',
							'menu_class'		=> 'menu-items',
							'depth'				=> 1,
							'link_before'		=> '<span class="screen-reader-text">',
							'link_after'		=> '</span>',
							'fallback_cb'		=> '',
						);
						wp_nav_menu( $social_args );
						?>
					</ul><!-- .social-menu-inner -->
				</div><!-- .social-menu -->
			<?php endif; ?>

		</header><!-- header -->
		<div class="mobile-menu-wrapper">

			<ul class="main-menu mobile">
				<li>
					<?php if ( get_bloginfo( 'description' ) ) : ?>
						<?php bloginfo( 'description' ); ?>
					<?php endif; ?>
				</li>
				<?php
				if ( has_nav_menu( 'main-menu' ) ) {
					wp_nav_menu( $main_menu_args );
				} else {
					wp_list_pages( $fallback_args );
				}
				?>
				<li class="toggle-mobile-search-wrapper"><a href="#" class="toggle-mobile-search"><?php _e( 'Search', 'mcluhan' ); ?></a></li>
			</ul>
			<?php if ( has_nav_menu( 'social-menu' ) && ( ! get_theme_mod( 'mcluhan_hide_social' ) || is_customize_preview() ) ) : ?>
				<div class="social-menu mobile">
					<ul class="social-menu-inner">
						<?php wp_nav_menu( $social_args ); ?>
					</ul><!-- .social-menu-inner -->
				</div><!-- .social-menu -->
			<?php endif; ?>
		</div><!-- .mobile-menu-wrapper -->
		<div class="mobile-search">
			<div class="untoggle-mobile-search"></div>
			<?php get_search_form(); ?>
			<div class="mobile-results">
				<div class="results-wrapper"></div>
			</div>
		</div><!-- .mobile-search -->
		<div class="search-overlay">
			<?php get_search_form(); ?>
		</div><!-- .search-overlay -->
		<main class="site-content" id="site-content">
