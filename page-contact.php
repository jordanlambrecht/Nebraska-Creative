<?php get_header();
/*Template Name: Contact Page */
/**
 * The template for displaying all single pages
 *

 */
?>

<section class="container">
  <div class="row shop-list-title-section mx-4">
    <div class="col">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
  <div class="row mx-4">
  <?php
      // TO SHOW THE PAGE CONTENTS
      while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
          <div class="entry-content-page">
              <?php the_content(); ?> <!-- Page Content -->
          </div><!-- .entry-content-page -->

      <?php
      endwhile; //resetting the page loop
      wp_reset_query(); //resetting the page query
      ?>

      <?php
      // TO SHOW THE POST CONTENTS
      ?>
          <?php
          $my_query = new WP_Query( 'cat=1' ); // I used a category id 1 as an example
          ?>
          <?php if ( $my_query->have_posts() ) : ?>
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

              <h1 class="entry-title"><?php the_title(); ?></h1> <!-- Queried Post Title -->
              <div class="entry-content">
                  <?php the_excerpt(); ?> <!-- Queried Post Excerpts -->
              </div><!-- .entry-content -->

          <?php endwhile; //resetting the post loop ?>

          </div><!-- #post-<?php the_ID(); ?> -->

          <?php
          wp_reset_postdata(); //resetting the post query
          endif;
          ?>

</section>


<?php get_footer(); ?>
