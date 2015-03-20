    

</div>
<!-- end main container -->

<div class="dmbs-footer col-md-12">
       <span>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo home_url(); ?>">
				<?php bloginfo( 'name' ); ?></a> - <?php _e( 'Todos direitos reservados', 'Gdix' ); ?> | 
                   <?php echo sprintf( __( '<a href="%s" rel="nofollow" target="_blank" title="Kadix, Soluções em WordPress">
				Kadix</a>', 'Gdix' ), 'http://www.kadix.com.br'); ?>

        <?php get_template_part('template-part', 'footernav'); ?>
    </div>

<?php wp_footer(); ?>
</body>
</html>