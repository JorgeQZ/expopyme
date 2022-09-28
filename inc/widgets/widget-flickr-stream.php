<?php
/**
 * Flickr Stream Widget
 *
 * @package expopyme Widget Pack
 * @version 1.0
 */

/**
 * Adds expopyme_Flickr_Stream widget.
 */
add_action( 'widgets_init', create_function( '', 'register_widget( "expopyme_flickr_stream" );' ) );
class expopyme_Flickr_Stream extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'expopyme_flickr_stream',
			'ExpoPyme Flickr Stream',
			array(
				'description'	=> __( 'Displays your Flickr photos.', 'expopyme' )
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
				'expopyme_widgets_title'		=> __( 'Title', 'expopyme' ),
				'expopyme_widgets_field_type'	=> 'text'
			),

			// Other fields
			'flickr_id' => array (
				'expopyme_widgets_name'			=> 'flickr_id',
				'expopyme_widgets_title'			=> __( 'Flickr ID', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'text'
			),
			'photo_count' => array (
				'expopyme_widgets_name'			=> 'photo_count',
				'expopyme_widgets_title'			=> __( 'Number of Photos', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'select',
				'expopyme_widgets_field_options'	=> array(
					'4' 	=> '4',
					'8' 	=> '8',
					'12' 	=> '12',
					'16' 	=> '16',
				)
			),
			'photo_type' => array (
				'expopyme_widgets_name'			=> 'photo_type',
				'expopyme_widgets_title'			=> __( 'Type (user or group)', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'select',
				'expopyme_widgets_field_options'	=> array(
					'user' 		=> 'User',
					'group' 	=> 'Group'
				)
			),
			'photo_display' => array (
				'expopyme_widgets_name'			=> 'photo_display',
				'expopyme_widgets_title'			=> __( 'Display', 'expopyme' ),
				'expopyme_widgets_field_type'		=> 'select',
				'expopyme_widgets_field_options'	=> array(
					'latest'	=> 'Latest',
					'random' 	=> 'Random'
				)
			)
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
		
		$widget_title 		= apply_filters( 'widget_title', $instance['widget_title'] );
		$flickr_id 			= strip_tags( $instance['flickr_id'] );
		$photo_count		= $instance['photo_count'];
		$photo_type 		= $instance['photo_type'];
		$photo_display		= $instance['photo_display'];
				
		echo $before_widget;
		
				// Show title
				if( isset( $widget_title ) ) {
					echo $before_title . $widget_title . $after_title;
				}
			?>
		<div class="clearfix widget-flickr-stream">
			<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $photo_count ?>&amp;display=<?php echo $photo_display ?>&amp;size=s&amp;layout=x&amp;source=<?php echo $photo_type ?>&amp;<?php echo $photo_type ?>=<?php echo $flickr_id ?>"></script>
			<script type="text/javascript" defer="defer">
			    jQuery(document).ready(function($){
			        $('.widget-flickr-stream').imagesLoaded(function(){});
			    });
			</script>
		<!-- .widget-flickr-stream --></div>
		
		<?php
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