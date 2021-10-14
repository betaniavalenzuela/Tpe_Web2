<?php
require_once "./Controller/ProductoController.php";
require_once "./Controller/CategoriaController.php";
require_once "./Controller/LoginController.php";
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET["action"])){
    //echo "esta seteado";
    $action = $_GET["action"];
}else {
    //echo "no esta seteado";
    $action = "home";
};

$params = explode('/', $action);

//cambiar a producto controlador!!!!!
$tiendaControlador= new ProductoController();
$categController= new CategoriaController();
$loginControlador= new LoginController();

switch ($params[0]) {
    case 'login':
        $loginControlador->login();
        break;
    case 'logout':
        $loginControlador->logout();
        break;
    
    case 'verify':
        $loginControlador->verifyLogin();
        break;

    case 'home':
        $tiendaControlador->showHome();
        break;
    
    case 'categorias':
        $categController->showCategorias();
        break;
        
    case 'createCateg':
        $categController->createCateg();
        break;
    case 'borrar':
        $categController->deleteCateg($params[1]);
        break;

    case 'edit':
        $categController->editCateg($params[1]);//EDITA CATEGORIA
        break;   
    case 'editCateg':
        $categController->updateCategory($params[1]);//es el accion del form QUE TIENE UN pararametro(id)
        break;

    case 'producto':
        $tiendaControlador->showDetail($params[1]);
        break;
    
    case 'Categoria':
        $tiendaControlador->listProductBy($params[1]);
        break;

    case 'createProd':
        $tiendaControlador->createProduct();
        break;
    case 'borrarProd':
        $tiendaControlador->deleteProduct($params[1]);
        break;     

    case 'editar':
        $tiendaControlador->editProduct($params[1]);//EDITA EL PRODUCTO
        break; 
        
    case 'editProd':
        $tiendaControlador->editProductDB($params[1]);//es el accion del form
        break;
        
    default:        
        break;
}