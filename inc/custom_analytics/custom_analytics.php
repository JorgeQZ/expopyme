<?php
/**
 * Custom Post Type
 */

add_action( 'init', 'expopyme_posttype_videos' );

function expopyme_posttype_videos(){
    $labels = array(
        'name'                => __('Videos'),
        'singular_name'       => __('Video'),
        'add_new'             => __('Agregar nuevo video'),
        'add_new_item'        => __('Agregar nuevo video'),
        'edit_item'           => __('Editar video'),
        'add_new'             => __('Agregar nuevo video'),
        'all_items'           => __('Todos los videos'),
        'view_item'           => __('Ver videos'),
        'search_items'        => __('Buscar videos'),

        'not_found'           => __('No se han encontrado posts de video.'),
		'not_found_in_trash'  => __('No se han encontrado posts de video en la papelera')
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
        'query_var'         => 'video'
      );

      register_post_type( 'video', $args);
}


function taxonomias_video() {
    register_taxonomy(
        'video_categorias',
        'video',
        array(
            'hierarchical' => true,
            'label' => 'Categoría de videos',
            'query_var' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_admin_column' => true,
            'rewrite' => array(
                'slug' => 'slug_video',
                'with_front' => false
            )
        )
    );
  }
add_action( 'init', 'taxonomias_video');




// ADMIN
function ca_admin_style() {
    wp_enqueue_style('admin-styles', get_template_directory_uri(  ).'/css/admin_styles.css');
}
// add_action('admin_enqueue_scripts', 'ca_admin_style');


/**
 * PUBLIC
 */

function wp_enqueue_scripts__youtube_api() {
    wp_enqueue_script( 'yt-player-api', 'https://www.youtube.com/iframe_api', array(), false, false );
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_scripts__youtube_api' );


/***
 * Página del Dashboard
*/
 function ca_register_setting(){
    register_setting(
        'custom-analytics-group', 'custom-analytics', 'intval'
    );

    add_action( 'admin_init', 'ca_register_setting');
 }

 function ca_capability( $capability ){
    return 'edith_other_posts';
 }
 add_filter('option_page_capability_custom-analytics-group', 'ca_capability');




 function ca_register_ca_menu_page(){
    add_menu_page(
        __('ExpoPyme Analytics', 'textdomain'), //Pagina
        'ExpoPyme Analytics', //Titulo
        'edit_posts', //options
        'expopyme-analytics', //url
        'expopyme_CA', //funcion callback
        'dashicons-chart-line', //Dashicon
        1, // orden
    );

    // add_submenu_page(
    //     'expopyme-analytics',
    //     'ExpoVideo',
    //     'ExpoVideo',
    //     'manage_options',
    //     ''
    // );
// add_submenu_page( 'my-top-level-slug', 'My Custom Submenu Page', 'My Custom Submenu Page',
// 	'manage_options', 'my-secondary-slug');
 }

 add_action( 'admin_menu', 'ca_register_ca_menu_page' );

 function expopyme_CA(){
   global $wpdb, $post;

   $videoID = $_GET['video_id'];


   echo '<h1>ExpoPyme Analytics</h1>
    <hr>
    <p>Aquí se muestran los datos rastreados de clicks y views obtenidos en el sitio. Para las métricas se usan los siguientes parametros:

        <ol>
            <li>Los usuarios deben estar logeados en el sitio.</li>
            <li>Las views se contabilizan si se han reproducido al menos 15 minutos de contenido de un mismo video</li>
            <li>Detalles extras en desarrollo</li>
        </ol>
    </p>';
   if(!$videoID):
    /***
     * VISTAS DE TABLA GENERAL
     */

    ?>
     <table width="100%">
        <thead style="background: black; color: white;">
            <th width="50%">Minutos reproducidos en los últimos 7 días</th>
            <th width="50%">Minutos reproducidos totales</th>
        </thead>
        <tbody>
            <tr>
                <td style="font-size: 40px; text-align: center; padding: 10px;">
                    <?php
                        $secViewed = $wpdb->get_results("SELECT SUM(secViewed) as secViewed FROM wp_expovideos WHERE date BETWEEN (NOW() - INTERVAL 7 DAY) AND NOW()", ARRAY_A);
                        echo round($secViewed[0]['secViewed']/60, PHP_ROUND_HALF_UP);
                    ?>
                </td>
                <td style="font-size: 40px; text-align: center; padding: 10px;">
                    <?php
                         $secViewed = $wpdb->get_results("SELECT SUM(secViewed) as secViewed FROM wp_expovideos", ARRAY_A);
                       echo round($secViewed[0]['secViewed']/60, PHP_ROUND_HALF_UP);
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <table width="100%">
        <thead style="background: black; color: white;">
            <th width="70%">Titulo</th>
            <th width="30%">Fecha</th>
        </thead>
        <tbody>
        <?php
         $videosViewed = $wpdb->get_results("SELECT video_id, date FROM wp_expovideos ORDER BY date DESC");
        foreach ($videosViewed as $video): ?>
            <tr>
                <td width="70%"><a href="<?php echo get_home_url().'/wp-admin/admin.php?page=expopyme-analytics&video_id='.$video->video_id;  ?>"><?php echo get_the_title($video->video_id) ?></a></td>
                <td width="30%" style="text-align: center;">
                    <?php
                    $date = new DateTime($video->date);
                    echo $date->format('d-m-Y');
                    ?>
                </td>
            </tr>
            <?php
        endforeach;
        ?>
        </tbody>
    </table>
    <?php

    /***
     *
     * TABLAS DE VISTAS POR VIDEO
     *
     */
    else:
    ?>
    <br>
        <button onclick="history.back()" style="background-color: #76082b; border: none; color: white; cursor: pointer; padding: 5px 10px;">Regresar</button>
        <p style="font-size: 30px; margin-top: 5px">Video: <i><u><?php echo get_the_title($videoID); ?></i></u> </p>
        <table style="width: 100%; text-align: center;">
            <thead style="background: black; color: white;">
                <th>
                    Vistas únicas
                </th>
                <th>
                    Vistas en los últimos 7 días
                </th>
                <th>
                    Vistas totales
                </th>
            </thead>
            <tbody>
                <tr>

                    <td style="font-size: 40px; text-align: center; padding: 10px;">
                        <?php
                            $uniqueUsers= $wpdb->get_results("SELECT COUNT(DISTINCT user_id) AS uniqueUsers FROM wp_expovideos WHERE video_ID = $videoID ORDER BY date DESC", ARRAY_A);
                            echo $uniqueUsers[0]['uniqueUsers'];
                        ?>
                    </td>
                    <td style="font-size: 40px; text-align: center; padding: 10px;">
                        <?php
                            $viewsWeek= $wpdb->get_results("SELECT COUNT(id) as viewsWeek FROM wp_expovideos WHERE video_ID = $videoID AND date BETWEEN (NOW() - INTERVAL 7 DAY) AND NOW()", ARRAY_A);
                            echo $viewsWeek[0]['viewsWeek'];
                        ?>
                    </td>
                    <td style="font-size: 40px; text-align: center; padding: 10px;">
                        <?php
                            $totalViews = $wpdb->get_results("SELECT COUNT(user_id) as totalViews FROM wp_expovideos WHERE video_ID = $videoID ORDER BY date DESC",ARRAY_A);
                            echo $totalViews[0]['totalViews'];
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>

        <table style="width: 100%; text-align: center;">
            <thead style="background: black; color: white;">
                <th>
                    Promedio de minutos vistos en los 7 últimos días
                </th>
                <th>
                    Minutos totales vistos
                </th>
            </thead>
            <tbody>
                <tr>

                    <td style="font-size: 40px; text-align: center; padding: 10px;">
                        <?php
                            $promedio = $wpdb->get_results("SELECT SUM(secViewed) as secViewed, COUNT(id) as countView FROM wp_expovideos WHERE video_ID = $videoID  AND date BETWEEN (NOW() - INTERVAL 7 DAY) AND NOW()", ARRAY_A);
                            echo round(($promedio[0]['secViewed']/$promedio[0]['countView'])/60, PHP_ROUND_HALF_UP);
                        ?>
                    </td>
                    <td style="font-size: 40px; text-align: center; padding: 10px;">
                        <?php
                            $promedio = $wpdb->get_results("SELECT SUM(secViewed) as secViewed FROM wp_expovideos WHERE video_ID = $videoID ", ARRAY_A);
                            echo round($promedio[0]['secViewed']/60, PHP_ROUND_HALF_UP);
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>

        <table style="width: 100%">
            <thead style="background: black; color: white;">
                <th width="100%">Vistas</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                    <table width="100%">
                        <thead>
                            <th width="33.33%">Nombre</th>
                            <th width="33.33%">Correo</th>
                            <th width="33.33%">Fecha</th>
                        </thead>
                        <tbody>
                            <?php
                              $videosViewed = $wpdb->get_results("SELECT user_id, date FROM wp_expovideos WHERE video_ID = $videoID ORDER BY date DESC");

                                foreach ($videosViewed as $video):?>
                                <tr>
                                    <td style="text-align: center;"><?php echo get_user_by('id', $video->user_id)->display_name; ?></td>
                                    <td style="text-align: center;"><?php echo get_user_by('id', $video->user_id)->user_email; ?></td>
                                    <td style="text-align: center;"><?php $date = new DateTime($videosViewed->date); echo $date->format('d-m-Y');?> </td>
                                </tr>
                                <?php
                                endforeach;
                            ?>
                        </tbody>
                    </table>
                </tr>
            </tbody>
        </table>

        <?php
    endif;
 }

?>