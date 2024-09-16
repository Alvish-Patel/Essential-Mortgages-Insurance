<?php 
global $reobiz_option;
$rs_offcanvas = get_post_meta(get_the_ID(), 'show-off-canvas', true);
$logo_height = !empty($reobiz_option['logo-height']) ? 'style = "max-height: '.$reobiz_option['logo-height'].'"' : '';
    //off convas here
?>
    
<nav class="menu-wrap-off nav-container nav menu-ofcn">       
<div class="inner-offcan">
    <div class="nav-link-container"> 
        <?php if(!empty($reobiz_option['Offcanvas_layout']) && $reobiz_option['Offcanvas_layout'] == 'style2'){ ?> 
            <a href='#' class="nav-menu-link close-button styles2" id="close-button2">                                         
                <i class="fa-close flaticon-cross"></i>
            </a> 
        <?php } else { ?>  
        <a href='#' class="nav-menu-link close-button" id="close-button2">          
              <span class="dot1"></span>
              <span class="dot2"></span>
              <span class="dot3"></span>
              <span class="dot4"></span>
              <span class="dot5"></span>
              <span class="dot6"></span>
              <span class="dot7"></span>
              <span class="dot8"></span>
              <span class="dot9"></span>
            </a> 
        <?php } ?>
    </div> 
    <div class="sidenav offcanvas-icon">
            <div id="mobile_menu" class="rs-offcanvas-inner-left">
                <?php
                    if ( has_nav_menu( 'menu-1' ) ) {
                        // User has assigned menu to this location;
                        // output it
                        ?>                                
                            <div class="widget widget_nav_menu mobile-menus">      
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'menu-1',
                                        'menu_id'        => 'primary-menu-single1',
                                    ) );
                                ?>
                            </div>                                
                        <?php
                         if(!empty($reobiz_option['show-social-mobile'])) :
                        ?>
                            <div class="mobile-social-icon">                                          
                                <?php get_template_part( 'inc/header/offcanvas-content' ); ?>                        
                            </div>
                    <?php endif;
                    }
                    ?>
                    
            </div>            
        <?php 
        if(!empty( $reobiz_option['off_canvas'] ) || ($rs_offcanvas == 'show') ){
            $off = $reobiz_option['off_canvas'];
            if( ($off == 1) || ($rs_offcanvas == 'show')){?>            
            <div class="rs-innner-offcanvas-contents"> 
                <?php dynamic_sidebar('sidebarcanvas-1');?>
                <?php get_template_part( 'inc/header/offcanvas-content' ); ?>
            </div>            
            <?php }
        }?>
    </div>
    </div>
</nav>