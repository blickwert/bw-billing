<?php
use Dompdf\Dompdf;

class BW_Billing_PDF {

    private static $instance = null;

    private function __construct() {
        // Initialize DOMPDF or any other setup required
    }

    public static function get_instance() {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public static function generate_pdf($post_id) {
        // Retrieve the post data
        $post = get_post($post_id);

        if (!$post) {
            return;
        }

        // Generate the PDF content
        $html = '<h1>' . esc_html($post->post_title) . '</h1>';
        $html .= '<p>' . esc_html(get_the_excerpt($post_id)) . '</p>';

        // Initialize DOMPDF and generate the PDF
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('document.pdf', array("Attachment" => false));
    }
}
