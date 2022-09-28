<?php
/**
 * The template for displaying search forms in expopyme
 *
 * @package expopyme
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'expopyme' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'expopyme' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'expopyme' ); ?>">
	</label>
	<button type="submit" class="btn btn-success"> <i class="fa fa-search"></i> </button>
</form>
