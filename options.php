<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {

	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data


	

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __('Basic Settings', 'options_framework_theme'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('', 'options_framework_theme'),
		'desc' => __('Thanks for using the FarQuest theme! Use this section to add custom content to your website, and make sure to pay attention to image sizes! Featured Pages are for the Home Page template, which you can select in your pages editor.', 'options_framework_theme'),
		'type' => 'info');
		
		
	$options[] = array(
		'name' => __('Footer', 'options_framework_theme'),
		'desc' => __('Input footer text', 'options_framework_theme'),
		'id' => 'footertext',
		'std' => 'Default Value',
		'type' => 'text');

	$options[] = array(
		'name' => __('About Featured Images', 'options_framework_theme'),
		'desc' => __('Featured images are automatically scaled to 190 pixels wide and 190 pixels high.'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Featured Image 1', 'options_framework_theme'),
		'desc' => __('Upload an image to represent your featured page', 'options_framework_theme'),
		'id' => 'image_uploader',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Featured Link 1', 'options_framework_theme'),
		'desc' => __('Copy and paste the link for your featured page here.', 'options_framework_theme'),
		'id' => 'featured_link1',
		'std' => 'Default Value',
		'type' => 'text');

	$options[] = array(
		'name' => __('Featured Image 2', 'options_framework_theme'),
		'desc' => __('Upload an image to represent your featured page', 'options_framework_theme'),
		'id' => 'image2_uploader',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Featured Link 2', 'options_framework_theme'),
		'desc' => __('Copy and paste the link for your featured page here.', 'options_framework_theme'),
		'id' => 'featured_link2',
		'std' => 'Default Value',
		'type' => 'text');

	$options[] = array(
		'name' => __('Featured Image 3', 'options_framework_theme'),
		'desc' => __('Upload an image to represent your featured page', 'options_framework_theme'),
		'id' => 'image3_uploader',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Featured Link 3', 'options_framework_theme'),
		'desc' => __('Copy and paste the link for your featured page here.', 'options_framework_theme'),
		'id' => 'featured_link3',
		'std' => 'Default Value',
		'type' => 'text');


	$options[] = array(
		'name' => __('Featured Image 4', 'options_framework_theme'),
		'desc' => __('Upload an image to represent your featured page', 'options_framework_theme'),
		'id' => 'image4_uploader',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Featured Link 4', 'options_framework_theme'),
		'desc' => __('Copy and paste the link for your featured page here.', 'options_framework_theme'),
		'id' => 'featured_link4',
		'std' => 'Default Value',
		'type' => 'text');

$options[] = array(
		'name' => __('Social Media', 'options_framework_theme'),
		'type' => 'heading');
		
		$options[] = array(
		'name' => __('', 'options_framework_theme'),
		'desc' => __('Copy and paste the link to your social media accounts.'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Facebook', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'facebook',
		'std' => 'Default Value',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('Twitter', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'twitter',
		'std' => 'Default Value',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('Google+', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'googleplus',
		'std' => 'Default Value',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('RSS', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'rss',
		'std' => 'Default Value',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('LinkedIn', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'linkedin',
		'std' => 'Default Value',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('flickr', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'flickr',
		'std' => 'Default Value',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('Tumblr', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'tumblr',
		'std' => 'Default Value',
		'type' => 'text');

		$options[] = array(
		'name' => __('Pinterest', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'pinterest',
		'std' => 'Default Value',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('Youtube', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'youtube',
		'std' => 'Default Value',
		'type' => 'text');




	/*$options[] = array(
		'name' => "Example Image Selector",
		'desc' => "Images for layout.",
		'id' => "example_images",
		'std' => "2c-l-fixed",
		'type' => "images",
		'options' => array(
			'facebook' => $imagepath . 'facebook.png',
			'twitter' => $imagepath . 'twitter.png',
			'2c-r-fixed' => $imagepath . '2cr.png')
	);
*/
	



	

	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */
/*
	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);

	$options[] = array(
		'name' => __('Default Text Editor', 'options_framework_theme'),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'options_framework_theme' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'example_editor',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
*/


	return $options;
}