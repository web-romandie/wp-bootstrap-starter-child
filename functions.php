<?php
// STYLE & SCRIPT -------------------------

add_action('wp_enqueue_scripts', 'wr_script');

function wr_script()
{

    wp_enqueue_script('scriptwp', get_stylesheet_directory_uri() . '/assets/js/script.js');

}

// SVG -------------------------
function wpc_mime_types($mimes)
{

    $mimes['svg'] = 'image/svg+xml';
    return $mimes;

}

add_filter('upload_mimes', 'wpc_mime_types');


if (is_admin()) {

    // FOOTER -------------------------

    function remove_footer_admin()
    {

        echo "Made with love by <a href=\"https://www.web-romandie.ch/\">Web romandie</a>";

    }

    add_filter('admin_footer_text', 'remove_footer_admin');

}
