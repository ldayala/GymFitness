<?php

//funcion para registrar el menu
function gymfitness_menu(){
 register_nav_menus(array(
     'menu_principal'=>__('Menu Principal','gymfitness') //key=>('Identificador para wordpress', Dominio) se pueden agregar tantos menus como querramos separados por coma ya que es un arreglo
 ));
}
//'init' cuando inicie wordpress agrege la funcion _menu . De esta forma es que se llaman las funciones
add_action('init','gymfitness_menu');  

//agergar hojas de estilo css y nuestros script javascript
function gymfitness_script_style()
{
    wp_enqueue_style('normalize','https://necolas.github.io/normalize.css/8.0.1/normalize.css',array(),'8.0.1');
    wp_enqueue_style('style',get_stylesheet_uri(),array(),'1.0.0');
}

add_action('wp_enqueue_scripts','gymfitness_script_style');