<?php acf_form_head(); ?>
<?php get_header();
/*Template Name: Featured Creative Submission */
?>
<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php acf_form(array(
        'post_id'       => 'new_post',
        'new_post'      => array(
            'post_type'     => 'featuredcreative',
            'post_status'   => 'publish'

        ),
        'submit_value'  => 'Create new event',
        'post_content' => false,
        'post_title' => false,
        'uploader' => 'wp',
    )); ?>
    <?php endwhile; ?>
    </div><!-- #content -->
</div><!-- #primary -->
<?php
// Enqueue uploadedr scripts.
acf_enqueue_uploader();

?>
<script>
// Trigger the append action and provide the newly appended jQuery element.
acf.do_action('append', $('#popup-id'));
</script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
Notes
