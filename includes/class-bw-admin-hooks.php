<?php
class Admin_Hooks {

    private static $instance = null;

    private function __construct() {
        // Hook into admin actions or filters
        add_action('admin_menu', array($this, 'custom_admin_menu'));
       add_action('admin_footer', [$this, 'add_placeholder_script']);


   }

    public static function get_instance() {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function custom_admin_menu() {
        // Beispiel fŸr eine benutzerdefinierte Admin-Seitenfunktion
        add_menu_page(
            __('Custom Admin Page', 'bw-billing'),
            __('Custom Admin', 'bw-billing'),
            'manage_options',
            'custom-admin-page',
            array($this, 'render_custom_admin_page'),
            'dashicons-admin-generic',
            99
        );
    }

    public function render_custom_admin_page() {
        echo '<h1>' . __('Willkommen auf der benutzerdefinierten Admin-Seite', 'bw-billing') . '</h1>';
    }
    
    
    /**
     * Fügt JavaScript hinzu, um <br> in allen Textarea-Platzhaltern zu &#10; umzuwandeln.
     */
    public function add_placeholder_script() {
        ?>
        <script>
        jQuery(document).ready(function($) {
            // Alle Textareas durchsuchen und <br> in \n umwandeln
            $('textarea[placeholder]').each(function() {
                var placeholder = $(this).attr('placeholder').replace(/<br>/g, '\n');
                $(this).attr('placeholder', placeholder);
            });
        });
        </script>
        <?php
    }



}
