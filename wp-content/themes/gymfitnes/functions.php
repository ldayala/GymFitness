<?php

//funcion para registrar el menu
function gymfitness_menu(){
 register_nav_menus(array(
     'menu_principal'=>__('Menu Principal','gymfitness') //key=>('Identificador para wordpress', Dominio) se pueden agregar tantos menus como querramos separados por coma ya que es un arreglo
 ));
}
//'init' cuando inicie wordpress agrege la funcion _menu . De esta forma es que se llaman las funciones
add_action('init','gymfitness_menu');  