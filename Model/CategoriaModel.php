<?php

class CategoriaModel{
    private $db;

    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=db_laspulpas;charset=utf8','root','');
    }

    function getCategorias(){
        $sentencia= $this->db->prepare('SELECT * FROM categoria');
        $sentencia->execute();
        $categorias=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }

    function createCateg($nombre,$descripcion){
        $sentencia= $this->db->prepare('INSERT INTO categoria(nombre_categoria,descripcion) VALUES(?,?)');
        $sentencia->execute(array($nombre,$descripcion));
    
    }
    function getCategory($id){
        $sentencia= $this->db->prepare('SELECT * FROM categoria WHERE id_categoria=?');
        $sentencia->execute(array($id));
        $categoria = $sentencia->fetch(PDO::FETCH_OBJ);
        return $categoria;
    }

    function deleteCateg($id){
        try{
            $sentencia= $this->db->prepare('DELETE FROM categoria WHERE id_categoria=?');
        $sentencia->execute(array($id));
        }catch(Exception $error){
            return $error;
        }
        
    }

    //edita una categoria con un id
    function updateCategDB($nombre,$descripcion,$id){
        $sentencia= $this->db->prepare("UPDATE categoria SET nombre_categoria=?,descripcion=? WHERE id_categoria=? ");
        $sentencia->execute(array($nombre,$descripcion, $id));
    }
}