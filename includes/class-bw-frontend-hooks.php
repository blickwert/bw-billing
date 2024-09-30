<?php
class Frontend_Hooks {

    private static $instance = null;

    private function __construct() {
        // Hook into frontend actions or filters
        add_action('wp_enqueue_scripts', array($this, 'enqueue_frontend_scripts'));
        // Weitere Frontend-bezogene Hooks hier hinzufŸgen
    }

    public static function get_instance() {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function enqueue_frontend_scripts() {
        // Beispiel fŸr das Enqueueing von Skripten und Styles fŸr das Frontend
        wp_enqueue_style('bw-billing-frontend', plugin_dir_url(__FILE__) . 'css/frontend-styles.css');
        wp_enqueue_script('bw-billing-frontend', plugin_dir_url(__FILE__) . 'js/frontend-scripts.js', array('jquery'), null, true);
    }
}
