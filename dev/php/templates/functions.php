<?php
  //import the default gravityform contact forms
define("GF_THEME_IMPORT_FILE", "includes/gravityforms-contactform.xml");

// Register the sitemap menu
add_action( 'init', 'register_menu_sitemap' );

function register_menu_sitemap(){
	register_nav_menus( array(
		'sitemap' => 'Sitemap'
    ));
}

$initialized = get_option('slate_initialized');
if($initialized == null){
	$initialized = false;
}

if(is_admin() && !$initialized){
	  include_once('includes/initialize_pages.php');
	
	  $siteIniter = new SiteInitializer(
		  "zeister stukadoors", 
		  "Troelstralaan 18 3705 CR Zeist", 
		  "0619507003", 
		  "admin@zeisterstukadoors.nl");
	  $siteIniter->initializeAll();
	  add_option('slate_initialized', true);
} 

function custom_post_diensten() {
		$labels = array(
			'name'               => _x( 'Diensten', 'post type general name' ),
			'singular_name'      => _x( 'Dienst', 'post type singular name' ),
			'add_new'            => _x( 'Nieuwe dienst', 'book' ),
			'add_new_item'       => __( 'Voeg nieuwe dienst toe' ),
			'edit_item'          => __( 'Bewerk dienst' ),
			'new_item'           => __( 'Nieuw dienst' ),
			'all_items'          => __( 'All Diensten' ),
			'view_item'          => __( 'Bekijk Diensten' ),
			'search_items'       => __( 'Zoek Diensten' ),
			'not_found'          => __( 'No products found' ),
			'not_found_in_trash' => __( 'No products found in the Trash' ), 
			'parent_item_colon'  => '',
			'menu_name'          => 'Diensten'
		);
 
		$args = array(
			'labels'        => $labels,
			'description'   => 'Diensten kunnen hier worden toegevoegd.',
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true,
		);
		register_post_type( 'diensten', $args );	


}

add_action( 'init', 'custom_post_diensten' );

//Remove fixed width and height http://css-tricks.com/snippets/wordpress/remove-width-and-height-attributes-from-inserted-images/
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}


?>
