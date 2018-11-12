<?php 

function btowp_themes() {

    
    wp_enqueue_style('magnific_css', get_template_directory_uri().'/vendor/magnific-popup/magnific-popup.css');
    
}

//add_action ('wp_enqueue_scripts', 'btowp_themes');

function btowp_themes_js() {
    
    wp_enqueue_script('jquery', get_template_directory_uri().'/vendor/jquery/jquery.min.js', true);
    
    wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), true);
    
    wp_enqueue_script('js_easing', get_template_directory_uri().'/vendor/jquery-easing/jquery.easing.min.js', array('jquery'), '', true);
    
    wp_enqueue_script('js_magnific', get_template_directory_uri().'/vendor/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), '', true);
    
    wp_enqueue_script('js_bs_validation', get_template_directory_uri().'/js/jqBootstrapValidation.js', array('jquery'), '', true);
    
    wp_enqueue_script('js_contact', get_template_directory_uri().'/js/contact_me.js', array('jquery'), '',true);
    
    wp_enqueue_script('js_custom', get_template_directory_uri().'/js/freelancer.min.js', array('jquery'), '',true);
    
}

add_action('wp_enqueue_scripts', 'btowp_themes_js');
?>