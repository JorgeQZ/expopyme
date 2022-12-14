<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030"> section and everything up till <div id="main">
 *
 * @package expopyme
 */
global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );
$redirect_url = basename($_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-59XDJLZ');</script>
<!-- End Google Tag Manager -->


	<title><?php wp_title( '-', true, 'right' ); ?></title>


	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="https://expopymemonterrey.com.mx/wp-content/uploads/2021/07/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="57x57" href="https://expopymemonterrey.com.mx/wp-content/uploads/2021/07/favicon.png">
	<link rel="apple-touch-icon" sizes="60x60" href="https://expopymemonterrey.com.mx/wp-content/uploads/2021/07/favicon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="https://expopymemonterrey.com.mx/wp-content/uploads/2021/07/favicon.png">
	<link rel="apple-touch-icon" sizes="76x76" href="https://expopymemonterrey.com.mx/wp-content/uploads/2021/07/favicon.png">
	<link rel="apple-touch-icon" sizes="114x114" href="https://expopymemonterrey.com.mx/wp-content/uploads/2021/07/favicon.png">
	<link rel="apple-touch-icon" sizes="120x120" href="https://expopymemonterrey.com.mx/wp-content/uploads/2021/07/favicon.png">
	<link rel="apple-touch-icon" sizes="144x144" href="https://expopymemonterrey.com.mx/wp-content/uploads/2021/07/favicon.png">
	<link rel="apple-touch-icon" sizes="152x152" href="https://expopymemonterrey.com.mx/wp-content/uploads/2021/07/favicon.png">
	<link rel="apple-touch-icon" sizes="180x180" href="https://expopymemonterrey.com.mx/wp-content/uploads/2021/07/favicon.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="https://expopymemonterrey.com.mx/wp-content/uploads/2021/07/favicon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="https://expopymemonterrey.com.mx/wp-content/uploads/2021/07/favicon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="https://expopymemonterrey.com.mx/wp-content/uploads/2021/07/favicon.png">
	<link rel="icon" type="image/png" sizes="16x16" href="https://expopymemonterrey.com.mx/wp-content/uploads/2021/07/favicon.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/icons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

				<!-- Global site tag (gtag.js) - Google AdWords: 851605077 -->
		    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-851605077"></script>
		    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-851605077'); </script>


				<!-- Event snippet for Registro conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. --> <script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-851605077/-tROCOWt3-EBENXsiZYD', 'event_callback': callback }); return false; }
			</script>



	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo get_template_directory_uri() ?>/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo get_template_directory_uri() ?>/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<?php wp_head(); ?>
	<meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/custom-style.css">
	<?php if($GLOBALS['redux_demo']["switch-on"] == '1'): ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/customr.css">
	<?php else: ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/customnor.css">
	<?php endif;?>


	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,700&display=swap" rel="stylesheet">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!-- Facebook Pixel Code -->
	<!-- <script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '547225706282521');
	fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1"
	src="https://www.facebook.com/tr?id=547225706282521&ev=PageView
	&noscript=1"/>
	</noscript> -->
	<!-- End Facebook Pixel Code -->

        <!-- <script>
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

         ga('create', 'UA-99680481-1', 'auto');
         ga('send', 'pageview');
				 gtag('config', 'AW-851605077');
        </script> -->

</head>

<body <?php body_class(); ?>>

    <!-- Google Tag Manager (noscript) -->
<!--noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59XDJLZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></!--noscript>
<!-- End Google Tag Manager (noscript) -->

	<header>
	  <nav class=" header-principal">
	     <div class="container d-flex align-items-center">
	        <div class="text-left col-3">
	           <a href="/" class="t-blanco"><img src="https://expopymemonterrey.com.mx/wp-content/uploads/2022/05/logo.png" class="logo" alt=""></a>

	        </div>

			<div class="px-3 text-center container col-6">

				<span class="text-cente r  t-guindo fs-15 text-left mayusculas">
						<strong>PATROCINADORES ALIADOS</strong>
				</span>
				<div class="logos-cont align-items-center">
					<img class="logo-pat" src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Protexa-02 copia.png' ?>" alt="">
					<img class="logo-pat" src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/autycom.png' ?>" alt="">

					<img class="logo-pat" src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Cemex-02 copia.png' ?>" alt="">
				</div>
			</div>

	        <div class="ml-auto d-flex align-items-center col-3">
				<?php if(!is_user_logged_in(  )):?>
				<div class="text-center px-3 d-flex align-items-center px-4">
					<a href="<?php echo esc_url( wp_login_url( $current_url.'/'.$redirect_url ) ); ?>"  id="home-reg-header" class="btn-per-4 fw-700 mayusculas ">Inicia Sesi??n</a>
				</div>
				<?php
				else:
					$current_user = wp_get_current_user();
					?>
					<div class="text-center px-4">
						<div class="btn-per-4 fw-700 mayusculas d-flex align-items-center ">
							<?php
							echo 'Hola, '.$current_user->display_name;
							echo '<img class="button-thumbnail" src="'.get_avatar_url($current_user->ID).'">';
							?>
						</div>
						<small><a id="close-session" href="<?php echo get_home_url().'/wp-login.php?action=logout&redirect_to='.$current_url.'/'.$redirect_url; ?>">Cerrar sesi??n</a></small>
					</div>
				<?php endif; ?>
	        </div>
	     </div>

		<div class="menu-cont text-center bg-guindo">
			<nav id="main-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'container_class' => 'clearfix sf-menu', 'theme_location' => 'main' ) ); ?>
			</nav>
		</div>

	  </nav>
	</header>

	<?php
	// echo '<pre>';
	// print_r($current_user);
	// echo '</pre>';

		$home = 0;
	    if(is_home())
	    	$home = 1;
    	$name =  get_page_template_slug( $post->ID );
    	if($name != "page-template-full-100.php" && !$home)
    	{
    		echo "<div id='main' class='site-main'> \n
				<div class='clearfix'>";
    	}
    ?>
