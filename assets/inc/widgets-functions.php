<?php

function example_theme_support(){
    remove_theme_support('widgets-block-editor');
}

add_action( 'after_setup_theme', 'example_theme_support');


/*widget assets*/
function zona_widget()
{
//widget 1
register_sidebar(
    array(
            'name'=> 'Footer columna 1',
            'id'=>'footer_uno', //ID y nombre del footer
            'before_widget'=>'<div id="%1$s" class="col-12 col-md-4 mx-0 px-0 lista">', //clases y contenedor
            'after_widget'=>'</div>', //cerramos el contenedor
            'before_title'=>'<h3 class="titulo-menu-footer">', //contenedor para el título
            'after_title'=>'</h3>'//cerramos contenedor para el título
)
    );

//widget 1
//widget 2
register_sidebar(
    array(
        'name'=> 'Footer columna 2',
        'id'=>'footer_dos', //ID y nombre del footer
        'before_widget'=>'<div id="%1$s" class="col-12 col-md-4 mx-0 px-0 lista">', //clases y contenedor
        'after_widget'=>'</div>', //cerramos el contenedor
        'before_title'=>'<h3 class="titulo-menu-footer">', //contenedor para el título
        'after_title'=>'</h3>'//cerramos contenedor para el título
 )
    );

//widget 2
//widget 3
register_sidebar(
    array(
        'name'=> 'Footer columna 3',
        'id'=>'footer_tres', //ID y nombre del footer
        'before_widget'=>'<div id="%1$s" class="col-12 col-md-4 mx-0 px-0 lista">', //clases y contenedor
        'after_widget'=>'</div>', //cerramos el contenedor
        'before_title'=>'<h3 class="titulo-menu-footer">', //contenedor para el título
        'after_title'=>'</h3>'//cerramos contenedor para el título
 )
    );

//widget 3
//widget 4
register_sidebar(
    array(
        'name'=> 'Aside',
        'id'=>'aside', //ID y nombre del footer
        'before_widget'=>'<div id="%1$s" class="col-12 col-md-4 mx-0 px-0 lista">', //clases y contenedor
        'after_widget'=>'</div>', //cerramos el contenedor
        'before_title'=>'<h3 class="titulo-menu-footer">', //contenedor para el título
        'after_title'=>'</h3>'//cerramos contenedor para el título
 )
    );

//widget 4
}

add_action('widgets_init', 'zona_widget');
