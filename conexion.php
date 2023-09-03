<?php

try{
    $conn= new PDO('mysql:host=localhost;dbname=contactos','root','');

    //echo"conexion ok";

}catch(PDOException $e){

    echo $e->getMessage();
}

?>