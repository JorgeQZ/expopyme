<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package expopyme
 */
?>

    <?php
        $home = 0;
	    if(is_home())
	    	$home = 1;
    	$name =  get_page_template_slug( $post->ID );
    	if($name != "page-template-full-100.php" && !$home)
    	{
    		echo "</div> \n
    		<!-- #main --></div>";
    	}
    ?>




<div class="bg-guindo py-7" id="footer-top" data-aos="fade-up">
		<div class="container">

			<div class="row">
        <div class="col-lg-4">
  				<div class="pb-5">
  					<a href="https://expopymemonterrey.com.mx/expopyme-2020/" target="_blank"><h5 class="t-rojo pb-3 fs-16"> Expo Pyme 2022 </h5></a>
  						<a href="https://expopymemonterrey.com.mx/expopyme-2020/" class="t-blanco">¿En qué consiste? </a><br>
  				</div>
  				<div class="">
  					<a href="https://expopymemonterrey.com.mx/exposicion/" target="_blank"><h5 class="t-rojo mb-1 mayusculas fs-16"> ESPACIOS COMERCIALES </h5></a>
            <p class="t-blanco">Whats App <img src="https://expopymemonterrey.com.mx/wp-content/uploads/2022/06/footer-whatsapp.png" alt="" class="px-1"> 81-2039-0345 <br>Teléfono <img src="https://expopymemonterrey.com.mx/wp-content/uploads/2022/06/footer-telefono.png" alt="" class="px-1"> 81-1611-9960 <br>infoeventos@caintra.org.mx</p>

    				</div>
          <div class="">
    				<a href="https://expopymemonterrey.com.mx/formacion-empresarial/" target="_blank"><h5 class="t-rojo pb-3 mayusculas fs-16"> CAPACITACIÓN </h5></a>
      		</div>
  			</div>

  			<div class="col-lg-4">
  				<div class="pb-5">
  					<a href="https://expopymemonterrey.com.mx/vinculacion-comercial/"><h5 class="t-rojo pb-3 mayusculas fs-16"> VINCULACIÓN DE NEGOCIOS </h5></a>
    				</div>
    				<div class="pb-5">
    					<a href="https://expopymemonterrey.com.mx/contacto/"><h5 class="t-rojo pb-3 mayusculas fs-16">CONTACTO </h5></a>
    				</div>
  			</div>


  			<div class="col-lg-4 text-center ">
  				<img src="https://expopymemonterrey.com.mx/wp-content/uploads/2022/05/inicio-logo.png" style="max-widht: 300px;">
          <div class="text-center pt-6">
  					<a href="https://www.facebook.com/FeriaPymeMonterreyCaintra/" target="_blank"><img src="https://expopymemonterrey.com.mx/wp-content/uploads/2019/05/redes-facebook.png" alt=""></a>

            <a href="https://www.linkedin.com/company/caintra-nl/" target="_blank"><img src="https://expopymemonterrey.com.mx/wp-content/uploads/2019/05/redes-linkedin.png" alt=""></a>

            <a href="https://twitter.com/caintra_nl?lang=es" target="_blank"><img src="https://expopymemonterrey.com.mx/wp-content/uploads/2019/05/redes-twitter-1.png" alt=""></a>

            <a href="https://www.youtube.com/user/caintranuevoleon" target="_blank"><img src="https://expopymemonterrey.com.mx/wp-content/uploads/2019/05/redes-youtube.png" alt=""></a>

            <div class="pt-3">
              <span class="t-blanco fs-15 fw-500">SÍGUENOS EN REDES SOCIALES</span>
            </div>

  				</div>
  			</div>
      </div>

		</div>
</div>


	<footer id="colophon" class="bg-guindo-2" role="contentinfo">
		<div class="clearfix container">
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with up to four columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>
			<div class="clear"></div>
		</div>
		<div class="">
			<div class="container py-5 text-center">
				<span class="date-footer t-blanco mayusculas fs-15 pb-3"> Evento Organizado por CAINTRA Nuevo León, derechos reservados 2020</span><br>
				<span class="links t-blanco"> <a href="https://expopymemonterrey.com.mx/aviso-de-privacidad/"> Aviso de Privacidad </a> | <a href="#"> Mapa del Sitio </a> </span>
			</div>
		</div>
	</footer>



    <?php wp_footer(); ?>




<div class="modal fade modal-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="popup-primera-vez">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <img src="https://expopymemonterrey.com.mx/wp-content/uploads/2019/06/cerrar-popup.png" alt="" data-dismiss="modal" aria-label="Close" class="cerrar">
      <img src="https://expopymemonterrey.com.mx/wp-content/uploads/2019/06/expopyme-popup.png" alt="expopyme popup">
    </div>
  </div>
</div>



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script>

        jQuery( document ).ready(function() {

            jQuery(".container.d-flex.align-items-center .mayusculas").click( function(){

                ga('send', 'event','click','click-en-boton-header','boton-header', 0); } );

            jQuery("#header-inicio .mb-3").click( function(){

                ga('send', 'event','click','click-en-boton-slider','boton-slider', 0); } );

        });

    </script>

  </body>
</html>
