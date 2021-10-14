<?php

class ProductModel{
    private $db;

    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=db_laspulpas;charset=utf8','root','');
    }

    //ALTER TABLE `producto` ADD CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria`(`categoria`) ON DELETE RESTRICT ON UPDATE RESTRICT
    function getProductos(){
        //se unieron las dos tablas
        $sentencia= $this->db->prepare('SELECT a.*, b.* FROM producto a LEFT JOIN categoria b ON a.id_categoria = b.id_categoria');
        $sentencia->execute();
        $productos=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
    //obtiene el producto con una id 
    function getProduct($id){
        $query=$this->db->prepare('SELECT a.*, b.* FROM producto a LEFT JOIN categoria b ON a.id_categoria = b.id_categoria WHERE id_producto=?');
        $query->execute(array($id));
        $product = $query->fetch(PDO::FETCH_OBJ);
        return $product;
    }
    //obtiene los productoS de una categoria
    function getProductsBy($categoria){
        $query = $this->db->prepare('SELECT * FROM producto WHERE id_categoria = ?');
        $query->execute([$categoria]); 
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
    //agrega un producto a la db
    function createProd($nombre_producto,$cantidad,$precio, $id_categoria){
        
        $sentencia= $this->db->prepare('INSERT INTO producto(nombre_producto,cantidad,precio, id_categoria) VALUES(?,?,?,?)');
        $sentencia->execute(array($nombre_producto,$cantidad,$precio, $id_categoria));
    }
    // borra un producto con una id
    function deleteProd($id){
        $sentencia= $this->db->prepare('DELETE FROM producto WHERE id_producto=?');
        $sentencia->execute(array($id));
    }
    //edita un producto con una id
    function updateProd($nombre_producto,$cantidad,$precio, $id_categoria,$id){
        $sentencia= $this->db->prepare("UPDATE  producto SET nombre_producto=?,cantidad=?,precio=?, id_categoria=? WHERE id_producto=? ");
        $sentencia->execute(array($nombre_producto,$cantidad,$precio, $id_categoria, $id));
    }
}