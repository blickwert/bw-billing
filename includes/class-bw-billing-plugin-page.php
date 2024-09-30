<?php
class BW_Billing_Plugin_Page {

    private static $instance = null;

    private function __construct() {
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_init', array($this, 'init_admin_page'));
        add_action('admin_post_bw_billing_generate_pdf', array($this, 'generate_pdf'));
    }

    public static function get_instance() {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function add_admin_menu() {
        // Hauptseite des Plugins (BW Billing)
        add_menu_page(
            __('BW Billing', 'bw-billing'),
            __('BW Billing', 'bw-billing'),
            'manage_options',
            'bw-billing',
            '',
            'dashicons-admin-generic',
            20
        );

        // Subpage für Dashboard
        add_submenu_page(
            'bw-billing',
            __('Dashboard', 'bw-billing'),
            __('Dashboard', 'bw-billing'),
            'manage_options',
            'bw-billing-dashboard',
            array($this, 'create_dashboard_page'),
            0 // Setzt die Subpage an die erste Position
        );

        // Subpage für die Taxonomie "Inhaltstyp"
        add_submenu_page(
            'bw-billing',
            __('Inhaltstypen', 'bw-billing'),
            __('Inhaltstypen', 'bw-billing'),
            'manage_options',
            'edit-tags.php?taxonomy=bw-billing-doctype&post_type=bw-billing-output'
        );
    }

    public function init_admin_page() {
        // Additional admin page settings can be initialized here
    }

    public function create_dashboard_page() {
        ?>
        <div class="wrap">
            <h1><?php _e('Dashboard', 'bw-billing'); ?></h1>
            <h2 class="nav-tab-wrapper">
                <a href="#general" class="nav-tab nav-tab-active"><?php _e('Allgemeines', 'bw-billing'); ?></a>
                <a href="#texts" class="nav-tab"><?php _e('Texte', 'bw-billing'); ?></a>
                <a href="#settings" class="nav-tab"><?php _e('Einstellungen und Verrechnung', 'bw-billing'); ?></a>
            </h2>
            <div id="general" class="tab-content">
                <h3><?php _e('Allgemeines', 'bw-billing'); ?></h3>
                <p><?php _e('Folgt', 'bw-billing'); ?></p>
            </div>
            <div id="texts" class="tab-content" style="display:none;">
                <h3><?php _e('Texte', 'bw-billing'); ?></h3>
                <p><?php _e('Folgt', 'bw-billing'); ?></p>
            </div>
            <div id="settings" class="tab-content" style="display:none;">
                <h3><?php _e('Einstellungen und Verrechnung', 'bw-billing'); ?></h3>
                <p><?php _e('Folgt', 'bw-billing'); ?></p>
            </div>
        </div>
        <script>
            jQuery(document).ready(function($) {
                $('.nav-tab').on('click', function(e) {
                    e.preventDefault();
                    $('.nav-tab').removeClass('nav-tab-active');
                    $(this).addClass('nav-tab-active');

                    $('.tab-content').hide();
                    $($(this).attr('href')).show();
                });
            });
        </script>
        <?php
    }

    public function generate_pdf() {
        if (isset($_GET['post_id'])) {
            $post_id = intval($_GET['post_id']);
            BW_Billing_PDF::generate_pdf($post_id);
        }
    }
}
