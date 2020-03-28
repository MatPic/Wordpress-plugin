<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://mateopiccarreta.fr
 * @since      1.0.0
 *
 * @package    Mmix
 * @subpackage Mmix/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Mmix
 * @subpackage Mmix/public
 * @author     MatPic <mateo.piccarreta@gmail.com>
 */
class Mmix_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}
	
	public function sortcode () {
		add_shortcode('mmix', [$this, 'candidates_html']);
	}
	
	public function candidates_html ($atts, $content) {
		include_once __DIR__.'/partials/mmix-public-display.php';
		$args = array(
			'post_type' => 'candidat',
			'tax_query' => array(
					'taxonomy' => 'concours',
					'field' => 'slug',
					'terms' => $atts['id']
				)
		);
		$candidates_data = new WP_Query($args);
		return mmix_public_display($candidates_data);
	}
	
	public function mmix_public_show_participant ($content) {
		if (is_singular('participant')) {
			$type_cat_slug_name = get_the_terms(get_the_ID(), 'creationtype')[0]->slug;
			switch($type_cat_slug_name) {
				case 'web' :
					return $this->mmix_public_view->mmix_public_view_modal_single_participant_web($content);
					break;
				case 'audiovisuel' :
					return $this->mmix_public_view->mmix_public_view_modal_single_participant_audiovisuel($content);
					break;
				case 'graphisme' :
					return $this->mmix_public_view->mmix_public_view_modal_single_participant_graphisme($content);
					break;
				case 'other' :
					return $this->mmix_public_view->mmix_public_view_modal_single_participant_other($content);
					break;
				default :
					return $content;
					break;
			}
		}
		return $content;
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mmix_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mmix_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/mmix-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mmix_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mmix_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/mmix-public.js', array( 'jquery' ), $this->version, false );

	}

}
