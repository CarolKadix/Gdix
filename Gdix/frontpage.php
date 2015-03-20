<?php
/**
  Template Name: FrontPage
 *
 *
 */

get_header(); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div id="home" class="container dmbs-content">

   
    <div class="row col-md-8">

      <!-- #SLIDER --> 
      <div id="slide" class="row col-md-12">         
          <?php echo do_shortcode('[image-carousel]'); ?>         
      </div>

      <!-- OS 3 ÚLTIMOS POSTS DA CATEGORIA: DESTAQUE -->
      <div id="destaque" class="col-md-12">   
                <?php $the_query = new WP_Query( array( 
                      'post_type' => 'post',
                      'category_name' => 'destaque',
                      'orderby' => 'date',      
                      'order' => 'DESC',
                      'posts_per_page' => '3')); 
                      while ( $the_query->have_posts() ) : $the_query->the_post(); ?>                      
                          
                      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                       <div class="box col-sm-12">
                            <div class="box-img img-left row">
                             <?php if ( has_post_thumbnail()) : ?>
                             <?php the_post_thumbnail('destaques'); ?>                           
                            </div>
                          
                              <div class="box-texto">  
                               <h3><a href="<?php the_permalink() ?>" ><?php the_title();?></a></h3>
                               <hr/>
                               <a href="<?php the_permalink() ?>" ><?php echo excerpt2('20'); ?></a>
                               </div>                         
                        </div>
                      </a>

                      <?php endif; ?>    
                      <?php endwhile;
                      wp_reset_postdata();?>            
    </div><!-- #DESTAQUES -->  

     
   </div>

   <?php //get the right sidebar ?>
   <?php get_sidebar( 'right' ); ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>

