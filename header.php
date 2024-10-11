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

<!-- Modal Wechat -->
<div class="modal fade" id="wechatModalCenter" tabindex="-1" role="dialog" aria-labelledby="wechatModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="<?php echo $sh_option['wechat-qr']['url'] ?>" alt="WeChat QR Code" style="width: 100%;">
            </div>
        </div>
    </div>
</div>

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

                    <div class="menu-search">
                        <div class="container">
                            <div class="dropdown">
                                <button class="btn" type="button" data-toggle="dropdown"><i class="fa fa-search"></i></button>
                                <div class="dropdown-menu">
                                    <form action="<?php bloginfo('url'); ?>/" method="GET" role="form">
                                        <div class="form-group">
                                            <input type="text" name="s" class="form-control" id="" placeholder="Keywords...">
                                        </div>
                                        <button type="submit" class="btn">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		<?php endif; ?>
		<!-- End Top Header -->

		<?php sh_header_layout();?>

        <?php if ( is_front_page() || is_home() ) { ?>
            <div class="banner-video">
                <video id="bannerVideo" autoplay muted controls loop playsinline poster="<?php echo $sh_option['video-banner']['url'] ?>">
                    <source src="https://storage.googleapis.com/cdn.2hglobalgate.com/pod2h.local/video.mp4" type="video/mp4">
                </video>
            </div>
        <?php } ?>

	</header><!-- #masthead -->
	
	<div id="content" class="site-content">

	<?php //do_action( 'before_loop_main_content' ) ?>
    <?php do_action( 'before_content' ) ?>

        <?php if ( !is_front_page() && !is_page( 'about-us' ) && !is_page( 've-chung-toi' ) ) {
            echo '<div class="container">';
        } else {
            echo '<div class="pageContent">';
        }?>


