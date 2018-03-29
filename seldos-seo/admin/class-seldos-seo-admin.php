<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       www.hayatikodla.com
 * @since      1.0.0
 *
 * @package    Seldos_Seo
 * @subpackage Seldos_Seo/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Seldos_Seo
 * @subpackage Seldos_Seo/admin
 * @author     Hasan Yüksektepe <hasanhasokeyk@hotmail.com>
 */
class Seldos_Seo_Admin {

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
        
        add_action( 'admin_menu', array(&$this, 'register_seldos_seo_menu'));
        
	}
    
    function register_seldos_seo_menu(){
        add_menu_page(__('Seldos SEO','seldos'), __('Seldos SEO','seldos'), 'manage_options', 'seldos-seo-settings',array(&$this, 'seldos_seo_settings'));
        add_submenu_page( 'seldos-seo-settings', __('Settings','seldos'), __('Settings','seldos'), 'manage_options', 'seldos-seo-settings');
        add_submenu_page( 'seldos-seo-settings', __('SEO Appearance','seldos'), __('SEO Appearance','seldos'), 'manage_options', 'seldos-seo-apperance',array(&$this, 'seldos_seo_apperance'));
        add_submenu_page( 'seldos-seo-settings', __('SEO Error Page','seldos'), __('SEO Error Page','seldos'), 'manage_options', 'seldos-seo-error-page',array(&$this, 'seldos_seo_error_page'));
        add_submenu_page( 'seldos-seo-settings', __('SEO Redirects','seldos'), __('SEO Redirects','seldos'), 'manage_options', 'seldos-seo-redirects',array(&$this, 'seldos_seo_redirects'));
    }
    
    function seldos_seo_settings(){
        require plugin_dir_path(__FILE__).'partials/seldos-seo-settings.php';
    }
    
    function seldos_seo_apperance(){
        require plugin_dir_path(__FILE__).'partials/seldos-seo-apperance.php';
    }
    
    function seldos_seo_error_page(){
        require plugin_dir_path(__FILE__).'partials/seldos-seo-error-page.php';
    }
    function seldos_seo_redirects(){
        require plugin_dir_path(__FILE__).'partials/seldos-seo-redirects.php';
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
		 * defined in Seldos_Seo_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Seldos_Seo_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/seldos-seo-admin.css', array(), $this->version, 'all' );

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
		 * defined in Seldos_Seo_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Seldos_Seo_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/seldos-seo-admin.js', array( 'jquery' ), $this->version, false );

	}
    
    function postSecurty($post){
		global $mysqli;
		$degerler = array();
		foreach($post as $p => $d){
			if(is_string($_POST[$p]) === true){
				$degerler[$p] = addslashes(trim(strip_tags(($d))));
			}
		}
		return $degerler;
	}
	
	function postControl($post){
		
		$kontrol = 0;
		foreach($post as $parametre){
			if(isset($_POST[$parametre]) and !empty($_POST[$parametre])){
				$kontrol ++;
			}else{
				return false;
				break;
			}
		}
		
		if(count($post)==$kontrol){
			return true;
		}else{
			return false;
		}
		
	}

}
