<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<?php global $sh_option;?>
<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">

<?php do_action( 'sh_before_header' );?>

<div id="page" class="site">

	<header id="masthead" <?php header_class();?> role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">

		<!-- Start Top Header -->
		<?php if( $sh_option['display-topheader-widget'] == 1 ) : ?>
			<div class="container">
				<div class="top-header">
                    <div class="header-contact">
                        <ul>
                            <li>
                                <a href="tel:<?php echo $sh_option['information-phone'] ?>">
                                    <i class="fa fa-phone"></i>
                                    <span><?php echo $sh_option['information-phone'] ?></span>
                                </a>
                            </li>
                            <li> | </li>
                            <li>
                                <a href="mailto:<?php echo $sh_option['information-email'] ?>">
                                    <i class="fa fa-envelope"></i>
                                    <span><?php echo $sh_option['information-email'] ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-language">
					    <?php dynamic_sidebar( 'Top Header' );?>
                    </div>
				</div>
			</div>
		<?php endif; ?>
		<!-- End Top Header -->

		<?php sh_header_layout();?>

        <div class="banner-video">
            <video id="bannerVideo" autoplay muted controls loop>
                <!-- <source src="<?php //bloginfo('template_directory'); ?>/lib/video/video.mp4" type="video/mp4"> -->
                <source src="https://storage.googleapis.com/cdn.2hglobalgate.com/pod2h.local/video.mp4" type="video/mp4">
            </video>
        </div>

	</header><!-- #masthead -->
	
	<div id="content" class="site-content">

	<?php //do_action( 'before_loop_main_content' ) ?>

        <?php
        if (is_home()) {
            echo '<div class="container">';
        } else {
            echo '<div class="homepage">';
        }
        ?>


