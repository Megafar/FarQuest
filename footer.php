<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Farquest
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">
			
				<div class="site-info">
				<?php if ( of_get_option('footertext') ) { ?>	
				 <?php echo of_get_option( 'footertext', 'no entry' ); ?>
				 <?php } ?>
				<?php if ( of_get_option('facebook') ) { ?>		
		
		<a href="<?php echo of_get_option( 'facebook', 'no entry' ); ?>">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" /></a>
	<?php } ?>
	
	<?php if ( of_get_option('twitter') ) { ?>		
		
		<a href="<?php echo of_get_option( 'twitter', 'no entry' ); ?>">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" /></a>
	<?php } ?>
	
	<?php if ( of_get_option('googleplus') ) { ?>		
		
		<a href="<?php echo of_get_option( 'googleplus', 'no entry' ); ?>">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/googleplus.png" /></a>
	<?php } ?>
	
	<?php if ( of_get_option('rss') ) { ?>		
		
		<a href="<?php echo of_get_option( 'rss', 'no entry' ); ?>">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.png" /></a>
	<?php } ?>
	
	<?php if ( of_get_option('linkedin') ) { ?>		
		
		<a href="<?php echo of_get_option( 'linkedin', 'no entry' ); ?>">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin.png" /></a>
	<?php } ?>
	
	<?php if ( of_get_option('flickr') ) { ?>		
		
		<a href="<?php echo of_get_option( 'flickr', 'no entry' ); ?>">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/flickr.png" /></a>
	<?php } ?>
	
	<?php if ( of_get_option('tumblr') ) { ?>		
		
		<a href="<?php echo of_get_option( 'tumblr', 'no entry' ); ?>">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/tumblr.png" /></a>
	<?php } ?>
	
	<?php if ( of_get_option('pinterest') ) { ?>		
		
		<a href="<?php echo of_get_option( 'pinterest', 'no entry' ); ?>">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest.png" /></a>
	<?php } ?>
	
	<?php if ( of_get_option('youtube') ) { ?>		
		
		<a href="<?php echo of_get_option( 'youtube', 'no entry' ); ?>">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube.png" /></a>
	<?php } ?>
	
	
					<?php do_action( 'farquest_credits' ); ?>
					<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'farquest' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'farquest' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', 'farquest' ), 'farquest', '<a href="http://www.megafardesigns.com/" rel="designer">MegaFar Designs</a>' ); ?>
				</div><!-- close .site-info -->
			
			</div>	
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>