<?php
/**
 * Template name: Directorio
 */

get_header(); ?>

 <div class="banner_hero">
    <div class="container py-7 w-100">
        <h1 class="t-blanco mayusculas" data-aos="fade-up">EXPO PYME 2022</h1>
    </div>
 </div>

 <div class="container py-7">
    <div class="directorio__cont">
        <?php
        $args = array(
            'post_type' => 'directorio',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
        );

        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();

            ?>
            <div class="directorio__item">
                <img src="<?php echo get_field('logo') ?>" alt="" class="directorio__item__logo">

                <div class="directorio__item__title">
                    <?php the_title()?>
                </div>

                <div class="directorio__item__expositor">
                    <?php echo get_field('expositor');?>
                </div>

                <div class="directorio__item__puesto">
                    <?php echo get_field('puesto');?>
                </div>

                <div class="directorio__item__descripcion">
                    <?php echo get_field('descripcion');?>
                </div>

                <div class="directorio__item__sociales">
                    <a href="<?php echo get_field('mail') ?>" class="directorio__item__sociales__link">
                    <img src="<?php echo get_template_directory_uri().'/img/cir-1.png' ?>" alt="">
                    </a>
                    <a href="<?php echo get_field('telefono') ?>" class="directorio__item__sociales__link">
                    <img src="<?php echo get_template_directory_uri().'/img/cir-1.png' ?>" alt="">
                    </a>
                    <a href="<?php echo get_field('website') ?>" class="directorio__item__sociales__link">
                    <img src="<?php echo get_template_directory_uri().'/img/cir-1.png' ?>" alt="">
                    </a>
                    <a href="<?php echo get_field('facebook') ?>" class="directorio__item__sociales__link">
                    <img src="<?php echo get_template_directory_uri().'/img/cir-1.png' ?>" alt="">
                    </a>
                    <a href="<?php echo get_field('twitter') ?>" class="directorio__item__sociales__link">
                    <img src="<?php echo get_template_directory_uri().'/img/cir-1.png' ?>" alt="">
                    </a>
                </div>

            </div>
            <?php
        endwhile;

        wp_reset_postdata();
        ?>
    </div>
 </div>
 <?php
 get_footer(); ?>