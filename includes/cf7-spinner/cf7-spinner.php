<?php
function my_wpcf7_ajax_loader () {
    return  get_stylesheet_directory_uri() . '/images/icons/spinner.gif';
}
add_filter('wpcf7_ajax_loader', 'my_wpcf7_ajax_loader');