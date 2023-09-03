<?php 

class Contacto{
    private $nombre;
    private $direccion;
    private $caracteristica;
    private $numero;

    function __construct($nombre,$direccion,$caracteristica,$numero)
    {
        $this->nombre=$nombre;
        $this->direccion = $direccion ;
        $this->caracteristica= $caracteristica  ;
        $this->numero =$numero   ;
    }

}


// Archivo para recibir los datos y almacenarlos en la BBDD


    if($_SERVER['REQUEST_METHOD']=='POST'){
        require('conexion.php');

        header('location:index.php');

    }









?>