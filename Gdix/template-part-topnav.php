
<?php if ( has_nav_menu( 'main_menu' ) ) : ?>
     
 <!-- LOGO + MENU PRINCIPAL -->       
 <nav class="navbar navbar-default navbar-fixed-top dmbs-top-menu" role="navigation">

        <!-- TOP HEADER -->
        <div class="dmbs-header-top hidden-xs hidden-sm">
        <div class="container">

            <div class="row ite-description col-md-4">
                      <p><?php bloginfo( 'description' ); ?></p>
            </div>
            <div class="row col-md-6 dmbs-header-social dmbs-right"> 
                    <ul>
                        <li>siga o guia do hambúrguer</li>
                        <li><a href="<?php echo get_option( 'facebook');?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?php echo get_option( 'twitter');?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?php echo get_option( 'pinterest');?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="<?php echo get_option( 'plus');?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="<?php echo get_option( 'instagram');?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="<?php echo get_option( 'flickr');?>" target="_blank"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="http://guiadohamburguer.com/feed/" target="_blank"><i class="fa fa-rss"></i></a></li>
                        <li id="busca">
                            <form method="get" class="navbar-form navbar-right" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
                            <label for="navbar-search" class="sr-only"><?php _e( 'Busca:', 'odin' ); ?></label>
                                <div class="form-group">
                                <input type="text" class="form-control" name="s" id="navbar-search" placeholder="Pesquisar..."/>
                            </div>              
                            </form>
                        </li>
                    </ul>                  
                        
            </div>
        </div>
        </div>
           
            <div class="container">

                <div class="row col-md-2 dmbs-header-img">
                    <!-- LOGO UPLOAD PAINEL -->
                    <?php if ( get_header_image() != '' ) : ?>
                     <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                       <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a></h1>              
                    <?php endif; ?>  
                </div>
                                 
                <div class="col-md-10 dmbs-left">
                    <?php  wp_nav_menu( array(
                            'theme_location'    => 'main_menu',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                       );
                    ?>  
                </div>    
         </div>         
    </nav>

<?php endif; ?>

