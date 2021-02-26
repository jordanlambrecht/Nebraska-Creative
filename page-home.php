<?php get_header();
/*Template Name: Home Page */
?>




    <?php
    remove_all_filters('posts_orderby');
    $args=array('post_type'=>'featuredcreative', 'orderby'=>'rand', 'order'=> 'ASC', 'posts_per_page'=>'1');
    $projects=new WP_Query($args);
    while ($projects->have_posts()) : $projects->the_post(); ?>
      <?php
      $creator= esc_html(get_field('fc_creator')->name);
      $isVideo= get_field('fc_is_this_a_video');
      $medium = get_field('fc_medium');
      $creatorSite= get_field('fc_creators_website');
      $artFileMP4= get_field('fc_file');

      $artPoster= get_field('fc_poster');
      $artFileWEBM= get_field('fc_file_webm');
      $year = get_field('fc_year');
      $title = get_the_title();
      $fc_color = get_field('fc_dark');
      if($fc_color == "dark"){
        $fc_theme = "fc-dark";
      }
      else{
        $fc_theme = "fc-light";
      }


      ?>
      <!-- <section class="container-fluid landing-page"> -->
        <?php if($isVideo): ?>
          <header class="splash">

          	<!-- Video from coverr.co -->
          	<video class="video-bg" playsinline autoplay muted loop id="myVideo" poster="<?php echo $artPoster; ?>">
          		<source src="<?php echo $artFileMP4?>" type="video/mp4" />
          		<source src="<?php echo $artFileWEBM?>" type="video/webm" />
          	</video>

          	<div class="video-overlay">
              <div class="row ">
                <div class="col-12 align-bottom text-right <?php echo $fc_theme; ?>">
                  	<h5 class="fc fc_creator"><?php echo $creator?></h5>
                    <span>
                      <span class="fc fc_title"><?php echo $title?></span>
                      <?php if($year): ?>
                        <span>, <?php echo $year ?></span>
                      <?php endif; ?>
                    </span>
                    <p class="fc fc_medium"><?php echo $medium ?></p>
                    <a class="fc fc_website" href="<?php echo $creatorSite?>" target="_blank">Artist's Website <i class="fas fa-external-link-alt"></i></a>
                </div>
              </div>

          	</div>

          </header>
          <!-- <header class="featuredcreative">
            <div class="overlay"></div>
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
              <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
            </video>
            <div class="container h-100">
              <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                  <h1 class="display-3">Video Header</h1>
                  <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
                </div>
              </div>
            </div>
          </header> -->
        <?php endif; ?>
        <!-- <h2 class="text-center text-lg-right footer-quote"><?php the_title(); ?></h2> -->
      <!-- </section> -->


   <?php endwhile; wp_reset_postdata(); ?>



<?php get_footer(); ?>
