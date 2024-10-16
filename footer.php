<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SH_Theme
 */

global $sh_option;
do_action( 'sh_after_content_sidebar_wrap' );
?>
		</div>
	</div><!-- #content -->

	<footer id="footer" class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
		
		<div class="footer-widgets">
			<div class="container">
				<div class="wrap">
					<div class="row">
						<?php do_action( 'sh_footer' );?>
					</div>
				</div>
			</div>
		</div><!-- .footer-widgets -->
		<div class="site-info">
			<div class="container">
				<div class="wrap">
					<div class="row">
						<div class="col-sm-12 text-center">
							<?php if( $sh_option['footer-copyright'] ) : echo $sh_option['footer-copyright'];endif;?>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
		<p id="back-top"><a href="#top" target="_blank"><span></span></a></p>
		
	</footer><!-- #colophon -->

	<?php do_action( 'sh_after_footer' );?>

    <section class="supports-group">
        <a href="https://wa.me/<?php echo $sh_option['whatsapp-number'] ?>" target="_blank" class="support-item" title="Whatsapp">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="" target="_blank" class="support-item wechat" title="Wechat" data-toggle="modal" data-target="#wechatModalCenter">
            <i class="fab fa-weixin"></i>
        </a>
        <a href="<?php echo $sh_option['fb-messenger'] ?>" target="_blank" class="support-item" title="Fanpage Facebook">
            <i class="fab fa-facebook-messenger"></i>
        </a>


    </section>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
