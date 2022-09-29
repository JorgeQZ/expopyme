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
                <div class="directorio__item__logo_cont">
                    <img src="<?php echo get_field('logo') ?>" alt="" class="directorio__item__logo">
                </div>

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

                    <?php if(get_field('mail')): ?>
                    <a href="mailto:<?php echo get_field('mail') ?>" class="directorio__item__sociales__link" target="_top">
                    <img src="<?php echo get_template_directory_uri().'/img/2022/correo.png' ?>" alt="">
                    </a>
                    <?php endif; ?>

                    <?php if(get_field('telefono')): ?>
                    <a href="tel:<?php echo get_field('telefono') ?>" class="directorio__item__sociales__link">
                    <img src="<?php echo get_template_directory_uri().'/img/2022/llamada.png' ?>" alt="">
                    </a>
                    <?php endif; ?>

                    <?php if(get_field('website')):
                        $url = '';
                        if(strpos(get_field('website'),"http:") !== false ||
                            strpos(get_field('website'),"https:") !== false){
                            $url = get_field('website');
                        }else{
                            $url = '//'.get_field('website');
                        }
                        ?>
                        <a href="<?php echo $url ?>" class="directorio__item__sociales__link" target="_blank" rel="nofollow">
                        <img src="<?php echo get_template_directory_uri().'/img/2022/web.png' ?>" alt="">
                        </a>
                    <?php endif; ?>

                    <?php
                    if(get_field('facebook')):

                        if(strpos(get_field('facebook'),"@")  !== false  ){
                            echo '@';
                            $fb = 'https://www.facebook.com/'.str_replace('@', '', get_field('facebook'));
                        }
                        ?>
                    <a href="<?php echo $fb ?>" class="directorio__item__sociales__link">
                    <img src="<?php echo get_template_directory_uri().'/img/2022/facebook.png' ?>" alt="">
                    </a>
                    <?php endif; ?>

                    <?php if(get_field('twitter')): ?>
                    <a href="<?php echo get_field('twitter') ?>" class="directorio__item__sociales__link">
                    <img src="<?php echo get_template_directory_uri().'/img/2022/twiiter.png' ?>" alt="">
                    </a>
                    <?php endif; ?>
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