<?php 

/*==== NEW POST CODE ======*/
function service_posttype() {
	register_post_type( 'service',
		array( 
			'labels' => array( 'name' => __( 'Our Services' ), 'singular_name' => __( 'service' ) ), 'show_in_rest' => true,
			'public' => true, 'has_archive' => true, 'rewrite' => array('slug' => 'service'), 'taxonomies' => array( 'category' ),
		)
	);
}
add_action( 'init', 'service_posttype' );
function service_post_type() {
	$args = array(
        'supports' => array( 'title', 'thumbnail', 'excerpt' ),  'has_archive' => "service", 'taxonomies' => array( 'category' ),
    );
    register_post_type( 'service', $args );
}
add_action( 'init', 'service_post_type', 0 );
/*==== NEW POST CODE END ======*/

/*==== SLIDER CODE ======*/
function creae_slider() {
    register_post_type( 'slider',
        array(
            'labels' => array(
                'name' => __( 'Slider' ),
                'singular_name' => __( 'Slider' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Slider'),
            'supports' => array( 'title', 'thumbnail','editor','custom-fields' ),
            'show_in_rest' => true,
        )
    );
}
add_action( 'init', 'creae_slider' );
/*==== SLIDER CODE END ======*/

/*==== TESTIMONIALS POST ======*/
function testimonials_posttype() {
	register_post_type( 'testimonials',
		array( 
			'labels' => array( 'name' => __( 'Testimonials' ), 'singular_name' => __( 'Testimonials' ) ),
			'public' => true, 'has_archive' => true, 'rewrite' => array('slug' => 'testimonials'),
		)
	);
}
add_action( 'init', 'testimonials_posttype' );

function testimonials_post_type() {
    $labels = array(
        'name'                => _x( 'Testimonials', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Testimonials', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Testimonials', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Testimonials', 'twentythirteen' ),
        'all_items'           => __( 'All Testimonials', 'twentythirteen' ),
        'view_item'           => __( 'View Testimonials', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Testimonials', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Testimonials', 'twentythirteen' ),
        'update_item'         => __( 'Update Testimonials', 'twentythirteen' ),
        'search_items'        => __( 'Search Testimonials', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );

	$args = array(
        'label'               => __( 'Testimonials', 'twentythirteen' ),
        'description'         => __( 'Testimonials news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'testimonials', $args );
}

add_action( 'init', 'testimonials_post_type', 0 );

//==== TESTIMONIALS POST END ======*/


/*Loader HTML CSS And JS*/

<div class="preloader">
	<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"></figure>
</div>

@viewport{user-zoom: fixed;}
   .preloader {
	background-color: #070807;
	height: 100%;
	left: 0px;
	position: fixed;
	top: 0px;
	width: 100%;
	z-index: 99999999;
}

.preloader figure img {animation: pulse 1s linear infinite;max-width: 100px;}
.preloader figure {position: absolute;top: 40%;left: 0;right: 0;margin: 0px auto;text-align: center;}

@keyframes pulse {
  0% {
    opacity: 0.9;
    transform: scale(0.8);
  }
  30% {
    opacity: 1;
    transform: scale(1);
  }
  70% {
    opacity: 1;
    transform: scale(1);
  }
  100% {
    opacity: 0.9;
    transform: scale(0.8);
  }
}