<?php
if ( has_nav_menu( 'menu-2' ) ) {
    // User has assigned menu to this location;
    // output it
    ?>
<nav class="nav navbar">
    <div class="navbar-menu">
        <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'single-menu',
                'walker'         => ''
			) );
		?>
    </div>
    <div class='nav-link-container mobile-menu-link'> 
        <?php if($reobiz_option['Offcanvas_layout'] == 'style2'){ ?>
            <a href='#' class="nav-menu-link menu-button">                                                
                <span class="dot-hum"></span>
                <span class="dot-hum"></span>
                <span class="dot-hum"></span>
            </a> 
            <?php } else { ?>
            <a href='#' class="nav-menu-link menu-button">
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
</nav>
<?php } 

?>

<nav class="nav-container mobile-menu-container">
    <div id="mobile_menu_single">
        <ul class="sidenav">
            <li class='nav-link-container'> 
                <?php if($reobiz_option['Offcanvas_layout'] == 'style2'){ ?>
                    <a href='#' class="nav-menu-link menu-button">                                                
                        <span class="dot-hum"></span>
                        <span class="dot-hum"></span>
                        <span class="dot-hum"></span>
                    </a> 
                    <?php } else { ?>
                    <a href='#' class="nav-menu-link menu-button">
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
            </li>
            <li>
              <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-2',
                        'menu_id'        => 'mobile-single-menu',
                    ) );
                ?>
            </li>
        </ul>
    </div>
</nav>
