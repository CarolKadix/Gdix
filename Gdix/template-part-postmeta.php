<?php global $dm_settings; ?>
<?php if ($dm_settings['show_postmeta'] != 0) : ?>    
      <?php _e('Postado por','devdmbootstrap3'); ?> <?php the_author_posts_link(); ?>, <?php the_time('F jS, Y'); ?>
      em <span class="categoria"><?php the_category(', '); ?></span></p>  
<?php endif; ?>