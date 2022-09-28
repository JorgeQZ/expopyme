<?php
/**
 * Template Name: Videos Test
 */
get_header(); ?>

<div class="container">

    <!-- <div id="video_player"></div> -->
    <?php
     $args = array(
        'post_type' => 'video',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'orderby' => 'DATE',
        'order' => 'DESC',
    );

    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
        echo '<div class="expo-video" id="video-'.get_the_ID().'" data-yt-id="'.get_field('yt_id').'"></div>';
    endwhile;

    wp_reset_postdata();
     ?>
</div>

<?php get_footer(); ?>
