<?php
/**
 * Social icons widget
 *
 * @package expopyme Widget Pack
 * @version 1.0
 */

/**
 * Adds expopyme_Social_Icons widget.
 */
add_action( 'widgets_init', create_function( '', 'register_widget( "expopyme_social_icons" );' ) );
class expopyme_Social_Icons extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'expopyme_social_icons',
			'ExpoPyme Social Icons',
			array(
				'description'	=> __( 'Display links to your social network profiles, enter full profile URLs', 'expopyme' )
			)
		);
	}

	/**
	 * Helper function that holds widget fields
	 * Array is used in update and form functions
	 */
	 private function widget_fields() {
		$fields = array(
			// Title
			'widget_title' => array(
				'expopyme_widgets_name'			=> 'widget_title',
				'expopyme_widgets_title'			=> __( 'Title', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'text'
			),
			
			// Other fields
			'twitter' => array (
				'expopyme_widgets_name'			=> 'twitter',
				'expopyme_widgets_title'			=> __( 'Twitter', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'text'
			),
			'facebook' => array (
				'expopyme_widgets_name'			=> 'facebook',
				'expopyme_widgets_title'			=> __( 'Facebook', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'text'
			),
			'linkedin' => array (
				'expopyme_widgets_name'			=> 'linkedin',
				'expopyme_widgets_title'			=> __( 'LinkedIn', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'text'
			),
			'gplus' => array (
				'expopyme_widgets_name'			=> 'gplus',
				'expopyme_widgets_title'			=> __( 'Google+', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'text'
			),
			'pinterest' => array (
				'expopyme_widgets_name'			=> 'pinterest',
				'expopyme_widgets_title'			=> __( 'Pinterest', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'text'
			),
			'youtube' => array (
				'expopyme_widgets_name'			=> 'youtube',
				'expopyme_widgets_title'			=> __( 'YouTube', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'text'
			),
			'vimeo' => array (
				'expopyme_widgets_name'			=> 'vimeo',
				'expopyme_widgets_title'			=> __( 'Vimeo', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'text'
			),
			'flickr' => array (
				'expopyme_widgets_name'			=> 'flickr',
				'expopyme_widgets_title'			=> __( 'Flickr', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'text'
			),
			'dribbble' => array (
				'expopyme_widgets_name'			=> 'dribbble',
				'expopyme_widgets_title'			=> __( 'Dribbble', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'text'
			),
			'tumblr' => array (
				'expopyme_widgets_name'			=> 'tumblr',
				'expopyme_widgets_title'			=> __( 'Tumblr', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'text'
			),
			'instagram' => array (
				'expopyme_widgets_name'			=> 'instagram',
				'expopyme_widgets_title'			=> __( 'Instagram', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'text'
			),
			'lastfm' => array (
				'expopyme_widgets_name'			=> 'lastfm',
				'expopyme_widgets_title'			=> __( 'Last.fm', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'text'
			),
			'soundcloud' => array (
				'expopyme_widgets_name'			=> 'soundcloud',
				'expopyme_widgets_title'			=> __( 'SoundCloud', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'text'
			),
		);

		return $fields;
	 }


	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		
		$widget_title 			= apply_filters( 'widget_title', $instance['widget_title'] );
				
		echo $before_widget;
		
		// Show title
		if( isset( $widget_title ) ) {
			echo $before_title . $widget_title . $after_title;
		}

		echo '<ul class="clearfix widget-social-icons">';
			// Loop through fields
			$widget_fields = $this->widget_fields();
			foreach( $widget_fields as $widget_field ) {
				// Make array elements available as variables
				extract( $widget_field );
				// Check if field has value and skip title field
				unset( $expopyme_widgets_field_value );
				if( isset( $instance[$expopyme_widgets_name] ) && 'widget_title' != $expopyme_widgets_name ) { 
					$expopyme_widgets_field_value = esc_attr( $instance[$expopyme_widgets_name] ); 
					if( '' != $expopyme_widgets_field_value ) {	?>
					<li class="widget-si-<?php echo $expopyme_widgets_name; ?>"><a href="<?php echo $expopyme_widgets_field_value; ?>" title="<?php echo $expopyme_widgets_title; ?>"><i class="ico-<?php echo $expopyme_widgets_name; ?>"></i></a></li>
					<?php }
				}
			}
		echo '<!-- .widget-social-icons --></ul>';
		
		echo $after_widget;
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param	array	$new_instance	Values just sent to be saved.
	 * @param	array	$old_instance	Previously saved values from database.
	 *
	 * @uses	expopyme_widgets_show_widget_field()		defined in widget-fields.php
	 *
	 * @return	array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$widget_fields = $this->widget_fields();

		// Loop through fields
		foreach( $widget_fields as $widget_field ) {
			extract( $widget_field );
	
			// Use helper function to get updated field values
			$instance[$expopyme_widgets_name] = expopyme_widgets_updated_field_value( $widget_field, $new_instance[$expopyme_widgets_name] );
			echo $instance[$expopyme_widgets_name];
		}
				
		return $instance;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 *
	 * @uses	expopyme_widgets_show_widget_field()		defined in widget-fields.php
	 */
	public function form( $instance ) {
		$widget_fields = $this->widget_fields();

		// Loop through fields
		foreach( $widget_fields as $widget_field ) {
		
			// Make array elements available as variables
			extract( $widget_field );
			$expopyme_widgets_field_value = isset( $instance[$expopyme_widgets_name] ) ? esc_attr( $instance[$expopyme_widgets_name] ) : '';
			expopyme_widgets_show_widget_field( $this, $widget_field, $expopyme_widgets_field_value );
		
		}	
	}

}