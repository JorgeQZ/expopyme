<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package expopyme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>
	<?php 
		$title = get_post_meta( get_the_ID(), 'title', true );
		if($title == 'yes'): ?>
		<header class="entry-header">
			<?php  
	    		$name =  get_page_template_slug( $post->ID ); 
	    		if($name == "page-template-full-100.php")
	    		{
	    			echo "<div class='container'> <h1 class='entry-title'>". get_the_title() ."</h1> </div>";
	    		}
	    		else
	    			echo "<h1 class='entry-title'>". get_the_title() ."</h1>";
	    	?>
		</header>
	<?php endif; ?>

	<div class="clearfix entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'expopyme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
