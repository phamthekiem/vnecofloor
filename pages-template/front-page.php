<?php
/**
 * Template Name: Trang chủ
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SH_Theme
 */

global $sh_option;
get_header();
?>

    <div class="homePage">

        <div class="home-information">
            <div class="container">
                <div class="background">
                    <img src="<?php echo the_field('infor_background') ?>" alt="Image">
                </div>
                <div class="content">
                    <h2 class="title"><?php echo the_field('infor_title') ?></h2>
                    <div class="description"><?php echo the_field('infor_description') ?></div>
                    <div class="view-more">
                        <?php if(pll_current_language() == 'vi') {
                            echo '<a href="'.get_field('infor_view_more').'">Xem Thêm </a>';
                        } else {
                            echo '<a href="'.get_field('infor_view_more').'">View More +</a>';
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->

        <div class="home-products">
            <div class="container">
                <h2 class="heading"><?php echo the_field('home_product_title') ?></h2>
                <div class="row">
                    <?php
                    $list_categories = get_field('select_product_categories');
                    $product_categories  = get_terms(array(
                        'taxonomy' => 'product_cat',
                        'include' => $list_categories,
                        'hide_empty'    => 0
                    ));
                    if ( ! empty($product_categories) && ! is_wp_error( $product_categories )) {
                        foreach ( $product_categories as $category ) {
                            $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true );
                            $image = wp_get_attachment_url( $thumbnail_id );
                            ?>
                            <div class="col-md-6 col-12">
                                <div class="product-cat image-container">
                                    <a href="<?php echo get_term_link( $category )?>" class="thumb">
                                        <img src="<?php echo $image?>" alt="<?php echo $category->name?>">
                                    </a>
                                    <div class="content">
                                        <h3><?php echo $category->name?></h3>
                                        <a href="<?php echo get_term_link( $category )?>" class="view-more">
                                            <?php if(pll_current_language() == 'vi') {
                                                echo 'Xem Thêm ';
                                            } else {
                                                echo 'View More +';
                                            } ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- End -->

        <div class="home-get-now">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 new-home-left">
                        <a href="/contact/">
                            Get quote now
                            <span></span>
                        </a>
                    </div>
                    <div class="col-md-6 new-home-right">
                        <a href="/contact/">
                            Get a sample now
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->

        <div class="our-lastest-news">
            <div class="container">
                <h2 class="heading"><?php echo the_field('home_news_title') ?></h2>
                <div class="slick-carousel" data-item="3" data-item_md="3" data-item_sm="1" data-item_mb="1" data-row="1" data-dots="false" data-arrows="true" data-vertical="false">
                    <?php
                    $list_post_id = get_field('home_news_list_news');
                    $args = array(
                        'post_type' => 'post',
                        'post__in'  => $list_post_id,
                        'orderby'   => 'post__in',
                        'posts_per_page'    => -1,
                    );
                    $post_query = new WP_Query($args);
                    if ($post_query->have_posts()) {
                        while ($post_query->have_posts()) {
                            $post_query->the_post();
                           ?>
                            <div class="list-blog">
                                <a href="<?php the_permalink(); ?>" class="image">
                                    <?php echo get_the_post_thumbnail(get_the_ID(), 'large', array( 'class' =>'thumnail') ); ?>
                                </a>
                                <div class="content">
                                    <h3><a href="<?php the_permalink()?>" title="<?php the_title()?>"><?php the_title()?></a></h3>
                                    <div class="description"><?php echo wp_trim_words( get_the_content(), 30, '.' ); ?></div>
                                </div>
                            </div>
                           <?php
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>

    </div>

<?php
get_footer();
