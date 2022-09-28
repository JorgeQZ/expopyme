<?php

	// Creating the widget 
class wpb_widget_simpe extends WP_Widget {

function __construct() {
	parent::__construct(
	// Base ID of your widget
	'wpb_widget_simpe', 

	// Widget name will appear in UI
	__('WPSimple Sortcode Widget', 'wpb_widget_simpe_domain'), 

	// Widget description
	array( 'description' => __( 'Sample Shortcode Widget', 'wpb_widget_simpe_domain' ), ) 
	);
}

	// Creating widget front-end
	// This is where the action happens
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$text = apply_filters( 'widget_text', $instance['text'] );
	// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];

	// This is where you run the code and display the output
		echo $text;
		echo $args['after_widget'];
	}
		
	// Widget Backend 
	public function form( $instance ) {
	if ( isset( $instance[ 'title' ] ) ) {
		$title = $instance[ 'title' ];
		if ( isset( $instance[ 'text' ] ) ) {
			$text = $instance[ 'text' ]; 
		}
	}
	else {
		$title = __( '', 'wpb_widget_simpe_domain' );
	}
	// Widget admin form
?>
	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<p> <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /> </p>
		<textarea class="widefat" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" type="text"><?php echo esc_attr( $text ); ?></textarea>
	</p>

<?php 
	}

		// Updating widget replacing old instances with new
		public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['text'] = ( ! empty( $new_instance['text'] ) ) ?  $new_instance['text'] : '';
		return $instance;
		}
	} // Class wpb_widget_simpe ends here

	// Register and load the widget
	function wpb_load_widget_simple() {
		register_widget( 'wpb_widget_simpe' );
	}
	add_action( 'widgets_init', 'wpb_load_widget_simple' );


?>