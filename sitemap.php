<?php

/**

 * Template Name: Sitemap

 *

 * This is the template that displays full width pages.

 * 

 * @package expopyme

*/



get_header(); ?>



    <div id="content" class="site-content-wide" role="main">



      <section class="sitemap">
        <header class="">
          <h1 class=""> Sitemap. </h1>
        </header>

        <div class="page-content">

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

        </div>
      </section>



    </div>

    

<?php get_footer(); ?>