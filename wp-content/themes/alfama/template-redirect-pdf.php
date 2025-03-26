<?php
/**
 * Template Name: Redirecionamento para PDF
 */

$pdf_url = get_post_meta(get_the_ID(), 'pdf_url', true);

if (!empty($pdf_url)) {
    header("Location: " . esc_url_raw($pdf_url), true, 301);
    exit;
} else {
    wp_die('URL do PDF não configurada. Por favor, adicione a URL do PDF nos campos personalizados desta página.');
}
?>