<?php
class BW_Billing_Taxonomies {

    private static $instance = null;

    private function __construct() {
        add_action('init', array($this, 'register_taxonomies'));
    }

    public static function get_instance() {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function register_taxonomies() {
        // Register Taxonomies
        $this->register_taxonomy('bw-billing-articles', array('bw-billing-invoice', 'bw-billing-offer'), 'Artikel', 'Artikel', true);
        $this->register_taxonomy('bw-billing-doctype', array('bw-billing-output', 'bw-billing-texts', 'bw-billing-email'), 'Inhaltstypen', 'Inhaltstyp', false);
    }

    private function register_taxonomy($taxonomy_name, $object_types, $plural, $singular, $hierarchical) {
        $labels = array(
            'name' => __($plural, 'bw-billing'),
            'singular_name' => __($singular, 'bw-billing')
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'hierarchical' => $hierarchical,
            'show_in_rest' => true,
        );
        register_taxonomy($taxonomy_name, $object_types, $args);
    }
}
