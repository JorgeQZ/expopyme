<?php
/**
 * Custom Post Type
 */

add_action( 'init', 'expopyme_posttype_directorio' );

function expopyme_posttype_directorio(){
    $labels = array(
        'name'                => __('Directorios'),
        'singular_name'       => __('Directorio'),
        'add_new'             => __('Agregar nuevo directorio'),
        'add_new_item'        => __('Agregar nuevo directorio'),
        'edit_item'           => __('Editar directorio'),
        'add_new'             => __('Agregar nuevo directorio'),
        'all_items'           => __('Todos los directorio'),
        'view_item'           => __('Ver directorio'),
        'search_items'        => __('Buscar directorio'),

        'not_found'           => __('No se han encontrado posts de directorio.'),
		'not_found_in_trash'  => __('No se han encontrado posts de directorio en la papelera')
    );


    $args = array(
        'labels'            => $labels,
        'description'       => '',
        'public'            => true,
        'menu_position'     => 5,
        'menu_icon' => 'dashicons-screenoptions',
        'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive'       => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var'         => 'directorio'
      );

      register_post_type( 'directorio', $args);
}


function taxonomias_directorio() {
    register_taxonomy(
        'directorio_categorias',
        'directorio',
        array(
            'hierarchical' => true,
            'label' => 'Categoría de directorio',
            'query_var' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_admin_column' => true,
            'rewrite' => array(
                'slug' => 'slug_directorio',
                'with_front' => false
            )
        )
    );
  }
//   add_action( 'init', 'taxonomias_directorio');
//

?>