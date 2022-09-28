<?php
/**
 * The main template file.
 * Template Name: Contacto
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package expopyme
 */

get_header(); ?>



<div class="">
  <div class="headers" id="header-inicio">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-12 text-center py-7">
          <img src="https://expopymemonterrey.com.mx/wp-content/uploads/2022/05/inicio-logo.png" alt="" data-aos="fade-up">
          <h1 class="fw-200 t-rojo py-6 fs-30" data-aos="fade-up">ESTAMOS PARA APOYARTE</h1>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container py-7">
  <p class="fs-18 t-rojo ">Si tienes duda o requieres información particular por favor llena el siguiente  formulario y nosotros nos comunicaremos contigo:</p>

  <div class="pt-4">
    <?php echo do_shortcode( '[contact-form-7 id="103" title="Contacto"]' ); ?>
  </div>
</div>


  <div class="bg-gradient-1">
    <div class="py-4 container">
      <div class="row">
        <div class="col-lg-6 py-4">
          <p class="t-blanco fw-700">Visítanos en: </p>
          <p class="t-blanco fw-300">Centro Internacional de Negocios Monterrey, A.C. <br>Av. Parque Fundidora 501, <br>Col. Obrera, C.P. 64010. Monterrey, N.L. </p>
        </div>
        <div class="col-lg-6 py-4">
          <p class="t-blanco fw-700">Mayores informes:</p>
          <p class="t-blanco fw-300">(81) 8369 0200 <br>infoeventos@caintra.org.mx <br>caintra.org.mx</p>
        </div>

      </div>
    </div>
  </div>
  <div class="bg-gradient-1">
    <div class="container text-center py-6">
      <h2 class="t-blanco fw-700 mayusculas no-mt">Adquiere tu espacio <br>T. 8369-0200 ext. 1290 y 1519</h2>
      <span class="t-blanco fw-300 fs-18">infoeventos@caintra.org.mx</span><br>
      <a href="https://api.whatsapp.com/send?phone=528120390345" class="t-blanco fw-300 fs-18">Whatsapp 8120390345</a>
    </div>
  </div>

  <?php get_footer(); ?>
