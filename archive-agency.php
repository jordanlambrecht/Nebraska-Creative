<?php get_header();
/*Template Name: Agency feed */
?>

<section class="container">
  <div class="row shop-list-title-section">
    <div class="col">
      <h1>Creative Shops</h1>
    </div>
  </div>
  <div class="row shop-list-info-section">
    <div class="col-12 col-sm-8 py-3 my-3">


      <p>The Nebraska Creative is your go-to resource for discovering design, advertising, and creative agencies in the heart of the Midwest – aka good ol’ Nebraska. With the mindset of collaboration over competition, The Nebraska Creative embraces a diverse range of creative shops to showcase the assets and skills each has to offer – helping you find the perfect team of individuals ready to refresh your business and bring new ideas to life. Read about <a href="/information">why we created this site</a>.</p>

      <ul class="pt-3">
        <li><a href="/contact/add-a-creative-shop/" class="list-link">Add your creative shop to this list&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right arrow"></i></a></li>
        <li><a href="/contact/correct-a-creative-shop/" class="list-link">Submit additional info / corrections &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right arrow"></i></a></li>
        <li><a href="/contact/request-deletion/" class="list-link">Request deletion of your creative shop&nbsp;&nbsp; <i class="fas fa-long-arrow-alt-right arrow"></i></a></li>
      </ul>
    </div>
  </div>
</section>
<section class="container shop-list-filters-section">
  <!--BEGIN LOCATION FILTER -->
  <div class="row shop-list-filters-row">
    <div class="col-12 col-xl-3 pr-xl-2">
        <h3> Locations </h3>
    </div>
    <div class="col offset-xl-1 button-group filter-button-group" data-filter-group="location">

      <button data-filter="*" class="active">Show All</button>
      <?php
        $city_tags = get_terms('city');
        foreach ($city_tags as $tag) {
          echo   '<button data-filter=".'.$tag->slug.'">'.$tag->name.'</button>';
        }?>
    </div>
  </div>
  <!--END LOCATION FILTER -->
  <!--BEGIN ABILITIES FILTER -->
  <div class="row shop-list-filters-row">
    <div class="col-12 col-xl-3 pr-xl-2">
      <h3> Capabilities </h3>
    </div>
    <div class="col offset-xl-1 button-group filter-button-group" data-filter-group="capabilities">
      <button data-filter="*" class="active">Show All</button>
      <?php
        $city_tags = get_terms('abilities');
        foreach ($city_tags as $tag) {
          echo   '<button  data-filter=".'.$tag->slug.'">'.$tag->name.'</button>';
        }?>
    </div>
  </div>
  <!--END ABILITIES FILTER -->
  <!--BEGIN SIZE FILTER -->
  <div class="row shop-list-filters-row">
    <div class="col-12 col-xl-3 pr-xl-2">
        <h3> Size </h3>
    </div>
    <div class="col offset-xl-1 button-group filter-button-group" data-filter-group="size">

      <button data-filter="*" class="active">Show All</button>
      <?php
        $city_tags = get_terms('size');
        foreach ($city_tags as $tag) {
          echo   '<button  data-filter=".'.$tag->slug.'">'.$tag->name.'</button>';
        }?>
    </div>
  </div>
  <!--END SIZE FILTER -->
  <!--BEGIN INDUSTRY FILTER -->
  <div class="row shop-list-filters-row">
    <div class="col-12 col-xl-3 pr-xl-2">
        <h3>Industry Specialization </h3>
    </div>
    <div class="col offset-xl-1 button-group filter-button-group" data-filter-group="industry">

      <button data-filter="*" class="active">Show All</button>
      <?php
        $city_tags = get_terms('industry');
        foreach ($city_tags as $tag) {
          echo   '<button  data-filter=".'.$tag->slug.'">'.$tag->name.'</button>';
        }?>
    </div>
  </div>
  <!--END INDUSTRY FILTER -->
  <!-- BEGIN SEARCH FILTER -->
  <div class="row shop-list-filters-row">

    <div class="col-12">

      <p><input type="text" class="quicksearch" placeholder="Search for a specific shop." /></p>
    </div>
  </div>
  <!-- END SEARCH FILTER -->
</section>



<section class="container shop-list-section">
  <div class="grid">
    <!-- add sizing element for columnWidth -->
    <div class="grid-sizer col-xs-12"></div>

  <?php
  $args = array( 'post_type' => 'agency', 'orderby'=>'title','order'=>'ASC', 'posts_per_page' => -1);
  $agency = new WP_Query($args);

  if($agency->have_posts()) : while ($agency->have_posts()) : $agency->the_post();
    $website = get_field('website');
    if( $website ){
      $link_url = $website['url'];
     $link_title = $website['title'];
    }
    $cs_size =  wp_get_post_terms(get_the_ID(), 'size');
    $cs_year = get_field("agedetails_year_founded");
    $cs_locations = wp_get_post_terms(get_the_ID(), 'city');
    $cs_website = get_field('cs_website');
  ?>

  <article>
  <div class="grid-item col-12 bg-light py-2 my-2 <?php isotope_classes(get_the_ID()); ?> agency-row">
    <!-- wrap item content in its own element -->
    <div class="grid-item-content row position-relative p-2 mx-1">
      <div class="col-12 col-md-4 mb-2 mb-md-0 px-2 p-1 p-sm-2 p-md-3 position-static">
        <h5 class="mt-0"><?php the_title(); ?></h5>
        <ul>
          <?php
          if($website): ?>
            <li>
              <?php echo $link_title?>
            </li>
           <?php endif; ?>

        </ul>
      </div>
      <div class="col-6 col-sm-6 col-md-2 px-2 p-1 p-sm-2 p-md-3 position-static 	d-none d-sm-block">
        <p class="font-weight-bold small">Locations </p>
        <ul>
          <?php
            if($cs_locations){
              foreach ($cs_locations as $location) {
                echo '<li class="text-muted">' . $location->name . '</li>';
              }
            }
            else{
              echo '<li class="text-muted"> – </li>';
            }
           ?>
        </ul>
      </div>
      <div class="col-6 col-sm-6 col-md-2 px-2 p-1 p-sm-2 p-md-3 position-static d-none d-sm-block">
        <p class="font-weight-bold  small">Size </p>
        <ul>
          <?php
            if($cs_size){
              foreach ($cs_size as $size) {
                echo '<li class="text-muted">' . $size->name . '</li>';
              }
            }
            else{
              echo '<li class="text-muted"> – </li>';
            }
           ?>
        </ul>
      </div>
      <div class="col-6 col-sm-6 col-md-2 px-2 p-1 p-sm-2 p-md-3 position-static hidden-sm-down d-none d-sm-block">
        <p class="font-weight-bold small hidden-sm-down">Founded </p>
        <ul>
          <?php
            if($cs_year) {
              echo '<li class="text-muted">' . $cs_year . '</li>';
            }
            else{
              echo '<li class="text-muted"> – </li>';
            }
           ?>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-md-2 px-2 p-0 p-1 p-sm-2 p-md-3 position-static">
        <ul>
          <li>
            <a href="<?php the_permalink(); ?>" class="font-weight-bold stretched-link small">More Details<i class="fas fa-long-arrow-alt-right arrow"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</article>
  <?php endwhile; endif; ?>
</div>
</section>


<?php get_footer(); ?>
