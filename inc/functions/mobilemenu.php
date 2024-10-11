<?php
/**
 *
 * @author Quang Hoa
 *
 * @link 
 *
 * @package SH_Theme
 */

function create_menu_mobile_style_sliding(){
    ?>
    <nav id="mobilenav">
        <div class="mobilenav__inner">
            <div class="toplg">
                <form action="<?php bloginfo('url'); ?>/" method="GET" role="form">
                    <div class="form-group">
                        <input type="text" name="s" class="form-control" id="" placeholder="Keywords...">
                    </div>
                    <button type="submit" class="btn">Search</button>
                </form>
            </div>
            <?php 
            wp_nav_menu( array(
                'theme_location'    => 'menu-1', 
                'menu_id'           => 'menu-main', 
                'menu_class'        => 'mobile-menu',
            ) );
            ?>
            <a class="menu_close"><i class="fas fa-angle-left"></i></a>
        </div>
    </nav>
    <?php
}
add_action( 'sh_before_header','create_menu_mobile_style_sliding' );

function create_overlay_body(){
    echo '<div class="panel-overlay"></div>';
}
add_action( 'sh_after_footer','create_overlay_body' );