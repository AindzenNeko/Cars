<?php

function register_new_widgets($widgets_manager) {
    require_once(__DIR__.'/widgets/welcome-widget.php');
    require_once(__DIR__.'/widgets/service-widget.php');
    require_once(__DIR__.'/widgets/cars-widget.php');
    require_once(__DIR__.'/widgets/team-widget.php');
    require_once(__DIR__.'/widgets/double-widget.php');
    require_once(__DIR__.'/widgets/discount-widget.php');
    
    $widgets_manager->register(new \Elementor_Welcome_Widget());
    $widgets_manager->register(new \Elementor_Service_Widget());
    $widgets_manager->register(new \Elementor_Cars_Widget());
    $widgets_manager->register(new \Elementor_Team_Widget());
    $widgets_manager->register(new \Elementor_Double_Widget());
    $widgets_manager->register(new \Elementor_Discount_Widget());
}

add_action('elementor/widgets/register','register_new_widgets');
