<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package expopyme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content col-md-8 col-sm-8" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'expopyme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			<!-- .page-header --></header>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

		    <?php //expopyme_content_nav( 'nav-below' ); ?>
			<?php if(function_exists('wp_pagenavi')) : ?>
            	<?php wp_pagenavi(); ?>
			<?php else : ?>
				<?php expopyme_content_nav( 'nav-below' ); ?>
			<?php endif; ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

		<!-- #content --></div>
		<div class="side-bar col-md-4 col-sm-4">  <?php get_sidebar(); ?> </div>
	<!-- #primary --></section>

<?php get_footer(); ?>