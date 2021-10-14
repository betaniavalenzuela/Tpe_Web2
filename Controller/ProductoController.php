<?php
require_once "./View/ProductView.php";
require_once "./Model/ProductModel.php";
require_once "./Model/CategoriaModel.php";
require_once "./Helpers/AuthHelper.php";

class ProductoController
{
    private $viewProduct;
    private $modelProduct;
    private $authHelper;

    function __construct()
    {
        $this->modelProduct = new ProductModel();
        $this->viewProduct = new ProductView();
        $this->modelCateg = new CategoriaModel();
        $this->authHelper = new AuthHelper();
    }

    function showHome()
    {
        $log = $this->authHelper->isLogged();
        $productos = $this->modelProduct->getProductos();
        $categorias = $this->modelCateg->getCategorias();
        //var_dump($_SESSION);
        $this->viewProduct->mostrarProductos($log, $productos, $categorias);
    }
    function showDetail($id)
    {
        $producto = $this->modelProduct->getProduct($id);
        $this->viewProduct->showProd($producto);
    }

    function listProductBy($categoria)
    {
        $categorias = $this->modelProduct->getProductsBy($categoria);
        $this->viewProduct->showProductsBy($categorias);
    }

    function deleteProduct($id)
    {
        if ($this->authHelper->isLogged()) {
            $this->modelProduct->deleteProd($id);
            header("Location: " . BASE_URL . "home");
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }

    function createProduct()
    {
        if ($this->authHelper->isLogged()) {
            $this->modelProduct->createProd($_POST['nombre'], $_POST['cantidad'], $_POST['precio'], $_POST['categoria']);
            header("Location: " . BASE_URL . "home");
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }

    function editProduct($id)
    {
        if ($this->authHelper->isLogged()) {

            $producto = $this->modelProduct->getProduct($id); //pido el prod para poner el value
            $categorias = $this->modelCateg->getCategorias(); //pido las categ para que las muestre el select
            $this->viewProduct->showEditForm($categorias, $producto);
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }

    function editProductDB($id)
    {
        if ($this->authHelper->isLogged()) {
        $this->authHelper->checkLoggedIn();
        $this->modelProduct->updateProd($_POST['nombre'], $_POST['cantidad'], $_POST['precio'], $_POST['categoria'], $id);
        header("Location: " . BASE_URL . "home");
        }else {
            header("Location: " . BASE_URL . "login");
        }

    }
}
