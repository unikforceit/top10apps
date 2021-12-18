<?php
namespace Top10apps_Addon;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Plugin class.
 *
 * The main class that initiates and runs the addon.
 *
 * @since 1.0.0
 */
final class Top10appsPlugin {

    /**
     * Addon Version
     *
     * @since 1.0.0
     * @var string The addon version.
     */
    const VERSION = '1.0.0';

    /**
     * Minimum Elementor Version
     *
     * @since 1.0.0
     * @var string Minimum Elementor version required to run the addon.
     */
    const MINIMUM_ELEMENTOR_VERSION = '3.5.0';

    /**
     * Minimum PHP Version
     *
     * @since 1.0.0
     * @var string Minimum PHP version required to run the addon.
     */
    const MINIMUM_PHP_VERSION = '7.3';

    /**
     * Instance
     *
     * @since 1.0.0
     * @access private
     * @static
     * @var \Top10apps_Addon\Top10appsPlugin The single instance of the class.
     */
    private static $_instance = null;

    /**
     * Instance
     *
     * Ensures only one instance of the class is loaded or can be loaded.
     *
     * @since 1.0.0
     * @access public
     * @static
     * @return \Top10apps_Addon\Top10appsPlugin An instance of the class.
     */
    public static function instance() {

        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;

    }

    /**
     * Constructor
     *
     * Perform some compatibility checks to make sure basic requirements are meet.
     * If all compatibility checks pass, initialize the functionality.
     *
     * @since 1.0.0
     * @access public
     */
    public function __construct() {

        if ( $this->is_compatible() ) {
            add_action( 'elementor/init', [ $this, 'init' ] );
        }
        $this->setup_constants();

    }

    /**
     * Compatibility Checks
     *
     * Checks whether the site meets the addon requirement.
     *
     * @since 1.0.0
     * @access public
     */
    public function is_compatible() {

        // Check if Elementor installed and activated
        if ( ! did_action( 'elementor/loaded' ) ) {
            add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
            return false;
        }

        // Check for required Elementor version
        if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
            add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
            return false;
        }

        // Check for required PHP version
        if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
            add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
            return false;
        }

        return true;

    }

    /**
     * Setup plugin constants
     *
     */
    private function setup_constants() {

        // Plugin Folder Path
        if (!defined('Top10apps_PLUGIN_DIR')) {
            define('Top10apps_PLUGIN_DIR', plugin_dir_path(__FILE__));
        }

        // Plugin Folder URL
        if (!defined('Top10apps_PLUGIN_URL')) {
            define('Top10apps_PLUGIN_URL', plugin_dir_url(__FILE__));
        }

        // Plugin Folder Path
        if (!defined('Top10apps_ADDONS_DIR')) {
            define('Top10apps_ADDONS_DIR', plugin_dir_path(__FILE__) . 'widgets/');
        }

    }

    /**
     * Admin notice
     *
     * Warning when the site doesn't have Elementor installed or activated.
     *
     * @since 1.0.0
     * @access public
     */
    public function admin_notice_missing_main_plugin() {

        if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

        $message = sprintf(
        /* translators: 1: Plugin name 2: Elementor */
            esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'top10apps' ),
            '<strong>' . esc_html__( 'Top10apps Addons', 'top10apps' ) . '</strong>',
            '<strong>' . esc_html__( 'Elementor', 'top10apps' ) . '</strong>'
        );

        printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

    }

    /**
     * Admin notice
     *
     * Warning when the site doesn't have a minimum required Elementor version.
     *
     * @since 1.0.0
     * @access public
     */
    public function admin_notice_minimum_elementor_version() {

        if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

        $message = sprintf(
        /* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
            esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'top10apps' ),
            '<strong>' . esc_html__( 'Top10apps Addons', 'top10apps' ) . '</strong>',
            '<strong>' . esc_html__( 'Elementor', 'top10apps' ) . '</strong>',
            self::MINIMUM_ELEMENTOR_VERSION
        );

        printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

    }

    /**
     * Admin notice
     *
     * Warning when the site doesn't have a minimum required PHP version.
     *
     * @since 1.0.0
     * @access public
     */
    public function admin_notice_minimum_php_version() {

        if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

        $message = sprintf(
        /* translators: 1: Plugin name 2: PHP 3: Required PHP version */
            esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'top10apps' ),
            '<strong>' . esc_html__( 'Top10apps Addons', 'top10apps' ) . '</strong>',
            '<strong>' . esc_html__( 'PHP', 'top10apps' ) . '</strong>',
            self::MINIMUM_PHP_VERSION
        );

        printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

    }

    /**
     * Include required files
     *
     */
    private function includes() {


        require_once Top10apps_PLUGIN_DIR . 'includes/helper-functions.php';

    }

    /**
     * Initialize
     *
     * Load the addons functionality only after Elementor is initialized.
     *
     * Fired by `elementor/init` action hook.
     *
     * @since 1.0.0
     * @access public
     */
    public function init() {

        // Add Plugin actions
        add_action('elementor/frontend/after_register_scripts', [$this, 'register_frontend_scripts'], 20);
        add_action('elementor/frontend/after_enqueue_styles', [$this, 'register_frontend_styles'], 20);
        add_action('elementor/editor/before_enqueue_scripts', [$this, 'register_elementor_editor_css'], 20);
        add_action( 'elementor/widgets/register', [ $this, 'register_widgets' ] );
        add_action('elementor/init', [$this, 'add_elementor_category'], 20);
    }

    public function add_elementor_category() {
        \Elementor\Plugin::instance()->elements_manager->add_category(
            'top10apps-addons',
            array(
                'title' => __('Top10apps Addons', 'top10apps'),
                'icon' => 'fa fa-plug',
            ),
            1);
    }

    /**
     * Register Widgets
     *
     * Load widgets files and register new Elementor widgets.
     *
     * Fired by `elementor/widgets/register` action hook.
     *
     * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
     */
    public function register_widgets( $widgets_manager ) {

        $widgets[] = '';
        foreach( glob( Top10apps_PLUG_DIR. 'includes/widgets/*' ) as $file ) {
            $widgets[] = substr($file, strrpos($file, '/') + 1);
        }
        if (is_array($widgets)){
            $widgets = array_filter($widgets);
            foreach ($widgets as $key => $value){
                if (!empty($value)) {
                    require_once Top10apps_ADDONS_DIR . ''.$value.'/index.php';
                }

            }

        }

    }

    /**
     * Load Frontend Scripts
     *
     */
    public function register_frontend_scripts() {
        foreach( glob( Top10apps_PLUG_DIR. 'includes/assets/js/*.js' ) as $file ) {
            $filename = substr($file, strrpos($file, '/') + 1);
            wp_enqueue_script( $filename, Top10apps_PLUGIN_URL . 'assets/js/'.$filename, array('jquery'), '1.0.0', true);
        }
    }

    public function register_elementor_editor_css() {
        wp_enqueue_style( 'elementor-custom-editor', Top10apps_PLUGIN_URL . 'assets/css/elementor/elementor-custom-editor.css');
    }

    public function register_frontend_styles() {

        foreach( glob( Top10apps_PLUG_DIR. 'includes/assets/css/*.css' ) as $file ) {
            $filename = substr($file, strrpos($file, '/') + 1);
            wp_enqueue_style( $filename, Top10apps_PLUGIN_URL . 'assets/css/'.$filename);
        }
    }

}