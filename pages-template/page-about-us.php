<?php
/**
 * Template Name: About Us Page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SH_Theme
 */

global $sh_option;
get_header();
?>

    <div class="aboutUsPage">
        <div class="banner-page">
            <img src="<?php the_field('about_page_banner_image'); ?>" width="100%" alt="Banner">
        </div>
        <!-- End -->

        <div class="container">
            <div class="factory-introduction">
                <?php
                if( have_rows('factory_introduction') ) :
                    while( have_rows('factory_introduction') ) : the_row();
                    $title = get_sub_field('title');
                    $image = get_sub_field('image');
                ?>
                    <div class="intro-items">
                        <img src="<?php echo $image ?>" alt="Icon">
                        <h3><?php echo $title ?></h3>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <!-- End -->

        <div class="about-us-content">
            <div class="container">
                <?php the_content(); ?>
            </div>
        </div>
        <!-- End -->

        <div class="mission-vision">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="image">

                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="content">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php
get_footer();
