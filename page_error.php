<?php

/**

 * Template Name: Page 404

 *

 * This is the template that displays full width pages.

 * 

 * @package expopyme

*/



get_header(); ?>



    <div id="content" class="site-content-wide" role="main">



      <section class="error-404 not-found">
        <header class="">
          <h1 class=""> <b> &iexcl;Hola! </b> Una disculpa pero la p&aacutegina solicitada no se encuentra disponible <br> Puedes regresar a nuestra <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> p&aacutegina principal </a> o buscar en nuestro sitio. </h1>
        <!-- .page-header --></header>

        <div class="page-content">

        <div class="row-search"> <?php get_search_form(); ?> </div>

          <p> Si requieres una atenci&oacuten m&aacutes personalizada no olvides visitar nuestra <br>
            secci&oacuten de <a href="<?php echo esc_url( home_url( '/' ) ); ?>contacto/"> contacto </a> </p>

          <p> Algunas otras p&aacuteginas de inter&eacutes en nuestro sitio: </p>

          <?php

          /* Page */
          echo "<div class='site-map'>";
          $args = array(
                  'post_type' => 'page',
                  'post__not_in' => array(0,0),
                  'sort_column'   => 'menu_order'
              );
          $page_query = new  WP_Query( $args );
          if( $page_query->have_posts() )
            echo "<h2> Paginas <h2>";
          while ( $page_query->have_posts() ) : $page_query->the_post();
            echo '<a href="'.get_permalink().'"><h5 class="media-heading"> <i class="fa fa-caret-right"></i>'. get_the_title(). '</h5></a>';
          endwhile;
          wp_reset_query();

          /* Post */
          $args = array(
                  'post_type' => 'post',
                  'post__not_in' => array(0,0),
                  'sort_column'   => 'menu_order'
              );
          $page_query = new  WP_Query( $args );
          if( $page_query->have_posts() )
            echo "<h2> Entradas <h2>";
          while ( $page_query->have_posts() ) : $page_query->the_post();
            echo '<a href="'.get_permalink().'"><h5 class="media-heading"> <i class="fa fa-caret-right"></i>'. get_the_title(). '</h5></a>';
          endwhile;
          wp_reset_query();

          echo "</div>";

          ?>

        <!-- .page-content --></div>
      <!-- .error-404 --></section>



    <!-- #content --></div>

    

<?php get_footer(); ?>