<?php

require_once "./View/LoginView.php";
require_once "./Model/UserModel.php";
class LoginController{

    private $view;
    private $model;

    function __construct(){
        $this->model= new UserModel();
        $this->view= new LoginView();
    }

    function login(){
        $this->view->showLogin();
    }
    function verifyLogin(){
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            // Obtengo el usuario de la base de datos
            $user = $this->model->getUser($email);
    
            // Si el usuario existe y las contraseñas coinciden
            //if ($user && password_verify($password, $user->password)) {

                session_start();
                $_SESSION["email"] = $email;
                
                $this->view->showHome();
                $this->view->showLogin("Acceso denegado");
        }
    }


    function logout(){
        session_start();
        session_destroy();
        $this->view->showLogin("Cerraste sesion!");
    }


}