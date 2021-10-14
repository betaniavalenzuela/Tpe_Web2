<?php
require_once "libs/smarty/libs/Smarty.class.php";
/*Listado de ítems: Se debe poder visualizar todos los items cargados
Detalle de ítem: Se debe poder navegar y visualizar cada ítem particularmente 
Listado de categorías: Se debe poder visualizar un listado con todas las categorías cargadas
Listado de ítems x categoría: Se debe poder visualizar los ítems perteneciente a una categoría seleccionada

*/
class ProductView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    //muestra los productos en el home
    function mostrarProductos($log,$productos,$categorias){

        $this->smarty->assign('titulo', 'Estos son nuestros productos');
        //
        $this->smarty->assign('log',$log);//aca muestra si esta logeado(true o false)
        //
        $this->smarty->assign('productos',$productos);
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->display('templates/productos.tpl');
    }

    //muestra el detalle de cada producto
    function showProd($producto){
        $this->smarty->assign('producto',$producto);        
        $this->smarty->display('templates/detailProduct.tpl');
    }

    function showProductsBy($categorias){
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->display('templates/prodByCategory.tpl');
    }

    //muestra el formulario para editar un producto
    function showEditForm($categorias,$producto){
        $this->smarty->assign('producto',$producto);
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->display('templates/formEditProduct.tpl');
        
    }
}