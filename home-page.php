<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 
 Template Name: Home Page
 
 * @package Farquest
 */

get_header(); ?>
<?php // featured pages area ?>



<div align="center">
<div class="container">
<div class="row">

<?php if ( of_get_option('image_uploader') ) { ?>
<div class="featured">
	
<a href="<?php echo of_get_option( 'featured_link1', 'no entry' ); ?>">	
<img src="<?php echo of_get_option( 'image_uploader' ); ?>" style="width:190px;height:190px;-moz-border-radius: 85px 40px / 40px 85px;
	border-radius: 85px 40px / 40px 85px; " />
</a>
</div>		
<?php } ?>
	
<?php if ( of_get_option('image2_uploader') ) { ?>	
<div class="featured">		
<a href="<?php echo of_get_option( 'featured_link2', 'no entry' ); ?>">
<img src="<?php echo of_get_option( 'image2_uploader' ); ?>" style="width:190px;height:190px;-moz-border-radius: 85px 40px / 40px 85px;
	border-radius: 85px 40px / 40px 85px; " />
</a>
</div>
<?php } ?>
	
<?php if ( of_get_option('image3_uploader') ) { ?>		
<div class="featured">
<a href="<?php echo of_get_option( 'featured_link3', 'no entry' ); ?>">
<img src="<?php echo of_get_option( 'image3_uploader' ); ?>" style="width:190px;height:190px;-moz-border-radius: 85px 40px / 40px 85px;
	border-radius: 85px 40px / 40px 85px; " /></a>
</div>	
<?php } ?>
		
<?php if ( of_get_option('image4_uploader') ) { ?>
<div class="featured">
<a href="<?php echo of_get_option( 'featured_link4', 'no entry' ); ?>">
<img src="<?php echo of_get_option( 'image4_uploader','no entry' ); ?>" style="width:190px;height:190px;-moz-border-radius: 85px 40px / 40px 85px;
	border-radius: 85px 40px / 40px 85px; " /></a>
</div>
<?php } ?>

</div>
</div>
</div>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>
		
<?php // extra widgets ?>
<div align="center">
<div class="container">
<div class="row">
	<div class="col-sm-4">
		<?php dynamic_sidebar( 'lower-left' ); ?>
	</div>
	<div class="col-md-4">
		<?php dynamic_sidebar( 'lower-middle' ); ?>
	</div>

	<div class="col-md-4">
		<?php dynamic_sidebar( 'lower-right' ); ?>
	</div>
</div>
</div>
</div>
	
		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>