<?php get_header(); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="container dmbs-content">

    <!-- super-banner-topo-768x90 -->
    <div class="col-md-12 dmbs-content-banner visible-lg">
     <span>super-banner-topo-768x90</span>
    </div>


    <div class="col-md-8 dmbs-main">
    <dvi class="container">

        <?php // theloop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h2 class="page-header"><?php the_title() ;?></h2>
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
            <?php comments_template(); ?>

        <?php endwhile; ?>
        <?php else: ?>

            <?php get_404_template(); ?>

        <?php endif; ?>
    </div>
</dvi>
   
      <?php //get the right sidebar ?>
     <?php get_sidebar( 'right' ); ?>
  
</div>
<!-- end content container -->

<?php get_footer(); ?>
