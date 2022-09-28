<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Portfolio
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package expopyme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content-wide" role="main">
			
			<div class="row">
			  <div class="col-md-4">
			  	<div class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</div>
			  </div>
			  <div class="col-md-8">
				<?php
					$args = array(
			        'orderby' => 'id',
			        'hide_empty' => 0,
			        'taxonomy' => 'category-portfolio'
			         );
			         $categories = get_categories($args);
			         if($categories):
			    ?>
			    <section id="options" class="clearfix combo-filters">
			 	<div class="option-combo">
					<ul class="filter option-set row-option clearfix " data-filter-group="category"> 
						<li> <b> Filtrar : </b> </li>
				 		<li><a href="#filter-category-any" data-filter-value="" class="active-row selected"> Todos </a></li>
				 		<?php

			            	foreach( $categories as $category ) {
				                $newargs = array(
				                 'orderby' => 'date',
				                 'post_type' => 'portfolio',
				                 'tax_query' => array(
				                  array(
				                    'taxonomy' => 'category-portfolio',
				                    'field' => 'slug',
				                    'terms' => $category->slug
				                    )
				                  )
			                );
				            echo '<li><a href="#filter-category-'. $category->slug .'" data-filter-value=".'. $category->slug .'">'. $category->name .'</a></li>';
			            }

					?>
				 	</ul>
			 	</div>
			 	</section>
			  </div>
			</div>

			<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/plugins-js/isotope.pkgd.min.js"></script>
			<div id="isotope">
			
			<?php $GLOBALS['page_id'] = get_the_ID(); ?>
			
			<div id="container" class="clearfix isotope" style="display:none;">
        	<?php
			/*
			 * Loop through Categories and Display Posts within
			 */

			$list_post[] = 0;

			function view($value)
			{

				//$GLOBALS['list_post'][] = $value;
				for ($i=0; $i < sizeof($GLOBALS['list_post']); $i++) { 
					if($GLOBALS['list_post'] == $value)
						return 0;
				}
				$GLOBALS['list_post'] = $value;
				return 1;
			}

			$post_type = 'portfolio'; ?>
			        <?php
			        $args = array(
			                'post_type' => $post_type,
			                'posts_per_page' => -1
			 
			            );
			        $posts = new WP_Query($args);
			        if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); ?>
			        <?php if(view($post->ID)): ?>
					<div class="category-portfolio <?php $cat = get_the_category_bytax($post->ID, 'category-portfolio'); for ($i=0; $i < sizeof($cat); $i++) { echo $cat[$i]->slug." ";} ?> isotope-item portfolio-item-4" >
						<div class="inner-img whitebox">
			                <?php if(has_post_thumbnail()) { ?>
			                <div class="image-frame-portfolio">
			                    <div class="image-frame-portfolio-efect">
			                    </div>
			                    <a class='portfolio-link-left' href="<?php echo get_permalink(); ?>"></a>
			                    <a class='portfolio-link-right' href="#"></a>
			                    <?php the_post_thumbnail('thumb-portfolio'); ?>
			                </div>
			                <?php }

			                else { ?>
			                    <div class="image-frame-portfolio">
			                    	<div class="image-frame-portfolio-efect">
			                    	</div>
			                    	<a class='portfolio-link-left' href="<?php echo get_permalink(); ?>"></a>
			                    	<a class='portfolio-link-right' href="<?php echo get_permalink(); ?>"></a>
			                        <img src="<?php bloginfo('template_url'); ?>/img/no-image.jpg" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" class="portfolio-image"/>
			                     </div>
			                    <?php } ?>
			                    <div class="portfolio-description">
			                       	<h4> <a href="<?php echo get_permalink(); ?>"> <?php the_title(); ?> </a> </h4>
			                       	<p> <?php $cat = get_the_category_bytax($post->ID, 'category-portfolio');
			                       		for ($i=0; $i < sizeof($cat); $i++) { 
			                       			if ($i == (sizeof($cat)-1))
			                       				echo $cat[$i]->cat_name;
			                       			else
			                       				echo $cat[$i]->cat_name.", ";
			                       		} 
			                       	?> </p>
			                     </div>
			                 <?php $custom = get_post_custom($post->ID); ?>
			             </div>
			    	</div>
				<?php endif; ?>
			    <?php endwhile; ?> 
				<?php endif; ?>
			    <div style="clear"></div>
				</div>
			</div>
		<?php else: ?>
		<div class="alert alert-danger fade in" role="alert">
      		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"> <sup> x </sup> </span><span class="sr-only">Close</span></button>
      		<strong> Error Detectado !! </strong> No Hay Proyectos en el Portafolio.
    	</div>
		<?php endif; ?>

		</div>
	</div>

<?php get_footer(); ?>