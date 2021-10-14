<?php
require_once "./View/CategoriaView.php";
require_once "./Model/CategoriaModel.php";
require_once "./Helpers/AuthHelper.php";

class CategoriaController{
    private $viewCateg;
    private $modelCateg;
    private $authHelper;

    function __construct(){
        $this->modelCateg= new CategoriaModel();
        $this->viewCateg= new CategoriaView();
        $this->authHelper= new AuthHelper();
    }

    function showCategorias(){
            $log= $this->authHelper->isLogged();//pregunta si esta logeado para mostrar el abm
            $categorias= $this->modelCateg->getCategorias();
            $this->viewCateg->mostrarCategorias($log,$categorias);       
        
    }

    function createCateg(){
        if ($this->authHelper->isLogged()) {            
            $this->modelCateg->createCateg($_POST['categoria'], $_POST['descripcion']);
            header("Location: ".BASE_URL."categorias"); 
        }
        else{
            header("Location: " . BASE_URL . "login");
        }
    }
    function deleteCateg($id){
        if ($this->authHelper->isLogged()) {
            $this->modelCateg->deleteCateg($id);//ver lo del error
            header("Location: ".BASE_URL."categorias"); 
        }
        else{
            header("Location: " . BASE_URL . "login");
        }
        

    }
    function editCateg($id){
        if ($this->authHelper->isLogged()) {
        $categoria=$this->modelCateg->getCategory($id);
        $this->viewCateg->showEditFormCateg( $categoria);
    }
    else{
        header("Location: " . BASE_URL . "login");
    }
    }

    function updateCategory($id){
        if ($this->authHelper->isLogged()) {
        $this->modelCateg->updateCategDB($_POST['categoria'], $_POST['descripcion'],$id);
        header("Location: ".BASE_URL."categorias"); 
    }
    else{
        header("Location: " . BASE_URL . "login");
    }
    }

}