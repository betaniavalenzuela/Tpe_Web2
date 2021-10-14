<?php
require_once "libs/smarty/libs/Smarty.class.php";
/*Listado de ítems: Se debe poder visualizar todos los items cargados
Detalle de ítem: Se debe poder navegar y visualizar cada ítem particularmente 
Listado de categorías: Se debe poder visualizar un listado con todas las categorías cargadas
Listado de ítems x categoría: Se debe poder visualizar los ítems perteneciente a una categoría seleccionada

*/
class CategoriaView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function mostrarCategorias($log,$categorias){
        
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->assign('log', $log);
        $this->smarty->display('templates/categorias.tpl');
    }
    
    function showEditFormCateg($categoria){
        $this->smarty->assign('categoria',$categoria);
        $this->smarty->display('templates/formEditCateg.tpl');
    }
}