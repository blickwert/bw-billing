<?php
class BW_Billing_CPTs {

    private static $instance = null;

    private function __construct() {
        add_action('init', array($this, 'register_cpts'));
    }

    public static function get_instance() {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function register_cpts() {
        // Register CPTs
        $this->register_cpt('bw-billing-invoice', 'Rechnungen', 'Rechnung', array('title', 'thumbnail'));
        $this->register_cpt('bw-billing-offer', 'Angebote', 'Angebot', array('title', 'thumbnail'));
        $this->register_cpt('bw-billing-clients', 'Kunden', 'Kunde', array('title'));
        $this->register_cpt('bw-billing-output', 'Vorlagen', 'Vorlage', array('title'));
        $this->register_cpt('bw-billing-texts', 'Textvorlagen', 'Textvorlage', array('title'));
        $this->register_cpt('bw-billing-email', 'Emailvorlagen', 'Emailvorlage', array('title'));
        $this->register_cpt('bw-billing-articles', 'Artikel', 'Artikel', array('title', 'thumbnail'));
    }

    private function register_cpt($cpt_name, $plural, $singular, $supports) {
        $labels = array(
            'name' => __($plural, 'bw-billing'),
            'singular_name' => __($singular, 'bw-billing')
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => ($cpt_name !== 'bw-billing-output' && $cpt_name !== 'bw-billing-texts' && $cpt_name !== 'bw-billing-email'),
            'show_in_menu' => 'bw-billing',
            'supports' => $supports
        );
        register_post_type($cpt_name, $args);
    }
}
