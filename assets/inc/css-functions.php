<?php 

function css_base(){

wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', 'all');
wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500&&display=swapfamily=Lora&display=swap', 'all');
wp_register_style('estilos', get_template_directory_uri() . '/assets/librerias/css/estilos.css', 'all');

wp_enqueue_style('bootstrap');
wp_enqueue_style('fonts');
wp_enqueue_style('estilos');

}

add_action('wp_enqueue_scripts', 'css_base');