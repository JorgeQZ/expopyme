<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package expopyme
 */

get_header(); ?>

<div class="">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="bg-gradient-1">
					<div class="headers" id="header-inicio">
						<div class="container">
							<div class="row d-flex align-items-center">
								<div class="col-lg-6 text-center py-7">
									<img src="https://expopymemonterrey.com.mx/wp-content/uploads/2022/05/inicio-logo.png" alt="" data-aos="fade-up" class="mb-6">
									<p class="fw-300 t-blanco fs-30 mt-0 mb-0">¡HAGAMOS <span class="fw-700">NEGOCIOS JUNTOS!</span></p>

									<p class="fw-500 t-blanco fs-35 mt-0">17 al 19 de Agosto</p>
									<a href="https://preregistrate.mx/2022/expopyme/" onclick="gtag('event', 'clic', {'event_category': 'registroheader', 'event_label': 'registro-header', 'value': '1'});" target="_blank" id="home-reg-header" class="btn-per-4 fw-700 mayusculas ">REGISTRO</a>

								</div>
								<div class="col-lg-6 pt-6 text-center" data-aos="fade">
									<img src="https://expopymemonterrey.com.mx/wp-content/uploads/2022/05/inicio-persona.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="" style="background-color: #bb2035;">
	<div class="container">
		<img src="https://expopymemonterrey.com.mx/wp-content/uploads/2022/08/HOME-1200px-de-ancho-1.jpg" class="w-100 hidden-xs hidden-sm" alt="">
	</div>
	<img src="https://expopymemonterrey.com.mx/wp-content/uploads/2022/08/HOME-800px-de-ancho-1.jpg" class="w-100 hidden-lg hidden-md" alt="">
</div>

	<div class="bg-gradient-1">
		<div class="container py-6">
			<div class="row text-center">
				<div class="col" data-aos="fade-up">
					<a href="https://expopymemonterrey.com.mx/exposicion/" class="t-blanco fs-15">
					<img src="https://expopymemonterrey.com.mx/wp-content/uploads/2019/05/iconoexposicion.png" alt="" class="py-4"><BR>
					EXPOSICIÓN</a>
				</div>
				<div class="col" data-aos="fade-up">
					<a href="https://expopymemonterrey.com.mx/formacion-empresarial/" class="t-blanco fs-15">
					<img src="https://expopymemonterrey.com.mx/wp-content/uploads/2019/05/iconocapacitacion.png" alt="" class="py-4"><BR>
					CAPACITACIÓN</a>
				</div>
				<div class="col" data-aos="fade-up">
					<a href="https://expopymemonterrey.com.mx/vinculacion-comercial/" class="t-blanco fs-15">
					<img src="https://expopymemonterrey.com.mx/wp-content/uploads/2019/05/iconovinculacion.png" alt="" class="py-4"><BR>
					VINCULACIÓN COMERCIAL</a>
				</div>
			</div>
		</div>
	</div>





	<div class="py-7 container text-center d-none" >
		<span class="t-rojo fw-700 fs-30 no-mb" data-aos="fade-up"><img src="https://expopymemonterrey.com.mx/wp-content/uploads/2019/05/icono-conoceagenda.png" alt=""> CONOCE LA AGENDA <a href="https://expopymemonterrey.com.mx/calendario-del-evento/" class="btn-per-2 fw-700">¡AQUÍ!</a></span>

	</div>


	<div class="container py-7">
		<div class="row d-flex align-items-center">
			<div class="col-lg-3 text-left">
				<h2 class="t-rojo fw-700" data-aos="fade-up">¿POR QUÉ ASISTIR A EXPOPYME?</h2>
			</div>
			<div class="col-lg-9">
				<div class="row ">
					<div class="col-lg-4">
						<div class="text-left py-4">
							<img src="https://expopymemonterrey.com.mx/wp-content/uploads/2019/05/icono4.png" alt="" class="pb-3" data-aos="fade-up">
							<p data-aos="fade-up">Capacítate SIN COSTO con conferencias gratuitas, paneles con expertos y temáticos, talleres y demás en nuestro Programa de Formación Empresarial</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="text-left py-4">
							<img src="https://expopymemonterrey.com.mx/wp-content/uploads/2019/05/icono2.png" alt="" class="pb-3" data-aos="fade-up">
							<p data-aos="fade-up">Oferta productos, servicios y haz benchmarking con otras PYMES</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="text-left py-4">
							<img src="https://expopymemonterrey.com.mx/wp-content/uploads/2019/05/icono5.png" alt="" class="pb-3" data-aos="fade-up">
							<p data-aos="fade-up">Programa citas de negocios y vinculación con medianas y grandes empresas en búsqueda de proveedores PYME</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="text-left py-4">
							<img src="https://expopymemonterrey.com.mx/wp-content/uploads/2019/05/icono3.png" alt="" class="pb-3" data-aos="fade-up">
							<p data-aos="fade-up">Impulsa tu negocio con nuestro contenido de valor en el piso de exposición y capacitación.</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="text-left py-4">
							<img src="https://expopymemonterrey.com.mx/wp-content/uploads/2019/05/icono6.png" alt="" class="pb-3" data-aos="fade-up">
							<p data-aos="fade-up">Acércate a los bancos y entidades financieras para orientación, asesoría y diagnóstico para créditos PYME y otros productos.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="py-6 container ">
    <iframe width="" height="600px" src="https://www.youtube.com/embed/cUu5r4hH2Zc" frameborder="0" class="w-100 h-600" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>


	<div class="container pb-4">
		<div class="text-center pb-3">
			<h3 class="t-rojo fw-700 fs-30" data-aos="fade-up">PATROCINADORES ALIADOS</h3>
		</div>
		<div class="text-center pt-4 pb-7">
			<img src="https://expopymemonterrey.com.mx/wp-content/uploads/2022/08/LOGOS-INS.png" alt="logos clientes" class="">
			</div>
	</div>


	<div class="container pb-4">
		<div class="text-center pb-3">
			<h3 class="t-rojo fw-700 fs-30" data-aos="fade-up">PATROCINADORES INSTITUCIONALES</h3>
		</div>
		<div class="text-center pt-4 pb-7">
				<img src="https://expopymemonterrey.com.mx/wp-content/uploads/2022/08/Patrocinadores-e1660172678571.jpg" alt="logos clientes" class="">
			</div>
	</div>




<?php get_footer(); ?>
