<?php
/**
 * expopyme functions and definitions
 *
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/ReduxFramework/sample/sample-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/ReduxFramework/sample/sample-config.php' );
}

if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'expopyme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function expopyme_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /lang/ directory
	 * If you're building a theme based on expopyme, use a find and replace
	 * to change 'expopyme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'expopyme', get_template_directory() . '/lang' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'thumb-small', 50, 50, true );
	add_image_size( 'thumb-medium', 300, 135, true );
	add_image_size( 'thumb-featured', 250, 175, true );
	add_image_size( 'thumb-portfolio', 302, 265, true );
	add_image_size( 'thumb-home', 150, 106, true );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'main' => __( 'Main Menu', 'expopyme' ),
	) );
}
endif; // expopyme_setup
add_action( 'after_setup_theme', 'expopyme_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function expopyme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'expopyme' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Header', 'expopyme' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sub Footer 1', 'expopyme' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sub Footer 2', 'expopyme' ),
		'id'            => 'sidebar-4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sub Footer 3', 'expopyme' ),
		'id'            => 'sidebar-5',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sub Footer 4', 'expopyme' ),
		'id'            => 'sidebar-6',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
}
add_action( 'widgets_init', 'expopyme_widgets_init' );

/**
 * Count the number of footer sidebars to enable dynamic classes for the footer
 *
 * @since expopyme 1.0
 */
function expopyme_footer_sidebar_class() {
	$count = 0;

	if ( is_active_sidebar( 'sidebar-3' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-4' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-5' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-6' ) )
		$count++;

	$class = '';

	switch ( $count ) {
		case '1':
			$class = 'site-extra extra-one';
			break;
		case '2':
			$class = 'site-extra extra-two';
			break;
		case '3':
			$class = 'site-extra extra-three';
			break;
		case '4':
			$class = 'site-extra extra-four';
			break;
	}

	if ( $class )
		echo 'class="' . $class . '"';
}

/**
 * Enqueue scripts and styles
 */
function expopyme_scripts() {
	$protocol = is_ssl() ? 'https' : 'http';
	$query_args = array(
		'family' => 'Yanone+Kaffeesatz:200,300,400,700',
	);
	wp_enqueue_style( 'expopyme-fonts', add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" ) );
	wp_enqueue_style( 'fancyboxcss', get_template_directory_uri() . '/css/jquery.fancybox.css' );
	wp_enqueue_style( 'expopyme-awesome', get_template_directory_uri() . '/css/font-awesome.css' );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'expopyme-style', get_stylesheet_uri() );

        wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css' );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.js', array( 'jquery' ) );
	//wp_enqueue_script( 'imagemapster', get_template_directory_uri() . '/js/jquery.imagemapster.js', array( 'jquery' ) );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array( 'jquery' ) );
        wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array( 'jquery' ) );
	wp_enqueue_script( 'stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'supersubs', get_template_directory_uri() . '/js/supersubs.js', array( 'jquery' ) );
	wp_enqueue_script( 'expopyme-settings', get_template_directory_uri() . '/js/settings.js', array( 'jquery' ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if(is_page_template("page-templates/directorio.php")){
		wp_enqueue_style( 'directorio', get_template_directory_uri() . '/css/directorio.css' );
	}


	if(is_page_template("page-templates/lista-videos.php")){
		echo 'hola';
		wp_enqueue_style( 'lista-videos', get_template_directory_uri() . '/css/lista-videos.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'expopyme_scripts' );

define('expopyme_PATH', get_template_directory() );
/**
 * Custom functions that act independently of the theme templates.
 */
require expopyme_PATH . '/inc/extras.php';

/**
 * Custom template tags for this theme.
 */
require expopyme_PATH . '/inc/template-tags.php';

/**
 * Add social links on user profile page.
 */
require expopyme_PATH . '/inc/user-profile.php';

/**
 * Add custom widgets
 */
require expopyme_PATH . '/inc/custom-widgets.php';


/**
 * Directorio PostType
 */
require expopyme_PATH . '/inc/directorio-posttype.php';



/////////////////////////////////////////////////////
             /* Producto  PostType */
/////////////////////////////////////////////////////

/*Creo il custom post type Prodotti*/
function my_custom_post_product() {
	$labels = array(
		'name'               => _x( 'Producto', 'post type general name' ),
		'singular_name'      => _x( 'Producto', 'post type singular name' ),
		'add_new'            => _x( 'Agregar Nuevo', 'book' ),
		'add_new_item'       => __( 'Agregar Nuevo Producto' ),
		'edit_item'          => __( 'Modifica Producto' ),
		'new_item'           => __( 'Nuevo Producto' ),
		'all_items'          => __( 'Todas las Productos' ),
		'view_item'          => __( 'Ver Producto' ),
		'search_items'       => __( 'Buscar Producto' ),
		'not_found'          => __( 'Ningun Producto Encontrado' ),
		'not_found_in_trash' => __( 'Ningun Producto Encontrado en Basura' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Producto'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Insertar Nuevo Producto',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
		'hierarchical'	=> true,
		'rewrite'		=> array('slug' => 'producto','with_front' => false,'hierarchical' => true),
		'query_var'		=> true,
		//'rewrite'		=> true,
		//'publicly_queryable' => false,
	);
	register_post_type( 'producto', $args );
}
add_action( 'init', 'my_custom_post_product' );

/*Creo la custom taxonomy Cat-Prod  a Producto*/
function my_taxonomies_product() {
	$labels = array(
		'name'              => _x( 'Cat-Prod', 'taxonomy general name' ),
		'singular_name'     => _x( 'Cat-Prod', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Producto Categories' ),
		'all_items'         => __( 'All Producto Categories' ),
		'parent_item'       => __( 'Parent Producto Category' ),
		'parent_item_colon' => __( 'Parent Producto Category:' ),
		'edit_item'         => __( 'Edit Producto Category' ),
		'update_item'       => __( 'Update Producto Category' ),
		'add_new_item'      => __( 'Add New Producto Category' ),
		'new_item_name'     => __( 'New Producto Category' ),
		'menu_name'         => __( 'Cat-Prod' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' 	=> true,
		'public'		=> true,
		'query_var'		=> true,
		//slug prodotto deve coincidere con il primo parametro dello slug del Custom Post Type correlato
		'rewrite'		=>  array('slug' => 'producto' ),
		'_builtin'		=> false,
	);
	register_taxonomy( 'piso', 'producto', $args );
}
add_action( 'init', 'my_taxonomies_product', 0 );



/////////////////////////////////////////////////////
/* Br & P Black Studio TinyMCE Widget para Page Builder by SiteOrigin */
/////////////////////////////////////////////////////

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


/////////////////////////////////////////////////////
            /* Site Origin Panels */
/////////////////////////////////////////////////////

function custom_row_style_fields($fields) {
  $fields['id_val'] = array(
      'name'        => __('Id', 'siteorigin-panels'),
      'type'        => 'text',
      'group'       => 'attributes',
      'description' => __('Identificador.', 'siteorigin-panels'),
      'priority'    => 8,
  );

  return $fields;
}

add_filter( 'siteorigin_panels_row_style_fields', 'custom_row_style_fields' );


function custom_row_style_attributes( $attributes, $args ) {
    if( !empty( $args['id_val'] ) ) {
    	$attributes['id'] = $args['id_val'];
        array_push($attributes['id'], $args['id_val']);
    }

    return $attributes;
}

add_filter('siteorigin_panels_row_style_attributes', 'custom_row_style_attributes', 10, 2);

/////////////////////////////////////////////////////
                 /* Portfolio */
/////////////////////////////////////////////////////

/*  Agregar Post types  */

if ( ! function_exists('custom_post_type_portfolio') ) {

// Register Custom Post Type

function custom_post_type_portfolio() {

	$labels = array(
		'name'                => _x( 'Portfolio', 'Post Type General Name', 'expopyme' ),
		'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'expopyme' ),
		'menu_name'           => __( 'Portfolio', 'expopyme' ),
		'parent_item_colon'   => __( 'Parent Item:', 'expopyme' ),
		'all_items'           => __( 'All Item Portfolio', 'expopyme' ),
		'view_item'           => __( 'View Portfolio Item', 'expopyme' ),
		'add_new_item'        => __( 'New Portfolio Post Item', 'expopyme' ),
		'add_new'             => __( 'Add New Portfolio', 'expopyme' ),
		'edit_item'           => __( 'Edit Portfolio', 'expopyme' ),
		'update_item'         => __( 'Update Portfolio', 'expopyme' ),
		'search_items'        => __( 'Search Portfolio Items', 'expopyme' ),
		'not_found'           => __( 'Nothing found', 'expopyme' ),
		'not_found_in_trash'  => __( 'Nothing found in Trash', 'expopyme' ),
	);

	$rewrite = array(
		'slug'                => 'post_type',
		'pages'               => true,
		'feeds'               => true,
	);

	$capabilities = array(
		'edit_post'           => 'edit_post',
		'read_post'           => 'read_post',
		'delete_post'         => 'delete_post',
		'edit_posts'          => 'edit_posts',
		'edit_others_posts'   => 'edit_others_posts',
		'publish_posts'       => 'publish_posts',
		'read_private_posts'  => 'read_private_posts',

	);

	$args = array(
		'label'               => __( 'Portfolio', 'expopyme' ),
		'description'         => __( 'Portfolio Descripcion', 'expopyme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		/*'taxonomies'          => array( 'category', 'post_tag' ),  Ojo Quita las Categorias Normales*/
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-portfolio',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		/*'capabilities'        => $capabilities,*/
	);

	register_post_type( 'portfolio', $args );
}

// Hook into the 'init' action

add_action( 'init', 'custom_post_type_portfolio', 0 );

}
/*  Fin de Post Types*/

/*  Agregar soporte a categoria personalizada */

add_action( 'init', 'create_topics_hierarchical_taxonomy_portfolio', 0 );
function create_topics_hierarchical_taxonomy_portfolio() {
  $labels = array(
    'name' => _x( 'Category', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Category' ),
    'all_items' => __( 'All Category' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Topic:' ),
    'edit_item' => __( 'Edit Category' ),
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Category' ),
  );

// Now register the taxonomy

  register_taxonomy('category-portfolio',array('portfolio'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'category-portfolio' ),
  ));
}

/*  Fin de soporte a categoria personalizada */

function get_the_category_bytax( $id = false, $tcat = 'Category' ) {
    $categories = get_the_terms( $id, $tcat );
    if ( ! $categories )
        $categories = array();

    $categories = array_values( $categories );

    foreach ( array_keys( $categories ) as $key ) {
        _make_cat_compat( $categories[$key] );
    }

    // Filter name is plural because we return alot of categories (possibly more than #13237) not just one
    return apply_filters( 'get_the_categories', $categories );
}

/* Exclude Pages from search */

add_filter( 'pre_get_posts', 'exclude_pages_search_when_logged_in' );
function exclude_pages_search_when_logged_in($query) {

	$nombres_cposts;

	/* pasar tipos de post a redux */

	session_start();
	$args = array(
		'public'   => true,
		'_builtin' => false
	);
	$output = 'names';
	$operator = 'and';
	$post_types = get_post_types( $args, $output, $operator );
	foreach ( $post_types  as $post_type ) {
	   $_SESSION['my_posts'][$post_type] = $post_type;
	   $nombres_cposts[] = $post_type;
	}

	/* end pasar */

	$exclude = $redux_demo;
	$cad;
	$total=0;
	if( !empty( $GLOBALS['redux_demo']['opt-multi-select-pages-n']) )
	{
		for ($i=0; $i < sizeof($GLOBALS['redux_demo']['opt-multi-select-pages-n']); $i++) {
			$cad[$i] = $GLOBALS['redux_demo']['opt-multi-select-pages-n'][$i];
			$total++;
		}
	}
	if( !empty( $GLOBALS['redux_demo']['opt-multi-select-posts-n']) )
	{
		$max = sizeof($GLOBALS['redux_demo']['opt-multi-select-posts-n']);
		for ( $i=0; $i < ($max); $i++) {
			$cad[$total+1] = $GLOBALS['redux_demo']['opt-multi-select-posts-n'][$i];
			$total++;
		}
	}

	for ($x=0; $x < sizeof($nombres_cposts); $x++) {

		if( !empty( $GLOBALS['redux_demo']['opt-multi-select-posts-n'.$x]) )
		{
			$max = sizeof($GLOBALS['redux_demo']['opt-multi-select-posts-n'.$x]);
			for ( $i=0; $i < ($max); $i++) {
				$cad[$total+1] = $GLOBALS['redux_demo']['opt-multi-select-posts-n'.$x][$i];
				$total++;
			}
		}

	}

	if ( $query->is_search )
        	$query->set( 'post__not_in', $cad );
    	return $query;

}

/* Desactivar Comentarios */

// Disable support for comments and trackbacks in post types
function df_disable_comments_post_types_support() {
	$post_types = get_post_types();
	foreach ($post_types as $post_type) {
		if(post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
}
add_action('admin_init', 'df_disable_comments_post_types_support');

// Close comments on the front-end
function df_disable_comments_status() {
	return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);

// Hide existing comments
function df_disable_comments_hide_existing_comments($comments) {
	$comments = array();
	return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

// Remove comments page in menu
function df_disable_comments_admin_menu() {
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');

// Redirect any user trying to access comments page
function df_disable_comments_admin_menu_redirect() {
	global $pagenow;
	if ($pagenow === 'edit-comments.php') {
		wp_redirect(admin_url()); exit;
	}
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');

// Remove comments metabox from dashboard
function df_disable_comments_dashboard() {
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');

// Remove comments links from admin bar
function df_disable_comments_admin_bar() {
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
}
add_action('init', 'df_disable_comments_admin_bar');


/**
 * REEMPLAZAR --- CONTACT FORM 7
 */
function my_wpcf7_form_elements($html) {
	$text = 'ÁREA DE INTERÉS';
	$html = str_replace('<option value="">---</option>', '<option value="" disabled selected>' . $text . '</option>', $html);
	return $html;
}
add_filter('wpcf7_form_elements', 'my_wpcf7_form_elements');

/* Fin de Comentarios Desactivados */
