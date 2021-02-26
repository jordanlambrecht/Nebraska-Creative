<?/*Template Name: Header Test */
/**
 * Header test template
 *

 */
?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>" charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
		<link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
		<link rel="icon" href="/favicon.png" type="image/x-icon">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open();
		}
		?>
		<a class="skip-link button" href="#site-content"><?php _e( 'Skip to the content', 'mcluhan' ); ?></a>
		<header class="site-header d-flex flex-column d-flex justify-content-between">
		<div class="flex-shrink">
				<a href="/" class="d-none d-md-block site-logo text-center mx-auto">	<img class="img-fluid" src="https://nebraska-creative.com/wp-content/uploads/NE-CR/2020/04/NE_creative_logo_v1.png" /></a>
		</div>
    <div class="flex-fill">
      <?php if ( get_bloginfo( 'description' ) ) : ?>
        <p class="site-description text-center"><?php bloginfo( 'description' ); ?></p>
      <?php endif; ?>
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
    </div>

<!--
			<div class="menu-wrapper">


			</div><!-- .menu-wrapper --> 


		</header><!-- header -->


		<div class="search-overlay">
			<?php get_search_form(); ?>
		</div><!-- .search-overlay -->



		<main class="site-content" id="site-content">
      <footer class=" site-footer section-inner">
				<div class="container">
					<div class="row">

						<div class="col-12 col-sm-6  text-center text-sm-left mb-2" >
							<p class="copyright">&copy; <?php echo date_i18n( __( 'Y', 'mcluhan' ) ); ?> <a href="<?php echo esc_url( home_url() ); ?>" class="site-name"><?php bloginfo( 'name' ); ?></a></p>
						</div>
						<div class="col-12 col-sm-6" >
							<p class=" text-center text-sm-right"><span class="pr-2">	👩‍🍳 </span>Made W/ Lust & Flour by <a class="footer-link" rel="noreferrer" target="_blank" href="https://www.pixelbakery.co">Pixel Bakery</a> </p>
						</div>
					</div>
					<div class="col-12 col-sm-8 offset-sm-2">
						<p class="text-center">
							We built and maintain this site as a labor of love with no intention of ever profiting off of it. If NE Creative helped you in any way, feel free to <a class="footer-link" href="https://www.buymeacoffee.com/jordanlambrecht" target="_blank" rel="noreferrer">buy us a coffee</a>.

						</p>

					</div>
				</div>
			</footer> <!-- footer -->


			<div>
					<a class="button-top d-flex flex-column justify-content-center" href="#"><i class="fas fa-arrow-up"></i></a>
			</div>
		</main>

		<?php wp_footer(); ?>

	</body>
</html>
