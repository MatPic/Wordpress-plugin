<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://mateopiccarreta.fr
 * @since      1.0.0
 *
 * @package    Mmix
 * @subpackage Mmix/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Mmix
 * @subpackage Mmix/admin
 * @author     MatPic <mateo.piccarreta@gmail.com>
 */
class Mmix_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/mmix-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/mmix-admin.js', array( 'jquery' ), $this->version, false );

	}
	
	// Register Custom Post Type Candidat
	public function create_candidat_cpt() {
	
		$labels = array(
			'name' => _x( 'Candidats', 'Post Type General Name', 'textdomain' ),
			'singular_name' => _x( 'Candidat', 'Post Type Singular Name', 'textdomain' ),
			'menu_name' => _x( 'Candidats', 'Admin Menu text', 'textdomain' ),
			'name_admin_bar' => _x( 'Candidat', 'Add New on Toolbar', 'textdomain' ),
			'archives' => __( 'Archives Candidat', 'textdomain' ),
			'attributes' => __( 'Attributs Candidat', 'textdomain' ),
			'parent_item_colon' => __( 'Parents Candidat:', 'textdomain' ),
			'all_items' => __( 'Tous Candidats', 'textdomain' ),
			'add_new_item' => __( 'Ajouter nouvel Candidat', 'textdomain' ),
			'add_new' => __( 'Ajouter', 'textdomain' ),
			'new_item' => __( 'Nouvel Candidat', 'textdomain' ),
			'edit_item' => __( 'Modifier Candidat', 'textdomain' ),
			'update_item' => __( 'Mettre à jour Candidat', 'textdomain' ),
			'view_item' => __( 'Voir Candidat', 'textdomain' ),
			'view_items' => __( 'Voir Candidats', 'textdomain' ),
			'search_items' => __( 'Rechercher dans les Candidat', 'textdomain' ),
			'not_found' => __( 'Aucun Candidat trouvé.', 'textdomain' ),
			'not_found_in_trash' => __( 'Aucun Candidat trouvé dans la corbeille.', 'textdomain' ),
			'featured_image' => __( 'Image mise en avant', 'textdomain' ),
			'set_featured_image' => __( 'Définir l’image mise en avant', 'textdomain' ),
			'remove_featured_image' => __( 'Supprimer l’image mise en avant', 'textdomain' ),
			'use_featured_image' => __( 'Utiliser comme image mise en avant', 'textdomain' ),
			'insert_into_item' => __( 'Insérer dans Candidat', 'textdomain' ),
			'uploaded_to_this_item' => __( 'Téléversé sur cet Candidat', 'textdomain' ),
			'items_list' => __( 'Liste Candidats', 'textdomain' ),
			'items_list_navigation' => __( 'Navigation de la liste Candidats', 'textdomain' ),
			'filter_items_list' => __( 'Filtrer la liste Candidats', 'textdomain' ),
		);
		$args = array(
			'label' => __( 'Candidat', 'textdomain' ),
			'description' => __( 'Candidat au concours', 'textdomain' ),
			'labels' => $labels,
			'menu_icon' => '',
			'supports' => array('title', 'author'),
			'taxonomies' => array(),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => false,
			'menu_position' => 5,
			'show_in_admin_bar' => true,
			'show_in_nav_menus' => true,
			'can_export' => true,
			'has_archive' => true,
			'hierarchical' => false,
			'exclude_from_search' => false,
			'show_in_rest' => true,
			'publicly_queryable' => true,
			'capability_type' => 'post',
		);
		register_post_type( 'candidat', $args );
	}
	
	public function create_concours_tax() {
	
		$labels = array(
			'name'              => _x( 'Concours', 'taxonomy general name', 'textdomain' ),
			'singular_name'     => _x( 'Concours', 'taxonomy singular name', 'textdomain' ),
			'search_items'      => __( 'Search Concours', 'textdomain' ),
			'all_items'         => __( 'All Concours', 'textdomain' ),
			'parent_item'       => __( 'Parent Concours', 'textdomain' ),
			'parent_item_colon' => __( 'Parent Concours:', 'textdomain' ),
			'edit_item'         => __( 'Edit Concours', 'textdomain' ),
			'update_item'       => __( 'Update Concours', 'textdomain' ),
			'add_new_item'      => __( 'Add New Concours', 'textdomain' ),
			'new_item_name'     => __( 'New Concours Name', 'textdomain' ),
			'menu_name'         => __( 'Concours', 'textdomain' ),
		);
		$args = array(
			'labels' => $labels,
			'description' => __( 'Concours du grand mmix', 'textdomain' ),
			'hierarchical' => false,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud' => true,
			'show_in_quick_edit' => true,
			'show_admin_column' => false,
			'show_in_rest' => true,
		);
		register_taxonomy( 'concours', array('candidat'), $args );
	}
	
	public function add_admin_menu () {
		add_menu_page('Le grand MMIX', 'MMIX', 'manage_options', 'mmix', '', 'dashicons-chart-area');
		add_submenu_page('mmix', 'Plugin MMIX', 'Aperçu', 'manage_options', 'mmix', [$this, 'render_html']);
		add_submenu_page('mmix', 'Candidats', 'Candidats', 'manage_options', 'edit.php?post_type=candidat', '');
		add_submenu_page('mmix', 'Concours', 'Concours', 'manage_options', 'edit-tags.php?taxonomy=concours&post_type=candidat', '');
	}
	
	public function apply_menu_filters($parent_file) {

		global $current_screen, $submenu_file;
		$base = $current_screen->base;
		$action = $current_screen->action;
		$post_type = $current_screen->post_type;
		$taxonomy = $current_screen->taxonomy;
		
		if ($taxonomy == 'concours'){
			$parent_file = 'mmix';
			$submenu_file = 'edit-tags.php?taxonomy='.'concours'.'&post_type='.'candidat';
		} elseif ($post_type == 'candidat') {
			$parent_file = 'mmix';
			$submenu_file = 'edit.php?post_type='.'candidat';
		}
		
		return $parent_file;	
	}
	
	public function register_concours_columns ($columns) {
		$new_columns_before = array(
			'id' => esc_html__('Id', 'text_domain')
		);
		$new_columns_after = array(
			'shortcode' => esc_html__('Shortcode', 'text_domain')
		);
		return array_merge($new_columns_before, $columns, $new_columns_after);
	}
	
	public function register_concours_columns_display ($column, $col_name, $item_id) {
		if ($col_name === "id") {
			return $item_id;
		}
		if ($col_name === "shortcode") {
			return "[mmix id = \"$item_id\"]";
		}
		return $column;
	}
	
	public function render_html () {
		include_once __DIR__.'/partials/mmix-admin-display.php';
	}
	
	public function create_concours_taxonomie () {
		$prefix = 'concours_';
		
	 	$cmb_term = new_cmb2_box( array( 
	 		'id'               => $prefix . 'edit', 
	 		'title'            => esc_html__( 'Infos du concours', 'cmb2' ),
	 		'object_types'     => array( 'term' ),
	 		'taxonomies'       => array( 'concours' ),
	 		'new_term_section' => true,
	 	) ); 
	  
	 	$cmb_term->add_field( array( 
	 		'name'     => 'Start Date', 
	 		'id'       => $prefix . 'start_date', 
	 		'type'     => 'text_datetime_timestamp',
	 		'column' => array(
	 			'position' => 3,
	 		),
	 	) ); 
	  
	 	$cmb_term->add_field( array( 
	 		'name' => 'End Date', 
	 		'id'   => $prefix . 'end_date', 
	 		'type' => 'text_datetime_timestamp',
	 		'column' => array(
	 			'position' => 4,
	 		),
	 	) ); 
	  
	 	$cmb_term->add_field( array( 
	 		'name' => 'Contest',
	 		'id'   => $prefix . 'contest', 
	 		'type' => 'select',
	 		'show_option_none' => true,
	 		'column' => array(
	 			'position' => 6,
	 		),
	 		'default' => 'custom',
	 		'options' => array(
	 			'various' => __('Various', 'cmb2'),
	 			'web' => __('Web', 'cmb2'),
	 			'audiovisuel' => __('Audiovisuel', 'cmb2'),
	 			'communication' => __('Communication', 'cmb2'),
	 			'graphisme' => __('Graphisme', 'cmb2'),
	 		),
	 	) ); 
	}
	
	public function create_candidat_metaboxe () {
		$prefix = 'candidat_';
		
		$general_info = new_cmb2_box( array( 
	 		'id'               => $prefix . 'edit', 
	 		'title'            => esc_html__( 'Infos sur la candidature', 'cmb2' ),
	 		'object_types'     => array( 'candidat' ),
	 		'priority'		   => 'low',
	 		'show_in_rest'	   => WP_REST_Server::READABLE
	 	) );
	 	
	 	$general_info->add_field( array(
	 		'id' => 'new_candidat_trigger',
	 		'type' => 'hidden',
	 	) );
	 	
	 	$general_info->add_field( array( 
	 		'name'     => 'Candidature au concours', 
	 		'desc'	   => 'Sélectionnez le concours où vous voulez inscrire la création',
	 		'id'       => $prefix . 'concours_select', 
	 		'type'     => 'taxonomy_select',
	 		'taxonomy' => 'concours',
	 		'remove_default' => true,
	 	) );
	 	
	 	$general_info->add_field( array( 
	 		'name'     => 'Type de création', 
	 		'id'       => $prefix . 'creation', 
	 		'type'     => 'select',
	 		'options' => array(
	 			'audiovisuel' => __('Audiovisuel', 'cmb2'),
	 			'web' => __('Web', 'cmb2'),
	 			'graphisme' => __('Graphisme', 'cmb2'),
	 			'other' => __('Autre', 'cmb2'),
	 		),
	 	) ); 
	 	
	 	$general_info->add_field( array(
            'name'    => 'Contributeurs',
            'desc'    => 'Les noms de tous les contributeurs au projet)',
            'id'      => $prefix.'contributors',
            'type'    => 'text',
            'repeatable' => true,
            'text' => array(
                'add_row_text' => 'Ajouter un contributeur',
            ),
        ) );
        
        $general_info->add_field( array(
            'name' => 'Illustration',
            'desc' => 'Image illustrant votre projet',
            'id'   => $prefix.'illustration_image',
            'type' => 'file',
        ) );
	 	
	 	$av_info = new_cmb2_box( array( 
	 		'id'               => $prefix . 'details_audiovisuel', 
	 		'title'            => esc_html__( 'Détails : audiovisuel', 'cmb2' ),
	 		'object_types'     => array( 'candidat' ),
	 		'priority'		   => 'low',
	 	) );
	 	
	 	$av_info->add_field( array( 
	 		'name'     => 'URL (YouTube, SoundCloud, ...)', 
	 		'id'       => $prefix . 'audiovisuel_url', 
	 		'type'     => 'oembed',
	 	) );
	 	
	 	$av_info->add_field( array( 
	 		'name'     => 'Catégorie', 
	 		'id'       => $prefix . 'audiovisuel_categorie', 
	 		'type'     => 'select',
	 		'options' => array(
	 			'reportage' => __('Reportage', 'cmb2'),
	 			'fiction' => __('Fiction', 'cmb2'),
	 			'motion-design' => __('Motion-design', 'cmb2'),
	 			'other' => __('Autre', 'cmb2'),
	 		),
	 	) );
	 	
	 	$av_info->add_field( array(
            'name'    => 'Description du projet',
            'desc'    => 'Expliquez votre démarche, les choses à savoir pour le projet, etc...',
            'id'      => $prefix.'audiovisuel_description',
            'type'    => 'wysiwyg',
            'options' => array(),
        ) );
	 	
	 	$web_info = new_cmb2_box( array( 
	 		'id'               => $prefix . 'details_web', 
	 		'title'            => esc_html__( 'Détails : web', 'cmb2' ),
	 		'object_types'     => array( 'candidat' ),
	 		'priority'		   => 'low',
	 	) );
	 	
	 	$web_info->add_field( array(
	 		'name'			   => 'URL du site',
	 		'id'               => $prefix . 'web_url', 
	 		'type'  		   => 'text_url',
	 	) );
	 	
	 	$web_info->add_field( array(
	 		'name'			   => 'Type de site',
	 		'id'               => $prefix . 'web_type', 
	 		'type'  		   => 'select',
	 		'options' => array(
	 			'portfolio' => __('Portfolio', 'cmb2'),
	 			'vitrine' => __('Vitrine', 'cmb2'),
	 			'e-commerce' => __('E-commerce', 'cmb2'),
	 			'other' => __('Autre', 'cmb2'),
	 		),
	 	) );
	 	
	 	$web_info->add_field( array(
	 		'name' => 'Le site est ...',
	 		'id'               => $prefix . 'web_dynamique', 
	 		'type'  		   => 'radio_inline',
	 		'options'          => array(
				'statique' => __( 'Statique', 'cmb2' ),
				'dynamique' => __( 'Dynamique', 'cmb2' ),
			),
	 	) );
	 	
	 	$web_info->add_field( array(
            'name'    => 'Description du projet',
            'desc'    => 'Expliquez votre démarche, les choses à savoir pour le projet, etc...',
            'id'      => $prefix.'web_description',
            'type'    => 'wysiwyg',
            'options' => array(),
        ) );
	 	
	 	$graphisme_info = new_cmb2_box( array(
            'id'               => $prefix.'details_graphisme',
            'title'            => esc_html__( 'Détails : graphisme', 'cmb2' ),
            'object_types'     => array( 'candidat' ),
            'priority'		   =>'low'
        ) );

        $graphisme_info->add_field( array(
            'name' => 'Image(s)',
            'desc' => 'La ou les images composant votre projet',
            'id'   => $prefix.'graphisme_images',
            'type' => 'file_list',
             'query_args' => array( 'type' => 'image' ),
            'text' => array(
                'add_upload_files_text' => 'Ajouter ou Uploader des images',
                'remove_image_text' => 'Enelever l\'image',
                'file_text' => 'Fichier:',
                'file_download_text' => 'Télécharger',
                'remove_text' => 'Enlever',
            ),
        ) );
        $graphisme_info->add_field( array(
            'name' => 'Type de création',
            'id'   => $prefix.'graphisme_type',
            'type'             => 'select',
            'show_option_none' => false,
            'default'          => 'custom',
            'options'          => array(
                'infographie'   =>   __( 'Infographie', 'cmb2' ),
                'dessin'     =>    __( 'Dessin', 'cmb2' ),
                'other' => __( 'Autre', 'cmb2' ),
            ),
        ) );

        $graphisme_info->add_field( array(
            'name'    => 'Description du projet',
            'desc'    => 'Expliquez votre démarche, les choses à savoir pour le projet, etc...',
            'id'      => $prefix.'graphisme_description',
            'type'    => 'wysiwyg',
            'options' => array(),
        ) );
        
        $other_info = new_cmb2_box( array(
            'id'               => $prefix.'details_other',
            'title'            => esc_html__( 'Détails : autre', 'cmb2' ),
            'object_types'     => array( 'candidat' ),
            'priority'		   =>'low'
        ) );
        
        $other_info->add_field( array(
            'name'    => 'Description du projet',
            'desc'    => 'Expliquez votre démarche, les choses à savoir pour le projet, etc...',
            'id'      => $prefix.'other_description',
            'type'    => 'wysiwyg',
            'options' => array(),
        ) );
	}
}
