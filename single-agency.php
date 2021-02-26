<?php get_header();?>

<article class="container">
  <div class="row agency-name-section">
    <div class="col">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>

   <div class="row company-quick-details-section">
     <!-- WEBSITE -->
  <?php
  $website = get_field('website');
  if( $website ):
    $link_url = $website['url'];
   $link_title = $website['title'];
   ?>

  <div class="col-12 col-md-3 col-lg-4 company-quick-details-col">
      <h5 class="quick-details-title">Website </h5>
        <ul>
            <li> <a href="<?php echo esc_url( $link_url ); ?>" target="_blank" rel="noreferrer"><?php echo esc_html( $link_url ); ?>  <i class="fas fa-external-link-alt"></i></a> </li>
        </ul>
    </div>


  <?php endif; ?>
  <!-- WEBSITE -->


      <!-- YEAR FOUNDED -->
      <?php
      $yearfounded = get_field('agedetails_year_founded');
      if( $yearfounded ): ?>
      <div class="col-6 col-md-4 company-quick-details-col">
          <h5 class="quick-details-title">Year Founded</h5>
            <ul>
                <li> <?php echo $yearfounded; ?> </li>
            </ul>
        </div>
      <?php endif; ?>
      <!-- END YEAR FOUNDED -->

      <!-- SIZE -->
      <?php
      $terms = wp_get_post_terms(get_the_ID(), 'size');
      if( $terms ): ?>
        <div class="col-6 col-md-3 col-lg-4 company-quick-details-col">
          <h5 class="quick-details-title">Shop Size</h5>
          <ul>
            <?php foreach( $terms as $term ): ?>
              <li>
                <?php echo esc_html( $term->name ); ?>  (<?php echo esc_html( $term->description ); ?>)
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>
      <!-- SIZE -->
    </div>



    <!-- COMPANY BIO -->
    <?php
    $missionstatement = get_field('mission_statement');
    if( $missionstatement ): ?>
      <div class="row company-bio-section">
        <div class="col-12 col-md-4 company-bio-col">
            <h3 class="mt-0">Company Bio</h3>
        </div>

        <div class="col offset-md-2 company-bio-col">
          <p>
              <?php echo $missionstatement; ?>
          </p>
        </div>
      </div>
    <?php endif; ?>
    <!-- END COMPANY BIO -->

<div class="row company-details-section">
  <div class="col-12 company-details-col">
    <h3 class="mt-0">Company Details</h3>
  </div>
    <!-- LOCATIONS -->
    <?php
    $terms = wp_get_post_terms(get_the_ID(), 'city');
    if( $terms ): ?>
      <div class="col-6 col-md-4 company-details-col">
        <h5 class="company-details-title">Location(s)</h5>
        <ul>
          <?php foreach( $terms as $term ): ?>
            <li>
              <?php echo esc_html( $term->name ); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <!-- END LOCATIONS -->

    <!-- INDUSTRIES -->
    <?php
    $terms = wp_get_post_terms(get_the_ID(), 'industry');
    if( $terms ): ?>
      <div class="col-6 col-md-4 company-details-col">
        <h5 class="company-details-title">Industries</h5>
        <ul class="company-details-list">
          <?php foreach( $terms as $term ): ?>
            <li>
              <?php echo esc_html( $term->name ); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <!-- END INDUSTRIES -->

    <!-- SERVICES -->
    <?php
    $terms = wp_get_post_terms(get_the_ID(), 'abilities');
    if( $terms ): ?>
      <div class="col-6 col-md-4 company-details-col">
        <h5 class="company-details-title">Services</h5>
        <ul>
          <?php foreach( $terms as $term ): ?>
            <li>
              <?php echo esc_html( $term->name ); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <!-- END SERVICES -->






    <!-- PARENT COMPANY -->
    <?php
    $parentcompany = get_field('parent_company');
    if( $parentcompany ): ?>
    <div class="col-6 col-md-4 company-details-col">
        <h5 class="company-details-title">Parent Company</h5>
          <ul>
              <li> <?php echo $parentcompany; ?> </li>
          </ul>
      </div>
    <?php endif; ?>
    <!-- END PARENT COMPANY -->

    <!-- KEY PEOPLE -->
    <?php
    $terms = wp_get_post_terms(get_the_ID(), 'key_people');
    if( $terms ): ?>
      <div class="col-6 col-md-4 company-details-col">
        <h5 class="company-details-title">Key People</h5>
        <ul>
          <?php foreach( $terms as $term ): ?>
            <li>
              <?php echo esc_html( $term->name ); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <!-- END KEY PEOPLE -->

    <!-- NOTABLE CLIENTS -->
    <?php
    $terms = wp_get_post_terms(get_the_ID(), 'notable_clients');
    if( $terms ): ?>
      <div class="col-6 col-md-4 company-details-col">
        <h5 class="company-details-title">Notable Clients</h5>
        <ul>
          <?php foreach( $terms as $term ): ?>
            <li>
              <?php echo esc_html( $term->name ); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <!-- END NOTABLE CLIENTS -->

    <!-- SOCIAL LINKS -->
    <?php
    $enablesocial = get_field('enable_social_links');
    $facebook = get_field('soc_facebook');
    $dribbble = get_field('soc_dribbble');
    $glassdoor = get_field('soc_glassdoor');
    $behance = get_field('soc_behance');
    $linkedin = get_field('soc_linkedin');
    $instagram = get_field('soc_instagram');
    $vimeo = get_field('soc_vimeo');
    $youtube = get_field('soc_youtube');
    $twitter = get_field('soc_twitter');

    if( $enablesocial ): ?>
      <div class="col-6 col-md-4 company-details-col">
        <h5 class="company-details-title">Social Links</h5>
        <ul>
          <?php if( $facebook ): ?>
            <li class="social-links"><a href="<?php echo $facebook; ?>" target="_blank" rel="noreferrer">Facebook  <i class="fas fa-external-link-alt"></i></a></li>
          <?php endif; ?>
          <?php if( $dribbble ): ?>
            <li class="social-links"><a href="<?php echo $dribbble; ?>" target="_blank" rel="noreferrer">Dribbble  <i class="fas fa-external-link-alt"></i></a></li>
          <?php endif; ?>
          <?php if( $glassdoor ): ?>
            <li class="social-links"><a href="<?php echo $glassdoor; ?>" target="_blank" rel="noreferrer">Glassdoor  <i class="fas fa-external-link-alt"></i></a></li>
          <?php endif; ?>
          <?php if( $behance ): ?>
            <li class="social-links"><a href="<?php echo $behance; ?>" target="_blank" rel="noreferrer">Behance  <i class="fas fa-external-link-alt"></i></a></li>
          <?php endif; ?>
          <?php if( $linkedin ): ?>
            <li class="social-links"><a href="<?php echo $linkedin; ?>" target="_blank" rel="noreferrer">LinkedIn  <i class="fas fa-external-link-alt"></i></a></li>
          <?php endif; ?>
          <?php if( $instagram ): ?>
            <li class="social-links"><a href="<?php echo $instagram; ?>" target="_blank" rel="noreferrer">Instagram  <i class="fas fa-external-link-alt"></i></a></li>
          <?php endif; ?>
          <?php if( $vimeo ): ?>
            <li class="social-links"><a href="<?php echo $vimeo; ?>" target="_blank" rel="noreferrer">Vimeo  <i class="fas fa-external-link-alt"></i></a></li>
          <?php endif; ?>
          <?php if( $youtube ): ?>
            <li class="social-links"><a href="<?php echo $youtube; ?>" target="_blank" rel="noreferrer">YouTube  <i class="fas fa-external-link-alt"></i></a></li>
          <?php endif; ?>
          <?php if( $twitter ): ?>
            <li class="social-links"><a href="<?php echo $twitter; ?>" target="_blank" rel="noreferrer">Twitter  <i class="fas fa-external-link-alt"></i></a></li>
          <?php endif; ?>

        </ul>
      </div>
    <?php endif; ?>
    <!-- END SOCIAL LINKS -->
</div>
<div class="row back-button-section">
<div class="col">
  <a href="/studios" class="button button-back hvr-grow"><i class="fas fa-long-arrow-alt-left"></i>   Creative Shops</a>
</div>
</div>



</article>
<section class="container">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <ins class="adsbygoogle"
       style="display:block; text-align:center;"
       data-ad-layout="in-article"
       data-ad-format="fluid"
       data-ad-client="ca-pub-8894896414578775"
       data-ad-slot="4315109138"></ins>
  <script>
       (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</section>

<?php get_footer(); ?>
