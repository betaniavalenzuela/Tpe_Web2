<?php
class AuthHelper{

    function __construct(){

    }
    function isLogged(){
        session_start();
        if(isset($_SESSION["email"])){
            return true;
        }
        else{
            return false;
        }
    }

    /*function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["email"])){
            
            //header("Location: ".BASE_URL."login"); 
        }
    }*/

}