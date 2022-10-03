<?php
/**
 * Template Name: Lista de Videos
 */

get_header();
?>
 <div class="banner_hero">
    <div class="container py-7 w-100">
        <h1 class="t-blanco mayusculas" data-aos="fade-up">EXPO PYME 2022</h1>
    </div>
 </div>


<br><br><br>

<div class="filter__cont">
    <div class="filter__button-eje filter__button-eje-main" data-filter="CONFERENCIAS Y PANELES MAGISTRALES">CONFERENCIAS Y PANELES MAGISTRALES</div>
</div>

<div class="filter__cont">
    <div class="filter__button-eje" data-filter="EMPRENDIMIENTO">EMPRENDIMIENTO</div>
    <div class="filter__button-eje" data-filter="EMPRESAS FAMILIARES Y RSE">EMPRESAS FAMILIARES Y RSE</div>
    <div class="filter__button-eje" data-filter="FINANZAS Y FINANCIAMIENTO">FINANZAS Y FINANCIAMIENTO</div>
    <div class="filter__button-eje" data-filter="INNOVACIÓN Y TRANSFORMACIÓN DIGITAL">INNOVACIÓN Y TRANSFORMACIÓN DIGITAL</div>
    <div class="filter__button-eje" data-filter="MARKETING">MARKETING</div>
    <div class="filter__button-eje" data-filter="RRHH Y DESARROLLO ORGANIZACIONAL">RRHH Y DESARROLLO ORGANIZACIONAL</div>
    <div class="filter__button-eje" data-filter="VENTAS">VENTAS</div>
</div>

<div class="videos_cont">
<?php
$args = array(
    'post_type' => 'video',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
    // echo get_field('yt_video').'<br>';
    // echo get_field('titulo').'<br>';
    // echo get_field('conferencista').'<br>';
    // echo get_field('eje').'<br>';

    $ytID = str_replace('https://youtu.be/', '', get_field('yt_video') );
    ?>

    <div class="item" data-eje="<?php echo get_field('eje') ?>">
        <div class="expo-video" id="<?php echo 'video-'.get_the_ID(); ?>" data-yt-id="<?php echo $ytID; ?>" > </div>
        <div class="title"><?php the_title(); ?></div>
    </div>
    <?php
endwhile;
?>
</div>
<?php
get_footer();
?>