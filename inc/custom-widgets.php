<?php
/**
 * Adds custom widgets
 *
 * @package expopyme Widget Pack
 * @version 1.0
 */

/**
 * Helper function that updates fields in the dashboard form
 *
 * @since expopyme Widget Pack 1.0
 */
function expopyme_widgets_updated_field_value( $widget_field, $new_field_value ) {

	extract( $widget_field );
	
	// Allow only integers in number fields
	if( $expopyme_widgets_field_type == 'number' ) {
		return absint( $new_field_value );
		
	// Allow some tags in textareas
	} elseif( $expopyme_widgets_field_type == 'textarea' ) {
		// Check if field array specifed allowed tags
		if( !isset( $expopyme_widgets_allowed_tags ) ) {
			// If not, fallback to default tags
			$expopyme_widgets_allowed_tags = '<p><strong><em><a>';
		}
		return strip_tags( $new_field_value, $expopyme_widgets_allowed_tags );
		
	// No allowed tags for all other fields
	} else {
		return strip_tags( $new_field_value );
	}

}

/**
 * Include helper functions that display widget fields in the dashboard
 *
 * @since expopyme Widget Pack 1.0
 */
require expopyme_PATH . '/inc/widgets/widget-fields.php';

/**
 * Register Post Preview Widget
 *
 * @since expopyme Widget Pack 1.0
 */
require expopyme_PATH . '/inc/widgets/widget-preview-post.php';

/**
 * Register Social Icons Widget
 *
 * @since expopyme Widget Pack 1.0
 */
require expopyme_PATH . '/inc/widgets/widget-social-icons.php';

/**
 * Media Embed Widget
 *
 * @since expopyme Widget Pack 1.0
 */
require expopyme_PATH . '/inc/widgets/widget-media-embed.php';

/**
 * Flickr Stream Widget
 *
 * @since expopyme Widget Pack 1.0
 */
require expopyme_PATH . '/inc/widgets/widget-flickr-stream.php';

/**
 * Tabber Widget
 *
 * @since expopyme Widget Pack 1.0
 */
require expopyme_PATH . '/inc/widgets/widget-tabs.php';

/**
 * Text TinyMce Widget
 *
 * @since expopyme Widget Pack 1.0
 */
require expopyme_PATH . '/inc/widgets/demo.php';

/**
 * Text Simple widget
 *
 * @since expopyme Widget Pack 1.0
 */
require expopyme_PATH . '/inc/widgets/demo2.php';


